<?php 
include("../eMiKi/Codes/vblesession.php");
include("../eMiKi/Funciones_PHP.php");

$link=mysql_connect("db","eshop_user","eshop_pass") ;
mysql_select_db("eshop_db",$link) ;
	
	$result=mysql_query("Select max(ID_Pedido) From Cart_DB_Pedidos",$link);
	
		$row = mysql_fetch_array($result);
		$TmpDes=(int)$row["max(ID_Pedido)"];

		$numPed = $TmpDes + 1 ;
 ?>

