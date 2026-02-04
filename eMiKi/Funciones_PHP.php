<?php 
/*function calcular_portes($medio, $destino, $flete, $baf, $ton, $m3)
{
$var_medio = $medio;
$var_destino = $destino;
$var_flete = $flete;
$var_baf = $baf;
$var_ton = $ton ;
$var_m3 = $m3 ;	

if ( $m3 < 1 )
{
	$var_ton = 1 ;
	$var_m3 = 1 ;	
} 	
		
$res_11 = $flete * $ton ;
$res_12 = $baf  * $ton ;

$fin_1 = $res_11 + $res_12 ;

$res_21 = $flete * $m3 ;
$res_22 = $baf  * $m3 ;
		
$fin_2 = $res_21 + $res_22 ;

if ( $fin_1 > $fin_2 ) 
{
	$parte_1 = $fin_1 ;
}
else
{
	$parte_1 = $fin_2 ;
}

$parte_2 = 18 * $m3 ;
$parte_2 = $parte_2 + 40;
$parte_2 = $parte_2 +( 3 * $ton);
$parte_2 = $parte_2 + 40;
$parte_2 = $parte_2 + 21;
$parte_2 = $parte_2 + 30;

if ($parte_2 < 139) $parte_2 = 139;

$total = $parte_1 + $parte_2 ;

return $total;
}*/

function writeLog($message, $level = "INFO", $file = "") {
    // Directorio de logs (crear si no existe)
    $logDir = __DIR__ . "/../logs/";
    if (!file_exists($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    // Nombre del archivo: log_YYYY-MM-DD.txt
    $logFile = $logDir . "nelosa_" . date("Y-m-d") . ".log";
    
    // Formato: [YYYY-MM-DD HH:MM:SS] [LEVEL] [IP] [FILE] Message
    $ip = Get_Ip();
    $timestamp = date("Y-m-d H:i:s");
    $fileInfo = $file ? " [$file]" : "";
    
    $logEntry = "[$timestamp] [$level] [$ip]$fileInfo $message" . PHP_EOL;
    
    // Escribir en el archivo (append mode)
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

/**
 * Funciones auxiliares para diferentes niveles de log
 */
function logInfo($message, $file = "") {
    writeLog($message, "INFO", $file);
}

function logWarning($message, $file = "") {
    writeLog($message, "WARNING", $file);
}

function logError($message, $file = "") {
    writeLog($message, "ERROR", $file);
}

function logDebug($message, $file = "") {
    writeLog($message, "DEBUG", $file);
}

function logLogin($user, $success = true, $reason = "") {
    $status = $success ? "SUCCESS" : "FAILED";
    $msg = "Login attempt for user: $user - Status: $status";
    if ($reason) {
        $msg .= " - Reason: $reason";
    }
    writeLog($msg, $success ? "INFO" : "WARNING", "auth");
}

/**
 * Función para escribir un mensaje y el contenido de una variable/array en el log
 * @param string $message - Mensaje descriptivo
 * @param mixed $variable - Variable o array a mostrar
 * @param string $level - Nivel del log (INFO, WARNING, ERROR, DEBUG)
 * @param string $file - Archivo opcional donde ocurrió el evento
 */
function logVariable($message, $variable, $level = "DEBUG", $file = "") {
    // Directorio de logs (crear si no existe)
    $logDir = __DIR__ . "/../logs/";
    if (!file_exists($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    // Nombre del archivo: log_YYYY-MM-DD.txt
    $logFile = $logDir . "nelosa_" . date("Y-m-d") . ".log";
    
    // Formato: [YYYY-MM-DD HH:MM:SS] [LEVEL] [IP] [FILE] Message
    $ip = Get_Ip();
    $timestamp = date("Y-m-d H:i:s");
    $fileInfo = $file ? " [$file]" : "";
    
    // Formatear la variable
    $varType = gettype($variable);
    $varContent = "";
    
    if (is_array($variable)) {
        $varContent = "Array(" . count($variable) . " elementos):\n" . print_r($variable, true);
    } elseif (is_object($variable)) {
        $varContent = "Object(" . get_class($variable) . "):\n" . print_r($variable, true);
    } elseif (is_bool($variable)) {
        $varContent = $variable ? "true" : "false";
    } elseif (is_null($variable)) {
        $varContent = "NULL";
    } else {
        $varContent = var_export($variable, true);
    }
    
    $logEntry = "[$timestamp] [$level] [$ip]$fileInfo $message\n";
    $logEntry .= "   Type: $varType\n";
    $logEntry .= "   Content: $varContent\n";
    $logEntry .= str_repeat("-", 80) . "\n";
    
    // Escribir en el archivo (append mode)
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

function emi ($address)
{
	if( ereg( ".*<(.+)>", $address, $regs ) ) {
		$address = $regs[1];
	}
 	if(ereg( "^[^@  ]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9\-]{2}|net|com|gov|mil|org|edu|int|biz)\$",$address) ) 
 		return true;
 	else
 		return false;
}

function conectarse() 
{ 
   // Configuración para Docker - usa 'db' como host en lugar de 'localhost'
   $host = getenv('DB_HOST') ? getenv('DB_HOST') : 'db';
   $user = getenv('DB_USER') ? getenv('DB_USER') : 'eshop_user';
   $pass = getenv('DB_PASS') ? getenv('DB_PASS') : 'eshop_pass';
   $dbname = getenv('DB_NAME') ? getenv('DB_NAME') : 'eshop_db';
   
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

// Funciones auxiliares para Get_Ip() - movidas fuera para evitar redeclaración
function iptype1() 
{
   if (getenv("HTTP_CLIENT_IP")) 
   {
      return getenv("HTTP_CLIENT_IP");
   }
   else 
   {
      return "none";
   }
}

function iptype2() 
{
   if (getenv("HTTP_X_FORWARDED_FOR")) 
   {
      return getenv("HTTP_X_FORWARDED_FOR");
   }  
   else  
   {
      return "none";
   }
}

function iptype3()
{
   if (getenv("REMOTE_ADDR")) 
   {
      return getenv("REMOTE_ADDR");
   }
   else 
   {
      return "none";
   }
}

function Get_Ip()
{
   $ip1 = iptype1();
   $ip2 = iptype2();
   $ip3 = iptype3();
   
   if (isset($ip1) && $ip1 != "none" && $ip1 != "unknown") {
      return $ip1;
   } else if (isset($ip2) && $ip2 != "none" && $ip2 != "unknown") {
      return $ip2;
   } else if (isset($ip3) && $ip3 != "none" && $ip3 != "unknown") {
      return $ip3;
   } else {
      return "none";
   }
}
?>