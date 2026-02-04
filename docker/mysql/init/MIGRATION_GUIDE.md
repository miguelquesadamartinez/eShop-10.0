# 🔧 Guía de Migración de Base de Datos - eShop Legacy

## 📋 Resumen de Migraciones

Este proyecto incluye 2 archivos de migración SQL que deben ejecutarse en orden:

1. **01-init.sql** - Estructura de base de datos (13 tablas)
2. **02-sample-products.sql** - Catálogo de 50 productos de ejemplo

**Total productos después de migración:** 58 productos  
**Categorías cubiertas:** 6 grupos (Ink-Jet, Laser B/N, Laser Color, Accesorios, Etiquetas, Deluxe)

---

## 🚀 Ejecución Rápida

### Opción 1: Ejecución Automática (Recomendado)

Las migraciones se ejecutan automáticamente al crear los contenedores por primera vez:

```bash
# Detener y eliminar contenedores existentes
docker-compose down -v

# Iniciar contenedores (ejecuta migraciones automáticamente)
docker-compose up -d

# Verificar que se crearon las tablas
docker-compose exec db mysql -uroot -proot eshop_db -e "SHOW TABLES;"

# Verificar productos insertados
docker-compose exec db mysql -uroot -proot eshop_db -e "SELECT COUNT(*) as Total_Productos FROM prods;"
```

### Opción 2: Ejecución Manual

Si los contenedores ya existen y necesitas ejecutar las migraciones:

**PowerShell:**

```powershell
# Ejecutar schema inicial
Get-Content docker\mysql\init\01-init.sql | docker-compose exec -T db mysql -uroot -proot

# Ejecutar catálogo de productos
Get-Content docker\mysql\init\02-sample-products.sql | docker-compose exec -T db mysql -uroot -proot
```

**Bash (Linux/Mac):**

```bash
# Ejecutar schema inicial
cat docker/mysql/init/01-init.sql | docker-compose exec -T db mysql -uroot -proot

# Ejecutar catálogo de productos
cat docker/mysql/init/02-sample-products.sql | docker-compose exec -T db mysql -uroot -proot
```

---

## 📝 Cambios Requeridos

### 1. Actualizar eMiKi/Funciones_PHP.php

**Archivo:** `eMiKi/Funciones_PHP.php`

**Antes:**

```php
function conectarse()
{
   if (!($link=mysql_connect("localhost","nelosa_nelosa","mqm1804")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
    if (!mysql_select_db("nelosa_nelosa",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}
```

**Después (para Docker):**

```php
function conectarse()
{
   // Detectar si estamos en Docker o producción
   $host = getenv('DB_HOST') ?: 'db';  // 'db' es el nombre del servicio en docker-compose
   $user = getenv('DB_USER') ?: 'eshop_user';
   $pass = getenv('DB_PASS') ?: 'eshop_pass';
   $dbname = getenv('DB_NAME') ?: 'eshop_db';

   if (!($link=mysql_connect($host, $user, $pass)))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db($dbname, $link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}
```

### 2. Buscar y Reemplazar Conexiones Hardcodeadas

Muchos archivos tienen conexiones directas. Busca y reemplaza:

**Buscar:**

```php
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);
```

**Reemplazar por:**

```php
include("ruta/a/eMiKi/Funciones_PHP.php");
$link = conectarse();
```

**O si prefieres mantener el patrón legacy:**

```php
$link=mysql_connect("db","eshop_user","eshop_pass");
mysql_select_db("eshop_db",$link);
```

---

## 🔍 Archivos a Actualizar

### Archivos con Conexión Directa

Usa esta búsqueda en VS Code o tu editor:

```regex
mysql_connect\("localhost","nelosa_nelosa","mqm1804"\)
```

**Archivos principales que necesitan actualización:**

```
buy-process/
├── fin-compra.php
├── inicio-compra.php
├── middle-compra.php
├── facNum.php
├── factura.php
└── maxim.php

cart-pages/
├── index-prods.php
├── send-pwd.php
├── vercompra.php
└── ValidationPages/
    ├── doneUser.php
    ├── logout.php
    └── modifUser.php

Control/
├── control.php
└── Articulos/
    ├── alta_Art_2.php
    ├── articulo.php
    ├── articulos.php
    └── ...
└── Clientes/
    ├── clientes.php
    └── ...
└── Pedidos/
    ├── pedido.php
    └── pedidos.php
```

---

## 🐳 Actualización de Docker Compose

### Opción 1: Variables de Entorno en docker-compose.yml

**Edita:** `docker-compose.yml`

**Agrega variables de entorno al servicio web:**

```yaml
services:
  web:
    build: .
    ports:
      - "8080:80"
    volumes:
      - .:/var/www/html
    depends_on:
      - db
    environment:
      - DB_HOST=db
      - DB_USER=eshop_user
      - DB_PASS=eshop_pass
      - DB_NAME=eshop_db
    networks:
      - eshop-network
```

### Opción 2: Archivo .env

**Crea:** `.env` en la raíz del proyecto

```env
# Configuración de Base de Datos
DB_HOST=db
DB_USER=eshop_user
DB_PASS=eshop_pass
DB_NAME=eshop_db

# MySQL Root
MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=eshop_db
MYSQL_USER=eshop_user
MYSQL_PASSWORD=eshop_pass
```

**Modifica docker-compose.yml:**

```yaml
services:
  web:
    env_file:
      - .env

  db:
    env_file:
      - .env
```

---

## 🚀 Script de Búsqueda y Reemplazo Automático

### PowerShell Script

**Crea:** `scripts/update-db-config.ps1`

```powershell
# Script para actualizar configuraciones de base de datos
$rootPath = "C:\Users\migue\Documents\___CodeS\eShop-10.0"

# Patrones a buscar
$oldConnect = 'mysql_connect\("localhost","nelosa_nelosa","mqm1804"\)'
$oldSelectDb = 'mysql_select_db\("nelosa_nelosa",\$link\)'

# Nuevos valores
$newConnect = 'mysql_connect("db","eshop_user","eshop_pass")'
$newSelectDb = 'mysql_select_db("eshop_db",$link)'

# Buscar archivos PHP
Get-ChildItem -Path $rootPath -Filter *.php -Recurse | ForEach-Object {
    $file = $_.FullName
    $content = Get-Content $file -Raw

    # Verificar si contiene patrones antiguos
    if ($content -match "nelosa_nelosa") {
        Write-Host "Actualizando: $file" -ForegroundColor Yellow

        # Reemplazar
        $content = $content -replace 'mysql_connect\("localhost","nelosa_nelosa","mqm1804"\)', $newConnect
        $content = $content -replace 'mysql_select_db\("nelosa_nelosa"', 'mysql_select_db("eshop_db"'

        # Guardar
        Set-Content $file -Value $content -NoNewline
        Write-Host "  ✓ Actualizado" -ForegroundColor Green
    }
}

Write-Host "`n✓ Proceso completado" -ForegroundColor Cyan
```

**Ejecutar:**

```powershell
powershell -ExecutionPolicy Bypass -File scripts/update-db-config.ps1
```

### Bash Script (Linux/Mac/Git Bash)

**Crea:** `scripts/update-db-config.sh`

```bash
#!/bin/bash

# Script para actualizar configuraciones de base de datos
ROOT_PATH="."

# Colores
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
CYAN='\033[0;36m'
NC='\033[0m' # No Color

echo -e "${CYAN}Buscando archivos PHP con configuración antigua...${NC}"

# Buscar y reemplazar
find $ROOT_PATH -name "*.php" -type f | while read file; do
    if grep -q "nelosa_nelosa" "$file"; then
        echo -e "${YELLOW}Actualizando: $file${NC}"

        # Reemplazar en el archivo
        sed -i.bak \
            -e 's/mysql_connect("localhost","nelosa_nelosa","mqm1804")/mysql_connect("db","eshop_user","eshop_pass")/g' \
            -e 's/mysql_select_db("nelosa_nelosa"/mysql_select_db("eshop_db"/g' \
            "$file"

        echo -e "${GREEN}  ✓ Actualizado${NC}"
    fi
done

echo -e "\n${GREEN}✓ Proceso completado${NC}"
```

**Ejecutar:**

```bash
chmod +x scripts/update-db-config.sh
./scripts/update-db-config.sh
```

---

## ✅ Checklist de Migración

- [ ] Aplicar migración SQL (`docker-compose down -v && docker-compose up -d`)
- [ ] Verificar que las 13 tablas se crearon correctamente
- [ ] Actualizar `eMiKi/Funciones_PHP.php` con función `conectarse()` mejorada
- [ ] Buscar y reemplazar conexiones hardcodeadas
- [ ] Agregar variables de entorno a `docker-compose.yml` o crear `.env`
- [ ] Reiniciar contenedores: `docker-compose restart web`
- [ ] Probar login en: http://localhost:8080/cart-pages/ValidationPages/
- [ ] Probar catálogo: http://localhost:8080/cart-pages/prods/ink.php
- [ ] Verificar logs: `docker-compose logs web`

---

## 🧪 Pruebas

### 1. Probar Conexión Básica

**Crea:** `test-db-connection.php` en la raíz

```php
<?php
include("eMiKi/Funciones_PHP.php");

echo "<h1>Test de Conexión a Base de Datos</h1>";

$link = conectarse();

if ($link) {
    echo "<p style='color: green;'>✓ Conexión exitosa a la base de datos</p>";

    // Probar query básica
    $result = mysql_query("SHOW TABLES", $link);
    echo "<h2>Tablas en la base de datos:</h2><ul>";
    while ($row = mysql_fetch_array($result)) {
        echo "<li>" . $row[0] . "</li>";
    }
    echo "</ul>";

    mysql_close($link);
} else {
    echo "<p style='color: red;'>✗ Error de conexión</p>";
}
?>
```

**Acceder:** http://localhost:8080/test-db-connection.php

### 2. Probar Registro de Usuario

1. Ir a: http://localhost:8080/cart-pages/ValidationPages/createUser.php
2. Completar el formulario
3. Verificar en phpMyAdmin que se creó en `Datas` y `Clientes`

### 3. Probar Catálogo de Productos

1. Insertar productos de prueba (descomenta en `01-init.sql`)
2. Reiniciar: `docker-compose down -v && docker-compose up -d`
3. Ir a: http://localhost:8080/cart-pages/prods/ink.php
4. Deberías ver los productos listados

---

## 🔄 Rollback (Volver Atrás)

Si algo sale mal:

### Opción 1: Restaurar Backup

```bash
# Si hiciste backup antes
docker-compose exec -T db mysql -uroot -proot eshop_db < backup_antes_migracion.sql
```

### Opción 2: Volver a Configuración Antigua

```bash
# Revertir cambios en PHP
git checkout -- .

# Usar base de datos antigua (si tienes backup)
docker-compose down -v
# Restaurar volumen antiguo
docker-compose up -d
```

---

## 📚 Recursos Adicionales

- **[DATABASE_SCHEMA.md](DATABASE_SCHEMA.md)** - Esquema completo
- **[README.md](README.md)** - Documentación de migraciones
- **[DOCKER.md](../../../DOCKER.md)** - Guía de Docker

---

## 🆘 Problemas Comunes

### Error: "Access denied for user"

**Causa:** Credenciales incorrectas

**Solución:**

```bash
# Verificar variables de entorno
docker-compose exec web env | grep DB_

# Verificar usuario en MySQL
docker-compose exec db mysql -uroot -proot -e "SELECT User, Host FROM mysql.user;"
```

### Error: "Unknown database"

**Causa:** Base de datos no existe

**Solución:**

```bash
# Recrear base de datos
docker-compose exec db mysql -uroot -proot -e "CREATE DATABASE IF NOT EXISTS eshop_db;"
docker-compose exec db mysql -uroot -proot eshop_db < docker/mysql/init/01-init.sql
```

### Caracteres extraños (�)

**Causa:** Problema de charset

**Solución:**

```php
// Agregar después de conectar
mysql_query("SET NAMES 'latin1'", $link);
mysql_query("SET CHARACTER SET latin1", $link);
```

---

**Última actualización:** 3 de febrero de 2026  
**Versión:** 1.0.0
