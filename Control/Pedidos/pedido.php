<html><head><title>Pedido</title></head>
<?php
include("../../images/productos/Funciones_PHP.miki");
$link=mysql_connect("db","eshop_user","eshop_pass") ;
mysql_select_db("eshop_db",$link) ;

?>
<body bgcolor="#FFFFFF" text="#000000">
<p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><font size="4">Detalle 
  de pedido</font></b></font></p>
<table width="600" border="1" height="134" align="center">
  <tr>
    <td width="600" height="19"><img src="../../images/TitleP.jpg" width="354" height="26"></td>
  </tr>
  <tr> 
    <td width="525" height="39"> 
      <div align="center"> <font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
        <?php

		$result=mysql_query("Select * From Cart_DB_L_Pedido Where ID_Pedido=" . $numped ,$link);	
          
		  echo "<table width='100%' border='1'>";
 
			while($row = mysql_fetch_array($result)) 
			{ 
				echo "<tr>";
                
              		echo "<td>";
					echo $row["Ref"]; 
					echo "</td>";
              		echo "<td>";
					echo $row["Cant"];
					echo "</td>";
            	echo "</tr>";
				
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