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
                      <TD height=175 align='left' width='55%'><p><font size="2" face="Arial, Helvetica, sans-serif"><b>
                          <?php $bar = '3301'?>
                          <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                          </b><br>
        Contenido 2 Bolsas de 125 gramos CD instrucciones paso a paso + Varias herramientas para facilitar la recarga</font> </p>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3301.jpg' width="200" height="244" > </font>
                      <TD align='center' width='20%'>
                        <form action='../index-prods.php' align='center'>
                          <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio -
                                <?php 
echo $precio_eshop ;
?>
&euro;</font></p>
                          <p align='center'> <font size="2" face="Arial, Helvetica, sans-serif">
                            <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
          Und.</font></p>
                          <p align='center'> <font size="2" face="Arial, Helvetica, sans-serif">
                            <input type='submit' value='Comprar' align='center' name='submit2' size='3'>
                            <input name='item' type=hidden id="item" value='3301' align='center'>
                          </font></p>
                      </form></td>
                    </tr>
                  </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><p><font size="2" face="Arial, Helvetica, sans-serif"><b>
                            <?php $bar = '3304'?>
                            <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
</b><br>
        Contenido 2 Bolsas de 125 gramos CD instrucciones paso a paso + Varias herramientas para facilitar la recarga</font> </p>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3303.jpg' width="200" height="257" > </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio 
                              - 
                              <?php 
echo $precio_eshop ;
?>
                              &euro;</font></p>
                            <p align='center'> <font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad22" size='3' align='center'>
          Und.</font></p>
                            <p align='center'> <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit22' size='3'>
                              <input name='item' type=hidden id="item22" value='3304' align='center'>
                            </font></p>
                        </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><p><font size="2" face="Arial, Helvetica, sans-serif"><b>
                            <?php $bar = '3305'?>
                            <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                            </b><br>
        Contiene 
        1 bolsas de 250gramos, CD instrucciones + 
        varias herramientas para facilitar la recarga.</font></p>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3305.jpg' width="200" height="244" > </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio -
                                  <?php 
echo $precio_eshop ;
?>
&euro;</font></p>
                            <p align='center'> <font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad23" size='3' align='center'>
          Und.</font></p>
                            <p align='center'> <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit222' size='3'>
                              <input name='item' type=hidden id="item23" value='3305' align='center'>
                            </font></p>
                        </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><p><font size="2" face="Arial, Helvetica, sans-serif"><b>
                            <?php $bar = '3307'?>
                            <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                            </b><br>
        Contiene 
        2 bolsas de 125 gramos, CD instrucciones + 
        varias herramientas para facilitar la recarga. </font></p>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3307.jpg' width="200" height="244" > </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio -
                                  <?php 
echo $precio_eshop ;
?>
&euro;</font></p>
                            <p align='center'> <font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad" size='3' align='center'>
          Und.</font></p>
                            <p align='center'> <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit23' size='3'>
                              <input name='item' type=hidden id="item" value='3307' align='center'>
                            </font></p>
                        </form></td>
                      </tr>
                    </table>
                    <table width='95%' border=1 align='center'>
                      <tr>
                        <TD height=175 align='left' width='55%'><p><font size="2" face="Arial, Helvetica, sans-serif"><b>
                            <?php $bar = '3308'?>
                            <?php 
$result=mysql_query("select precio_eshop, Des from prods Where Ref ='" . $bar . "'",$link); 
$row = mysql_fetch_array($result);
$precio_eshop=(string)$row["precio_eshop"];
$desc=(string)$row["Des"];
echo $bar . " - " . $desc ?>
                            </b><br>
        Contiene 1 bolsa de 125 gramos, instrucciones de  
        recarga.</font></p>
                        <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../images/productos/3308.jpg' width="200" height="257" > </font>
                        <TD align='center' width='20%'>
                          <form action='../index-prods.php' align='center'>
                            <p align='center'><font size="2" face="Arial, Helvetica, sans-serif">Precio -
                                  <?php 
echo $precio_eshop ;
?>
&euro;</font></p>
                            <p align='center'> <font size="2" face="Arial, Helvetica, sans-serif">
                              <input name='cantidad' type='text' id="cantidad24" size='3' align='center'>
          Und.</font></p>
                            <p align='center'> <font size="2" face="Arial, Helvetica, sans-serif">
                              <input type='submit' value='Comprar' align='center' name='submit223' size='3'>
                              <input name='item' type=hidden id="item24" value='3308' align='center'>
                            </font></p>
                        </form></td>
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
</BODY></HTML>