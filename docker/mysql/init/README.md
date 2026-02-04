# 🗄️ Migraciones de Base de Datos - eShop

## 📁 Contenido de este Directorio

Este directorio contiene los archivos de migración e inicialización de la base de datos MySQL para el proyecto eShop Legacy.

```
docker/mysql/init/
├── 01-init.sql          # Script SQL de migración completa
├── DATABASE_SCHEMA.md   # Documentación detallada del esquema
└── README.md            # Este archivo
```

---

## 🚀 Inicio Rápido

### Aplicar las Migraciones Automáticamente

Los archivos `.sql` en este directorio se ejecutan **automáticamente** la primera vez que se crea el contenedor MySQL:

```bash
# Detener y eliminar contenedores (incluyendo volúmenes)
docker-compose down -v

# Iniciar de nuevo - las migraciones se aplican automáticamente
docker-compose up -d

# Ver logs para confirmar la ejecución
docker-compose logs db
```

### Aplicar Manualmente (si es necesario)

**En PowerShell (Windows):**

```powershell
# Ejecutar el script SQL manualmente
Get-Content docker/mysql/init/01-init.sql | docker-compose exec -T db mysql -uroot -proot eshop_db

# O usando el alias 'cat'
cat docker/mysql/init/01-init.sql | docker-compose exec -T db mysql -uroot -proot eshop_db
```

**En Bash (Linux/Mac/Git Bash):**

```bash
# Ejecutar el script SQL manualmente
docker-compose exec db mysql -uroot -proot eshop_db < docker/mysql/init/01-init.sql

# O desde dentro del contenedor
docker-compose exec db bash
mysql -uroot -proot eshop_db < /docker-entrypoint-initdb.d/01-init.sql
```

---

## 📋 Contenido de las Migraciones

### 01-init.sql

Script de migración completo que crea:

**Tablas Principales:**

- ✅ `Datas` - Autenticación de usuarios
- ✅ `Clientes` - Información de clientes
- ✅ `prods` - Catálogo de productos
- ✅ `Cart_DB_Pedidos` - Encabezados de pedidos
- ✅ `Cart_DB_L_Pedido` - Líneas de pedidos

**Tablas de Control:**

- ✅ `lasty` - Contador de números de pedido
- ✅ `lasty_nelosa` - Contador de facturas Nelosa
- ✅ `vales_usados` - Registro de vales descuento
- ✅ `Descs_esp` - Descripciones extendidas
- ✅ `AllProdsB_Control` - Control de productos (admin)

**Tablas Temporales:**

- ✅ `Cart_DB_Pedidos_TMP` - Pedidos en proceso
- ✅ `Cart_DB_L_Pedido_TMP` - Líneas temporales
- ✅ `tempDB` - Datos temporales TPV

**Datos Iniciales:**

- ✅ Valor inicial para `lasty` (1)
- ✅ Valor inicial para `lasty_nelosa` (1)

---

## 🔍 Verificación

### Comprobar que las tablas se crearon correctamente

```bash
# Acceder a MySQL
docker-compose exec db mysql -uroot -proot eshop_db

# Dentro de MySQL, ejecutar:
```

```sql
-- Ver todas las tablas
SHOW TABLES;

-- Debería mostrar 13 tablas:
+---------------------------+
| Tables_in_eshop_db       |
+---------------------------+
| AllProdsB_Control        |
| Cart_DB_L_Pedido         |
| Cart_DB_L_Pedido_TMP     |
| Cart_DB_Pedidos          |
| Cart_DB_Pedidos_TMP      |
| Clientes                 |
| Datas                    |
| Descs_esp                |
| lasty                    |
| lasty_nelosa             |
| prods                    |
| tempDB                   |
| vales_usados             |
+---------------------------+

-- Ver estructura de una tabla específica
DESCRIBE Clientes;

-- Ver valores iniciales
SELECT * FROM lasty;
SELECT * FROM lasty_nelosa;
```

### Verificar desde phpMyAdmin

1. Accede a http://localhost:8081
2. Usuario: `root`, Contraseña: `root`
3. Selecciona la base de datos `eshop_db`
4. Deberías ver las 13 tablas listadas

---

## 📝 Información Técnica

### Generación del Schema

El archivo `01-init.sql` fue generado mediante **análisis automático del código fuente PHP** del proyecto eShop. Se analizaron:

- ✅ Todas las consultas SQL (`INSERT`, `SELECT`, `UPDATE`, `DELETE`)
- ✅ Campos usados en operaciones de base de datos
- ✅ Tipos de datos inferidos del código PHP
- ✅ Relaciones lógicas entre tablas
- ✅ Índices necesarios para optimización

**Archivos analizados:**

- `buy-process/*.php` - Proceso de compra
- `cart-pages/ValidationPages/*.php` - Registro y login
- `Control/**/*.php` - Panel de administración
- `eMiKi/Funciones_PHP.php` - Funciones de base de datos

### Configuración de Charset

```sql
SET NAMES 'latin1';
SET character_set_client = latin1;
SET character_set_connection = latin1;
SET character_set_results = latin1;
SET collation_connection = latin1_spanish_ci;
```

**¿Por qué latin1 y no UTF-8?**

- Compatibilidad con PHP 5.6 y código legacy del año 2000
- Los archivos PHP están en ISO-8859-1
- Soporta caracteres españoles (ñ, á, é, í, ó, ú, ¿, ¡)

---

## 🔄 Datos de Prueba

### Insertar Usuario de Prueba

El script incluye (comentado) un usuario de prueba. Para habilitarlo:

1. Edita `01-init.sql`
2. Descomenta la sección "USUARIO DE PRUEBA"
3. Reinicia los contenedores con `docker-compose down -v && docker-compose up -d`

**Credenciales del usuario de prueba:**

- Email: `test@example.com`
- Password: `test123`

### Insertar Productos de Ejemplo

También puedes descomentar la sección "PRODUCTOS DE EJEMPLO" para tener datos de prueba:

```sql
-- En 01-init.sql, descomentar:
INSERT INTO `prods` (`Ref`, `Code`, `Des`, `Und`, `precio_eshop`, `Grupo`) VALUES
    (3001, 'INK-BK-001', 'Recarga tinta negra universal HP', 'ud', 5.95, '1'),
    (3002, 'INK-COL-001', 'Recarga tinta color universal HP', 'ud', 7.95, '1'),
    -- ... más productos
```

---

## 🛠️ Mantenimiento

### Modificar el Schema

Si necesitas modificar la estructura de las tablas:

1. **Edita** `01-init.sql` con los cambios necesarios
2. **Respalda** los datos existentes:
   ```bash
   docker-compose exec db mysqldump -uroot -proot eshop_db > backup.sql
   ```
3. **Elimina** el volumen y recrea:
   ```bash
   docker-compose down -v
   docker-compose up -d
   ```
4. **Restaura** los datos (si es necesario):
   ```bash
   docker-compose exec -T db mysql -uroot -proot eshop_db < backup.sql
   ```

### Agregar Nueva Tabla

Para agregar una nueva tabla sin perder datos:

```bash
# Crear archivo con la nueva tabla
echo "CREATE TABLE IF NOT EXISTS nueva_tabla (...)" > docker/mysql/init/02-nueva-tabla.sql

# Ejecutar manualmente (los contenedores ya están corriendo)
docker-compose exec db mysql -uroot -proot eshop_db < docker/mysql/init/02-nueva-tabla.sql
```

---

## 📚 Documentación Adicional

- **[DATABASE_SCHEMA.md](DATABASE_SCHEMA.md)** - Documentación completa del esquema
  - Descripción detallada de cada tabla
  - Campos y tipos de datos
  - Relaciones entre tablas
  - Flujos de datos
  - Ejemplos de uso

- **[DOCKER.md](../../../DOCKER.md)** - Documentación de Docker
  - Configuración del entorno
  - Comandos útiles
  - Troubleshooting

- **[.github/copilot-instructions.md](../../../.github/copilot-instructions.md)** - Instrucciones del proyecto
  - Patrones de código
  - Estructura del proyecto
  - Convenciones

---

## 🔒 Seguridad

### ⚠️ Advertencias Importantes

Este esquema replica un sistema del año 2000 con patrones legacy:

1. **Contraseñas en texto plano** - Tabla `Datas` almacena contraseñas sin cifrar
2. **Sin prepared statements** - El código PHP usa concatenación SQL
3. **Sin claves foráneas** - Las relaciones son lógicas, no forzadas
4. **Sin validaciones** - La integridad referencial no está garantizada

**Solo para desarrollo local. No usar en producción sin mejoras de seguridad.**

### Mejoras Recomendadas para Producción

Si decides modernizar el sistema:

```sql
-- Ejemplo: Agregar hash de password
ALTER TABLE Datas ADD COLUMN password_hash VARCHAR(255);
UPDATE Datas SET password_hash = SHA2(otro, 256);

-- Ejemplo: Agregar claves foráneas
ALTER TABLE Cart_DB_L_Pedido
ADD CONSTRAINT fk_pedido
FOREIGN KEY (ID_Pedido) REFERENCES Cart_DB_Pedidos(ID_Pedido);
```

---

## 🆘 Problemas Comunes

### Error: "Table already exists"

```bash
# Solución: Eliminar volumen y recrear
docker-compose down -v
docker-compose up -d
```

### Los cambios en 01-init.sql no se aplican

El script solo se ejecuta en la **primera creación** del contenedor. Para aplicar cambios:

```bash
# Eliminar volumen existente
docker volume rm eshop-100_mysql_data

# O usar down con -v
docker-compose down -v
docker-compose up -d
```

### Error de charset

Si ves caracteres como `�` en lugar de `ñ`, `á`, etc.:

```sql
-- Verificar charset
SHOW VARIABLES LIKE 'character_set%';

-- Si no es latin1, reconectar con:
SET NAMES 'latin1';
```

---

## 📞 Soporte

Para más información:

1. Revisa **[DATABASE_SCHEMA.md](DATABASE_SCHEMA.md)** para documentación detallada
2. Consulta **[DOCKER.md](../../../DOCKER.md)** para problemas de Docker
3. Verifica los logs: `docker-compose logs db`

---

**Última actualización:** 3 de febrero de 2026  
**Versión:** 1.0.0  
**Generado desde:** Análisis del código fuente legacy PHP
