<?php 
session_name ('miki');
session_start(); 
session_register('Using_DB'); 
?>
<html><head><title>Alta_2</title></head>
<?php
$link=mysql_connect("db","eshop_user","eshop_pass") ;
mysql_select_db("eshop_db",$link) ;
$link_2=mysql_connect("db","eshop_user","eshop_pass") ;
mysql_select_db("eshop_db",$link_2) ;

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
			//	 Comproamos si existe referencia
		 	$result_2=mysql_query("Select * From " . $Using_DB . " Where Ref='" . $Ref . "'",$link_2);
			$row_2 = mysql_fetch_array($result_2);
			$bar=(string)$row_2["Ref"];
			if ($bar=="")
			{
				mysql_query("Insert Into " . $Using_DB . " (Ref,Code,Des,Und,precio_eshop,Grupo) VALUES('" . $Ref . "','" . $Code . "','" . $Des . "','" . $Und . "'," . $Precio . ",'" . $Grupo . "')",$link);	
			 	echo "Referencia " . $Ref . " Insertada";	
			}
			else
			{
				echo "La referencia ya existe !!";		
			}	
		  ?>
          </font></p>
        
        <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><a href="articulos.php"><img src="../../images/_Back.jpg" width="67" height="35" name="backy"  border="0"></a></font> 
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