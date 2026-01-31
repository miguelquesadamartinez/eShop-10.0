-- Script de inicialización para eShop Database
-- Este script se ejecuta automáticamente al crear el contenedor por primera vez

-- Asegurar que usamos la base de datos correcta
USE eshop_db;

-- Mensaje de inicio
SELECT 'Iniciando configuración de base de datos eShop...' AS message;

-- Configurar charset para compatibilidad con PHP 5.x
SET NAMES 'latin1';
SET character_set_client = latin1;
SET character_set_connection = latin1;
SET character_set_results = latin1;
SET collation_connection = latin1_spanish_ci;

-- Aquí puedes agregar tus tablas y datos iniciales
-- Por ejemplo:
-- CREATE TABLE IF NOT EXISTS usuarios (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     nombre VARCHAR(100),
--     email VARCHAR(100),
--     password VARCHAR(255),
--     fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

SELECT 'Base de datos configurada correctamente' AS message;
