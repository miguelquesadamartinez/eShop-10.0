# 🐳 Documentación Docker - eShop

## 📋 Descripción

Este proyecto utiliza Docker para crear un entorno de desarrollo completo que replica el stack tecnológico legacy del año 2000. El contenedor incluye:

- **PHP 5.6** con Apache
- **MySQL 5.7**
- **phpMyAdmin 5.1** para gestión de base de datos

## 🚀 Inicio Rápido

### Requisitos Previos

- Docker Desktop instalado (Windows/Mac/Linux)
- Docker Compose incluido con Docker Desktop
- Puertos 8080, 8081 y 3306 disponibles

### Comandos Principales

```bash
# Construir e iniciar todos los contenedores
docker-compose up -d

# Ver logs en tiempo real
docker-compose logs -f

# Ver logs de un servicio específico
docker-compose logs -f web

# Detener los contenedores
docker-compose stop

# Detener y eliminar los contenedores
docker-compose down

# Detener y eliminar contenedores, volúmenes y red
docker-compose down -v

# Reconstruir la imagen desde cero
docker-compose build --no-cache

# Reiniciar un servicio específico
docker-compose restart web
```

## 🔧 Configuración

### Servicios y Puertos

| Servicio           | Puerto | URL                   | Descripción              |
| ------------------ | ------ | --------------------- | ------------------------ |
| Web (PHP + Apache) | 8080   | http://localhost:8080 | Aplicación eShop         |
| MySQL              | 3306   | localhost:3306        | Base de datos            |
| phpMyAdmin         | 8081   | http://localhost:8081 | Gestión de base de datos |

### Credenciales de Base de Datos

**Acceso Root:**

- Host: `db` (dentro de Docker) o `localhost` (desde tu máquina)
- Usuario: `root`
- Contraseña: `root`
- Puerto: `3306`

**Usuario de Aplicación:**

- Host: `db`
- Base de datos: `eshop_db`
- Usuario: `eshop_user`
- Contraseña: `eshop_pass`
- Puerto: `3306`

### phpMyAdmin

Accede a phpMyAdmin en: http://localhost:8081

- Usuario: `root`
- Contraseña: `root`

## 📁 Estructura del Proyecto Docker

```
eShop-10.0/
├── docker-compose.yml        # Orquestación de servicios
├── Dockerfile                 # Imagen PHP 5.6 personalizada
├── .dockerignore             # Archivos excluidos del build
└── docker/
    └── mysql/
        └── init/             # Scripts SQL de inicialización
```

## 🛠️ Desarrollo

### Acceder al Contenedor

```bash
# Acceder al contenedor web (PHP)
docker-compose exec web bash

# Acceder al contenedor de MySQL
docker-compose exec db bash

# Ejecutar comandos PHP directamente
docker-compose exec web php -v
```

### Ver Estado de los Contenedores

```bash
# Ver contenedores en ejecución
docker-compose ps

# Ver uso de recursos
docker stats
```

### Trabajar con la Base de Datos

```bash
# Importar un dump SQL
docker-compose exec -T db mysql -uroot -proot eshop_db < backup.sql

# Exportar la base de datos
docker-compose exec db mysqldump -uroot -proot eshop_db > backup.sql

# Acceder a MySQL CLI
docker-compose exec db mysql -uroot -proot eshop_db
```

## 🔍 Troubleshooting

### El puerto 8080 ya está en uso

```bash
# Cambiar el puerto en docker-compose.yml
# Modificar la línea: "8080:80" por "8090:80" (o el puerto que desees)
```

### Los cambios en PHP no se reflejan

```bash
# Reiniciar el contenedor web
docker-compose restart web

# Si persiste, reconstruir sin caché
docker-compose build --no-cache web
docker-compose up -d
```

### Error de conexión a MySQL

```bash
# Verificar que el contenedor de MySQL está corriendo
docker-compose ps

# Ver logs de MySQL
docker-compose logs db

# Reiniciar el servicio de base de datos
docker-compose restart db
```

### Limpiar todo y empezar de cero

```bash
# Detener y eliminar todo (incluyendo volúmenes)
docker-compose down -v

# Eliminar imágenes huérfanas
docker image prune

# Reconstruir desde cero
docker-compose build --no-cache
docker-compose up -d
```

### Permisos de archivos

Si tienes problemas con permisos de escritura:

```bash
# En el contenedor web
docker-compose exec web chown -R www-data:www-data /var/www/html

# Desde tu máquina (Linux/Mac)
sudo chown -R $USER:$USER .
```

## 📊 Configuración de PHP

El Dockerfile configura PHP 5.6 con:

- **Extensiones:** mysqli, pdo_mysql, gd, zip
- **Timezone:** Europe/Madrid
- **upload_max_filesize:** 50M
- **post_max_size:** 50M
- **memory_limit:** 256M
- **max_execution_time:** 300s
- **display_errors:** On (para desarrollo)

### Modificar configuración PHP

Edita el `Dockerfile` y reconstruye:

```bash
docker-compose build web
docker-compose up -d
```

## 🔒 Seguridad

⚠️ **Advertencia:** Esta configuración es solo para desarrollo local.

Para producción, asegúrate de:

- Cambiar todas las contraseñas por defecto
- Desactivar `display_errors` en PHP
- Usar conexiones SSL/TLS
- Restringir acceso a phpMyAdmin
- No exponer puertos innecesarios

## 📝 Volúmenes

### Volumen de MySQL

Los datos de MySQL se almacenan en un volumen Docker llamado `mysql_data`. Esto significa que tus datos persisten incluso si eliminas los contenedores.

```bash
# Ver volúmenes
docker volume ls

# Inspeccionar el volumen
docker volume inspect eshop-100_mysql_data

# Eliminar el volumen (¡CUIDADO! Perderás todos los datos)
docker volume rm eshop-100_mysql_data
```

### Volumen del Código

El código fuente se monta como volumen en tiempo real (bind mount). Los cambios que hagas en tu editor se reflejan inmediatamente en el contenedor.

## 🚦 Estado de los Servicios

### Verificar que todo funciona

1. **Web:** http://localhost:8080 - Deberías ver la página principal de eShop
2. **phpMyAdmin:** http://localhost:8081 - Inicia sesión con root/root
3. **MySQL:** Conéctate con tu cliente MySQL favorito a localhost:3306

### Healthcheck

```bash
# Verificar salud de los contenedores
docker-compose ps

# Estado debería mostrar "Up" para todos los servicios
```

## 💡 Consejos

1. **Usa los logs:** Cuando algo falla, los logs son tu mejor amigo

   ```bash
   docker-compose logs -f
   ```

2. **Backup regular:** Exporta tu base de datos regularmente

   ```bash
   docker-compose exec db mysqldump -uroot -proot eshop_db > backup_$(date +%Y%m%d).sql
   ```

3. **Limpieza periódica:** Docker puede ocupar mucho espacio

   ```bash
   docker system prune -a
   ```

4. **Variables de entorno:** Para credenciales sensibles, usa un archivo `.env`

## 📚 Referencias

- [Docker Documentation](https://docs.docker.com/)
- [Docker Compose Documentation](https://docs.docker.com/compose/)
- [PHP 5.6 Docker Hub](https://hub.docker.com/_/php)
- [MySQL 5.7 Docker Hub](https://hub.docker.com/_/mysql)
- [phpMyAdmin Docker Hub](https://hub.docker.com/r/phpmyadmin/phpmyadmin)

## 🆘 Soporte

Si encuentras problemas:

1. Revisa los logs: `docker-compose logs -f`
2. Verifica que los puertos no estén en uso
3. Asegúrate de tener Docker Desktop actualizado
4. Consulta la sección de Troubleshooting arriba

---

**Nota:** Esta configuración replica un entorno legacy de PHP 5.6. Para proyectos nuevos, se recomienda usar versiones modernas de PHP (8.x) y las mejores prácticas actuales.
