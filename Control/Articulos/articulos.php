<?php 
session_name ('miki');
session_start(); 
session_register('Using_DB'); 
?>
<html><head><title>Articulos</title></head>
<?
$link=mysql_connect("db","eshop_user","eshop_pass") ;
mysql_select_db("eshop_db",$link) ;
if ($select<>"")$Using_DB=$select ;
?>
<body bgcolor="#FFFFFF" text="#000000">
<div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4">Listado 
  de articulos <font color="#FF0000"><?php echo $Using_DB;?></font></font></b></font> 
</div>
<table width="750" border="1" height="134" align="center">
  <tr> 
    <td width="509" height="19"><img src="../../images/TitleP.jpg" width="354" height="26"></td>
    <td width="225" height="19"> 
      <div align="center">
        <form name="form1" method="post" action="articulo_Nuevo.php">
          <font face="Arial, Helvetica, sans-serif" color="#0000FF"><b>Nuevo articulo 
          <input type="submit" name="Submit" value="Submit">
          </b></font> 
        </form>
        <font face="Arial, Helvetica, sans-serif" color="#0000FF"> </font> </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="39"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
        <?php

		  $result=mysql_query("Select * From " . $Using_DB . " Group By Ref",$link);	
          
		  echo "<table width='100%' border='1'>";
 			$counter=0;
			while($row = mysql_fetch_array($result)) 
			{ 
				$counter = $counter + 1 ;
				$StrTmp = (string)$row["Ref"];
				echo "<tr>";
                	echo "<td>";
					echo $counter;
					echo "</td>";
              		echo "<td>";
					echo $StrTmp;
					echo "</td>";
              		echo "<td>";
					echo $row["Des"]; 
					echo "</td>";
					echo "<td>";
					echo $row["Und"]; 
					echo "</td>";
					echo "<td>";
					echo $row["precio_eshop"]; 
					echo "</td>";
					echo "<td>";
					echo $row["Grupo"]; 
					echo "</td>";
					echo "<td>";
					echo "<a href='articulo.php?Mod_Art=" .  $StrTmp . "'>Modificar</a>"; 
					echo "</td>";
					echo "<td>";
					echo "<a href='delete_Art.php?Eliminar_Art=" .  $StrTmp . "'>Eliminar</a>"; 
					echo "</td>";
            	echo "</tr>";
				
				
			} 
			
			echo "</table>";
			
		  ?>
        </font> </div>
      <p align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a> 
        </font> </p>
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
  Ventana</font></a></b></font></div>
</body>
</html>