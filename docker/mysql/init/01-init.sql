-- ============================================================================
-- Script de Migración de Base de Datos eShop Legacy (Año 2000)
-- ============================================================================
-- Generado a partir del análisis del código fuente PHP
-- Compatible con MySQL 5.7
-- Charset: latin1 (ISO-8859-1) para compatibilidad con PHP 5.6
-- ============================================================================

-- Configurar base de datos y charset
USE eshop_db;
SET NAMES 'latin1';
SET character_set_client = latin1;
SET character_set_connection = latin1;
SET character_set_results = latin1;
SET collation_connection = latin1_spanish_ci;

SELECT 'Iniciando migración de eShop Database...' AS message;

-- ============================================================================
-- TABLA: Datas
-- Descripción: Almacena credenciales de autenticación de usuarios
-- Nota: Las contraseñas se guardan en texto plano (patrón legacy año 2000)
-- ============================================================================
CREATE TABLE IF NOT EXISTS `Datas` (
    `mail` VARCHAR(100) NOT NULL PRIMARY KEY,
    `otro` VARCHAR(100) NOT NULL COMMENT 'Password en texto plano',
    `fecha_creacion` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Tabla de autenticación de usuarios (legacy)';

-- ============================================================================
-- TABLA: Clientes
-- Descripción: Información completa de clientes registrados
-- Sincronizada con tabla Datas (email debe coincidir)
-- ============================================================================
CREATE TABLE IF NOT EXISTS `Clientes` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `Nombre` VARCHAR(100) DEFAULT NULL,
    `Apellido1` VARCHAR(100) DEFAULT NULL,
    `Apellido2` VARCHAR(100) DEFAULT NULL,
    `Telefono` VARCHAR(20) DEFAULT NULL,
    `Doc` VARCHAR(20) DEFAULT NULL COMMENT 'NIF/DNI',
    `Empresa` VARCHAR(150) DEFAULT NULL,
    `Direccion` VARCHAR(255) DEFAULT NULL,
    `Cp` VARCHAR(10) DEFAULT NULL COMMENT 'Código Postal',
    `Poblacion` VARCHAR(100) DEFAULT NULL,
    `Provincia` VARCHAR(100) DEFAULT NULL,
    `Pais` VARCHAR(100) DEFAULT 'España',
    `L_Promos` CHAR(1) DEFAULT 's' COMMENT 'Recibir promociones: s/n',
    `L_Recarga` CHAR(1) DEFAULT 's' COMMENT 'Recibir info recargas: s/n',
    `fecha_registro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX `idx_email` (`email`),
    INDEX `idx_provincia` (`Provincia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Datos completos de clientes';

-- ============================================================================
-- TABLA: prods
-- Descripción: Catálogo de productos (recargas, cartuchos, accesorios)
-- ============================================================================
CREATE TABLE IF NOT EXISTS `prods` (
    `Ref` INT NOT NULL PRIMARY KEY COMMENT 'Referencia del producto',
    `Code` VARCHAR(50) DEFAULT NULL COMMENT 'Código interno',
    `Des` VARCHAR(255) NOT NULL COMMENT 'Descripción del producto',
    `Und` VARCHAR(20) DEFAULT NULL COMMENT 'Unidad (ud, pack, etc)',
    `precio_eshop` DECIMAL(10,2) NOT NULL DEFAULT 0.00 COMMENT 'Precio con IVA',
    `Grupo` VARCHAR(10) DEFAULT NULL COMMENT 'Categoría del producto',
    `fecha_alta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX `idx_grupo` (`Grupo`),
    INDEX `idx_precio` (`precio_eshop`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Catálogo de productos';

-- ============================================================================
-- TABLA: Cart_DB_Pedidos
-- Descripción: Encabezado de pedidos realizados
-- ============================================================================
CREATE TABLE IF NOT EXISTS `Cart_DB_Pedidos` (
    `ID_Pedido` INT NOT NULL PRIMARY KEY COMMENT 'ID único del pedido',
    `email` VARCHAR(100) NOT NULL COMMENT 'Email del cliente',
    `Fecha` DATE NOT NULL COMMENT 'Fecha del pedido',
    `Total_Pedido` DECIMAL(10,2) NOT NULL DEFAULT 0.00 COMMENT 'Importe total',
    `RefPed` VARCHAR(50) DEFAULT NULL COMMENT 'Referencia del pedido',
    `fecha_creacion` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX `idx_email` (`email`),
    INDEX `idx_fecha` (`Fecha`),
    INDEX `idx_refped` (`RefPed`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Encabezados de pedidos';

-- ============================================================================
-- TABLA: Cart_DB_L_Pedido
-- Descripción: Líneas de detalle de cada pedido
-- ============================================================================
CREATE TABLE IF NOT EXISTS `Cart_DB_L_Pedido` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `ID_Linea` INT NOT NULL COMMENT 'Número de línea',
    `ID_Pedido` INT NOT NULL COMMENT 'ID del pedido padre',
    `Ref` INT NOT NULL COMMENT 'Referencia del producto',
    `Cant` INT NOT NULL DEFAULT 1 COMMENT 'Cantidad',
    INDEX `idx_pedido` (`ID_Pedido`),
    INDEX `idx_ref` (`Ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Líneas de detalle de pedidos';

-- ============================================================================
-- TABLA: lasty
-- Descripción: Control de secuencia de números de pedido
-- Almacena el último número usado para generar el siguiente
-- ============================================================================
CREATE TABLE IF NOT EXISTS `lasty` (
    `last` INT NOT NULL PRIMARY KEY COMMENT 'Último número de pedido'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Control de numeración de pedidos';

-- ============================================================================
-- TABLA: lasty_nelosa
-- Descripción: Control de secuencia alternativo (facturación Nelosa)
-- ============================================================================
CREATE TABLE IF NOT EXISTS `lasty_nelosa` (
    `last` INT NOT NULL PRIMARY KEY COMMENT 'Último número de factura'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Control de numeración de facturas Nelosa';

-- ============================================================================
-- TABLA: Cart_DB_Pedidos_TMP
-- Descripción: Pedidos temporales durante el proceso de compra
-- Se eliminan al finalizar o cancelar
-- ============================================================================
CREATE TABLE IF NOT EXISTS `Cart_DB_Pedidos_TMP` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `RefPed` INT NOT NULL COMMENT 'Referencia del pedido temporal',
    `email` VARCHAR(100) NOT NULL,
    `Fecha` DATE NOT NULL,
    `Total_Pedido` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    `fecha_creacion` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX `idx_refped` (`RefPed`),
    INDEX `idx_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Pedidos temporales en proceso de compra';

-- ============================================================================
-- TABLA: Cart_DB_L_Pedido_TMP
-- Descripción: Líneas temporales de pedidos en proceso
-- ============================================================================
CREATE TABLE IF NOT EXISTS `Cart_DB_L_Pedido_TMP` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `ID_Linea` INT NOT NULL,
    `RefPed` INT NOT NULL COMMENT 'Referencia del pedido temporal',
    `Ref` INT NOT NULL COMMENT 'Referencia del producto',
    `Cant` INT NOT NULL DEFAULT 1,
    INDEX `idx_refped` (`RefPed`),
    INDEX `idx_ref` (`Ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Líneas temporales de pedidos en proceso';

-- ============================================================================
-- TABLA: tempDB
-- Descripción: Datos temporales para el proceso de pago TPV
-- ============================================================================
CREATE TABLE IF NOT EXISTS `tempDB` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `RefPed_D` INT NOT NULL COMMENT 'Referencia del pedido',
    `email` VARCHAR(100) NOT NULL,
    `tot_price_D` VARCHAR(20) NOT NULL COMMENT 'Precio total como string',
    `fecha_creacion` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX `idx_email` (`email`),
    INDEX `idx_refped` (`RefPed_D`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Datos temporales para proceso TPV';

-- ============================================================================
-- TABLA: vales_usados
-- Descripción: Registro de vales descuento utilizados
-- ============================================================================
CREATE TABLE IF NOT EXISTS `vales_usados` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `numeros` INT NOT NULL COMMENT 'Número de vale usado',
    `fecha_uso` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE INDEX `idx_numero` (`numeros`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Registro de vales descuento usados';

-- ============================================================================
-- TABLA: Descs_esp
-- Descripción: Descripciones especiales/extendidas de productos
-- ============================================================================
CREATE TABLE IF NOT EXISTS `Descs_esp` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `Ref` VARCHAR(50) NOT NULL COMMENT 'Referencia del producto',
    `texto` TEXT DEFAULT NULL COMMENT 'Descripción extendida',
    INDEX `idx_ref` (`Ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Descripciones extendidas de productos';

-- ============================================================================
-- TABLA: AllProdsB_Control
-- Descripción: Control de productos (usado en panel admin)
-- ============================================================================
CREATE TABLE IF NOT EXISTS `AllProdsB_Control` (
    `Ref` VARCHAR(50) NOT NULL PRIMARY KEY COMMENT 'Referencia del producto',
    `Des` VARCHAR(255) DEFAULT NULL COMMENT 'Descripción',
    `info_adicional` TEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
COMMENT='Control de productos para administración';

-- ============================================================================
-- DATOS INICIALES
-- ============================================================================

-- Insertar valor inicial para contador de pedidos
INSERT INTO `lasty` (`last`) VALUES (1) ON DUPLICATE KEY UPDATE `last`=`last`;

-- Insertar valor inicial para contador de facturas Nelosa
INSERT INTO `lasty_nelosa` (`last`) VALUES (1) ON DUPLICATE KEY UPDATE `last`=`last`;

-- ============================================================================
-- USUARIO DE PRUEBA (Opcional - para testing)
-- ============================================================================
-- Usuario de prueba activado
INSERT INTO `Datas` (`mail`, `otro`) VALUES 
    ('test@example.com', 'test123');

INSERT INTO `Clientes` (
    `email`, `Nombre`, `Apellido1`, `Telefono`, 
    `Direccion`, `Cp`, `Poblacion`, `Provincia`, `Pais`
) VALUES (
    'test@example.com', 'Usuario', 'Prueba', '666777888',
    'Calle Test 123', '28001', 'Madrid', 'Madrid', 'España'
);

-- ============================================================================
-- PRODUCTOS DE EJEMPLO (insertados)
-- ============================================================================
INSERT INTO `prods` (`Ref`, `Code`, `Des`, `Und`, `precio_eshop`, `Grupo`) VALUES
    (3001, 'INK-BK-001', 'Recarga tinta negra universal HP', 'ud', 5.95, '1'),
    (3002, 'INK-COL-001', 'Recarga tinta color universal HP', 'ud', 7.95, '1'),
    (3003, 'LASER-BK-001', 'Recarga tóner negro universal', 'ud', 12.95, '2'),
    (3004, 'ACC-001', 'Kit jeringuillas para recarga', 'pack', 3.50, '9'),
    (3005, 'ETQ-CD-001', 'Etiquetas CD imprimibles (100 uds)', 'pack', 15.95, '10');

-- ============================================================================
-- FIN DE MIGRACIÓN
-- ============================================================================

SELECT 'Base de datos eShop configurada correctamente' AS message;
SELECT CONCAT('Total de tablas creadas: ', COUNT(*)) AS total_tables 
FROM information_schema.tables 
WHERE table_schema = 'eshop_db';

-- Mostrar resumen de tablas
SELECT 
    table_name AS 'Tabla',
    table_comment AS 'Descripción'
FROM information_schema.tables 
WHERE table_schema = 'eshop_db' 
ORDER BY table_name;
