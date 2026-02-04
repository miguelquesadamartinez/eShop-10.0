# 📊 Esquema de Base de Datos - eShop Legacy

## Información General

Este documento describe el esquema de base de datos reconstruido a partir del análisis del código fuente PHP del año 2000.

**Base de datos:** `eshop_db` (anteriormente `nelosa_nelosa`)  
**Usuario:** `root` / `eshop_user`  
**Motor:** MySQL 5.7  
**Charset:** latin1 (ISO-8859-1) para compatibilidad con PHP 5.6  
**Collation:** latin1_spanish_ci

---

## 📋 Tabla de Contenidos

1. [Tablas Principales](#tablas-principales)
2. [Tablas Temporales](#tablas-temporales)
3. [Tablas de Control](#tablas-de-control)
4. [Relaciones](#relaciones)
5. [Flujos de Datos](#flujos-de-datos)

---

## Tablas Principales

### 1. Datas

**Propósito:** Autenticación de usuarios  
**Patrón:** Legacy año 2000 - contraseñas en texto plano

| Campo          | Tipo         | Descripción               |
| -------------- | ------------ | ------------------------- |
| mail (PK)      | VARCHAR(100) | Email del usuario         |
| otro           | VARCHAR(100) | Contraseña en texto plano |
| fecha_creacion | TIMESTAMP    | Fecha de registro         |

**Archivos que la usan:**

- `cart-pages/ValidationPages/doneUser.php` - Registro de usuarios
- `buy-process/inicio-compra.php` - Login
- `cart-pages/send-pwd.php` - Recuperación de contraseña
- `Control/Clientes/IgualarCliente-PWD.php` - Sincronización

**Notas de Seguridad:**
⚠️ Las contraseñas se almacenan en texto plano (práctica común en 2000 pero no segura según estándares modernos)

---

### 2. Clientes

**Propósito:** Información completa de clientes registrados  
**Sincronización:** Debe mantener email sincronizado con tabla `Datas`

| Campo          | Tipo         | Descripción                  |
| -------------- | ------------ | ---------------------------- |
| id (PK)        | INT          | ID autoincremental           |
| email (UNIQUE) | VARCHAR(100) | Email del cliente            |
| Nombre         | VARCHAR(100) | Nombre                       |
| Apellido1      | VARCHAR(100) | Primer apellido              |
| Apellido2      | VARCHAR(100) | Segundo apellido             |
| Telefono       | VARCHAR(20)  | Teléfono de contacto         |
| Doc            | VARCHAR(20)  | NIF/DNI                      |
| Empresa        | VARCHAR(150) | Nombre de empresa (opcional) |
| Direccion      | VARCHAR(255) | Dirección completa           |
| Cp             | VARCHAR(10)  | Código postal                |
| Poblacion      | VARCHAR(100) | Ciudad/Población             |
| Provincia      | VARCHAR(100) | Provincia                    |
| Pais           | VARCHAR(100) | País (default: España)       |
| L_Promos       | CHAR(1)      | Recibir promociones (s/n)    |
| L_Recarga      | CHAR(1)      | Recibir info recargas (s/n)  |
| fecha_registro | TIMESTAMP    | Fecha de alta                |

**Archivos que la usan:**

- `cart-pages/ValidationPages/doneUser.php` - Creación
- `buy-process/middle-compra.php` - Actualización durante compra
- `buy-process/inicio-compra.php` - Consulta de datos
- `Control/Clientes/clientes.php` - Gestión admin

**Variables de sesión relacionadas:**

```php
$t1  = Nombre
$t2  = Apellido1
$t3  = Telefono
$t4  = Apellido2
$t5  = Doc
$t6  = Empresa
$t7  = Direccion
$t8  = Cp
$t9  = Poblacion
$t10 = Provincia
$tpais = Pais
```

---

### 3. prods

**Propósito:** Catálogo de productos (recargas, cartuchos, accesorios)

| Campo        | Tipo          | Descripción                   |
| ------------ | ------------- | ----------------------------- |
| Ref (PK)     | INT           | Referencia única del producto |
| Code         | VARCHAR(50)   | Código interno/fabricante     |
| Des          | VARCHAR(255)  | Descripción del producto      |
| Und          | VARCHAR(20)   | Unidad (ud, pack, kit, etc)   |
| precio_eshop | DECIMAL(10,2) | Precio con IVA incluido       |
| Grupo        | VARCHAR(10)   | Categoría del producto        |
| fecha_alta   | TIMESTAMP     | Fecha de alta                 |

**Grupos de Productos:**

- `1` = Recargas Inkjet
- `2` = Recargas Laser Negro
- `3` = Recargas Laser Color
- `9` = Accesorios para recarga
- `10` = Etiquetas CD
- `11` = Tarjetas de visita (Deluxe)
- `31` = Chips reseteadores

**Archivos que la usan:**

- `cart-pages/prods/ink.php` - Listado inkjet
- `cart-pages/prods/laser.bk.php` - Listado laser negro
- `cart-pages/vercompra.php` - Cesta de compra
- `Control/Articulos/articulos.php` - Gestión admin

**Cálculo de precio sin IVA:**

```php
$precio_sin_iva = $precio_eshop / 1.16; // 16% IVA (año 2000)
```

---

### 4. Cart_DB_Pedidos

**Propósito:** Encabezado de pedidos finalizados

| Campo          | Tipo          | Descripción                    |
| -------------- | ------------- | ------------------------------ |
| ID_Pedido (PK) | INT           | ID único del pedido            |
| email          | VARCHAR(100)  | Email del cliente              |
| Fecha          | DATE          | Fecha del pedido               |
| Total_Pedido   | DECIMAL(10,2) | Importe total del pedido       |
| RefPed         | VARCHAR(50)   | Referencia del pedido (string) |
| fecha_creacion | TIMESTAMP     | Timestamp de creación          |

**Generación de ID_Pedido:**

```sql
-- Se obtiene el máximo ID y se incrementa en 1
SELECT max(ID_Pedido) FROM Cart_DB_Pedidos;
$numPed = $TmpDes + 1;
```

**Archivos que la usan:**

- `buy-process/fin-compra.php` - Creación del pedido final
- `buy-process/maxim.php` - Obtención de último número
- `Control/Pedidos/pedidos.php` - Consulta de pedidos

---

### 5. Cart_DB_L_Pedido

**Propósito:** Líneas de detalle de cada pedido (items)

| Campo     | Tipo | Descripción                                |
| --------- | ---- | ------------------------------------------ |
| id (PK)   | INT  | ID autoincremental                         |
| ID_Linea  | INT  | Número de línea dentro del pedido          |
| ID_Pedido | INT  | ID del pedido padre (FK a Cart_DB_Pedidos) |
| Ref       | INT  | Referencia del producto (FK a prods)       |
| Cant      | INT  | Cantidad solicitada                        |

**Estructura de un pedido completo:**

```
Cart_DB_Pedidos (1 registro)
    ├── ID_Pedido: 12345
    ├── email: cliente@example.com
    ├── Total_Pedido: 45.80
    └── Cart_DB_L_Pedido (N registros)
        ├── Línea 1: Ref=3001, Cant=2
        ├── Línea 2: Ref=3005, Cant=1
        └── Línea 3: Ref=3010, Cant=3
```

**Archivos que la usan:**

- `buy-process/fin-compra.php` - Inserción de líneas
- `Control/Pedidos/pedido.php` - Visualización de detalle

---

## Tablas Temporales

### 6. Cart_DB_Pedidos_TMP

**Propósito:** Pedidos en proceso (antes de confirmación)  
**Lifecycle:** Se crean en `middle-compra.php` y se eliminan en `fin-compra.php`

| Campo          | Tipo          | Descripción                    |
| -------------- | ------------- | ------------------------------ |
| id (PK)        | INT           | ID autoincremental             |
| RefPed         | INT           | Referencia del pedido temporal |
| email          | VARCHAR(100)  | Email del cliente              |
| Fecha          | DATE          | Fecha                          |
| Total_Pedido   | DECIMAL(10,2) | Total del pedido               |
| fecha_creacion | TIMESTAMP     | Timestamp de creación          |

---

### 7. Cart_DB_L_Pedido_TMP

**Propósito:** Líneas temporales de pedidos en proceso

| Campo    | Tipo | Descripción                    |
| -------- | ---- | ------------------------------ |
| id (PK)  | INT  | ID autoincremental             |
| ID_Linea | INT  | Número de línea                |
| RefPed   | INT  | Referencia del pedido temporal |
| Ref      | INT  | Referencia del producto        |
| Cant     | INT  | Cantidad                       |

---

### 8. tempDB

**Propósito:** Datos temporales para proceso de pago con TPV

| Campo          | Tipo         | Descripción                |
| -------------- | ------------ | -------------------------- |
| id (PK)        | INT          | ID autoincremental         |
| RefPed_D       | INT          | Referencia del pedido      |
| email          | VARCHAR(100) | Email del cliente          |
| tot_price_D    | VARCHAR(20)  | Precio total (como string) |
| fecha_creacion | TIMESTAMP    | Timestamp                  |

**Nota:** Se usa para recuperar datos después de la respuesta del TPV

---

## Tablas de Control

### 9. lasty

**Propósito:** Contador secuencial de números de pedido  
**Patrón:** Se inserta el siguiente número y se elimina el anterior

| Campo    | Tipo | Descripción                   |
| -------- | ---- | ----------------------------- |
| last(PK) | INT  | Último número de pedido usado |

**Lógica de uso:**

```php
// 1. Obtener el máximo
SELECT max(last) FROM lasty;
$nextTpv = $TmpNumTpv + 1;

// 2. Insertar el siguiente
INSERT INTO lasty (last) VALUES ($nextTpv);

// 3. Eliminar anteriores
DELETE FROM lasty WHERE last < $nextTpv;
```

**Archivos que la usan:**

- `buy-process/middle-compra.php` - Generación de número
- `Control/control.php` - Visualización
- `Control/Numeros/delLasty.php` - Reset manual

---

### 10. lasty_nelosa

**Propósito:** Contador alternativo para facturación Nelosa

Misma estructura que `lasty`, usado para un sistema de facturación paralelo.

**Archivos que la usan:**

- `buy-process/facNum.php` - Generación de número de factura
- `Control/control.php` - Visualización
- `Control/Numeros/delLasty_nelosa.php` - Reset manual

---

### 11. vales_usados

**Propósito:** Registro de códigos de vale descuento utilizados

| Campo     | Tipo      | Descripción                    |
| --------- | --------- | ------------------------------ |
| id (PK)   | INT       | ID autoincremental             |
| numeros   | INT       | Número del vale usado (UNIQUE) |
| fecha_uso | TIMESTAMP | Fecha de utilización           |

**Archivos que la usan:**

- `buy-process/fin-compra.php` - Registro de uso

---

### 12. Descs_esp

**Propósito:** Descripciones extendidas/especiales de productos

| Campo   | Tipo        | Descripción                   |
| ------- | ----------- | ----------------------------- |
| id (PK) | INT         | ID autoincremental            |
| Ref     | VARCHAR(50) | Referencia del producto       |
| texto   | TEXT        | Descripción extendida en HTML |

**Archivos que la usan:**

- `cart-pages/prods/chips.php` - Mostrar descripciones de chips
- `Control/Articulos/Desc_Mod.php` - Edición de descripciones

---

### 13. AllProdsB_Control

**Propósito:** Tabla de control de productos para panel admin

| Campo          | Tipo         | Descripción             |
| -------------- | ------------ | ----------------------- |
| Ref (PK)       | VARCHAR(50)  | Referencia del producto |
| Des            | VARCHAR(255) | Descripción             |
| info_adicional | TEXT         | Información adicional   |

**Archivos que la usan:**

- `Control/Pedidos/pedidos.php` - Consulta de productos en pedidos

---

## Relaciones

```
Datas (1) ←→ (1) Clientes
    └── email

Cart_DB_Pedidos (1) → (N) Cart_DB_L_Pedido
    └── ID_Pedido

Cart_DB_L_Pedido (N) → (1) prods
    └── Ref

Cart_DB_Pedidos_TMP (1) → (N) Cart_DB_L_Pedido_TMP
    └── RefPed

prods (1) → (0..1) Descs_esp
    └── Ref

Clientes (N) → (N) Cart_DB_Pedidos
    └── email
```

**Nota:** Las relaciones son lógicas, no hay claves foráneas definidas (patrón legacy).

---

## Flujos de Datos

### Flujo 1: Registro de Usuario

```
Usuario llena formulario
    ↓
doneUser.php
    ↓
INSERT INTO Datas (mail, otro)        ← Credenciales
    ↓
INSERT INTO Clientes (email, ...)     ← Datos completos
    ↓
Cookie "recargas" = email (1 año)
```

### Flujo 2: Proceso de Compra

```
1. Login (inicio-compra.php)
   SELECT FROM Datas WHERE mail AND otro
   SELECT FROM Clientes WHERE email
   → Variables de sesión ($usr, $t1-$t10)

2. Revisión (middle-compra.php)
   UPDATE Clientes SET ... WHERE email
   SELECT max(last) FROM lasty
   INSERT INTO lasty (last+1)
   INSERT INTO Cart_DB_Pedidos_TMP
   INSERT INTO Cart_DB_L_Pedido_TMP (por cada item)
   INSERT INTO tempDB (para TPV)

3. Finalización (fin-compra.php)
   SELECT max(ID_Pedido) FROM Cart_DB_Pedidos
   INSERT INTO Cart_DB_Pedidos (ID+1)
   INSERT INTO Cart_DB_L_Pedido (por cada item)
   [Opcional] INSERT INTO vales_usados
   DELETE FROM Cart_DB_Pedidos_TMP
   DELETE FROM Cart_DB_L_Pedido_TMP
   DELETE FROM tempDB
   Envío de emails de confirmación
```

### Flujo 3: Cesta de Compra

```
Sesión PHP: $itemsEnCesta[$ref] = $cantidad

vercompra.php:
    foreach($itemsEnCesta as $ref => $cant)
        SELECT FROM prods WHERE Ref = $ref
        Calcular: $tot_price += ($precio * $cant)
        Mostrar línea con producto

index-prods.php (añadir):
    $itemsEnCesta[$ref] = $_POST['cantidad']

empty.cart.php (vaciar):
    unset($itemsEnCesta)
```

---

## Consideraciones Técnicas

### Charset y Collation

- **latin1 / latin1_spanish_ci**: Compatible con PHP 5.6 y caracteres españoles (ñ, á, é, etc.)
- Los archivos PHP deben estar en ISO-8859-1, no UTF-8

### Seguridad Legacy

⚠️ **Advertencias de seguridad (patrones año 2000):**

- Contraseñas en texto plano en tabla `Datas`
- Concatenación directa de SQL (sin prepared statements)
- Variables globales con `register_globals`
- No hay claves foráneas ni restricciones de integridad

### IVA

El sistema usa un IVA del 16% (tipo aplicado en España en el año 2000):

```php
$precio_sin_iva = $precio_eshop / 1.16;
```

### Conexión a Base de Datos

```php
// Patrón usado en todo el código
$link = mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);
```

**Para Docker:**

- Host: `db` (dentro del contenedor) o `localhost` (desde host)
- Base de datos: `eshop_db`
- Usuario: `root` / Contraseña: `root`

---

## Migración y Mantenimiento

### Aplicar la Migración

```bash
# Opción 1: Usando Docker Compose (automático)
docker-compose down -v
docker-compose up -d

# Opción 2: Manualmente
docker-compose exec db mysql -uroot -proot eshop_db < docker/mysql/init/01-init.sql
```

### Verificar las Tablas

```sql
USE eshop_db;
SHOW TABLES;

-- Ver estructura de una tabla
DESCRIBE Clientes;

-- Contar registros
SELECT
    table_name,
    table_rows
FROM information_schema.tables
WHERE table_schema = 'eshop_db';
```

### Backup de Datos

```bash
# Exportar toda la base de datos
docker-compose exec db mysqldump -uroot -proot eshop_db > backup_eshop_$(date +%Y%m%d).sql

# Importar backup
docker-compose exec -T db mysql -uroot -proot eshop_db < backup_eshop_20260203.sql
```

---

## Referencias

- **Código fuente analizado:** Todo el directorio eShop-10.0
- **Archivos clave:**
  - `eMiKi/Funciones_PHP.php` - Funciones de conexión
  - `buy-process/fin-compra.php` - Proceso de pedido
  - `cart-pages/ValidationPages/doneUser.php` - Registro
  - `Control/` - Panel de administración

---

**Última actualización:** 3 de febrero de 2026  
**Generado por:** Análisis automático del código fuente legacy
