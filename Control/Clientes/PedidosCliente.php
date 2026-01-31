<html><head><title>Clientes</title></head>
<?
include("../../images/productos/Funciones_PHP.miki");
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;

?>
<body bgcolor="#FFFFFF" text="#000000">
<div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4">Listado 
  de Pedidos X Cliente</font></b></font> </div>
<table width="654" border="1" height="134" align="center">
  <tr>
    <td width="644" height="19"><img src="../../images/TitleP.jpg" width="354" height="26"></td>
  </tr>
  <tr> 
    <td width="644" height="39"> 
      <div align="center"> 
        <div align="right"> <font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
          <?php
		  
		  $eml_cliente = $row["email"] ;

		  $result=mysql_query("Select * From Clientes",$link);	
          
		  echo "<table width='100%' border='1'>";
 			$counter=0;
			while($row = mysql_fetch_array($result)) 
			{ 
				$counter = $counter + 1 ;
				echo "<tr>";
                	echo "<td>";
					echo $counter;
					echo "</td>";
              		echo "<td>";
					echo $row["email"];
					echo "</td>";
              		echo "<td>";
					echo $row["Nombre"]; 
					echo " - ";
					echo $row["Empresa"];
					echo "</td>";
            	echo "</tr>";
				
				
			} 
			
			echo "</table>";
			
		  ?>
          </font> 
          <p><font face="Arial, Helvetica, sans-serif" color="#0000FF"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a> 
            </font> </p>
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
  Ventana</font></a></b></font></div>
</body>
</html>