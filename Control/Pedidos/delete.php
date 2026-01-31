<html><head><title>Delete</title></head>
<?php
include("../../images/productos/Funciones_PHP.miki");
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;

?>
<body bgcolor="#FFFFFF" text="#000000">
<p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4"><img src="../../images/TitleP.jpg" width="354" height="26"></font></b></font></p>
<table width="600" border="1" height="134" align="center">
  <tr>
    <td width="600" height="19">
      <div align="center"><font color="#0000FF"><b><font size="4" face="Arial, Helvetica, sans-serif">? 
        ? Desea eliminar el pedido <?php echo $numped ?> ? ?</font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="525" height="39"> 
      <div align="center"> 
		<?php echo "<a href='delete_2.php?numped_2=" . $numped . "'> Eliminar </a>"; ?>
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
	history.back(1);
}
</script>
  <font color="#0000FF"><b><a href="" onClick="window.close();"><font size="1">Cerrar 
  Ventana</font></a></b></font> </div>
</body>
</html>