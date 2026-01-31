<?php 
session_start(); 
include ( "eMiKi/Codes/vblesession.php" );
if ($usr == "")
{
	$var = $_COOKIE["recargas"];
	if ($var <> "") { $usr = $var; }
}
?>
<HTML>
<HEAD>
<TITLE>Recargas y Consumibles</TITLE>
<meta name="title" content="Recargas y consumibles"/>
<meta http-equiv="title" content="Recargas y consumibles"/>
<meta name="DC.Title" content="Recargas y consumibles"/>

<meta name="description" content="Kits para recargar TODOS los cartuchos de impresora Ink-jet Ahorre hasta un 80% con el procedimientomas mas ecologico  - Accesorios limpieza, mantenimiento y archivo para Sonido, Imagen, Informatica, Multimedia y Printables ( Personalize con su ordenador: etiquetas C.D.´s, invitaciones, participaciones, tarjetas de visita, etc...) Software gratuito para centrar sus diseños - Reseteadores para los chips Epson. Instrucciones completas en Español."/>
<meta http-equiv="description" content="Kits para recargar TODOS los cartuchos de impresora Ink-jet Ahorre hasta un 80% con el procedimientomas mas ecologico  - Accesorios limpieza, mantenimiento y archivo para Sonido, Imagen, Informatica, Multimedia y Printables ( Personalize con su ordenador: etiquetas C.D.´s, invitaciones, participaciones, tarjetas de visita, etc...) Software gratuito para centrar sus diseños - Reseteadores para los chips Epson. Instrucciones completas en Español.v"/>
<meta http-equiv="DC.Description" content="Kits para recargar TODOS los cartuchos de impresora Ink-jet Ahorre hasta un 80% con el procedimientomas mas ecologico  - Accesorios limpieza, mantenimiento y archivo para Sonido, Imagen, Informatica, Multimedia y Printables ( Personalize con su ordenador: etiquetas C.D.´s, invitaciones, participaciones, tarjetas de visita, etc...) Software gratuito para centrar sus diseños - Reseteadores para los chips Epson. Instrucciones completas en Español."/>

<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta name="keywords" content=" 
reset; chip; compatible; ecologica; universal: consumible; cartucho; tinta;
imprimir; recarga; rechargue; racarrega; refill; instrucciones; Printables; accesorios; sonido; imagen; informatica; cartridge; cartuchos de tinta;
accesorios; limpieza; mantenimiento; archivo; Sonido; Imagen; Informatica; Multimedia; Printables; Diseñe; personalize; imprimir; etiquetas C.D.´s; 
invitaciones; participaciones; tarjetas visita; Software gratuito; compra; barato; oferta; comprar; 
epson; canon; hp; lexmark; olivetti; ibm; xerox; hewlett; packard; brother; philips; fax; multifuncion;
"/>
<meta http-equiv="keywords" content="
reset; chip; compatible; ecologica; universal: consumible; cartucho; tinta;
imprimir; recarga; rechargue; racarrega; refill; instrucciones; Printables; accesorios; sonido; imagen; informatica; cartridge; cartuchos de tinta;
accesorios; limpieza; mantenimiento; archivo; Sonido; Imagen; Informatica; Multimedia; Printables; Diseñe; personalize; imprimir; etiquetas C.D.´s; 
invitaciones; participaciones; tarjetas visita; Software gratuito; compra; barato; oferta; comprar; 
epson; canon; hp; lexmark; olivetti; ibm; xerox; hewlett; packard; brother; philips; fax; multifuncion;
"/>

<meta name="Revisit" content="20 days"/>

<meta name="distribution" content="global"/>
<meta name="resource-type" content="document"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>

<?php include ("eMiKi/Headers/Styles/Style_001.htm") ; ?>

</HEAD>

<body bgcolor="#CCCCCC">
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="55"><img src="images/index/arriva.jpg" width="770" height="55"></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/index/d1.001.jpg" width="155" height="20"></td>
    <td><a href="main.php"><img src="images/index/d1.002.jpg" width="100" height="20" border="0"></a></td>
    <td><a href="cart-pages/index-prods.php"><img src="images/index/d1.003.jpg" width="105" height="20" border="0"></a></td>
    <td><a href="cart-pages/paginas-varias/contactar.php"><img src="images/index/d1.004.jpg" width="208" height="20" border="0"></a></td>
    <td><a href="http://www.nelosa.net/gueb/paginas/instrucciones/index.php" target="_blank"><img src="images/index/d1.005.jpg" width="202" height="20" border="0"></a></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#000000">
    <td width="196"><img src="images/index/d2.left.jpg" width="196" height="20"></td>
    <td width="143"><a href="cart-pages/paginas-varias/garantia.php"><img src="images/index/d2.garantia.jpg" width="143" height="20" border="0"></a></td>
    <td width="192"><a href="cart-pages/paginas-varias/condiciones.php"><img src="images/index/d2.condiciones.jpg" width="192" height="20" border="0"></a></td>
    <td width="91"><a href="cart-pages/paginas-varias/ayuda-cart.php"><img src="images/index/d2.ayuda.jpg" width="91" height="20" border="0"></a></td>
    <td width="148">&nbsp;</td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="71"><img src="images/index/abajo.jpg" width="770" height="71"></td>
  </tr>
</table>
<table width="770" height="909" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="188" colspan="2" bgcolor="#FFFFFF"><table width="95%" border="0" align="center">
        <tr>
          <td><p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000"><a href="cart-pages/prods/ink.php"><br>
              Recargas universales<img src="images/comunes/logo-ink-jet-p.jpg" width="59" height="75" border="0" align="absbottom"></a></font></b></font></p>
            <p align="left"><font face="Arial, Helvetica, sans-serif" size="2" color="#0000FF">En 
              la comodidad de su hogar u oficina, podr&aacute; recargar <b>TODOS</b> 
              los cartuchos de tinta Ink-Jet o Fax, <strong>entre 3 &oacute; 5 
              veces por 12 &euro;</strong>.<br>
              <b>Bajar&aacute; los costes</b> de impresi&oacute;n hasta <b>un 
              80 %</b>, conservando la calidad de impresi&oacute;n.<br>
              !! El procedimiento mas<b> RESPETUOSO CON EL MEDIO AMBIENTE ! !</b></font></p>
          </td>
        </tr>
      </table>     
    </td>
    <td bgcolor="#FFFFFF"><p align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="2"><a href="cart-pages/prods/ink.php"><br>
        <img src="images/productos/3199.jpg" width="121" height="143" border="0"></a><br>
    </font></p>
    </td>
  </tr>
  <tr>
    <td height="142" bgcolor="#FFFFFF"><div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="2"><a href="cart-pages/prods/laser.bk.php"><br>
        <img src="images/productos/3301.jpg" width="122" height="149" border="0"><br>
    </a></font></div></td>
    <td colspan="2" bgcolor="#FFFFFF"><p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000"><a href="cart-pages/prods/laser.bk.php">Recargas universales <img src="images/comunes/logo-laser-p.jpg" width="59" height="74" border="0" align="absbottom"></a></font></b></font></p>
      <p align="left"><font face="Arial, Helvetica, sans-serif" size="2" color="#0000FF">En la comodidad de su hogar u oficina, podr&aacute; recargar <b>TODOS</b> los cartuchos de impresoras laser <strong>2 veces por 29,90 &euro;</strong>. con un <strong>ahorro del 90 %</strong> </font></p>    </td>
  </tr>
  <tr>
    <td height="148" colspan="2" bgcolor="#FFFFFF"><p align="center"><font size="2"><strong><a href="cart-pages/prods/acces.refill.php">
	Reseteadores de chips para cartuchos Epson</a></strong></font></p>
      <p align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#0000FF">Facil sistema para reprogramar el chip de los cartuchos Epson.</font></p></td>
    <td bgcolor="#FFFFFF"><div align="center">
        <p><font size="2"><br>
            <a href="cart-pages/prods/acces.refill.php"><img src="images/productos/3224.jpg" width="87" height="143" border="0"></a><br>
        </font></p>
        </div></td>
  </tr>
  <tr>
    <td width="166" height="431" bgcolor="#FFFFFF"><p align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#FF0000"><a href="cart-pages/prods/etq.cd.php?numParam=1&grupo=10">Etiquetas C.D. </a></font></p>
    <p align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000" size="2"><b><b><b><b><a href="cart-pages/prods/etq.cd.php" target="_top"><img src="images/productos/3121.jpg" width="135" height="190" border="0"></a></b></b></b></b></font></p>      
    <font size="2"><br>    
    </font></td>
    <td width="447" bgcolor="#FFFFFF"><div align="center">
      <p align="center"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2"><b><font color="#FF0000"><a href="cart-pages/more-info/printables.php">Papeles especiales para Ink-Jet y Fax</a></font></b></font></p>
      <p align="left"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2">Etiquetas para C.D., DVD , CD-ROM, Tarjetas de visita, Felicitaciones toda ocasi&oacute;n ( Fiestas, Bodas, Bautizos, etc...), personalizalas con tu ordenador e impresora.</font></p>
      <p align="left"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2">Soportes de impresi&oacute;n UNIVERSALES de excelente calidad compatibles con TODOS los modelos de impresoras.</font></p>
      <p align="center"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2"><b><font color="#FF0000"><a href="cart-pages/more-info/accesorios.php">Accesorios Imagen - Sonido - Informatica</a></font></b></font></p>
      <p align="left"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2">Surtida gama de productos relacionados con la limpieza, mantenimiento y almacenado de los soportes audio/visuales e informaticos.</font></p>
      <p align="center"><font size="2"><a href="cart-pages/index-prods.php"><img src="images/entrar.jpg" width="93" height="83" border="0"></a></font></p>
    </div></td>
    <td width="157" bgcolor="#FFFFFF"><div align="center">
      <p align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#FF0000"><a href="cart-pages/prods/deluxe.php?numParam=1&grupo=11">Tarjetas Visita </a></font></p>
      <p align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="2"><a href="cart-pages/prods/deluxe.php"><img src="images/productos/3178.jpg" width="135" height="189" border="0"></a></font></p>
      <p align="center">&nbsp;</p>
    </div></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="88"><img src="images/index/abajo.jpg" width="770" height="71"></td>
  </tr>
</table>
<p align="center" class="Estilo1"><font color="#0000FF"><font face="Arial, Helvetica, sans-serif">Copyright &copy; 2004</font><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b> Recargas y Consumibles.net</b></font></font></p>
<div align="center"></div>
<p align="center">
  <!-- Start Bravenet.com Service Code -->
  <script language="JavaScript" type="text/javascript" src="http://pub40.bravenet.com/counter/code.php?id=374700&usernum=3355635626&cpv=2"></script>
  <!-- END DO NOT MODIFY -->
</p>
<p align="center">
  <script language="JavaScript" src="http://m1.nedstatbasic.net/basic.js">
    </script>
  <script language="JavaScript">
<!--
  nedstatbasic("AByGjAlV7Uhu69UdSbiI2X4tFKTw", 0);
// -->
  </script>
</p>
<noscript>
<p align="center"><a target="_blank" href="http://v1.nedstatbasic.net/stats?AByGjAlV7Uhu69UdSbiI2X4tFKTw"><img
src="http://m1.nedstatbasic.net/n?id=AByGjAlV7Uhu69UdSbiI2X4tFKTw"
border="0" nosave width="18" height="18"></a> </p>
<p align="center">&nbsp;</p>
</noscript>
</body>
</html>
