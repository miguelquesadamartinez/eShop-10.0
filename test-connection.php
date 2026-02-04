<?php
// Test de conexión a base de datos
echo "<h1>Test de Conexión - eShop Docker</h1>";

// Información del entorno
echo "<h2>Variables de Entorno:</h2>";
echo "<ul>";
echo "<li><strong>DB_HOST:</strong> " . getenv('DB_HOST') . "</li>";
echo "<li><strong>DB_USER:</strong> " . getenv('DB_USER') . "</li>";
echo "<li><strong>DB_NAME:</strong> " . getenv('DB_NAME') . "</li>";
echo "</ul>";

// Test 1: Usando función conectarse()
echo "<h2>Test 1: Usando conectarse()</h2>";
include("eMiKi/Funciones_PHP.php");

try {
    $link = conectarse();
    if ($link) {
        echo "<p style='color: green;'>✓ Conexión exitosa usando conectarse()</p>";
        
        // Mostrar tablas
        $result = mysql_query("SHOW TABLES", $link);
        echo "<h3>Tablas en la base de datos:</h3><ul>";
        while ($row = mysql_fetch_array($result)) {
            echo "<li>" . $row[0] . "</li>";
        }
        echo "</ul>";
        
        // Contar productos
        $result = mysql_query("SELECT COUNT(*) as total FROM prods", $link);
        $row = mysql_fetch_array($result);
        echo "<p><strong>Total de productos:</strong> " . $row['total'] . "</p>";
        
        mysql_close($link);
    } else {
        echo "<p style='color: red;'>✗ Error de conexión</p>";
    }
} catch (Exception $e) {
    echo "<p style='color: red;'>✗ Error: " . $e->getMessage() . "</p>";
}

// Test 2: Conexión directa
echo "<h2>Test 2: Conexión Directa</h2>";
$host = getenv('DB_HOST') ? getenv('DB_HOST') : 'db';
$user = getenv('DB_USER') ? getenv('DB_USER') : 'eshop_user';
$pass = getenv('DB_PASS') ? getenv('DB_PASS') : 'eshop_pass';
$dbname = getenv('DB_NAME') ? getenv('DB_NAME') : 'eshop_db';

echo "<p>Intentando conectar a: <code>$host:3306</code> con usuario <code>$user</code></p>";

$link2 = mysql_connect($host, $user, $pass);
if ($link2) {
    echo "<p style='color: green;'>✓ Conexión directa exitosa</p>";
    $selected = mysql_select_db($dbname, $link2);
    if ($selected) {
        echo "<p style='color: green;'>✓ Base de datos '$dbname' seleccionada</p>";
    } else {
        echo "<p style='color: red;'>✗ Error al seleccionar base de datos: " . mysql_error() . "</p>";
    }
    mysql_close($link2);
} else {
    echo "<p style='color: red;'>✗ Error de conexión directa: " . mysql_error() . "</p>";
}

// Información de PHP
echo "<h2>Información de PHP:</h2>";
echo "<ul>";
echo "<li><strong>Versión PHP:</strong> " . phpversion() . "</li>";
echo "<li><strong>MySQL extension:</strong> " . (function_exists('mysql_connect') ? 'Disponible' : 'No disponible') . "</li>";
echo "</ul>";
?>
