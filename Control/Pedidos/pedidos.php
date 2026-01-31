<html><head><title>Pedidos</title></head>
<?php
include("../../images/productos/Funciones_PHP.miki");
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
$b_link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_net",$b_link) ;
$c_link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_net",$c_link) ;

?>
<body bgcolor="#FFFFFF" text="#000000">
<p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4">Listado 
  de pedidos eShop</font></b></font></p>
<table width="600" border="1" height="134" align="center">
  <tr> 
    <td colspan="2" height="19"><img src="../../images/TitleP.jpg" width="354" height="26"></td>
  </tr>
  <tr> 
    <td width="178" height="19"><font face="Arial, Helvetica, sans-serif" color="#0000FF">Ventas 
      Total 
      <?php  // 63
			// Sacamos todos los pedidos
		if (isset($desde))
		{
		  $result=mysql_query("Select * From Cart_DB_Pedidos where Fecha >='" . $desde . "' And Fecha <= '" . $hasta ."'",$link);	
		}
		else
		{ 
		  	$result=mysql_query("Select * From Cart_DB_Pedidos orderby ID_Pedido",$link);	
		} 

			while($row = mysql_fetch_array($result)) 
			{ 	
				// Sumamos totales
				$sumation=$sumation + (int)$row["Total_Pedido"];
				
					// Selects de las lineas de el pedido
					$recordSet=mysql_query("Select * From Cart_DB_L_Pedido Where ID_Pedido=" . (int)$row["ID_Pedido"] ,$b_link);	
          
					while($fila = mysql_fetch_array($recordSet)) 
					{ 	
						// Para sumar las lineas del pedido
						$stargate=mysql_query("Select * From AllProdsB_Control Where Ref='" . $fila["Ref"] . "'",$c_link);	
          
						$burton = mysql_fetch_array($stargate); // 80
						 
						$canty=(int)$fila["Cant"];
						
						$sumilla=(int)$burton["precio_eshop"];
													
						$zuma=$zuma + ($sumilla * $canty);
					}
				
			}
			
			echo $sumation ;
	  ?>
      &euro; </font></td>
    <td width="406" height="19"><font color="#0000FF"><font face="Arial, Helvetica, sans-serif" color="#0000FF">Beneficio 
      <?php 			
			echo $zuma ;
	  ?>
      &euro; </font></font></td>
  </tr>
  <tr> 
    <td colspan="2" height="39"> 
      <div align="center"> <font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
        <?php

		if ($desde<>"")
		{
   	      echo "Miki" ;
		  $result=mysql_query("Select * From Cart_DB_Pedidos where Fecha >='" . $desde . "' And Fecha <= '" . $hasta ."'",$link);	
		}
		else
		{ 
		  
		  	$result=mysql_query("Select * From Cart_DB_Pedidos Group by ID_Pedido",$link);	
		} //26
          
		  echo "<table width='100%' border='1'>";
 
			while($row = mysql_fetch_array($result)) 
			{ 
				$strTmp = (string)$row["ID_Pedido"];
				echo "<tr>";
                	echo "<td>";
					echo "<a href='pedido.php?numped=" . $strTmp . "' target='_blank'>" . $strTmp . "</a>";
					echo "</td>";
              		echo "<td>";
					echo $row["email"]; 
					echo "</td>";
              		echo "<td>";
					echo $row["Fecha"];
					echo "</td>";
              		echo "<td>";
					echo $row["Total_Pedido"];
					echo "</td>";
					echo "<td>";
					echo "<a href='delete.php?numped=" . $strTmp . "' target='_blank'> Eliminar </a>";
					echo "</td>";

            	echo "</tr>";
				
				$sumation=$sumation + (int)$row["Total_Pedido"];
				
			} 
			
			echo "</table>";
			
		  ?>
        </font> 
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