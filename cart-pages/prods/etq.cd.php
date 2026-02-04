<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");

$link=mysql_connect("db","eshop_user","eshop_pass");
mysql_select_db("eshop_db",$link);
?>
<HTML><HEAD><TITLE>e M i K i</TITLE></HEAD>
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
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                        <?php $bar = '3121'?>
                        <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                      </b><br>
  Personal Print 60 Etiquetas para C.D + Software. Podra dar aspecto profesional a los CD-R y CD-RW - 60 hojas adhesivas de gran calidad de impresi&oacute;n en impresoras Ink-Jet y L&aacute;ser</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3121.jpg' width="180" height="254" >
                      </font>
                      <TD align='center' width='20%'>
                        <form action='../index-prods.php' align='center'>
                          <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                            <?php 
echo $precio_eshop ;
?>
                            &euro;                            </font></p>
                          <p>
                            <font size="2" face="Arial, Helvetica, sans-serif">
    <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
    Und.</font></p>
                          <p>                <font size="2" face="Arial, Helvetica, sans-serif">
                            <input type='submit' value='Comprar' align='center' name='submit2' size='3'>
                            <input name='item' type=hidden id="item" value='3121' align='center'>
                          </font></p>
                        </form></td>
                    </tr>
                  </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3122'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
  Personal Print 60 Etiquetas para C.D Recambio. Podra dar aspecto profesional a los CD-R y CD-RW - 60 hojas adhesivas de gran calidad de impresi&oacute;n en impresoras Ink-Jet y L&aacute;ser</font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3122.jpg' width="180" height="255" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                            <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p>                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit3' size='3'>
                              <input name='item' type=hidden id="item" value='3122' align='center'>
                            </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3180'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3180.jpg' width="180" height="255" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
echo $precio_eshop ;
?>
                            &euro;                            </font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
    <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
    Und.</font></p>
                            <p>              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit4' size='3'>
                              <input name='item' type=hidden id="item" value='3180' align='center'>
                            </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3181'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3181.jpg' width="180" height="255" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
echo $precio_eshop ;
?>
                            &euro;                            </font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
    <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
    Und.    </font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit5' size='3'>
                              <input type=hidden name='item' align='center' value='3181'>
                              </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3190'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
  24 C.D. Inlays: Hojas micro perforadas con la forma de la caja del CD en hendido Dise&ntilde;a, personaliza e imprime tus propias portadas para estuches de C.D.&acute;s + Software</font>
                        <TD align='center' width='25%'><font size="2" face="Arial, Helvetica, sans-serif"><img src='../../images/productos/3190.jpg' width="180" height="259" >                          
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                            <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit7' size='3'>
                              <input type=hidden name='item' align='center' value='3190'>
                              </font></p>
                          </form></td>
                      </tr>
                    </table>
                  </td>
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
</BODY></HTML>