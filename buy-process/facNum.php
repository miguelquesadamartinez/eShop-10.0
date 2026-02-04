<?php 
//include("../eMiKi/Codes/vblesession.php");
//include("../eMiKi/Funciones_PHP.php");
	$link=mysql_connect("db","eshop_user","eshop_pass");
	mysql_select_db("eshop_db",$link);
// Obtenemos la ultima referencia 
$result=mysql_query("Select max(last) From lasty_nelosa",$link);
$row = mysql_fetch_array($result);
$TmpNum=(int)$row["max(last)"];
$next = $TmpNum + 1 ;
//Establecemos el siguiente numero de referencia de pedido
mysql_query("Insert Into lasty_nelosa (last)Values(" . $next . ")",$link);
echo $next;
?>