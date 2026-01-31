<html><head><title>Pagina de Control de Eshop</title></head>
<?
include("../../images/productos/Funciones_PHP.miki");
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
$result=mysql_query("Delete From lasty where last<" . $val ,$link);
?>
<body bgcolor="#FFFFFF" text="#000000">
<table width="318" border="1" height="134" align="center">
  <tr>
    <td width="525" height="19"><img src="../../images/TitleP.jpg" width="354" height="26"></td>
  </tr>
  <tr> 
    <td width="525" height="39"> 
      <div align="center">
        <p>&nbsp;</p>
        <p><b><font color="#0000FF" face="Arial, Helvetica, sans-serif">DB Lasty 
          vaciada</font></b></p>
        <p><font color="#0000FF"><b><a href="" OnClick="window.close();"><font size="1">Cerrar 
          Ventana</font></a></b></font></p>
		  
        <div align="right"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a> 
        </div>
      </div>
    </td>
  </tr>
</table>
<script language="JavaScript">
function backyF ()
{
	history.back(1);
}
</script>


</body>
</html>