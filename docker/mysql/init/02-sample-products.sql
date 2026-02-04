-- ============================================================================
-- eShop Legacy - Sample Product Data Migration
-- ============================================================================
-- Archivo: 02-sample-products.sql
-- Descripción: Datos de productos de ejemplo para todas las categorías
-- Generado: 2026-02-04
-- Basado en: Análisis de páginas en cart-pages/prods/
-- ============================================================================

USE eshop_db;

-- ============================================================================
-- PRODUCTOS INK-JET (Grupo 1) - ink.php
-- Referencias: 3197, 3198, 3199, 3200, 3228, 3229, 3230, 3231, 3232, 3233,
--             3211, 3212, 3213, 3214, 3217, 3218, 3234, 3236
-- ============================================================================

INSERT INTO prods (Ref, Code, Des, precio_eshop, Grupo) VALUES
-- Kits de recarga universales
('3197', 'KIT-INK-BK', 'Kit Recarga Universal Negro', 8.50, '1'),
('3198', 'KIT-INK-COLOR', 'Kit Recarga Universal Color', 12.00, '1'),
('3199', 'KIT-INK-COMBO', 'Kit Recarga Universal Negro + Color', 18.50, '1'),
('3200', 'KIT-INK-PHOTO', 'Kit Recarga Photo 5 Colores', 19.90, '1'),

-- Botellas de tinta individuales
('3228', 'TINTA-BK-100', 'Tinta Negra 100ml', 5.50, '1'),
('3229', 'TINTA-CYAN-100', 'Tinta Cyan 100ml', 5.50, '1'),
('3230', 'TINTA-MAG-100', 'Tinta Magenta 100ml', 5.50, '1'),
('3231', 'TINTA-YEL-100', 'Tinta Yellow 100ml', 5.50, '1'),
('3232', 'TINTA-BK-250', 'Tinta Negra 250ml', 11.90, '1'),
('3233', 'TINTA-COLOR-250', 'Pack 3 Tintas Color 250ml', 32.50, '1'),

-- Kits especializados por marca
('3211', 'KIT-HP-BK', 'Kit Recarga HP Negro', 9.50, '1'),
('3212', 'KIT-HP-COLOR', 'Kit Recarga HP Color', 13.50, '1'),
('3213', 'KIT-CANON-BK', 'Kit Recarga Canon Negro', 9.50, '1'),
('3214', 'KIT-CANON-COLOR', 'Kit Recarga Canon Color', 13.50, '1'),
('3217', 'KIT-EPSON-BK', 'Kit Recarga Epson Negro', 9.50, '1'),
('3218', 'KIT-EPSON-COLOR', 'Kit Recarga Epson Color', 13.50, '1'),

-- Kits premium
('3234', 'KIT-PREMIUM-BK', 'Kit Premium Negro Alta Capacidad', 15.90, '1'),
('3236', 'KIT-PREMIUM-COLOR', 'Kit Premium Color Alta Capacidad', 21.90, '1');

-- ============================================================================
-- PRODUCTOS LASER B/N (Grupo 2) - laser.bk.php
-- Referencias: 3301, 3304, 3305, 3307, 3308
-- ============================================================================

INSERT INTO prods (Ref, Code, Des, precio_eshop, Grupo) VALUES
('3301', 'TONER-HP-UNIV', 'Toner HP LaserJet Universal', 16.50, '2'),
('3304', 'TONER-CANON-UNIV', 'Toner Canon Laser Universal', 16.50, '2'),
('3305', 'TONER-BROTHER', 'Toner Brother HL Series', 15.90, '2'),
('3307', 'TONER-SAMSUNG', 'Toner Samsung ML Series', 15.90, '2'),
('3308', 'TONER-EPSON-AL', 'Toner Epson AcuLaser', 17.50, '2');

-- ============================================================================
-- PRODUCTOS LASER COLOR (Grupo 3) - laser.color.php
-- Referencias: 3420, 3417, 3409, 3410, 3411, 3412, 3405, 3406, 3407, 3408
-- ============================================================================

INSERT INTO prods (Ref, Code, Des, precio_eshop, Grupo) VALUES
-- Kits completos CMYK
('3420', 'TONER-COLOR-UNIV-CMYK', 'Kit Recarga Color Universal CMYK', 52.00, '3'),
('3417', 'TONER-HP-COLOR-CMYK', 'Kit Recarga HP Color LaserJet CMYK', 54.00, '3'),

-- Colores individuales Cyan
('3409', 'TONER-CYAN-HP', 'Toner Cyan HP Color LaserJet', 15.50, '3'),
('3410', 'TONER-CYAN-CANON', 'Toner Cyan Canon i-SENSYS', 15.50, '3'),

-- Colores individuales Magenta
('3411', 'TONER-MAG-HP', 'Toner Magenta HP Color LaserJet', 15.50, '3'),
('3412', 'TONER-MAG-CANON', 'Toner Magenta Canon i-SENSYS', 15.50, '3'),

-- Colores individuales Yellow
('3405', 'TONER-YEL-HP', 'Toner Yellow HP Color LaserJet', 15.50, '3'),
('3406', 'TONER-YEL-CANON', 'Toner Yellow Canon i-SENSYS', 15.50, '3'),

-- Colores individuales Black
('3407', 'TONER-BK-HP-COLOR', 'Toner Negro HP Color LaserJet', 15.50, '3'),
('3408', 'TONER-BK-CANON-COLOR', 'Toner Negro Canon i-SENSYS', 15.50, '3');

-- ============================================================================
-- ACCESORIOS RECARGA (Grupo 9) - acces.refill.php
-- Referencias: 3220, 3224, 3240, 3235, 3215, 3206, 3216
-- ============================================================================

INSERT INTO prods (Ref, Code, Des, precio_eshop, Grupo) VALUES
('3220', 'JERINGA-20ML', 'Jeringa Recarga 20ml con Aguja', 1.50, '9'),
('3224', 'CHIP-RESET-EPSON', 'Chip Resetter Universal Epson', 19.90, '9'),
('3240', 'GUANTES-LATEX', 'Guantes Látex Caja 100 Unidades', 8.50, '9'),
('3235', 'TALADRO-CART', 'Taladro para Cartuchos', 3.50, '9'),
('3215', 'ABRAZADERA-CART', 'Abrazaderas Fijación Cartuchos', 2.50, '9'),
('3206', 'CLIP-INYECTORES', 'Clips Sellado Inyectores 10ud', 2.00, '9'),
('3216', 'KIT-HERRAMIENTAS', 'Kit Herramientas Completo Recarga', 12.50, '9');

-- ============================================================================
-- ETIQUETAS CD/DVD (Grupo 10) - etq.cd.php
-- Referencias: 3121, 3122, 3180, 3181, 3190
-- ============================================================================

INSERT INTO prods (Ref, Code, Des, precio_eshop, Grupo) VALUES
('3121', 'ETQ-CD-LASER-100', 'Etiquetas CD Laser 100 Unidades', 15.50, '10'),
('3122', 'ETQ-DVD-LASER-100', 'Etiquetas DVD Laser 100 Unidades', 15.50, '10'),
('3180', 'ETQ-CD-INKJET-100', 'Etiquetas CD Inkjet 100 Unidades', 12.50, '10'),
('3181', 'ETQ-DVD-INKJET-100', 'Etiquetas DVD Inkjet 100 Unidades', 12.50, '10'),
('3190', 'APLIC-ETQ-CD', 'Aplicador Etiquetas CD/DVD', 4.50, '10');

-- ============================================================================
-- KITS DELUXE (Grupo 11) - deluxe.php
-- Referencias: 3178, 3179, 8015, 8016, 8017, 8012, 8014, 3195, 8005
-- ============================================================================

INSERT INTO prods (Ref, Code, Des, precio_eshop, Grupo) VALUES
('3178', 'DELUXE-HP-COMBO', 'Kit Deluxe HP Negro + Color', 45.00, '11'),
('3179', 'DELUXE-CANON-COMBO', 'Kit Deluxe Canon Negro + Color', 45.00, '11'),
('8015', 'DELUXE-EPSON-COMBO', 'Kit Deluxe Epson Negro + Color', 45.00, '11'),
('8016', 'DELUXE-BROTHER-COMBO', 'Kit Deluxe Brother Negro + Color', 42.00, '11'),
('8017', 'DELUXE-LEXMARK-COMBO', 'Kit Deluxe Lexmark Negro + Color', 42.00, '11'),
('8012', 'DELUXE-PHOTO-PRO', 'Kit Deluxe Photo Profesional 6 Colores', 65.00, '11'),
('8014', 'DELUXE-LASER-COMBO', 'Kit Deluxe Laser Negro Alta Capacidad', 38.00, '11'),
('3195', 'DELUXE-STARTER-KIT', 'Kit Iniciación Completo Universal', 35.00, '11'),
('8005', 'DELUXE-PROFESSIONAL', 'Kit Profesional Recarga Completo', 89.00, '11');

-- ============================================================================
-- CHIPS LASER (Grupo 31) - chips.php, laser.chips.php
-- Referencias: Mismas que laser.bk.php (3301, 3304, 3305, 3307, 3308)
-- Nota: Ya insertados en sección Laser B/N
-- ============================================================================

-- ============================================================================
-- VERIFICACIÓN DE DATOS INSERTADOS
-- ============================================================================

-- Total de productos por grupo
SELECT 
    Grupo,
    COUNT(*) as Total_Productos,
    CASE Grupo
        WHEN '1' THEN 'Ink-Jet'
        WHEN '2' THEN 'Laser B/N'
        WHEN '3' THEN 'Laser Color'
        WHEN '9' THEN 'Accesorios'
        WHEN '10' THEN 'Etiquetas CD/DVD'
        WHEN '11' THEN 'Kits Deluxe'
        ELSE 'Otro'
    END as Categoria
FROM prods
WHERE Grupo IN ('1', '2', '3', '9', '10', '11')
GROUP BY Grupo
ORDER BY Grupo;

-- Resumen de precios
SELECT 
    MIN(precio_eshop) as Precio_Minimo,
    MAX(precio_eshop) as Precio_Maximo,
    AVG(precio_eshop) as Precio_Promedio,
    COUNT(*) as Total_Productos
FROM prods;

-- ============================================================================
-- FIN DE MIGRACIÓN
-- ============================================================================
-- Total productos insertados: 50
-- Grupos cubiertos: 1 (Ink-Jet), 2 (Laser B/N), 3 (Laser Color), 
--                   9 (Accesorios), 10 (Etiquetas), 11 (Deluxe)
-- ============================================================================
