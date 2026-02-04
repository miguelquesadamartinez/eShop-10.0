<?php 
include("../eMiKi/Codes/vblesession.php");
include("../eMiKi/Funciones_PHP.php");

if ($usr == "")
{
	$var = isset($_COOKIE["recargas"]) ? $_COOKIE["recargas"] : "";
	if ($var <> "") { $usr = $var; }
}


//if ( $vaciar = "si" ){
//	$itemsEnCesta="";
//	$vaciar = "";
//}

$link=mysql_connect("db","eshop_user","eshop_pass") ;
mysql_select_db("eshop_db",$link) ;

$tot_price=0;
$desplazamiento=0;

if ($ref3198)$itemsEnCesta["3198"]=$ref3198;
if ($ref3236)$itemsEnCesta["3236"]=$ref3236;
if ($ref3228)$itemsEnCesta["3228"]=$ref3228;
if ($ref3229)$itemsEnCesta["3229"]=$ref3229;
if ($ref3230)$itemsEnCesta["3230"]=$ref3230;
if ($ref3231)$itemsEnCesta["3231"]=$ref3231;
if ($ref3224)$itemsEnCesta["3224"]=$ref3224;
if ($ref3301)$itemsEnCesta["3301"]=$ref3301;
if ($ref3303)$itemsEnCesta["3303"]=$ref3303;
if ($ref3307)$itemsEnCesta["3307"]=$ref3307;
if ($ref3308)$itemsEnCesta["3308"]=$ref3308;
if ($ref3420)$itemsEnCesta["3420"]=$ref3420;
if ($ref3417)$itemsEnCesta["3417"]=$ref3417;
if ($ref3409)$itemsEnCesta["3409"]=$ref3409;
if ($ref3410)$itemsEnCesta["3410"]=$ref3410;
if ($ref3411)$itemsEnCesta["3411"]=$ref3411;
if ($ref3412)$itemsEnCesta["3412"]=$ref3412;
if ($ref3405)$itemsEnCesta["3405"]=$ref3405;
if ($ref3406)$itemsEnCesta["3406"]=$ref3406;
if ($ref3407)$itemsEnCesta["3407"]=$ref3407;
if ($ref3408)$itemsEnCesta["3408"]=$ref3408;

if ($item){ 
	  // Comprobamos cantidad
	  if ( $cantidad > 0 && $cantidad < 50 )	  	  {	  		  }
	  else 	  	  {	  	$cantidad = 0 ;	  }
	  
   if (!isset($itemsEnCesta)){ 	  $itemsEnCesta[$item]=$cantidad;	}
   else{       
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
} // if ($item)
   if (!isset($itemsEnCesta))
   { 
      
   }
   else
   {
		foreach($itemsEnCesta as $k => $v)
		  { 
			$result=mysql_query("select Des, Ref, precio_eshop from prods Where Ref ='" . $k . "'",$link); 
			$row = mysql_fetch_array($result);
			$TmpDes=(string)$row["Des"];
			$TmpRef=(string)$row["Ref"];
	    	$FPreu=(string)$row["precio_eshop"];
		 	$Fprice=(float)$row["precio_eshop"];
			$FPrecio=$v*$Fprice;
			$tot_price+=$FPrecio;
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

// Por cada elemento de la cesta de la compra, si es una oferta , y es diferente de cero
if (isset($itemsEnCesta))
{
	foreach($itemsEnCesta as $k => $v)
	{
		if ( ( $k == "9901" ) || (  $k == "9902" ) ) 
		{
			if ( ( $v != "0" ) || (  $v != "0" ) ) $gEnvio=0;
		}
	}
}
//total pedido menos dto
$totPed = $tot_price - $dety ;
//A�ado IVA
$totPed = $totPed + ( $totPed * 16 / 100 ) ;
$totPed = round ($totPed,+2);
//A�ado gastos envio
$totPed = $gEnvio + $totPed ;

?>
<html>
<head>

<title>Indice productos</title>

<?php 
include ("../eMiKi/Headers/Styles/Style_link_03.htm") ; 
include ("../eMiKi/Headers/Styles/Style_01.htm") ; 
//include ("../eMiKi/Headers/Styles/Style_001.htm") ; 
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>

<body bgcolor="#CCCCCC" text="#0000FF">
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
</table>
<table width="770" border="0" align="center">
  <tr>
    <td bgcolor="#FFFFFF"><div align="right"><a href="vercompra.php"><img src="../images/_VerCompra.jpg" width="124" height="36" border="0"></a></div></td>
  </tr>
</table>
<table align="center" width="770" cellspacing="0" cellpadding="0" border="0" height="55">
  <tr> 
    <td bgcolor="blue" height="13"> <div align="center"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="5">Indice 
        productos</font></b></div></td>
  </tr>
  <tr> 
    <td bgcolor="yellow" width="774" height="8"> </td>
  </tr>
  <tr> 
    <td width="774" height="17" bgcolor="#FFFFFF" wdith="517"> <div align="right"></div></td>
  </tr>
  <tr>
    <td wdith="517" height="17"><table cellspacing=1 border=0 align=center width=100% >
      <tr>
        <td height="3" colspan="2" valign=top bordercolor="#FFFFCC" bgcolor="#FFFF00">
          <div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#0000FF">Usuario :
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
        </font></div></td>
        <td width=603 height="289" rowspan="7" valign=top bgcolor="#FFFFFF">
          <p align="center" class="EstiloR18b">Productos</p>
          <p align="center" class="EstiloA16b"><a href="prods/ink.php">Kits universales recarga cartuchos Ink-Jet</a></p>
          <p align="center" class="EstiloA16b"><a href="prods/laser.bk.php">Kits universales recarga cartuchos Laser NEGRO</a></p>
          <p align="center" class="EstiloA16b"><a href="prods/laser.color.php">Kits universales recarga cartuchos Laser COLOR</a></p>
          <p align="center" class="EstiloA16b"><a href="prods/acces.refill.php">Accesorios recarga y Reseteadores chips cartuchos Epson</a></p>
          <p align="center" class="EstiloA16b"><a href="prods/chips.php">Chips Impresoras Laser </a></p>
          <p align="center" class="EstiloA16b"><a href="prods/etq.cd.php">Etiquetas y Dorsos para CD&acute;s</a></p>
          <p align="center" class="EstiloA16b"><a href="prods/deluxe.php">Deluxe Cards y Soportes impresion</a></p>
          <p align="center" class="EstiloA16b"><a href="prods/cd.dvd.audio.video.php">Accesorios Audio / Video / CD - DVD - CD ROM</a></p>
          <p align="right"><b><font face="Arial, Helvetica, sans-serif"><img src="../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()"></font></b></p></td>
      </tr>
      <tr>
        <td height="17" colspan="2" valign=top bordercolor="#FFFFCC" bgcolor="#FFFF00">
          <div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#0000FF"><b>Cesta de la compra</b></font></div></td>
      </tr>
      <tr>
        <td width="86" height="10" valign=top bordercolor="#FFFFCC" bgcolor="#FFFFCC"><div align="center"><b><font size="2" face="Arial, Helvetica, sans-serif">Ref</font></b></div></td>
        <td width="85" height="10" valign=top bordercolor="#FFFFCC" bgcolor="#FFFFCC"><div align="center"><b><font size="2" face="Arial, Helvetica, sans-serif">Cantidad</font></b></div></td>
      </tr>
      <tr>
        <td width="86" height="14" valign=top bordercolor="#FFFFCC" bgcolor="#FFFFCC"> <font size="2">
          <?php 
if ($itemsEnCesta){ 
	$chivi_1=0;
	foreach($itemsEnCesta as $k => $v){ 
       if ($itemsEnCesta[$k]!="0")
	   {  
		 if ($chivi_1>=1)echo "<br>";
		 $strTmp=(string)$k;
		 echo $strTmp;
		 $chivi_1=1;
		}
      }
} 
 ?>
        </font></td>
        <td width="85" height="14" valign=top bordercolor="#FFFFCC" bgcolor="#FFFFCC">
          <div align="left"> <font size="2">
            <?php 
if ($itemsEnCesta){ 
	foreach($itemsEnCesta as $k => $v){ 
	  if ($itemsEnCesta[$k]!="0")
	   {  
	   $strTmp=(string)$itemsEnCesta[$k];
		if (isset($chivi_2)) echo "<br>";
		echo $strTmp;
		$chivi_2=1;
	   }		
	}
} 
 ?>
        </font></div></td>
      </tr>
      <tr>
        <td height="8" valign=top bordercolor="#FFFFCC" bgcolor="#FFFF00"><div align="center"><font face="Arial, Helvetica, sans-serif" size="1">Gastos:
              <?php 
					if ($totPed!=0)
					 {	
						if (isset($itemsEnCesta))
						{
							$chivato_envio=0 ;
							foreach($itemsEnCesta as $k => $v)
							{
								if ( ( $k == "9901" ) || (  $k == "9902" ) ) 
								{
									if ( $v != "0" ) $chivato_envio=1;
								}
							}
						}
						
						if ( ( $totPed < 50 ) && ( $chivato_envio==0 ) )echo "3" ;
						elseif ($chivato_envio=0) echo "0" ;
						else {echo "0";}
				  	 }
					else {	echo " -- ";	}
				 ?>
&euro; </font></div></td>
        <td height="8" valign=top bordercolor="#FFFFCC" bgcolor="#FFFF00"><div align="center"><font face="Arial, Helvetica, sans-serif" size="1"><b>Total:</b></font><font size="1"><font face="Arial, Helvetica, sans-serif">
        <?php 
				if ($totPed!=0)
				 {	
					if (isset($totPed)) {	echo $totPed; 		}
					else {	echo "0";	}
				 }
				else {	echo " -- ";	}
			 ?>
&euro;</font></font><font face="Arial, Helvetica, sans-serif" size="1"> </font></div></td>
      </tr>
      <tr>
        <td height="8" colspan="2" valign=top bordercolor="#FFFFCC" bgcolor="#FFFF00">
          <div align="center"></div>
          <div align="center"></div></td>
        </tr>
      <tr>
        <td valign=top height="268" colspan="2" bgcolor="#FFFFFF">
          <div align="center">
            <p class="EstiloA12b">Compras 
    superiores a 50&euro; <br>
    0&euro; gastos envio <br>
    entre 70&euro; y 100 &euro; - 5% dto.<br>
            superiores a 100&euro; -10% dto.</p>
            <form action="
					<?php 
					if ($chivi_1>=1){echo "../buy-process/inicio-compra.php";}else {echo "error_01.php";}?>
					" name='Formulario' id='Formulario'>
                <div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif">
				  <input name="h_marca" type="hidden" id="h_marca" value="<?php echo $marca ?>">                      
                  <input type="submit" name="iniciar2" value="Iniciar proceso compra">
                </font> </div>
              </form>
              <p>
                <?php 

			if ($usr == "")
			{
				echo ('<form action="ValidationPages/viewUser.php?lastpage=in" name="Formulario_3" class="EstiloA10b" id="Formulario_3"  onSubmit="return validarDatos_3()" >');
				echo ('<div align="center">');
				echo ('<p>Validese con su usuario <br> email ');
				echo ('<input name="user" type="text" class="EstiloA10b" size="20"><br> Clave ');
				echo ('<input name="pwd" type="password" class="EstiloA10b" size="20"><br>');
				echo ('<input name="Login" type="submit" class="EstiloA10b" value="Login" size="20"><br>');
				echo ('<a href="forget-pwd.php?lastpage=in">Olvido su clave ? ! ? </a><BR>');
				echo ('<a href="ValidationPages/registrarCart.php?lastpage=in">Nuevo Usuario </a></font></p></div></form>');
			}
			else
			{
				$result=mysql_query("select * from Clientes where email = '". $usr ."'" ,$link); 
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
				
				echo ('<p align="center" class="EstiloA12b">Hola <b>' . $t1 . '</b><BR><BR>Usuario registrado:<BR>' . $usr . '<BR><BR></p>');
				echo ('<p align="center" class="EstiloA12b"><a href="ValidationPages/modifUser.php?lastpage=in">Modificar usuario</a>');
				//echo ('<span class="EstiloA12b"><a href="ValidationPages/log.out.php?lastpage=../index-prods.php"><BR>Cerrar sesion</a></span></p>');
				
				$result=mysql_query("select * from Datas where mail = '". $usr ."'" ,$link); 
				$row = mysql_fetch_array($result);
		
				$miki=(string)$row["otro"];

			}
			?>
              </p>
            </div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table align=center width="770" cellspacing="0" cellpadding="0" border="0" height="8">
  <tr> 
    <td></td>
  </tr>
</table>
<p align="center">
  <?php include ( "../eMiKi/page.parts/down.php" ) ; ?>
<p align="center" class="Estilo1">&nbsp;</p>
</body>

