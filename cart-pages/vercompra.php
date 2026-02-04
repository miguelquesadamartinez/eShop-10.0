<?php 
include("../eMiKi/Codes/vblesession.php");
include("../eMiKi/Funciones_PHP.php");

if ($item){ 

   	  // Comprobamos cantidad
	  if ( $cantidad > 0 && $cantidad < 50 )
	  {
	  	//DoNothing
		//$cantidad = 20 ;
	  }
	  else 	  
	  {
	  	$cantidad = 0 ;
	  }
   
   if (!isset($itemsEnCesta)){ 
      
	  $itemsEnCesta[$item]=$cantidad; 
	  	
	  }else{ 
      foreach($itemsEnCesta as $k => $v){ 
	  		  	
		 if ($item==$k)
		 { 	
         	$itemsEnCesta[$k]=$cantidad; 
         	$encontrado=1; 
				
         } 
      } 
      if ($encontrado!=1)
	  {
       	if($cantidad)$itemsEnCesta[$item]=$cantidad;
	  }
   } 
}
?>
<html><head><title>Ver compra</title>
<?php include ("../eMiKi/Headers/Styles/Style_001.htm") ; ?>
</HEAD>
<body bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<tt> </tt> 
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="55"><img src="../images/index/arriva.jpg" width="770" height="55"></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="../images/index/d1.001.jpg" width="155" height="20"></td>
    <td><a href="../main.php"><img src="../images/index/d1.002.jpg" width="100" height="20" border="0"></a></td>
    <td><a href="index-prods.php"><img src="../images/index/d1.003.jpg" width="105" height="20" border="0"></a></td>
    <td><a href="paginas-varias/contactar.php"><img src="../images/index/d1.004.jpg" width="208" height="20" border="0"></a></td>
    <td><a href="http://www.nelosa.net/gueb/paginas/instrucciones/index.php" target="_blank"><img src="../images/index/d1.005.jpg" width="202" height="20" border="0"></a></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="71"><img src="../images/index/abajo.jpg" width="770" height="71"></td>
  </tr>
  <tr>
    <td height="71"><table align="center" width="100%" cellspacing="0" cellpadding="0" border="0" height="26">
        <tr>
          <td bgcolor="#FFFFFF" height="13">
            <div align="center">
              <table width="770" border="0" align="center">
                <tr>
                  <td width="33%" bgcolor="#FFFFCC"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#0000FF">Usuario :
                          <?php 
		if (isset($usr ))
		{
			echo $usr ;
		}
		else
		{
			echo "Anonimo" ;
		}
		?>
                  </font></b></font></td>
                  <td width="33%" height="40" bgcolor="#FFFFCC">
                    <div align="center"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font size="4">Cesta de la compra</font></b></font></div></td>
                  <td width="33%" height="40" bgcolor="#FFFFCC">
                  <div align="center"></div></td>
                </tr>
              </table>
              <div align="center">
                <table width="770" border="0" align="center" height="27">
                  <tr>
                    <td width="313" bgcolor="#0000FF"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">Articulo</font></b></td>
                    <td width="173" bgcolor="#0000FF">
                      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Cantidad</font></b></font></div></td>
                    <td width="117" bgcolor="#0000FF">
                      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Precio</font></b></font></div></td>
                    <td width="125" bgcolor="#0000FF">
                      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Total &euro; </font></b></font></div></td>
                  </tr>
                </table>
                <?php
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
 	 
	   if ($color=="#CCFFFF")
	   {
			$color="#FFFFFF";
	   }
	   else 
	   {
			$color="#CCFFFF";
	   }
   
//echo ( "<BR>select * from prods Where Ref ='" . $k . "'<BR>" );
	$link=mysql_connect("db","eshop_user","eshop_pass");
	mysql_select_db("eshop_db",$link);
   
    $result=mysql_query("select * from prods Where Ref = '" . $k . "'",$link); 
	$row = mysql_fetch_array($result);
	$TmpDes=(string)$row["Des"];
	$TmpRef=(string)$row["Ref"];
    $FPreu=(string)$row["precio_eshop"];
 	$Fprice=(float)$row["precio_eshop"];
		
	$FPrecio=$v*$Fprice;
	
	$tot_price+=$FPrecio;
	
	$cnt=$cnt + $v ;
	
	$FPreu = $FPreu / 1.16 ;
  	$FPreu = round ($FPreu,+2);
	
	$FPrecio = $FPrecio / 1.16 ;
  	$FPrecio = round ($FPrecio,+2);

	printf("<table width='770' border='0' align='center'><tr bgcolor='" . $color . "'>");
	printf("<td width='314'><font color='#0000FF' face='Arial, Helvetica, sans-serif'><b>$TmpDes</b></font></td>");
    printf("<td width='173'>");
    printf("<div valign='center' align='center'>");

		 printf("<form action='../cart-pages/index-prods.php'>");
		 
         printf("<font face='Arial, Helvetica, sans-serif'><b>");
         printf("<input type='text' name='cantidad' size='3' value=" . $v . "> Und </b></font>");
         printf("<input type='submit' name='Submit' value='Modificar'>");
		 printf("<input type=hidden name='item' align='center' value='" . $TmpRef . "'>" );
		 printf("</form></div></td><td width='117'>");
         printf("<div align='center'><font face='Arial, Helvetica, sans-serif'><b>$FPreu</b></font></div>");
         printf("</td><td width='124'>");
         printf("<div align='center'><font face='Arial, Helvetica, sans-serif'><b>$FPrecio</b></font></div>");
         printf("</td></tr></table><hr>");
   } 
  } 
	$tot_price = $tot_price / 1.16 ;
  	$tot_price = round ($tot_price,+2);

if ( ( $tot_price<=50 ) && ($tot_price>0)) $gEnvio=3;
elseif ($tot_price>50) $gEnvio=0;
	
	
  if ( $tot_price < 70 ) $det_base = 0 ;
  elseif ( ( $tot_price >= 70 ) && ( $tot_price <= 100 ) ) $det_base = 5 ;
  elseif ( $tot_price >100 )  $det_base = 10 ;

  $dety = ( $tot_price * $det_base ) / 100 ;
  $dety = round ($dety,+2);
} 
else
{
 echo "  Carrito de la compra vacio !!";
}

?>
                <table width="770" border="0" align="center" height="28">
                  <tr>
                    <td width="654" height="23" bgcolor="#FFFFCC">
                      <div align="right"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Total Pedido </font></b></font></div></td>
                    <td width="136" height="23" bgcolor="#FFFFCC">
                      <div align="center">
                        <?php
			printf("<div align='center'><font face='Arial, Helvetica, sans-serif'><b><font color='#0000FF'>$tot_price</font></b></font></div>");
			?>
                    </div></td>
                  </tr>
                </table>
                <table width="770" border="0" align="center" height="106">
                  <tr>
                    <td width="364" height="15" bgcolor="#FFFFCC">
                      <div align="right"><font face="Arial, Helvetica, sans-serif" size="2"><b> </b></font></div></td>
                    <td width="285" height="15" bgcolor="#FFFFCC">
                      <div align="right"><font face="Arial, Helvetica, sans-serif" size="2"><b><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">Dto </font><font face="Arial, Helvetica, sans-serif"><font color="#0000FF"><?php echo $det_base ;?></font></font> <font face="Arial, Helvetica, sans-serif">%</font> </strong></b></font></div></td>
                    <td width="137" height="33" bgcolor="#FFFFCC">
                      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"> <strong><font face="Arial, Helvetica, sans-serif"><font color="#0000FF"><?php echo $dety ;?></font></font></strong> </font></b></font> </div></td>
                  </tr>
                  <tr>
                    <td height="21" bgcolor="#FFFFCC" colspan="2"><div align="right"><font face="Arial, Helvetica, sans-serif" size="2"><b>Gastos envio</b></font></div></td>
                    <td height="21" bgcolor="#FFFFCC"><div align="center"><strong><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">
                        <?php
if ( ( $tot_price<=50 ) && ($tot_price>0))
	{
		$gEnvio=3;
	}
elseif ($tot_price>50)
	{
		$gEnvio=0;
		//$totPed=$gEnvio+$tot_price; // Puta !!
	}

			// Por cada elemento de la cesta de la compra, si es una oferta , y es diferente de cero
		if (isset($itemsEnCesta))
		{
			foreach($itemsEnCesta as $k => $v)
   			{
				if ( ( $k == "9901" ) || (  $k == "9902" ) ) 
				{
					if ( $v != "0" ) $gEnvio=0;
				}
			}
		}
			
//total pedido menos dto
$totPed = $tot_price - $dety ;
//A&ntilde;ado IVA
$iva = $totPed * 16 / 100 ;
$iva = round ($iva,+2);
$totPed = $totPed + $iva ;
$totPed = round ($totPed,+2);
//A&ntilde;ado gastos envio
$totPed = $gEnvio + $totPed ;

			
			echo $gEnvio ;
			
			?>
                    </font></b> </font></strong></div></td>
                  </tr>
                  <tr>
                    <td height="21" bgcolor="#FFFFCC" colspan="2"><div align="right"><strong><font size="2" face="Arial, Helvetica, sans-serif">I.V.A.</font></strong></div></td>
                    <td height="21" bgcolor="#FFFFCC"><div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"><strong><font face="Arial, Helvetica, sans-serif"><font color="#0000FF"><?php echo $iva ;?></font></font></strong></font></b></font></div></td>
                  </tr>
                  <tr>
                    <td height="21" bgcolor="#FFFFCC" colspan="2"><div align="right"><font color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="3">Total pedido</font><font face="Arial, Helvetica, sans-serif"> <font size="2">( I.V.A. incluido )</font></font></b></font></div></td>
                    <td height="21" bgcolor="#FFFFCC"><div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"><?php echo $totPed ;?></font></b></font></div></td>
                  </tr>
                </table>
                <br>  
                <div align="right"><b><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font></b></div>
              </div>
            </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
<div align="center"><script language="JavaScript">
function backyF ()
{
	history.back(1);
}
function AbrirVentana(url) {
	var hWnd = window.open(url,"ayuda","width=350,height=400,resizable=no,scrollbars=yes");
}
</script>
</div>
  <div align="center"><center>
    </center></div>

        
<div align="right"></div>
</body> 
</html> 
