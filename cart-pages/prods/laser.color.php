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
					  <?php $bar = '3420'?>
					  <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>						   
</b><br>
      </font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3420.jpg' width="200" height="242" >
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
                            <input type='text' name='cantidad' align='center' size='3'>
                            Und.</font></p>
                          <p>                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit' size='3'>
                              <input type=hidden name='item' align='center' value='3420'>
                            </font></p>
                        </form></td>
                    </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                      <tr> 
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3417'?>
                          </b><b>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                          </b><br>
                          </font> 
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3417.jpg' width="200" height="241" > 
                        </font>
                        <TD align='center' width='20%'> <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
$result=mysql_query("select precio_eshop from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                            <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p>                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit17' size='3'>
                              <input name='item' type=hidden id="item" value='3417' align='center'>
                            </font></p>
                        </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3409'?>
                          </b><b>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                          </b></font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3409.jpg' width="200" height="293" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
$result=mysql_query("select precio_eshop from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                            <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p>                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit10' size='3'>
                              <input name='item' type=hidden id="item" value='3409' align='center'>
                            </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3410'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3410.jpg' width="200" height="293" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
$result=mysql_query("select precio_eshop from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                            <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p>                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit11' size='3'>
                              <input name='item' type=hidden id="item" value='3410' align='center'>
                            </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3411'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3411.jpg' width="200" height="293" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
$result=mysql_query("select precio_eshop from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                            <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p>                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit112' size='3'>
                              <input name='item' type=hidden id="item" value='3411' align='center'>
                            </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3412'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3412.jpg' width="200" height="293" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
$result=mysql_query("select precio_eshop from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                            <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p>                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit12' size='3'>
                              <input name='item' type=hidden id="item" value='3412' align='center'>
                            </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3405'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3405.jpg' width="200" height="241" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
$result=mysql_query("select precio_eshop from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                              Und.                            </font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit6' size='3'>
                              <input name='item' type=hidden id="item" value='3405' align='center'>
                              </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3406'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3406.jpg' width="200" height="241" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
$result=mysql_query("select precio_eshop from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                            <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                            Und.</font></p>
                            <p>                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit7' size='3'>
                              <input name='item' type=hidden id="item" value='3406' align='center'>
                            </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3407'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3407.jpg' width="200" height="241" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
$result=mysql_query("select precio_eshop from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                              Und. </font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit8' size='3'>
                              <input name='item' type=hidden id="item" value='3407' align='center'>
                            </font></p>
                          </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3408'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                        </b></font>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3408.jpg' width="200" height="241" >
                        </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Precio - 
                              <?php 
$result=mysql_query("select precio_eshop from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
echo $precio_eshop ;
?>
                            &euro;</font></p>
                            <p>
                              <font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
                              Und.</font></p>
                            <p>            <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit9' size='3'>
                              <input name='item' type=hidden id="item" value='3408' align='center'>
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