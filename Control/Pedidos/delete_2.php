<html><head><title>Delete_2</title></head>
<?php
include("../../images/productos/Funciones_PHP.miki");
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;

?>
<body bgcolor="#FFFFFF" text="#000000">
<p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4"><img src="../../images/TitleP.jpg" width="354" height="26"></font></b></font></p>
<table width="600" border="1" height="134" align="center">
  <tr> 
    <td width="525" height="39"> 
      <div align="center"> 
        <p><font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
          <?php

		mysql_query("Delete From Cart_DB_Pedidos Where ID_Pedido=" . $numped_2 ,$link);	
		mysql_query("Delete From Cart_DB_L_Pedido Where ID_Pedido=" . $numped_2 ,$link);
 		
		  ?>
          </font></p>
        <p><font face="Arial, Helvetica, sans-serif" color="#0000FF">Pedido <?php echo $numped_2; ?> eliminado</font> 
        </p>
        <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font> 
        </div>
      </div>
    </td>
  </tr>
</table>
<div align="center">
  <script language="JavaScript">
function backyF ()
{
	history.back(2);
}
</script>
  <font color="#0000FF"><b><a href="" onClick="window.close();"><font size="1">Cerrar 
  Ventana</font></a></b></font> </div>
</body>
</html>