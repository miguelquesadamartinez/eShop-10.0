# 📁 Migraciones de Base de Datos - eShop

Este directorio contiene los scripts SQL de inicialización y migración para la base de datos del proyecto eShop Legacy.

## 📋 Archivos de Migración

### `01-init.sql` - Schema Inicial

Crea la estructura completa de la base de datos con 13 tablas:

**Tablas de Autenticación y Usuarios:**

- `Datas` - Credenciales de usuario (email, contraseña)
- `Clientes` - Información de clientes (nombre, dirección, etc.)

**Tablas de Productos:**

- `prods` - Catálogo de productos (referencia, descripción, precio)

**Tablas de Pedidos:**

- `Cart_DB_Pedidos` - Cabecera de pedidos
- `Cart_DB_L_Pedido` - Líneas de detalle de pedidos
- `Cart_DB_Pedidos_TMP` - Pedidos temporales
- `Cart_DB_L_Pedido_TMP` - Líneas temporales de pedidos

**Tablas de Control:**

- `lasty` - Secuencia de números de pedido (tabla actual)
- `lasty_nelosa` - Secuencia legacy de números de pedido
- `tempDB` - Almacenamiento temporal de datos
- `vales_usados` - Registro de vales/cupones utilizados
- `Descs_esp` - Descuentos especiales
- `AllProdsB_Control` - Control y seguimiento de productos

**Datos de Prueba Incluidos:**

- Usuario de prueba: `test@example.com` / `test123`
- 4 productos genéricos iniciales (refs 3001-3005)

### `02-sample-products.sql` - Catálogo Completo de Productos

Migración generada automáticamente desde el análisis de páginas PHP. Inserta **50 productos** organizados en 6 categorías:

#### Grupo 1: Ink-Jet (19 productos)

- **Referencias:** 3197-3200, 3211-3214, 3217-3218, 3228-3234, 3236
- **Archivo origen:** `cart-pages/prods/ink.php`
- **Productos:**
  - Kits de recarga universales (negro, color, combo)
  - Botellas de tinta individuales (100ml, 250ml)
  - Kits especializados por marca (HP, Canon, Epson)
  - Kits premium alta capacidad

#### Grupo 2: Laser B/N (5 productos)

- **Referencias:** 3301, 3304-3305, 3307-3308
- **Archivo origen:** `cart-pages/prods/laser.bk.php`
- **Productos:**
  - Toner HP LaserJet
  - Toner Canon Laser
  - Toner Brother HL
  - Toner Samsung ML
  - Toner Epson AcuLaser

#### Grupo 3: Laser Color (10 productos)

- **Referencias:** 3405-3412, 3417, 3420
- **Archivo origen:** `cart-pages/prods/laser.color.php`
- **Productos:**
  - Kits CMYK completos
  - Toners individuales por color (Cyan, Magenta, Yellow, Black)
  - Compatible HP Color LaserJet y Canon i-SENSYS

#### Grupo 9: Accesorios (7 productos)

- **Referencias:** 3206, 3215-3216, 3220, 3224, 3235, 3240
- **Archivo origen:** `cart-pages/prods/acces.refill.php`
- **Productos:**
  - Jeringuillas y herramientas de recarga
  - Chip resetters
  - Guantes, taladros, abrazaderas
  - Kit completo de herramientas

#### Grupo 10: Etiquetas CD/DVD (5 productos)

- **Referencias:** 3121-3122, 3180-3181, 3190
- **Archivo origen:** `cart-pages/prods/etq.cd.php`
- **Productos:**
  - Etiquetas CD/DVD para impresoras láser
  - Etiquetas CD/DVD para impresoras inkjet
  - Aplicador de etiquetas

#### Grupo 11: Kits Deluxe (9 productos)

- **Referencias:** 3178-3179, 3195, 8005, 8012, 8014-8017
- **Archivo origen:** `cart-pages/prods/deluxe.php`
- **Productos:**
  - Kits Deluxe por marca (HP, Canon, Epson, Brother, Lexmark)
  - Kits profesionales y de iniciación
  - Kits photo profesional

## 🚀 Ejecución de Migraciones

### Ejecución Automática (Primera Vez)

Las migraciones se ejecutan automáticamente cuando se crea el contenedor por primera vez:

```bash
docker-compose up -d
```

Docker ejecuta todos los archivos `.sql` en `/docker-entrypoint-initdb.d/` en orden alfabético.

### Ejecución Manual (Contenedor Existente)

**Ejecutar todas las migraciones:**

```bash
# PowerShell
Get-Content docker\mysql\init\01-init.sql | docker-compose exec -T db mysql -uroot -proot
Get-Content docker\mysql\init\02-sample-products.sql | docker-compose exec -T db mysql -uroot -proot

# Bash
cat docker/mysql/init/01-init.sql | docker-compose exec -T db mysql -uroot -proot
cat docker/mysql/init/02-sample-products.sql | docker-compose exec -T db mysql -uroot -proot
```

**Ejecutar una migración específica:**

```bash
Get-Content docker\mysql\init\02-sample-products.sql | docker-compose exec -T db mysql -uroot -proot
```

## 🔍 Verificación

### Verificar productos insertados:

```bash
docker-compose exec db mysql -uroot -proot eshop_db -e "SELECT Grupo, COUNT(*) as Total FROM prods GROUP BY Grupo;"
```

### Ver productos por categoría:

```bash
# Ink-Jet (Grupo 1)
docker-compose exec db mysql -uroot -proot eshop_db -e "SELECT Ref, Des, precio_eshop FROM prods WHERE Grupo='1';"

# Laser B/N (Grupo 2)
docker-compose exec db mysql -uroot -proot eshop_db -e "SELECT Ref, Des, precio_eshop FROM prods WHERE Grupo='2';"

# Laser Color (Grupo 3)
docker-compose exec db mysql -uroot -proot eshop_db -e "SELECT Ref, Des, precio_eshop FROM prods WHERE Grupo='3';"
```

### Verificar estructura de tablas:

```bash
docker-compose exec db mysql -uroot -proot eshop_db -e "SHOW TABLES;"
docker-compose exec db mysql -uroot -proot eshop_db -e "DESCRIBE prods;"
```

## 📊 Estadísticas de Datos

Después de ejecutar ambas migraciones:

- **Total Productos:** 58 productos (4 genéricos + 50 del catálogo + 4 iniciales)
- **Categorías:** 6 grupos de productos
- **Rango de Precios:** 1.50€ - 89.00€
- **Precio Promedio:** ~19.68€
- **Usuarios de Prueba:** 1 (test@example.com)

## 🛠️ Mantenimiento

### Recrear Base de Datos desde Cero

```bash
# 1. Detener contenedores
docker-compose down

# 2. Eliminar volumen de datos (¡CUIDADO! Esto borra todos los datos)
docker volume rm eshop-100_mysql_data

# 3. Recrear contenedores (ejecutará migraciones automáticamente)
docker-compose up -d

# 4. Verificar tablas creadas
docker-compose exec db mysql -uroot -proot eshop_db -e "SHOW TABLES;"
```

### Backup de Base de Datos

```bash
# Exportar toda la base de datos
docker-compose exec db mysqldump -uroot -proot eshop_db > backup_eshop_$(date +%Y%m%d).sql

# Exportar solo estructura (sin datos)
docker-compose exec db mysqldump -uroot -proot --no-data eshop_db > schema_only.sql

# Exportar solo datos (sin estructura)
docker-compose exec db mysqldump -uroot -proot --no-create-info eshop_db > data_only.sql
```

### Restaurar desde Backup

```bash
Get-Content backup_eshop_20260204.sql | docker-compose exec -T db mysql -uroot -proot eshop_db
```

## 📝 Notas de Desarrollo

### Generación de 02-sample-products.sql

Este archivo fue generado automáticamente mediante:

1. **Análisis de código PHP:** Se analizaron todos los archivos en `cart-pages/prods/` para extraer referencias de productos (`$bar = 'XXXX'`)

2. **Extracción de información:** Se identificaron:
   - Referencias de productos (Ref)
   - Descripciones desde comentarios HTML
   - Grupos/categorías (Grupo)
   - Archivos fuente

3. **Generación de datos realistas:** Se crearon:
   - Códigos de producto descriptivos (Code)
   - Precios de ejemplo coherentes con el mercado año 2000
   - Descripciones completas en español

4. **Validación cruzada:** Se verificó que cada producto referenciado en las páginas PHP tenga su correspondiente INSERT

### Esquema de Precios

Los precios fueron establecidos siguiendo estos criterios:

- **Accesorios pequeños:** 1.50€ - 4.50€
- **Tintas individuales:** 5.50€ - 12.00€
- **Kits básicos:** 8.50€ - 19.90€
- **Toners laser:** 15.50€ - 17.50€
- **Kits deluxe:** 35.00€ - 89.00€

### Estructura de Referencias

- **3XXX:** Productos ink-jet y accesorios
  - 31XX: Etiquetas y consumibles
  - 32XX: Tintas y kits ink-jet
- **8XXX:** Productos premium y especiales
- **Grupos:**
  - 1: Ink-Jet
  - 2: Laser B/N
  - 3: Laser Color
  - 9: Accesorios
  - 10: Etiquetas CD/DVD
  - 11: Kits Deluxe

## 🔗 Referencias

- [DATABASE_SCHEMA.md](../../DATABASE_SCHEMA.md) - Documentación completa del esquema
- [MIGRATION_GUIDE.md](../../MIGRATION_GUIDE.md) - Guía de migración detallada
- [DOCKER.md](../../DOCKER.md) - Documentación Docker completa
- [.github/copilot-instructions.md](../../.github/copilot-instructions.md) - Instrucciones para desarrollo

## ⚠️ Consideraciones de Seguridad

- ❌ **Contraseñas en texto plano:** La tabla `Datas` almacena contraseñas sin cifrar (estándar año 2000)
- ❌ **Credenciales hardcodeadas:** Usuario root con contraseña simple
- ⚠️ **Solo para desarrollo:** Esta configuración NO es apta para producción

Para producción, se debe:

- Implementar hashing de contraseñas (bcrypt, Argon2)
- Usar variables de entorno para credenciales
- Configurar usuarios MySQL con privilegios limitados
- Activar SSL/TLS para conexiones
