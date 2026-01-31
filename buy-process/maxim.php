<?php 
include("../eMiKi/Codes/vblesession.php");
include("../eMiKi/Funciones_PHP.php");

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
	
	$result=mysql_query("Select max(ID_Pedido) From Cart_DB_Pedidos",$link);
	
		$row = mysql_fetch_array($result);
		$TmpDes=(int)$row["max(ID_Pedido)"];

		$numPed = $TmpDes + 1 ;
 ?>

