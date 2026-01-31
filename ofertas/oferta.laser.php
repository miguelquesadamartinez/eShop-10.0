<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");
?>
<HTML><HEAD><TITLE>e M i K i</TITLE>
	<script language='JavaScript' type='text/javascript'>
		function validarDatos(){	
			if ( form.marca.value==""){
				alert ("Porfavor, indique la marca de su impresora");
				return (false);
			}
		}
	</script>
<style type="text/css">
<!--
.Estilo1 {font-size: 10px}
.Estilo2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo3 {font-family: Arial, Helvetica, sans-serif}
.Estilo5 {	font-family: Arial, Helvetica, sans-serif;
	color: #FF0000;
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</HEAD>
<BODY bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="55"><img src="../images/index/arriva.jpg" width="770" height="55"></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="../images/index/d1.001.jpg" width="155" height="20"></td>
    <td><a href="main.php"><img src="../images/index/d1.002.jpg" width="100" height="20" border="0"></a></td>
    <td><a href="cart-pages/index-prods.php"><img src="../images/index/d1.003.jpg" width="105" height="20" border="0"></a></td>
    <td><a href="cart-pages/paginas-varias/contactar.php"><img src="../images/index/d1.004.jpg" width="208" height="20" border="0"></a></td>
    <td><a href="http://www.nelosa.net/gueb/paginas/instrucciones/index.php" target="_blank"><img src="../images/index/d1.005.jpg" width="202" height="20" border="0"></a></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="71"><img src="../images/index/abajo.jpg" width="770" height="71"></td>
  </tr>
  <tr>
    <td height="71"><table align="center" width="100%" cellspacing="0" cellpadding="0" border="0" height="13">
        <tr>
          <td bgcolor="#FFFFFF" height="13"><table width='770' border=0 align='center'>
            <tr>
              <TD height=41 colspan="3" align='center' valign="middle"><span class="Estilo5">Oferta Laser </span>
            </tr>
            <tr>
              <TD width='29%' height=175 align='center' valign="middle"><p class="Estilo2"><img src="../images/productos/3301.jpg" width="122" height="149"> <br>
                +<br> 
                <img src="../images/productos/8023.jpg" width="118" height="176"> </p>
                <TD align='center' width='41%'><span class="Estilo3"> <strong>Contenido<br>
                  </strong><br>
                  2 Bolsas de 125 gramos<br>
                  +<br>
                  CD instrucciones paso a paso<br>
                  + <br>
                  Herramientas para facilitar la recarga</span> <br>
                  <span class="Estilo3">+ <br>
                  12 Etiquetas para CD </span> 
                <TD align='center' width='30%'>
                <form action='../cart-pages/index-prods.php' name="form" class="Estilo3" id="form" align='center' onSubmit="return validarDatos()">
                  <input type=hidden name='item' align='center' value='9902'>
                  <br>
                    <p align='center'>30 &euro; 
                      <input type='text' name='cantidad' align='center' size='3'>
          Und. <br>
          <span class="Estilo1">( IVA y Gastos Envio incluidos )</span></p>
                  <p align='center'>Indicar marca impresora<br> 
                    <input name="marca" type="text" id="marca">
</p>
                  <p align='center'>            
                    <input type='submit' value='Comprar' align='center' name='submit' size='3'>
                  </p>
                </form></td>
            </tr>
          </table></td>
        </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p align="center" class="Estilo1"><font color="#0000FF"><font face="Arial, Helvetica, sans-serif">Copyright &copy; 2004</font><font color="#0000FF" face="Arial, Helvetica, sans-serif"><b> Recargas y Consumibles.net</b></font></font></p>
<div align="center"></div>
</BODY></HTML>