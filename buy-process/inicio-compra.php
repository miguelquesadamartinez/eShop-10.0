<?php 
include("../eMiKi/Codes/vblesession.php");
include("../eMiKi/Funciones_PHP.php");

	$link=mysql_connect("db","eshop_user","eshop_pass");
	mysql_select_db("eshop_db",$link);

	if (isset($user) && isset($pwd)){
	
	$result=mysql_query("select * from Datas where mail = '". $user ."'" ,$link); 
	$row = mysql_fetch_array($result);
		
	$numi=(string)$row["mail"];
	
	if ($numi==""){	$algo="1";}
	else
	{
		$result=null; // ! ! !
	
		$result=mysql_query("select * from Datas where mail = '". $user ."' AND otro='" . $pwd . "'" ,$link); 
		$row = mysql_fetch_array($result);
			
		$numi=(string)$row["mail"];
		if ($numi=="")
		{
			$algo="2";
		}
		else
		{
			$algo="0";
			
			$miki=$pwd;

			$result=mysql_query("select * from Clientes where email = '". $user ."'" ,$link); 
			$row = mysql_fetch_array($result);
			
			$usr=(string)$row["email"];
			$t1=(string)$row["Nombre"];
	
			$t2=(string)$row["Apellido1"];
			$t3=(string)$row["Telefono"];
			$t4=(string)$row["Apellido2"];
			$t5=(string)$row["Doc"];
			$t6=(string)$row["Empresa"];
			$t7=(string)$row["Direccion"];
			$t8=(string)$row["Cp"];
			$t9=(string)$row["Poblacion"];
			$t10=(string)$row["Provincia"];
			$tpais=(string)$row["Pais"];
			}
}
}
	//mysql_free_result($result); 
	//mysql_close($link);
?>
<HTML>
<HEAD>

<title>Inicio de compra</title>

<?php include ("../eMiKi/Headers/Styles/Style_002.htm") ; ?>
</HEAD>
<HTML> 

<body bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
 
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="55"><img src="../images/index/arriva.jpg" width="770" height="55"></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="../images/index/d1.001.jpg" width="155" height="20"></td>
    <td><a href="../main.php"><img src="../images/index/d1.002.jpg" width="100" height="20" border="0"></a></td>
    <td><a href="../cart-pages/index-prods.php"><img src="../images/index/d1.003.jpg" width="105" height="20" border="0"></a></td>
    <td><a href="../cart-pages/paginas-varias/contactar.php"><img src="../images/index/d1.004.jpg" width="208" height="20" border="0"></a></td>
    <td><a href="http://www.nelosa.net/gueb/paginas/instrucciones/index.php" target="_blank"><img src="../images/index/d1.005.jpg" width="202" height="20" border="0"></a></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="71"><img src="../images/index/abajo.jpg" width="770" height="71"></td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
</table>
<table width="770" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="828" colspan="4" bgcolor="#FFFFFF"><table width="800" border="0" align="center">
          <tr>
            <td width="581" height="40" bgcolor="#FFFFCC">
              <div align="center"><font color="#0000FF" size="4" face="Arial, Helvetica, sans-serif"><b>Cesta de la compra</b></font></div></td>
            <td width="209" height="40" bgcolor="#FFFFCC">
              <div align="center"><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif"><b>Usuario :
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
</b></font></div></td>
          </tr>
        </table>
        <div align="center">
          <table width="800" border="0" align="center" height="27">
            <tr>
              <td width="313" bgcolor="#0000FF"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">Articulo</font></b></td>
              <td width="173" bgcolor="#0000FF">
                <div align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b>Cantidad</b></font></div></td>
              <td width="117" bgcolor="#0000FF">
                <div align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b>Precio</b></font></div></td>
              <td width="125" bgcolor="#0000FF">
                <div align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b>Total &euro; </b></font></div></td>
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
    $result=mysql_query("select Des, Ref, precio_eshop from prods Where Ref ='" . $k . "'",$link); 
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
	// le quito el iva para el calculo del dto y gastos envio
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
          
          <table width="100%"  border="0">
            <tr>
              <td width="50%"><div align="center">
                <?php 

			if ($usr == "")
			{
				echo ('<form action="../cart-pages/ValidationPages/viewUser.php?lastpage=ic" name="Formulario_3" id="Formulario_3"  onSubmit="return validarDatos_3()" >');
				echo ('<div align="center" class="Estilo1012">');
				echo ('<p class="Estilo1010"><font face="Arial, Helvetica, sans-serif">Validese con su usuario <br> email ');
				echo ('<input name="user" type="text" class="Estilo18" size="20"><br> Clave ');
				echo ('<input name="pwd" type="password" size="20"><br>');
				echo ('<input name="Login" type="submit" value="Login" size="20"><br>');
				echo ('<a href="../cart-pages/forget-pwd.php?lastpage=ic">Olvido su clave ? ! ? </a><BR>');
				echo ('<a href="../cart-pages/ValidationPages/registrarCart.php?lastpage=ic">Nuevo Usuario </a></font></p></div></form>');
			}
			else
			{
				/*$result=mysql_query("select * from Clientes where email = '". $usr ."'" ,$link); 
				$row = mysql_fetch_array($result);
		
				$usr=(string)$row["email"];
				$t1=(string)$row["Nombre"];
		
				$t2=(string)$row["Apellido1"];
				$t3=(string)$row["Telefono"];
				$t4=(string)$row["Apellido2"];
				$t5=(string)$row["Doc"];
				$t6=(string)$row["Empresa"];
				$t7=(string)$row["Direccion"];
				$t8=(string)$row["Cp"];
				$t9=(string)$row["Poblacion"];
				$t10=(string)$row["Provincia"];
				$tpais=(string)$row["Pais"];*/

				echo ('<p align="center" class="Estilo1012">Hola <b>' . $t1 . '</b><BR><BR>Usuario registrado:<BR>' . $usr . '<BR><BR></p>');
				echo ('<p align="center" class="Estilo1009"><a href="../cart-pages/ValidationPages/modifUser.php?lastpage=ic">Modificar usuario</a></p>');
				//echo ('<span class="Estilo1009"><a href="../cart-pages/ValidationPages/log.out.php"><BR>Cerrar sesion</a></span></p>');
			}
			?>
              </div></td>
              <td width="50%"><table width="100%"  border="0">
                <tr bgcolor="#FFFFCC">
                  <td height="25"><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b>Total Pedido (Sin IVA)</b></font></div></td>
                  <td width="150">                    <div align="center">
                  <?php
			printf("<div align='center'><font face='Arial, Helvetica, sans-serif'><b><font color='#0000FF'>$tot_price</font></b></font></div>");
			?></div></td>
                </tr>
                <tr bgcolor="#FFFFCC">
                  <td height="25"><div align="right"><font face="Arial, Helvetica, sans-serif" size="2"><b><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">Dto </font><font color="#0000FF" face="Arial, Helvetica, sans-serif"><?php echo $det_base ;?></font> <font face="Arial, Helvetica, sans-serif">%</font> </strong></b></font></div></td>
                  <td><div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><strong><?php echo $dety ;?></strong></b></font></div></td>
                </tr>
                <tr bgcolor="#FFFFCC">
                  <td height="25"><div align="right"><font face="Arial, Helvetica, sans-serif" size="2"><b>Gastos envio</b></font></div></td>
                  <td><div align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b>
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
                  </b></font></strong></div></td>
                </tr>
                <tr bgcolor="#FFFFCC">
                  <td height="25"><div align="right"><strong><font size="2" face="Arial, Helvetica, sans-serif">I.V.A.</font></strong></div></td>
                  <td><div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><strong><?php echo $iva ;?></strong></b></font></div></td>
                </tr>
                <tr bgcolor="#FFFFCC">
                  <td height="25"><div align="right"><font color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="3">Total pedido</font><font size="2" face="Arial, Helvetica, sans-serif"> ( I.V.A. incluido )</font></b></font></div></td>
                  <td><div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b><?php echo $totPed ;?></b></font></div></td>
                </tr>
              </table></td>
            </tr>
          </table>
          <form ACTION="middle-compra.php" name='Formulario' id='Formulario' onSubmit='return validarDatos()' method="post">
            <table border="0">
              <tr>
                
              <td width="770" bgcolor="#FFFFCC"> <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"> 
                  <input type="submit" name="iniciar22" value="Seguir">
                  </font><font color="#FF0000" face="Arial, Helvetica, sans-serif"><br>
                  <font size="2">En la siguiente pantalla sera donde conformara 
                  el pedido</font></font><font color="#0000FF" face="Arial, Helvetica, sans-serif"> 
                  </font></p>
                  <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif">
                    <?php 
			if ($usr == "")
			{
				include ('tabla.ask.php');
			}
			else
			{
				include ('tabla.show.php');
			}
			?>
                  </font></p>
                  <p align="center"><font face="Arial, Helvetica, sans-serif">Comentarios</font></p>
                  <p align="center"><font color="#000066" face="Arial, Helvetica, sans-serif" size="2">
                    <textarea name="textarea" rows="2" cols="50"><?php if ( $h_marca != "" ) echo ( "Marca impresora: " . $h_marca ) ; ?>
                        </textarea>
                  </font></p>
                  <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">N&ordm; vale decuento</font><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><br>
                        <input name="vale" type="text" id="vale">
                        <br>
  El descuento cerrespondiente al vale le sera reflajado en la factura </font></p>
                  <p align="center"><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><br>
                    </font><font color="#FF0000" face="Arial, Helvetica, sans-serif">
                    <input type="submit" name="iniciar2" value="Seguir">
                    <br>
                    <font size="2">En la siguiente pantalla sera donde conformara el pedido </font></font></p>                  <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><br>
                      </font> </p></td>
              </tr>
            </table>
          </form>
          <p align="right"><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font></p>
      </div></td>
  </tr>
</table>
<div align="right">
  <p>&nbsp;</p>
</div>
</body> 
</html> 
<script language="JavaScript">
	function validarDatos(){
			if  ( Formulario.text1.value=="" ) {
				alert ("Falta nombre !!");
				return (false); 
			}			else if ( Formulario.text2.value=="" ) {
				alert ("Falta apellido 1  !!");
				return (false); 
			}			else if ( Formulario.text4.value=="" ) {
				alert ("Falta apellido 2  !!");
				return (false); 
			}			else if ( Formulario.text3.value=="" ) {
				alert ("Falta telefono !!");
				return (false); 	
			}			else if ( Formulario.text7.value=="" ) {
				alert ("Falta direccion !!");
				return (false); 
			}			else if ( Formulario.text8.value=="" ) {
				alert ("Falta Codigo Postal !!");
				return (false); 
			}			else if ( Formulario.text9.value=="" ) {
				alert ("Falta Poblacion !!");
				return (false); 
			}			else if ( Formulario.text10.value=="" ) {
				alert ("Falta Provincia !!");
				return (false); 
			}			else if (chivi==0){
				alert ("Seleccione Pais !!");
				return (false); 
			}			else			{
					return (true);
			}
		
		}
</script>
