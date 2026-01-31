<?php 
session_name ('miki');
session_start(); 
session_register('Using_DB'); 
?>
<html><head><title>Modificar_2</title></head>
<?php
include("../../images/productos/Funciones_PHP.miki");
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;

?>
<body bgcolor="#FFFFFF" text="#000000">
<p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4"><img src="../../images/TitleP.jpg" width="354" height="26"></font></b></font></p>
<p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4"> 
  </font><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4"><font color="#FF0000"><?php echo $Using_DB;?></font></font></b></font></b></font></p>
<table width="600" border="1" height="134" align="center">
  <tr> 
    <td width="525" height="39"> 
      <div align="center"> 
        <p><font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
          <?php
			$result=mysql_query("UPDATE " . $Using_DB . " SET Code='" . $Code . "',Des='" . $Des . "',Und='" . $Und . "',precio_eshop=" . $Precio .
			",Grupo='" . $Grupo . "' Where Ref='" . $mod_Art_2 . "'" ,$link);  
		  ?>
          </font></p>
        <p><font face="Arial, Helvetica, sans-serif" color="#0000FF">Referencia 
          <?php echo $numped_2; ?>
          actualizada </font></p>
        <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><a href="articulos.php"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" border="0"></a></font> 
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