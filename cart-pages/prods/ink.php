<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);
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
                        <?php $bar = '3197'?>
                        <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                      </b><br>
      Recarga Universal Ink-Jet Negro Contiene 2 botes de 20 ml de tinta negra y 1 bote de limpiador + Herramientas para recargar todo tipo de cartuchos</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3197.jpg' width="200" height="242" >
                      </font>
                      <TD align='center' width='20%'>
                        <form action='../index-prods.php' align='center'>
                          
                          <p><font size="2" face="Arial, Helvetica, sans-serif">                          Precio - </font><font size="2" face="Arial, Helvetica, sans-serif">
                            <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                          <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                          <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit2' size='3'>
                              <input name='item' type=hidden id="item" value='3197' align='center'>
                              </font>                            </p>
                        </form></td>
                    </tr>
                  </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3198'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
      Recarga Universal Ink-Jet Color Contiene 1 bote de 20 ml por cada color (Cyan - Magenta - Yellow ) + Herramientas para recargar todo tipo de cartuchos</font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3198.jpg' width="200" height="237" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                            <?php 
echo $precio_eshop ;
?>
                            &euro;</font>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
        Und.</font></p>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">                  <input type='submit' value='Comprar' align='center' name='submit2' size='3'>
                  <input name='item' type=hidden id="item" value='3198' align='center'>
                            </font></p>
                        </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3199'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
      Kit Recarga Universal Ink-Jet Negro / Color Contiene 2 botes de 20 ml de tinta negra, 1 Cyan 1 magenta, 1 yellow, 1 de liquido limpiador + Herramientas para recargar todo tipo de cartuchos</font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3199.jpg' width="200" height="237" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                                <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                              
                              <input type='submit' value='Comprar' align='center' name='submit3' size='3'>
                              <input name='item' type=hidden id="item" value='3199' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3200'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
      Recarga Ink-Jet Photo Contiene 1 bote de 20 ml por cada color (Cyan - Light Cyan Magenta - Light Magenta - Yellow ) + Herramientas para recargar todo tipo de cartuchos</font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3200.jpg' width="200" height="237" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                                <input type='text' name='cantidad' align='center' size='3'>
                            Und.</font></p>
                            <p>
                                <font size="2" face="Arial, Helvetica, sans-serif">
                    <input type='submit' value='Comprar' align='center' name='submit4' size='3'>
                    <input name='item' type=hidden id="item" value='3200' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3228'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3228.jpg' width="150" height="218" > </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit42' size='3'>
                            </font>
                                <font size="2" face="Arial, Helvetica, sans-serif">
                                <input name='item' type=hidden id="item" value='3228' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3229'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3229.jpg' width="150" height="213" > </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                              &euro;
                        </font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">      
      <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
      Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                                <input type='submit' value='Comprar' align='center' name='submit13' size='3'>
                              <input name='item' type=hidden id="item" value='3229' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3230'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3230.jpg' width="150" height="214" > </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit43' size='3'>
                            </font><font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='item' type=hidden id="item" value='3230' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3231'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3231.jpg' width="150" height="217" > </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p>
                                <font size="2" face="Arial, Helvetica, sans-serif">
                  <input type='submit' value='Comprar' align='center' name='submit15' size='3'>
                  <input name='item' type=hidden id="item" value='3231' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3232'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3232.jpg' width="150" height="215" > </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                              <input type='submit' value='Comprar' align='center' name='submit16' size='3'>
                              <input name='item' type=hidden id="item" value='3232' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3233'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3233.jpg' width="150" height="216" > </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                              <input type='submit' value='Comprar' align='center' name='submit17' size='3'>
                              <input name='item' type=hidden id="item" value='3233' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3211'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
      Recarga Ink-Jet Black 100 ml Recambio de tinta para impresoras Ink-Jet</font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3211.jpg' width="150" height="218" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                                <input type='text' name='cantidad' align='center' size='3'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                              <input type='submit' value='Comprar' align='center' name='submit5' size='3'>
                              <input name='item' type=hidden id="item" value='3211' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3212'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
      Recarga Ink-Jet Yellow 100 ml Recambio de tinta para impresoras Ink-Jet</font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3212.jpg' width="150" height="213" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                                <input type='text' name='cantidad' align='center' size='3'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                              <input type='submit' value='Comprar' align='center' name='submit6' size='3'>
                              <input name='item' type=hidden id="item" value='3212' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3213'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
      Recarga Ink-Jet Magenta 100 ml Recambio de tinta para impresoras Ink-Jet</font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3213.jpg' width="150" height="214" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                                <input type='text' name='cantidad' align='center' size='3'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                              <input type='submit' value='Comprar' align='center' name='submit7' size='3'>
                              <input name='item' type=hidden id="item" value='3213' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3214'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
      Recarga Ink-Jet Cyan 100 ml Recambio de tinta para impresoras Ink-Jet</font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3214.jpg' width="150" height="217" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                                <input type='text' name='cantidad' align='center' size='3'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                              <input type='submit' value='Comprar' align='center' name='submit8' size='3'>
                              <input name='item' type=hidden id="item" value='3214' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3217'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3217.jpg' width="150" height="215" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                                <input type='text' name='cantidad' align='center' size='3'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                              <input type='submit' value='Comprar' align='center' name='submit9' size='3'>
                              <input name='item' type=hidden id="item" value='3217' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3218'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3218.jpg' width="150" height="216" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif"></font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                                <input type='text' name='cantidad' align='center' size='3'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                              <input type='submit' value='Comprar' align='center' name='submit10' size='3'>
                              <input name='item' type=hidden id="item" value='3218' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3234'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3234.jpg' width="150" height="210" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                              
                              <input type='submit' value='Comprar' align='center' name='submit11' size='3'>
                              <input name='item' type=hidden id="item" value='3234' align='center'>
                              </font>
                            </p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3236'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b><br>
                          </font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3236.jpg' width="150" height="215" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                            Precio - </font><font size="2" face="Arial, Helvetica, sans-serif">
                              <?php 
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">                              
                              <input type='submit' value='Comprar' align='center' name='submit18' size='3'>
                              <input name='item' type=hidden id="item" value='3236' align='center'>
                              </font>
                            </p>
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