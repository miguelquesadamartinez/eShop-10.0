<?php 
session_name ('miki');
session_start(); 
session_register('Using_DB'); 
?>
<html><head><title>Delete_2</title></head>
<?php
$link=mysql_connect("db","eshop_user","eshop_pass") ;
mysql_select_db("eshop_db",$link) ;

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

			mysql_query("Delete From " . $Using_DB . " Where Ref=" . $Eliminar_Art_2 ,$link);	
		 		
		  ?>
          </font></p>
        <p><font face="Arial, Helvetica, sans-serif" color="#0000FF">Referencia 
          <?php echo $numped_2; ?>
          Eliminada</font></p>
        <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><a href="../../_Control/Articulos/articulos.php%3E%3Cimg%20src="../../images/_Back.jpg" width="67" height="35" name="backy" border="0"></a></font> 
        </div>
      </div>
    </td>
  </tr>
</table>
<div align="center">
  <p>
    <script language="JavaScript">
function backyF ()
{
	history.back(2);
}
</script>
    <font color="#0000FF"><b><a href="" onClick="window.close();"><font size="1">Cerrar 
    Ventana</font></a></b></font> </p>
  <p align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><a href="../../_Control/Articulos/images/_Back.jpg" width="67" height="35" name="backy"  border="0"></a></font></p>
</div>
</body>
</html>