# eShop - Recargas y Consumibles

![Estado del Proyecto](https://img.shields.io/badge/Estado-Histórico-blue)
![Año](https://img.shields.io/badge/Año-2000-orange)
![PHP](https://img.shields.io/badge/PHP-4.x%2F5.x-777BB4?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Legacy-4479A1?logo=mysql)

## 📋 Resumen del Proyecto

Este proyecto representa uno de los primeros e-commerce desarrollados desde cero por mi a inicios del año 2000. Fue creado para una empresa familiar especializada en la venta de **recargas de tinta para impresoras** y consumibles relacionados.

### 🎯 Contexto Personal

Desarrollé este sistema cuando trabajaba con mi padre en el negocio familiar. En aquella época, el comercio electrónico en España estaba en sus inicios, y crear una tienda online desde cero era un desafío técnico considerable. Este proyecto representa no solo un logro técnico, sino también un momento importante en mi carrera profesional y en la historia de nuestro negocio familiar.

**Características del negocio:**

- Venta de kits de recarga universal para cartuchos Ink-Jet y laser
- Accesorios de limpieza y mantenimiento para impresoras
- Reseteadores de chips para impresoras Epson
- Consumibles multimedia (CD/DVD, etiquetas, etc.)
- Atención al mercado español con soporte completo en castellano

## 🏗️ Arquitectura y Tecnologías

### Stack Tecnológico

#### Backend

- **PHP**: Versión 4.x/5.x (sintaxis legacy con `register_globals`)
- **MySQL**: Base de datos relacional (versión 4.x/5.x)
- **Apache**: Servidor web (inferido por configuración)

#### Frontend

- **HTML 4.01**: Estructura basada en tablas
- **CSS Inline/Embedded**: Estilos básicos (Style_001.htm, Style_002.htm)
- **JavaScript**: Validaciones del lado del cliente
- **Codificación**: ISO-8859-1 (charset español)

#### Entorno de Desarrollo con Docker 🐳

Para facilitar el desarrollo y testing de este proyecto legacy, se proporciona una configuración Docker completa que replica el entorno original:

- **PHP 5.6** con Apache y extensiones necesarias (mysqli, pdo_mysql, gd, zip)
- **MySQL 5.7** con autenticación nativa compatible
- **phpMyAdmin 5.1** para gestión visual de la base de datos

**Comandos principales:**

```bash
# Iniciar el entorno completo
docker-compose up -d

# Ver logs de todos los servicios
docker-compose logs -f

# Detener los contenedores
docker-compose down

# Reconstruir desde cero
docker-compose build --no-cache
```

**URLs de acceso:**
- Aplicación: http://localhost:8080
- phpMyAdmin: http://localhost:8081 (usuario: root, password: root)
- MySQL: localhost:3306

📖 **Documentación completa:** Ver [DOCKER.md](DOCKER.md) para guía detallada, troubleshooting y configuración avanzada.

### Características Técnicas

#### Arquitectura del Sistema

**Patrón de diseño:**

- Arquitectura procedural PHP (sin POO excepto clase Mail)
- Inclusión de archivos para reutilización de código
- Separación por funcionalidad en carpetas
- Variables globales y sesiones para estado
- Funciones helper centralizadas (Funciones_PHP.php)

**Flujo de ejecución típico:**

```php
<?php
// 1. Inicio de sesión (TODAS las páginas)
session_start();

// 2. Inclusión de variables de sesión
include("eMiKi/Codes/vblesession.php");

// 3. Verificación de cookie de usuario
if ($usr == "") {
    $var = $_COOKIE["recargas"];
    if ($var <> "") { $usr = $var; }
}

// 4. Inclusión de funciones
include("eMiKi/Funciones_PHP.php");

// 5. Conexión a base de datos
$link = conectarse();

// 6. Lógica de negocio
// ... procesamiento ...

// 7. Presentación HTML
?>
<HTML>
<!-- Contenido -->
</HTML>
```

**Características de organización:**

- Sin framework (código custom completo)
- Include statements para compartir código
- Separación lógica por carpetas funcionales
- Estilos compartidos en eMiKi/Headers/Styles/
- Componentes reutilizables en eMiKi/page.parts/

#### Sistema de Sesiones

```php
// Inicialización de sesión (presente en TODAS las páginas)
session_start();

// Inclusión de variables de sesión centralizadas
include("eMiKi/Codes/vblesession.php");

// Registro de variables de sesión (PHP 4.x legacy)
session_register('itemsEnCesta');    // Array del carrito
session_register('usr');              // Usuario actual
session_register('datosCliente');     // Información del cliente
session_register('numeroPedido');     // ID del pedido actual
```

**Características del sistema de sesiones:**

- Gestión completa del carrito de compras mediante arrays en sesión
- Variables de sesión para datos del usuario autenticado
- Cookies persistentes (1 año = 31,536,000 segundos)
- Verificación automática de cookie en cada carga de página
- Sistema de autenticación básico con tabla Datas
- Persistencia de datos entre páginas del proceso de compra
- Archivo centralizado vblesession.php para consistencia

#### Manejo de Formularios

**Método GET/POST:**

```php
// Acceso directo a variables (register_globals = On)
$user    // En lugar de $_POST['user']
$pwd     // En lugar de $_POST['pwd']
$email   // En lugar de $_GET['email']

// Validación básica
if ($user == "" || $pwd == "") {
    // Error: campos vacíos
}

// Validación de email
if (!emi($email)) {
    // Error: email inválido
}
```

**Características:**

- Dependencia de register_globals (PHP 4.x)
- Acceso directo a variables de formulario
- Validaciones del lado del servidor
- Validaciones JavaScript del lado del cliente
- Sin sanitización avanzada (época pre-PDO)

#### Gestión de Errores

**Páginas de error:**

```
cart-pages/
└── error_01.php       → Página genérica de error
```

**Manejo:**

- Redirección a páginas de error
- Mensajes de error inline
- Sin logging estructurado
- Errores de MySQL visibles (desarrollo)
- Sin manejo de excepciones (PHP 4.x)

#### Sistema de Sesiones

```php
// Inicialización de sesión (presente en TODAS las páginas)
session_start();

// Inclusión de variables de sesión centralizadas
include("eMiKi/Codes/vblesession.php");

// Registro de variables de sesión (PHP 4.x legacy)
session_register('itemsEnCesta');    // Array del carrito
session_register('usr');              // Usuario actual
session_register('datosCliente');     // Información del cliente
session_register('numeroPedido');     // ID del pedido actual
```

**Características del sistema de sesiones:**

- Gestión completa del carrito de compras mediante arrays en sesión
- Variables de sesión para datos del usuario autenticado
- Cookies persistentes (1 año = 31,536,000 segundos)
- Verificación automática de cookie en cada carga de página
- Sistema de autenticación básico con tabla Datas
- Persistencia de datos entre páginas del proceso de compra
- Archivo centralizado vblesession.php para consistencia

#### Base de Datos

**Conexión MySQL Legacy:**

```php
// Función de conexión en Funciones_PHP.php
function conectarse() {
    $link = mysql_connect("localhost", "nelosa_nelosa", "mqm1804");
    mysql_select_db("nelosa_nelosa", $link);
    return $link;
}

// Uso en las páginas
include("eMiKi/Funciones_PHP.php");
$link = conectarse();
```

**Tablas Principales:**

- **`Datas`** - Información de usuarios y autenticación
  - Campos: mail (email/username), otro (password en texto plano)
  - Uso: Login y validación de usuarios
- **`Clientes`** - Datos completos de clientes
  - Información personal, direcciones, teléfonos
  - Sincronizada con tabla Datas
- **`Cart_DB_Pedidos`** - Registro de pedidos
  - Número de pedido, fecha, cliente, items, totales
  - Estado del pedido, forma de pago
- **`prods`** - Catálogo de productos
  - Código, descripción, precio, stock
  - Imágenes, categoría, disponibilidad
- **`lasty`** - Control de numeración de pedidos
  - Último número de pedido generado
  - Incremento automático por transacción

**Operaciones Principales:**

```php
// Consulta de productos
$sql = "SELECT * FROM prods WHERE categoria='inkjet'";
$result = mysql_query($sql, $link);

// Inserción de pedido
$sql = "INSERT INTO Cart_DB_Pedidos (numero, fecha, cliente, items)
        VALUES ('$numPedido', NOW(), '$usuario', '$items')";
mysql_query($sql, $link);

// Actualización de numeración
$sql = "UPDATE lasty SET numero = numero + 1";
mysql_query($sql, $link);
```

#### Sistema de Email

**Clase personalizada Mail (libmail.php):**

```php
// Inclusión de la clase
include("eMiKi/libmail.php");

// Creación y envío de email
$m = new Mail;
$m->From("info@recargas-y-consumibles.net");
$m->To($emailCliente);
$m->Subject("¡Pedido confirmado! Número: " . $numPedido);
$m->Body($mensajeHTML);
$m->Priority(3); // Prioridad normal
$m->Send();
```

**Tipos de emails enviados:**

1. **Confirmación de pedido al cliente** (fin-compra.php)
   - Número de pedido
   - Detalle de productos
   - Total a pagar
   - Forma de pago seleccionada
   - Instrucciones de envío

2. **Notificación al administrador**
   - Nuevo pedido recibido
   - Datos del cliente
   - Resumen del pedido
   - Alerta para procesamiento

3. **Recuperación de contraseña** (send-pwd.php)
   - Envío de credenciales al email registrado

4. **Confirmación de registro** (doneUser.php)
   - Bienvenida al nuevo cliente
   - Confirmación de cuenta creada

**Características:**

- Envío de confirmaciones de pedido
- Notificaciones al administrador
- Soporte de HTML en cuerpo del mensaje
- Configuración de prioridad
- Posibilidad de adjuntos (aunque no usado)

## 📁 Estructura del Proyecto

```
eShop 10.0/
│
├── .git/                          # Control de versiones Git
├── .gitattributes                 # Configuración de Git
├── index.php                      # Página de entrada (splash con sesión)
├── index.html                     # Página estática alternativa
├── main.php                       # Página principal de la tienda
├── eShop Data.cdr                 # Diseños gráficos (CorelDRAW)
├── web.info.doc                   # Documentación interna
├── recargas-y-consumibles-www.url # Acceso directo al sitio web
├── UCbar.gif                      # Elemento gráfico de navegación
├── upy.jpg, upy2.jpg              # Recursos gráficos
│
├── eMiKi/                         # Framework/Librería personalizada
│   ├── Funciones_PHP.php         # Funciones globales
│   │   ├── conectarse()          # Conexión DB
│   │   ├── emi()                 # Validación de email
│   │   └── Get_Ip()              # Obtención de IP del visitante
│   ├── libmail.php               # Clase de envío de correos
│   ├── Codes/
│   │   ├── vblesession.php       # Variables de sesión
│   │   ├── checkMail.miki        # Validación JavaScript email
│   │   └── Funciones_JavaScript.miki
│   ├── Headers/
│   │   └── Styles/               # Hojas de estilo compartidas
│   └── page.parts/               # Componentes reutilizables
│
├── cart-pages/                    # Sistema de carrito de compras
│   ├── index-prods.php           # Índice de productos
│   ├── vercompra.php             # Visualización del carrito
│   ├── empty.cart.php            # Vaciar carrito
│   │
│   ├── prods/                    # Páginas de productos
│   │   ├── ink.php               # Recargas Ink-Jet
│   │   ├── laser.bk.php          # Recargas láser negro
│   │   ├── laser.color.php       # Recargas láser color
│   │   ├── deluxe.php            # Productos premium
│   │   └── chips.php             # Reseteadores de chips
│   │
│   ├── ValidationPages/          # Sistema de usuarios
│   │   ├── createUser.php        # Creación de cuentas
│   │   ├── doneUser.php          # Confirmación de registro
│   │   ├── viewUser.php          # Visualización de perfil
│   │   ├── modifUser.php         # Modificación de datos
│   │   └── log.out.php           # Cierre de sesión
│   │
│   ├── paginas-varias/           # Páginas informativas
│   │   ├── contactar.php         # Formulario de contacto
│   │   ├── garantia.php          # Información de garantía
│   │   ├── condiciones.php       # Condiciones de venta
│   │   ├── ayuda-cart.php        # Ayuda del carrito
│   │   ├── quien.php             # Sobre nosotros
│   │   └── ofertas.php           # Ofertas especiales
│   │
│   ├── more-info/                # Información adicional productos
│   │   ├── recargas.php
│   │   ├── recargas-laser.php
│   │   ├── resetters.php
│   │   └── accesorios.php
│   │
│   └── ayuditas/                 # Sistema de ayuda contextual
│       ├── AyudaLogin.php
│       ├── AyudaIndice01.php
│       ├── inicioCompra.php
│       └── middleCompra.php
│
├── buy-process/                   # Proceso de compra (checkout)
│   ├── inicio-compra.php         # Login/Registro pre-compra
│   ├── middle-compra.php         # Verificación de datos
│   ├── fin-compra.php            # Finalización y email
│   ├── factura.php               # Generación de factura
│   ├── facNum.php                # Numeración de facturas
│   ├── tabla.show.php            # Visualización de items
│   └── tabla.ask.php             # Confirmación de cantidades
│
├── Control/                       # Panel de administración
│   ├── control.php               # Dashboard principal
│   │
│   ├── Clientes/                 # Gestión de clientes
│   │   ├── clientes.php          # Listado de clientes
│   │   ├── IgualarCliente-PWD.php # Sincronización passwords
│   │   └── PedidosCliente.php    # Historial por cliente
│   │
│   ├── Pedidos/                  # Gestión de pedidos
│   │   ├── pedidos.php           # Listado de pedidos
│   │   ├── pedido.php            # Detalle de pedido
│   │   ├── delete.php            # Eliminación de pedidos
│   │   └── delete_2.php          # Confirmación eliminación
│   │
│   ├── Articulos/                # Gestión de productos
│   │   ├── articulos.php         # Listado de artículos
│   │   ├── articulo.php          # Detalle de artículo
│   │   ├── articulo_Nuevo.php    # Crear producto
│   │   ├── alta_Art_2.php        # Confirmación alta
│   │   ├── mod_Art.php           # Modificar artículo
│   │   ├── mod_Art_2.php         # Confirmación modificación
│   │   ├── delete_Art.php        # Eliminar artículo
│   │   └── descrip.php           # Gestión de descripciones
│   │
│   └── Numeros/                  # Control de numeración
│       ├── delLasty.php          # Reset de contadores
│       └── delLasty_nelosa.php   # Reset específico Nelosa
│
├── chip-pages/                    # Sección especial chips
│   ├── buyReseters.php
│   └── Multi.php
│
├── ofertas/                       # Sistema de ofertas
│   ├── index.php
│   ├── oferta.inkjet.php
│   └── oferta.laser.php
│
└── images/                        # Recursos gráficos
    ├── index/                    # Imágenes de navegación
    ├── productos/                # Fotos de productos
    ├── _Botones_Azules/          # Elementos UI (botones azules)
    ├── _new/                     # Iconos "nuevo"
    ├── Backs/                    # Fondos (_Back.jpg, _BackBig.JPG)
    ├── ChipImages/               # Imágenes de chips reseteadores
    ├── comunes/                  # Recursos compartidos
    ├── Ofertas/                  # Banners de ofertas
    ├── Ayudas/                   # Iconos de ayuda (_Help.jpg)
    ├── animaciones/              # GIFs animados
    ├── Visas/                    # Logos de tarjetas de pago
    └── [Archivos individuales]
        ├── Title.jpg, TitleP.jpg, TitleEtienda.jpg
        ├── logo-ink-jet.jpg, logo-laser.jpg
        ├── _Carrito.jpg, _Carrito 14.jpg
        ├── _Comprar.jpg, _VerCompra.jpg
        ├── _Factura.gif, _UpFac.jpg, _UpFacRed.jpg
        ├── _UpFacText.jpg, UpFac3Nelosa.jpg
        ├── _SuCompra.JPG, sucompra.gif
        ├── _Hucha.jpg (icono de ahorro)
        ├── _ecology.gif (icono ecológico)
        ├── _info.JPG, _Help.jpg
        ├── _software.gif, _phone.gif
        ├── _iBest.gif, _inicio.gif
        ├── shopping-cart-small.gif
        ├── entrar.jpg, telef.jpg, upy.jpg
        ├── files.gif, loupe.gif, google.gif
        ├── new.gif, obras01.gif
        └── gb_personal_box_top.gif
```

## 🔄 Flujo de Trabajo del Sistema

### Proceso de Compra Completo

```
1. Entrada al Sistema (index.php)
   - Inicialización de sesión PHP
   - Carga de variables de sesión (vblesession.php)
   - Verificación de cookie de usuario ("recargas")
   - Redirección a página principal
   ↓
2. Navegación Principal (main.php)
   - Carga de estilos (Style_001.htm)
   - Menú de navegación y catálogo
   ↓
3. Catálogo de Productos (cart-pages/prods/)
   - ink.php: Recargas Ink-Jet
   - laser.bk.php / laser.color.php: Recargas láser
   - chips.php: Reseteadores de chips Epson
   - deluxe.php: Productos premium
   ↓
4. Agregar al Carrito
   - Almacenamiento en variables de sesión
   - Variable: $itemsEnCesta (session_register)
   ↓
5. Ver Carrito (vercompra.php)
   - Visualización de productos seleccionados
   - Modificación de cantidades
   - Cálculo de totales
   ↓
6. Iniciar Compra (buy-process/inicio-compra.php)
   - Verificación de autenticación
   - Login o Registro de nuevo usuario
   - Validación de credenciales contra tabla Datas
   ↓
7. Verificación de Datos (middle-compra.php)
   - Confirmación de datos del cliente
   - Validación de dirección de envío
   ↓
8. Revisión Final (tabla.show.php / tabla.ask.php)
   - Confirmación de cantidades
   - Resumen del pedido
   ↓
9. Finalización (fin-compra.php)
   - Generación de número de pedido (facNum.php)
   - Inserción en Cart_DB_Pedidos
   - Envío de email confirmación (libmail.php)
   - Email a administrador
   ↓
10. Factura (factura.php)
    - Generación de factura en HTML
    - Detalles completos del pedido
```

### Sistema de Autenticación

```php
// Inicio de sesión en todas las páginas
session_start();
include("eMiKi/Codes/vblesession.php");

// Verificación de cookie persistente
if ($usr == "") {
    $var = $_COOKIE["recargas"];
    if ($var <> "") { $usr = $var; }
}

// Verificación de usuario en base de datos
$result = mysql_query("SELECT * FROM Datas WHERE mail='$user'", $link);
$row = mysql_fetch_array($result);

// Validación de password (texto plano)
$result = mysql_query("SELECT * FROM Datas WHERE mail='$user' AND otro='$pwd'", $link);

// Creación de cookie persistente (1 año = 31536000 segundos)
setcookie("recargas", $usr, time() + 31536000, "/", "www.recargas-y-consumibles.net");

// Registro de variables de sesión (PHP 4.x)
session_register('itemsEnCesta');
session_register('usr');
session_register('datosCliente');
```

## 📋 Archivos Clave y Funciones

### Archivos Raíz

- **index.php** - Página de entrada/splash
  - Inicia sesión PHP
  - Carga variables de sesión (vblesession.php)
  - Verifica cookie de usuario
  - Redirecciona a main.php o muestra splash
- **main.php** - Página principal de la tienda
  - Carga de estilos (Style_001.htm)
  - Menú de navegación principal
  - Acceso a catálogo de productos
  - Frame visual de la tienda
- **index.html** - Página estática alternativa
  - Versión sin PHP
  - Redirección JavaScript opcional

### Archivos del Framework eMiKi

- **eMiKi/Funciones_PHP.php** - Funciones globales
  - `conectarse()` - Conexión a MySQL
  - `emi($email)` - Validación de formato email
  - `Get_Ip()` - Obtención de IP del visitante
  - Funciones de formato y utilidades
- **eMiKi/libmail.php** - Clase de envío de correos
  - Clase `Mail` personalizada
  - Métodos: From(), To(), Subject(), Body(), Send()
  - Soporte HTML y prioridades
- **eMiKi/Codes/vblesession.php** - Variables de sesión centralizadas
  - Define todas las variables de sesión
  - Incluido en TODAS las páginas
  - Consistencia global
- **eMiKi/Codes/checkMail.miki** - Validación JavaScript
  - Validación cliente de emails
  - Formato y sintaxis
- **eMiKi/Codes/Funciones_JavaScript.miki** - Funciones JS globales
  - Validaciones de formularios
  - Efectos visuales
  - Confirmaciones

### Archivos de Proceso de Compra

- **buy-process/inicio-compra.php** - Inicio del checkout
  - Verificación de autenticación
  - Login o registro
- **buy-process/middle-compra.php** - Verificación de datos
  - Confirmación información cliente
  - Dirección de envío
- **buy-process/tabla.show.php** - Visualización de items
  - Muestra productos del carrito
  - Permite modificaciones
- **buy-process/tabla.ask.php** - Confirmación cantidades
  - Validación final de cantidades
  - Ajustes antes de confirmar
- **buy-process/fin-compra.php** - Finalización
  - Procesa el pedido completo
  - Llama a facNum.php para número
  - Inserta en base de datos
  - Envía emails
- **buy-process/facNum.php** - Numeración
  - Consulta y actualiza tabla lasty
  - Genera número único de pedido
- **buy-process/factura.php** - Generación de factura
  - Documento HTML completo
  - Logo y datos fiscales
  - Detalle de productos

### Archivos de Control/Administración

- **Control/control.php** - Dashboard principal
  - Acceso a todas las funciones admin
- **Control/Clientes/clientes.php** - Listado de clientes
- **Control/Clientes/IgualarCliente-PWD.php** - Sincronización passwords
- **Control/Pedidos/pedidos.php** - Listado de pedidos
- **Control/Pedidos/pedido.php** - Detalle de pedido individual
- **Control/Articulos/articulos.php** - Gestión de productos
- **Control/Articulos/articulo_Nuevo.php** - Alta de productos
- **Control/Numeros/delLasty.php** - Reset contador pedidos

## 🎨 Características del Diseño

### Interfaz de Usuario

- **Diseño basado en tablas**: Estándar de la época (HTML 4.01)
  - Estructura con `<table>`, `<tr>`, `<td>`
  - Layout fijo sin responsive design
  - Anidación de tablas para diseño complejo
- **Paleta de colores**:
  - Azul corporativo (#0000FF)
  - Amarillo para destacados (#FFFF00)
  - Fondo gris claro (#CCCCCC)
  - Combinaciones de la época
- **Navegación visual**:
  - Imágenes para todos los botones
  - Carpeta \_Botones_Azules/ con elementos UI
  - GIFs animados para llamadas a la atención
  - Efectos hover mediante JavaScript
- **Resolución fija**:
  - Optimizado para 770px de ancho
  - Diseñado para monitores 800x600 o 1024x768
  - Sin adaptación móvil
- **Charset**: ISO-8859-1 (Latin-1)
  - Soporte completo del español
  - Caracteres especiales: á, é, í, ó, ú, ñ, ¿, ¡
  - Compatible con navegadores de la época

### SEO y Metadatos

**Implementación completa en cada página:**

```html
<!-- Títulos múltiples para compatibilidad -->
<meta name="title" content="Recargas y consumibles" />
<meta http-equiv="title" content="Recargas y consumibles" />
<meta name="DC.Title" content="Recargas y consumibles" />

<!-- Descripciones detalladas -->
<meta
  name="description"
  content="Kits para recargar TODOS los cartuchos de impresora Ink-jet 
  Ahorre hasta un 80% con el procedimiento mas ecologico - Accesorios limpieza, mantenimiento 
  y archivo para Sonido, Imagen, Informatica, Multimedia y Printables..."
/>
<meta http-equiv="description" content="..." />
<meta name="DC.Description" content="..." />

<!-- Keywords extensivas -->
<meta
  name="keywords"
  content="reset; chip; compatible; ecologica; universal; consumible; 
  cartucho; tinta; imprimir; recarga; refill; instrucciones; Printables; accesorios; 
  epson; canon; hp; lexmark; olivetti; ibm; xerox; hewlett; packard; brother; philips; 
  fax; multifuncion"
/>
<meta http-equiv="keywords" content="..." />

<!-- Directivas para motores de búsqueda -->
<meta name="ROBOTS" content="FOLLOW,INDEX" />
<meta name="Revisit" content="20 days" />
<meta name="distribution" content="global" />
<meta name="resource-type" content="document" />

<!-- Configuración regional -->
<meta http-equiv="Content-Language" content="es-es" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!-- Publisher -->
<meta name="Publisher" content="Nelosa, http://www.nelosa.net" />
```

**Estrategia SEO de la época:**

- Repetición de metaetiquetas (name, http-equiv, DC.\*) para máxima compatibilidad
- Keywords extensas con marcas de impresoras populares
- Descripción detallada incluyendo propuesta de valor (ahorro 80%)
- Revisit cada 20 días para rastreo frecuente
- Content-Language para targeting regional español
- ROBOTS: FOLLOW,INDEX para indexación completa

## 🔐 Seguridad (Contexto Histórico)

⚠️ **Nota Importante**: Este código fue desarrollado en el año 2000 con las prácticas estándar de la época. Muchas de las técnicas utilizadas son ahora consideradas **inseguras** y **obsoletas**.

### Vulnerabilidades Conocidas (para referencia educativa)

1. **SQL Injection**: Queries sin prepared statements

   ```php
   mysql_query("SELECT * FROM Datas WHERE mail='". $user ."'", $link);
   ```

2. **Passwords en texto plano**: Sin hashing

   ```php
   mysql_query("SELECT * FROM Datas WHERE mail='$user' AND otro='$pwd'", $link);
   ```

3. **Credenciales hardcodeadas**: En el código fuente

   ```php
   mysql_connect("localhost", "nelosa_nelosa", "mqm1804");
   ```

4. **Register Globals**: Dependencia de feature deprecada de PHP

   ```php
   session_register('itemsEnCesta');
   ```

5. **Sin HTTPS**: No hay implementación de SSL/TLS

### ⚠️ NO usar este código en producción sin actualizarlo completamente

## 💾 Requisitos del Sistema (Originales)

### Servidor

- **PHP**: 4.3+ o 5.x
- **MySQL**: 4.x o 5.x
- **Apache**: 1.3+ o 2.x
- **Sistema Operativo**: Linux/Unix recomendado

### Extensiones PHP Requeridas

- `mysql` (deprecated en PHP 7.0+)
- `session`
- `mail`
- `ereg` (deprecated en PHP 5.3+)

### Configuración PHP

```ini
register_globals = On  ; PHP 4.x requirement (deprecated)
magic_quotes_gpc = On  ; Común en PHP 4.x
session.auto_start = Off
```

## � Sistema de Ayuda Contextual

### Ayuditas (cart-pages/ayuditas/)

Sistema de ayuda integrada para guiar al usuario en cada paso:

```
AyudaLogin.php         → Ayuda para inicio de sesión
AyudaLogin_2.php       → Ayuda extendida de login
AyudaIndice01.php      → Ayuda del índice de productos
AyudaIndice02.php      → Ayuda adicional de navegación
inicioCompra.php       → Guía inicio del proceso de compra
middleCompra.php       → Ayuda verificación de datos
revisionDatos.php      → Guía revisión final
userCreado.php         → Confirmación usuario creado
userValidado.php       → Confirmación validación usuario
userMant.php           → Ayuda mantenimiento de usuario
userMod.php            → Guía modificación de datos
```

**Características del sistema de ayuda:**

- ✅ Popups contextuales con información relevante
- ✅ Guías paso a paso del proceso de compra
- ✅ Explicaciones de términos técnicos
- ✅ Instrucciones visuales con imágenes (carpeta images/Ayudas/)
- ✅ Ayuda específica para cada sección
- ✅ Accesible mediante iconos \_Help.jpg
- ✅ Ventanas emergentes con JavaScript

### Páginas Informativas (cart-pages/paginas-varias/)

```
contactar.php          → Formulario de contacto
garantia.php           → Información de garantía y devoluciones
condiciones.php        → Condiciones de venta y uso
ayuda-cart.php         → Ayuda general del carrito
quien.php              → Sobre nosotros / Sobre la empresa
ofertas.php            → Página de ofertas especiales
pay-info.php           → Información sobre formas de pago
subscribe.php          → Suscripción a newsletter
novedades.php          → Novedades y actualizaciones
soprte.php             → Soporte técnico
```

### Información Adicional de Productos (cart-pages/more-info/)

```
recargas.php           → Info detallada recargas Ink-Jet
recargas-laser.php     → Info detallada recargas láser
resetters.php          → Info sobre reseteadores de chips
accesorios.php         → Info sobre accesorios
printables.php         → Info sobre productos imprimibles
```

**Contenido de información:**

- ✅ Instrucciones de uso detalladas
- ✅ Compatibilidad con modelos de impresoras
- ✅ Consejos de mantenimiento
- ✅ Ventajas del producto
- ✅ Proceso de recarga paso a paso
- ✅ Fotografías ilustrativas
- ✅ Preguntas frecuentes (FAQ)

## 🛒 Catálogo de Productos

### Categorías Principales (cart-pages/prods/)

```
ink.php                → Recargas universales Ink-Jet
laser.bk.php           → Recargas láser negro
laser.color.php        → Recargas láser color
deluxe.php             → Productos premium/deluxe
chips.php              → Reseteadores de chips Epson
laser.chips.php        → Chips para láser
listado.chips.php      → Listado completo de chips
acces.refill.php       → Accesorios para recargas
cd.dvd.audio.video.php → Consumibles multimedia
etq.cd.php             → Etiquetas para CD/DVD
prody.php              → Productos diversos
```

### Archivos de Texto Descriptivos (_en_txt_/)

```
ink.txt                → Descripción recargas inkjet
laser.bk.txt           → Descripción láser negro
laser.color.txt        → Descripción láser color
deluxe.txt             → Descripción productos deluxe
etq.cd.txt             → Descripción etiquetas CD
cd.dvd.txt             → Descripción CD/DVD
audio.video.txt        → Descripción audio/vídeo
ink.reset.txt          → Descripción reseteadores ink
acces.ink.refill.txt   → Descripción accesorios recarga
soportes.varios.txt    → Descripción soportes varios
t.visita.txt           → Descripción tarjetas visita
```

**Características del catálogo:**

- ✅ Organización por tipo de producto y marca
- ✅ Imágenes de productos (carpeta images/productos/)
- ✅ Descripciones detalladas desde archivos .txt
- ✅ Precios dinámicos desde base de datos
- ✅ Información de compatibilidad
- ✅ Stock y disponibilidad
- ✅ Botones de compra con imágenes (\_Comprar.jpg)
- ✅ Enlaces a información adicional

## �📊 Funcionalidades Principales

### Sistema de Productos

**Organización del catálogo:**

- ✅ Catálogo de productos organizado por categorías
  - Recargas Ink-Jet universales
  - Recargas láser (negro y color)
  - Reseteadores de chips Epson
  - Productos deluxe/premium
  - Consumibles multimedia (CD/DVD)
  - Etiquetas y printables
  - Accesorios de limpieza y mantenimiento
- ✅ Búsqueda y filtrado de productos
  - Por categoría
  - Por marca de impresora
  - Por tipo de producto
- ✅ Precios dinámicos desde base de datos
  - Tabla `prods` con precios actualizables
  - Cálculo de IVA automático
  - Promociones y descuentos
- ✅ Imágenes de productos
  - Carpeta images/productos/
  - Imágenes de chips en ChipImages/
  - Logos de marcas (logo-ink-jet.jpg, logo-laser.jpg)
- ✅ Descripciones detalladas
  - Archivos .txt en _en_txt_/
  - Instrucciones de uso
  - Compatibilidad con impresoras
  - Contenido del kit

## 🎁 Sistema de Ofertas (ofertas/)

### Estructura de Ofertas

```
ofertas/
├── index.php              → Página principal de ofertas
├── oferta.inkjet.php      → Ofertas específicas Ink-Jet
└── oferta.laser.php       → Ofertas específicas Láser
```

**Características:**

- ✅ Página dedicada de ofertas y promociones
- ✅ Ofertas por categoría de producto
- ✅ Banners promocionales (images/Ofertas/)
- ✅ Precios especiales destacados
- ✅ Packs y combos
- ✅ Ofertas temporales
- ✅ Iconos de "nuevo" y "oferta" (new.gif, \_ecology.gif)

## 🔧 Sistema de Chips Especial (chip-pages/)

### Sección Dedicada a Reseteadores

```
chip-pages/
├── buyReseters.php        → Compra de reseteadores
└── Multi.php              → Reseteadores múltiples
```

**Productos de chips:**

- Reseteadores para chips Epson
- Compatibilidad con múltiples modelos
- Instrucciones específicas en español
- Imágenes detalladas (ChipImages/)
- Información técnica sobre uso

**Importancia de los chips:**

- Producto especializado de alto margen
- Solución para impresoras Epson con chip
- Permite recargar cartuchos con chip integrado
- Ahorro significativo para el cliente
- Sección especial por complejidad técnica

### Carrito de Compras

**Almacenamiento en sesiones:**

```php
// Variable de sesión para items
session_register('itemsEnCesta');
$itemsEnCesta = array();

// Estructura de datos del carrito
$itemsEnCesta[] = array(
    'codigo' => $codigoProd,
    'nombre' => $nombreProd,
    'precio' => $precioProd,
    'cantidad' => $cantidad,
    'subtotal' => $precio * $cantidad
);
```

**Funcionalidades:**

- ✅ Agregar/Eliminar productos (gestión por sesión)
- ✅ Modificar cantidades (tabla.ask.php)
- ✅ Cálculo automático de totales con IVA
- ✅ Persistencia mediante sesiones PHP
- ✅ Opción de vaciar carrito (empty.cart.php)
- ✅ Visualización detallada (vercompra.php)
  - Lista de productos con imágenes
  - Cantidad y precio unitario
  - Subtotales por producto
  - Total general
- ✅ Validación de stock disponible
- ✅ Botones de acción con imágenes (\_Comprar.jpg, \_VerCompra.jpg)

### Gestión de Usuarios

**Flujo de autenticación:**

```
Páginas principales:
- createUser.php    → Formulario de registro
- doneUser.php      → Confirmación de alta
- viewUser.php      → Visualización de perfil (ViewUser_II.php)
- modifUser.php     → Modificación de datos
- logout.php        → Cierre de sesión (log.out.php)
- forget-pwd.php    → Recuperación de contraseña
- send-pwd.php      → Envío de contraseña por email
```

**Funcionalidades:**

- ✅ Registro de nuevos clientes
  - Validación de email (emi() en Funciones_PHP.php)
  - Verificación de duplicados
  - Inserción en tablas Datas y Clientes
- ✅ Login/Logout
  - Autenticación contra tabla Datas
  - Creación de cookie persistente (1 año)
  - Cierre de sesión y eliminación de cookie
- ✅ Recuperación de contraseña
  - Búsqueda por email
  - Envío automático de credenciales
- ✅ Modificación de datos personales
  - Actualización de información de contacto
  - Cambio de dirección de envío
  - Sincronización entre Datas y Clientes
- ✅ Historial de pedidos
  - Visualización de compras anteriores
  - Estado de pedidos

### Proceso de Pedido

**Secuencia completa:**

```php
// 1. Generación de número de pedido (facNum.php)
$sql = "SELECT numero FROM lasty";
$result = mysql_query($sql, $link);
$row = mysql_fetch_array($result);
$numPedido = $row['numero'] + 1;

// 2. Actualización del contador
$sql = "UPDATE lasty SET numero = '$numPedido'";
mysql_query($sql, $link);

// 3. Inserción del pedido en base de datos
$sql = "INSERT INTO Cart_DB_Pedidos (...) VALUES (...)";
mysql_query($sql, $link);

// 4. Envío de emails (libmail.php)
// ... al cliente y al administrador

// 5. Generación de factura (factura.php)
// ... con todos los detalles
```

**Funcionalidades:**

- ✅ Numeración automática de pedidos (facNum.php)
  - Control mediante tabla lasty
  - Incremento automático secuencial
  - Gestión de concurrencia básica
- ✅ Almacenamiento en base de datos
  - Tabla Cart_DB_Pedidos
  - Datos completos del cliente
  - Detalle de productos y cantidades
  - Forma de pago seleccionada
  - Fecha y hora del pedido
- ✅ Envío de email de confirmación
  - Clase Mail personalizada
  - Email al cliente con resumen
  - Notificación al administrador
  - Formato HTML con estilos
- ✅ Generación de factura
  - Documento HTML estructurado
  - Logo de la empresa (UpFac3Nelosa.jpg)
  - Detalle completo de productos
  - Cálculo de IVA y totales
  - Datos fiscales de la empresa
- ✅ Panel de administración de pedidos
  - Listado con filtros por fecha
  - Visualización detallada (pedido.php)
  - Opciones de gestión y seguimiento
  - Eliminación controlada (delete.php, delete_2.php)

### Panel de Administración

**Estructura modular por funcionalidad:**

#### Gestión de Productos (Control/Articulos/)

```
articulos.php          → Listado completo de productos
articulo.php           → Visualización detalle producto
articulo_Nuevo.php     → Formulario alta nuevo producto
alta_Art_2.php         → Confirmación y procesamiento alta
mod_Art.php            → Formulario modificación producto
mod_Art_2.php          → Confirmación y actualización
delete_Art.php         → Confirmación eliminación
delete_Art_2.php       → Procesamiento eliminación
descrip.php            → Gestión de descripciones
Desc_Mod.php           → Modificación de descripciones
delete_Desc.php        → Eliminación de descripciones
delete_Desc_2.php      → Confirmación eliminación descripción
```

**Funcionalidades de productos:**

- ✅ CRUD completo (Create, Read, Update, Delete)
- ✅ Gestión de precios y stock
- ✅ Asignación de categorías
- ✅ Carga de imágenes de productos
- ✅ Descripciones detalladas con HTML
- ✅ Control de disponibilidad
- ✅ Gestión de códigos de producto

#### Gestión de Clientes (Control/Clientes/)

```
clientes.php              → Listado completo de clientes
IgualarCliente-PWD.php    → Sincronización passwords Datas/Clientes
PedidosCliente.php        → Historial de pedidos por cliente
```

**Funcionalidades de clientes:**

- ✅ Visualización de datos completos
- ✅ Historial de compras por cliente
- ✅ Sincronización entre tablas Datas y Clientes
- ✅ Gestión de credenciales
- ✅ Búsqueda y filtrado

#### Gestión de Pedidos (Control/Pedidos/)

```
pedidos.php    → Listado de todos los pedidos
pedido.php     → Detalle completo de un pedido
delete.php     → Confirmación eliminación pedido
delete_2.php   → Procesamiento eliminación
```

**Funcionalidades de pedidos:**

- ✅ Listado con filtros por fecha (rango)
- ✅ Visualización detallada de cada pedido:
  - Datos del cliente
  - Productos y cantidades
  - Precios y totales
  - Forma de pago
  - Estado del pedido
- ✅ Búsqueda por número de pedido
- ✅ Búsqueda por cliente
- ✅ Eliminación controlada (doble confirmación)
- ✅ Estadísticas básicas
  - Total de pedidos
  - Suma de importes
  - Pedidos por período

#### Control de Numeración (Control/Numeros/)

```
delLasty.php          → Reset contador principal
delLasty_nelosa.php   → Reset específico Nelosa
```

**Funcionalidades:**

- ✅ Reset de numeración de pedidos
- ✅ Control manual del contador
- ⚠️ Operación crítica con confirmación

#### Dashboard Principal (Control/control.php)

```
- Menú de navegación a todas las secciones
- Acceso rápido a funciones principales
- Resumen de actividad reciente
- Estadísticas generales
```

## 📧 Sistema de Notificaciones

### Emails Automáticos

- Confirmación de registro
- Confirmación de pedido (cliente)
- Notificación de pedido (administrador)
- Recuperación de contraseña

### Clase Mail Personalizada

```php
$m = new Mail;
$m->From("leo@isp.com");
$m->To("destination@somewhere.fr");
$m->Subject("the subject");
$m->Body($message);
$m->Cc("someone@somewhere.fr");
$m->Priority(4);
$m->Attach("/path/file.gif", "image/gif");
$m->Send();
```

## 🌍 Información de la Empresa

**Nombre**: Nelosa  
**Dominio**: www.recargas-y-consumibles.net  
**Actividad**: Venta de recargas de tinta y consumibles

## 🎓 Valor Histórico y Educativo

Este proyecto representa:

1. **Historia del Desarrollo Web**: Captura las prácticas de programación web de principios de los 2000
2. **Evolución Tecnológica**: Muestra cómo ha avanzado el desarrollo web en 20+ años
3. **E-commerce Temprano**: Uno de los primeros e-commerce españoles desarrollados desde cero
4. **Proyecto Familiar**: Desarrollo realizado para negocio familiar, uniendo tecnología y emprendimiento
5. **Aprendizaje**: Excelente material de estudio para comprender la evolución del desarrollo web

## ⏰ Línea de Tiempo

- **~2000**: Desarrollo inicial del sistema
- **2000-2005**: Uso activo en producción
- **2006+**: Mantenimiento y actualizaciones menores
- **2026**: Documentación y archivo histórico

## 🔮 Modernización Potencial

Si se quisiera actualizar este sistema, se recomienda:

### Backend

- ✅ Migrar a **PHP 8.x**
- ✅ Usar **PDO** o **MySQLi** con prepared statements
- ✅ Implementar **Composer** para gestión de dependencias
- ✅ Usar framework moderno (Laravel, Symfony)
- ✅ Implementar **hashing seguro** (password_hash/bcrypt)
- ✅ Separar credenciales en archivos .env
- ✅ Implementar **API REST** o **GraphQL**

### Frontend

- ✅ Reescribir con **HTML5 semántico**
- ✅ Diseño **responsive** (Mobile-first)
- ✅ Framework moderno (React, Vue, o Alpine.js)
- ✅ CSS moderno (Flexbox, Grid, Tailwind CSS)
- ✅ Bundler (Webpack, Vite)

### Base de Datos

- ✅ Rediseñar esquema con **claves foráneas**
- ✅ Normalización de tablas
- ✅ Índices optimizados
- ✅ Migraciones con control de versiones

### Seguridad

- ✅ **HTTPS** obligatorio
- ✅ Protección **CSRF**
- ✅ Sanitización de inputs
- ✅ **XSS** protection
- ✅ Rate limiting
- ✅ Autenticación moderna (JWT, OAuth2)

### DevOps

- ✅ Control de versiones (**Git**)
- ✅ CI/CD pipeline
- ✅ Contenedores (**Docker**)
- ✅ Tests automatizados (PHPUnit)
- ✅ Monitoreo y logs

## 📄 Licencia

Este código es propiedad histórica y se conserva con fines de **documentación y aprendizaje**.

## 👨‍💻 Autor

**Miguel Quesada Martinez**
Desarrollado mientras trabajaba en el negocio familiar de recargas de tinta

---

## 🙏 Agradecimientos

- A mi padre, por la oportunidad de combinar tecnología y negocio familiar
- A la comunidad PHP de principios de los 2000
- A todos los clientes que confiaron en este sistema para sus compras

---

## 📝 Notas Finales

Este proyecto es un testimonio de:

- La evolución del desarrollo web en las últimas dos décadas
- El emprendimiento familiar en la era digital temprana
- Los inicios del e-commerce en España
- Un momento importante en mi carrera como desarrollador

**Conservado con orgullo como parte de mi portfolio histórico** 🚀

---

_Última actualización de documentación: Enero 2026_  
_Código original: Año 2000_  
_Estado: Archivo histórico / Uso educativo_
