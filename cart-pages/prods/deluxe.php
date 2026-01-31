<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);
?>
<HTML><HEAD><TITLE>e M i K i</TITLE>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
</HEAD>
<BODY bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="55"><img src="../../images/index/arriva.jpg" width="770" height="55"></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="../../images/index/d1.001.jpg" width="155" height="20"></td>
    <td><a href="../../main.php"><img src="../../images/index/d1.002.jpg" width="100" height="20" border="0"></a></td>
    <td><a href="../index-prods.php"><img src="../../images/index/d1.003.jpg" width="105" height="20" border="0"></a></td>
    <td><a href="../paginas-varias/contactar.php"><img src="../../images/index/d1.004.jpg" width="208" height="20" border="0"></a></td>
    <td><a href="http://www.nelosa.net/gueb/paginas/instrucciones/index.php" target="_blank"><img src="../../images/index/d1.005.jpg" width="202" height="20" border="0"></a></td>
  </tr>
</table>
<div align="center"><img src="../../images/index/abajo.jpg" width="770" height="71"> </div>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="71"><table align="center" width="100%" cellspacing="0" cellpadding="0" border="0" height="26">
        <tr>
          <td bgcolor="#FFFFFF" height="13">
            <div align="center">
              <table width="97%"  border="0">
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=23 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                        <?php $bar = '3178'?>
                        <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                      </b></font>
                      <TD align='center' width='25%'><img src="../../images/productos/3178.jpg" width="180" height="252">
                      <TD align='center' width='20%'><form action='../index-prods.php' align='center'>
                        <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                          <?php 
echo $precio_eshop ;
?>
                        </font>&euro;</p>
                        <p>
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</p>
                        <p>                              <input type='submit' value='Comprar' align='center' name='submit2' size='3'>
                              <input name='item' type=hidden id="item" value='3178' align='center'>
                            </p>
                      </form></td>
                    </tr>
                  </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=23 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3179'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font>
                        <TD align='center' width='25%'><img src="../../images/productos/3178.jpg" width="180" height="252">
                        <TD align='center' width='20%'><form action='../index-prods.php' align='center'>
                          <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                            <?php 
echo $precio_eshop ;
?>
                          </font>&euro;</p>
                          <p>
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und</p>
                          <p>
                            <input type='submit' value='Comprar' align='center' name='submit3' size='3'>
                              <input name='item' type=hidden id="item" value='3179' align='center'>
                            </p>
                        </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '8015'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font><font face='Arial, Helvetica, sans-serif'><br>
      Universal Photo Paper 10 Hojas A4, 170 gramos 1440 dpi</font>
                        <TD align='center' width='25%'> <IMG SRC='../../images/productos/8015.jpg' width="180" height="253" >
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            </font>&euro;</p>
                            <p align='center'>
                                <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</p>
                            <p align='center'>                              <input type='submit' value='Comprar' align='center' name='submit10' size='3'>
                              <input name='item' type=hidden id="item" value='8015' align='center'>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '8016'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font><font face='Arial, Helvetica, sans-serif'><br>
      Universal Photo Paper 20 Hojas A4, 130 gramos 720 dpi</font>
                        <TD align='center' width='25%'> <IMG SRC='../../images/productos/8016.jpg' width="180" height="253" >
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            </font>&euro;</p>
                            <p>
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</p>
                            <p>                              
                              <input type='submit' value='Comprar' align='center' name='submit11' size='3'>
                              <input name='item' type=hidden id="item" value='8016' align='center'>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '8017'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font><font face='Arial, Helvetica, sans-serif'><br>
      Universal Photo Paper 10 Hojas A4, 140 gramos doble cara 1440 dpi</font>
                        <TD align='center' width='25%'> <IMG SRC='../../images/productos/8017.jpg' width="180" height="253" >
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            </font>&euro;</p>
                            <p align='center'>
                                <input type='text' name='cantidad' align='center' size='3'>
                            Und.</p>
                            <p align='center'>
                              <input type='submit' value='Comprar' align='center' name='submit7' size='3'>
                              <input type=hidden name='item' align='center' value='8017'>
                            </p>
                          </form>                        </td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '8012'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font><font face='Arial, Helvetica, sans-serif'><br>
      Kit Puzzle 12 Puzzles en blanco para decorar + 12 soportes de adhesivo removible</font>
                        <TD align='center' width='25%'> <IMG SRC='../../images/productos/8012.jpg' width="180" height="230" >
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            </font>&euro;</p>
                            <p>
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</p>
                            <p>                              <input type='submit' value='Comprar' align='center' name='submit8' size='3'>
                              <input name='item' type=hidden id="item" value='8012' align='center'>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '8014'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font><font face='Arial, Helvetica, sans-serif'><br>
      100 hojas decoradas para imprimir por impresora, fotocopiadora o escribir a mano</font>
                        <TD align='center' width='25%'> <IMG SRC='../../images/productos/8014.jpg' width="180" height="238" >
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            </font>&euro;</p>
                            <p>
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</p>
                            <p>                              <input type='submit' value='Comprar' align='center' name='submit9' size='3'>
                              <input name='item' type=hidden id="item" value='8014' align='center'>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3195'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font><font face='Arial, Helvetica, sans-serif'><br>
      Contenido - 60 etiquetas imprimibles para C.D.- 24 Inlay confort, portadas y dorsos para C.D. - 120 tarjetas de visita en blanco y decoradas - 12 hojas A-4 adhesivas y 12 A-4 transparente para crear posters y pegatinas. + C.D.-ROM da ayuda para centrar los dise&ntilde;os valido para toda la gama NELOSA.</font>
                        <TD align='center' width='25%'> <IMG SRC='../../images/productos/3195.jpg' width="180" height="253" >
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            </font>&euro;</p>
                            <p>
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</p>
                            <p>                              <input type='submit' value='Comprar' align='center' name='submit22' size='3'>
                              <input name='item' type=hidden id="item" value='3195' align='center'>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><p><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '8005'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font><font face='Arial, Helvetica, sans-serif'><br>
        Papel continuo para letreros<br>
                          </font><font face='Arial, Helvetica, sans-serif'>Suficiente para crear 15 pancartas de 1,5 m o 5 pancartas de 6 m., para decoraci&oacute;n de fiestas,...</font> </p>
                        <TD align='center' width='25%'> <IMG SRC='../../images/productos/8005.jpg' width="135" height="186" >
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            </font>&euro;</p>
                            <p>
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</p>
                            <p>
                              <input type='submit' value='Comprar' align='center' name='submit32' size='3'>
                              <input name='item' type=hidden id="item" value='8005' align='center'>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=23 align='left' width='55%'>
                        <TD align='center' width='25%'>
                        <TD align='center' width='20%'>&nbsp;</td>
                      </tr>
                    </table></td>
                </tr>
              </table>
              <p><a href="../index-prods.php"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" border="0"></a></p>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
<p align="center">
  <?php include ( "../../eMiKi/page.parts/down.php" ) ; ?>
