<?php 
session_name ('miki');
session_start(); 
session_register('Using_DB'); 
?>
<html><head><title>Nuevo Articulo</title></head>
<?php
$link=mysql_connect("db","eshop_user","eshop_pass") ;
mysql_select_db("eshop_db",$link) ;

?>
<body bgcolor="#FFFFFF" text="#000000">
<p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4">Mantenimiento 
  Articulos - Alta </font><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4"><font color="#FF0000"><?php echo $Using_DB;?></font></font></b></font></b></font></p>
<table width="600" border="1" height="134" align="center">
  <tr> 
    <td width="600" height="19"><font face="Arial, Helvetica, sans-serif"><img src="../../images/TitleP.jpg" width="354" height="26"></font></td>
  </tr>
  <tr> 
    <td width="100%" height="39"> 
      <div align="center"> 
        <form name="form1" method="post" action="alta_Art_2.php">
          <font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
          <?php

		$result=mysql_query("Select * From " . $Using_DB . " Where Ref=" . $Mod_Art ,$link);	
//23          
		  echo "<table width='100%' border='1'>";
		
		  echo "<tr>";
                	echo "<td><b><font face='Arial, Helvetica, sans-serif' color='#0000FF'>";
					echo "Referencia"; 
					echo "</font></b></td>";
              		echo "<td><b><font face='Arial, Helvetica, sans-serif' color='#0000FF'>";
					echo "Code";
					echo "</font></b></td>";
              		echo "<td><b><font face='Arial, Helvetica, sans-serif' color='#0000FF'>";
					echo "Des";
					echo "</font></b></td>";
              		echo "<td><b><font face='Arial, Helvetica, sans-serif' color='#0000FF'>";
					echo "Und";
					echo "</font></b></td>";
              		echo "<td><b><font face='Arial, Helvetica, sans-serif' color='#0000FF'>";
					echo "Precio";
					echo "</font></b></td>";
              		echo "<td><b><font face='Arial, Helvetica, sans-serif' color='#0000FF'>";
					echo "Grupo";
					echo "</font></b></td>";
            	echo "</tr>";
  
			
				echo "<tr>";
                	echo "<td>";
					echo "<input type='text' name='Ref' size='6' >"; 
					echo "</font></b></td>";
              		echo "<td>";
					echo "<input type='text' name='Code' size='15' value='84134800' >"; 
					echo "</td>";
              		echo "<td>";
					echo "<input type='text' name='Des' size='50' >"; 
					echo "</td>";
              		echo "<td>";
					echo "<input type='text' name='Und' size='3' >"; 
					echo "</td>";
              		echo "<td>";
					echo "<input type='text' name='Precio' size='7' >"; 
					echo "</td>";
              		echo "<td>";
					echo "<input type='text' name='Grupo' size='3' >"; 
					echo "</td>";
            	echo "</tr>";
				
			 
			
			echo "</table>";
			
		  ?>
          </font> 
          <div align="right"> 
            <p align="center"> 
              <input type="submit" name="Submit" value="Continuar">
            </p>
          </div>
        </form>
        <div align="right">
<p><font face="Arial, Helvetica, sans-serif" color="#0000FF"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font> 
          </p>
        </div>
      </div>
    </td>
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