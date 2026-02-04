<?php 
session_name ('miki');
session_register('Using_DB'); 
$link=mysql_connect("db","eshop_user","eshop_pass") ;
mysql_select_db("eshop_db",$link) ;
?>
<html><head><title>Articulo</title></head>
<body bgcolor="#FFFFFF" text="#000000">
<p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4">Mantenimiento 
  Articulos </font><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4"><font color="#FF0000"><?php echo $Using_DB;?></font></font></b></font></b></font></p>
<table width="600" border="1" height="134" align="center">
  <tr> 
    <td width="600" height="19"><font face="Arial, Helvetica, sans-serif"><img src="../../images/TitleP.jpg" width="354" height="26"></font></td>
  </tr>
  <tr> 
    <td width="100%" height="39"> <div align="center"> 
        <div align="right"> 
          <form name="form1" method="post" action="mod_Art_2.php">
            <div align="center"><font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
              <?php
		$result=mysql_query("Select * From Descs_esp Where Ref='" . $Mod_Art . "'",$link);	

		$row = mysql_fetch_array($result);
		  echo "<table width='100%' border='1'>";
			  echo "<tr>";
                	echo "<td><b><font face='Arial, Helvetica, sans-serif' color='#0000FF'>";
					echo "Referencia"; 
					echo "</font></b></td>";
              		echo "<td><b><font face='Arial, Helvetica, sans-serif' color='#0000FF'>";
					echo "Descripcion";
					echo "</font></b></td>";
            	echo "</tr>";
				$tmpVar = $row["Ref"] ;
				echo "<tr>";
                	echo "<td>";
					echo $tmpVar;
					echo "<input type='hidden' name='mod_Art_2' size='6' value='" . $tmpVar . "'>"; 
					echo "</font></b></td>";
              		echo "<td>";
					echo "<textarea name='Des' cols='60' rows='7'>" . $row["texto"] . "</textarea>"; 
					echo "</td>";
            	echo "</tr>";
			echo "</table>";
		  ?>
              </font> </div>
            <div align="right"> 
              <p align="center"> 
                <input type="submit" name="Submit" value="Modificar">
              </p>
            </div>
          </form>
        </div>
        <div align="right"> 
          <p><font face="Arial, Helvetica, sans-serif" color="#0000FF"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font> 
          </p>
        </div>
      </div></td>
  </tr>
</table>
<div align="center"> <font color="#0000FF"><b><a href="" onClick="window.close();"><font size="1">Cerrar 
  Ventana</font></a></b></font> 
  <script language="JavaScript">
function backyF ()
{
	history.back(1);
}
</script>
</div>
</body>
</html>