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
                        <?php $bar = '3220'?>                        
                        <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                      </b><br>
                        </font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3220.jpg' width="150" height="180" >
                      </font>
                      <TD align='center' width='20%'>
                        <form action='../index-prods.php' align='center'>
                          
                          <font size="2" face="Arial, Helvetica, sans-serif">                          </font>
                          <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                            <?php 
echo $precio_eshop ;
?>
                            &euro;
                            </font></p>
                          <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">
      <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
      Und.</font></p>
                          <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">                                <input type='submit' value='Comprar' align='center' name='submit22' size='3'>
                              <input name='item' type=hidden id="item" value='3220' align='center'>
                                                                              </font></p>
                        </form></td>
                    </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                        <?php $bar = '3224'?>
                        <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                      </b><br>
  - Identificaci&oacute;n autom&aacute;tica del modelo de cartucho.<br>
  - Duraci&oacute;n ilimitada, bater&iacute;as reemplazables.<br>
  - Activaci&oacute;n luz verde indicando cuando el chip est&aacute; reseteado.<br>
  - Duraci&oacute;n reseteado: 4 Segundos.<br>
      - Sin quitar el chip del cartucho. </font>
                          <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Compatible con todos los cartuchos Epson</strong></font></p>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3224.jpg' width="150" height="245" >
                      </font>
                      <TD align='center' width='20%'>
                        <form action='../index-prods.php' align='center'>
                          
                          <font size="2" face="Arial, Helvetica, sans-serif">                          </font>
                          <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                            <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                          <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">
      <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
      Und.
      </font></p>
                          <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit32' size='3'>
                              <input name='item' type=hidden id="item" value='3224' align='center'>
                                                                              </font></p>
                        </form></td>
                    </tr>
                  </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3240'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3240.jpg' width="150" height="181" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <font size="2" face="Arial, Helvetica, sans-serif">                            </font>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">
                                <input type='text' name='cantidad' align='center' size='3'>
                            Und.</font></p>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">                              <input type='submit' value='Comprar' align='center' name='submit7' size='3'>
                              <input type=hidden name='item' align='center' value='3240'>
                            </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                        <?php $bar = '3235'?>
                        <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                      </b><br>
  Soluci&oacute;n limpiadora para tinta reseca, envase de 50 ml.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3235.jpg' width="149" height="215" >
                      </font>
                      <TD align='center' width='20%'>
                        <form action='../index-prods.php' align='center'>
                          
                          <font size="2" face="Arial, Helvetica, sans-serif">                          </font>
                          <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                            <?php 
echo $precio_eshop ;
?>
                            &euro;
                            </font></p>
                          <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">
      <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
      Und.
      </font></p>
                          <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit2' size='3'>
                              <input name='item' type=hidden id="item" value='3235' align='center'>
                          </font></p>
                        </form></td>
                    </tr>
                  </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3215'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3235.jpg' width="150" height="216" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <font size="2" face="Arial, Helvetica, sans-serif">                            </font>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">
                                <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">                              <input type='submit' value='Comprar' align='center' name='submit4' size='3'>
                              <input name='item' type=hidden id="item" value='3215' align='center'>
                                                                                    </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3206'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
      Reducido kit para el mantenimiento y reparacion de cartuchos con cabezal incorporado (HP. Lexmark, ...) Contiene liquido limpiador y extractor de tinta universal.</font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3206.jpg' width="150" height="298" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <font size="2" face="Arial, Helvetica, sans-serif">                            </font>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">
                                <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">                              <input type='submit' value='Comprar' align='center' name='submit3' size='3'>
                              <input name='item' type=hidden id="item" value='3206' align='center'>
                                                                                    </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3216'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3216.jpg' width="102" height="148" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <font size="2" face="Arial, Helvetica, sans-serif">                            </font>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">
                                <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit5' size='3'>
                              <input name='item' type=hidden id="item" value='3216' align='center'>
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