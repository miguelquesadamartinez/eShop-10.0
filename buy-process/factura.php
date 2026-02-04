<?php 
include("../eMiKi/Codes/vblesession.php");
include("../eMiKi/Funciones_PHP.php");
?>
<HTML><head><title>Factura</title></head>

<table width="600" height="86" border="0" align="center">
  <tr> 
    <td width="323" rowspan="2"><img src="../images/UpFac3Nelosa.jpg" width="309" height="110"></td>
    <td width="146"> 
      <div align="left"><b><font face="Arial, Helvetica, sans-serif" color="#0000FF">Factura 
        N&ordm; <?php include ("facNum.php")?> </font></b></div>
    </td>
    <td width="117"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
        <script languaje="JavaScript">
		var hoy = new Date();
		document.write("<p>" + hoy.getDate() + " / " + (hoy.getMonth() + 1) + " / " + hoy.getYear() + "</p>")
	</script>
        </font></b></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="43"> 
      <?php
	  echo "<p><b><font color='#0000FF' face='Arial, Helvetica, sans-serif'></font></b>";
       if ($t6=="")
	   {
	   		echo "<b><font color='#0000FF'>" . $t1 . " " . $t2 ."<br>" . $t7 ."<br>" ;
       }
	   else
	   {
	   		echo "<b><font color='#0000FF'>" . $t6 ."<br>" . $t7 ."<br>" ;
       }
	   echo "</font><font size='2' face='Arial, Helvetica, sans-serif'><b><font size='2' face='Arial, Helvetica, sans-serif'><b><font color='#0000FF'>";
	   echo $t8 . " - " . $t10 . "<br></font></b></font>"; 
       echo "<font color='#0000FF'>" . $t9 . " - " . $tpais ."<br>C.I.F. : " . $t5 ;
       echo "</font></font></b></font></b></font></b></p>";
	?>
    </td>
  </tr>
</table>
<table width="600" border="0" align="center" height="43">
  <tr> 
    <td width="600" height="69" bgcolor="#FFFFFF"> 
      <table width="600" border="0" align="center" height="27">
        <tr> 
          <td width="375" bgcolor="#0000FF"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">Articulo</font></b></td>
          <td width="75" bgcolor="#0000FF"> 
            <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Cantidad</font></b></font></div>
          </td>
          <td width="75" bgcolor="#0000FF"> 
            <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Precio</font></b></font></div>
          </td>
          <td width="75" bgcolor="#0000FF"> 
            <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Total 
              &euro; </font></b></font></div>
          </td>
        </tr>
      </table>
      <?php


	$link=mysql_connect("db","eshop_user","eshop_pass");
	mysql_select_db("eshop_db",$link);

		$tot_price=0;
		$color="#CCFFFF";
		echo "<hr>" ;
if (isset($itemsEnCesta))
{ 
	$cnt=0;
   foreach($itemsEnCesta as $k => $v)
   {
   		if ($itemsEnCesta[$k]!="0")
	   	{ 
   			$cnt+=1;
   			if ($color=="#CCFFFF")
   			{	
   				$color="#FFFFFF";
   			}
   			else 
   			{
  		 			$color="#CCFFFF";
   			}
	    	$result=mysql_query("select Des, Ref, precio_eshop from prods Where Ref ='" . $k . "'",$link); 
			$row = mysql_fetch_array($result);
			$TmpDes=(string)$row["Des"];
			$TmpRef=(string)$row["Ref"];
    		$FPreu=(string)$row["precio_eshop"];
 			$Fprice=(float)$row["precio_eshop"];
			
			$FPrecio=$v*$Fprice;
	
			$tot_price+=$FPrecio;
	
			printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
			printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>$TmpDes</font></td>");
   	 		printf("<td width='75'>");
   		 	printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>");

	         printf( $v );
	 
		 	printf("</font></div></td><td width='75'>");
         	printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPreu</font></div>");
         	printf("</td><td width='75'>");
         	printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
         	printf("</td></tr></table><hr>");
		}
   } 
} 

?>
      <table width="600" border="0" align="center" height="28">
        <tr> 
          <td width="152" height="33" bgcolor="#FFFFCC"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif">Total 
            <?php
			printf("$tot_price");
			?>
            &euro; </font></b></td>
          <td width="128" height="33" bgcolor="#FFFFCC"><b><font size="2" color="#0000FF" face="Arial, Helvetica, sans-serif">Gastos 
            envio</font><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"> 
            <?php
			if ($tot_price<=50){$gEnvio=3;}
			elseif ($tot_price>50){$gEnvio=0;}
			$totPed=$gEnvio+$tot_price;
			echo $gEnvio ;
			?>
            &euro; </font></b></font></b></td>
          <td width="306" height="33" bgcolor="#FFFFCC"> 
            <div align="right"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif"><font size="3">Total 
              pedido</font> <font size="2">( I.V.A. incluido ) </font> 
              <?php echo $totPed ;?>
              &euro; </font> </b></div>
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
</table>
<p align="center"><a href="../main.php"><img src="../images/_inicio.gif" width="32" height="34" border="0"></a></p>
</body>
</html>