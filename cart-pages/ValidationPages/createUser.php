<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");
?>
<html><head><title>Validacion y creacion de usuarios</title>
<?php include ("../../eMiKi/Headers/Styles/Style_001.htm") ; ?>
</HEAD>

<body bgcolor="#CCCCCC" text="#0000FF">
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
	<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="71"><img src="../../images/index/abajo.jpg" width="770" height="71"></td>
      </tr>
      <tr>
        <td height="71"><table align="center" width="100%" cellspacing="0" cellpadding="0" border="0" height="26">
            <tr>
              <td bgcolor="#FFFFFF" height="13">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" height="13"><table align="center" width="770" cellspacing="0" cellpadding="0" border="0" height="53">
                <tr>
                  <td bgcolor="#FFFFFF" height="13">
                    <div align="center"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="5">Son correctos estos datos</font></b></div></td>
                </tr>
                <tr>
                  <td bgcolor="yellow" width="700" height="8"> </td>
                </tr>
                <tr>
                  <td wdith="517" width="534" height="8"><img src="../../_Cart_Pages/ValidationPages/images/x.gif" width="1" height="1"></td>
                </tr>
                <tr>
                  <td wdith="517" height="8">&nbsp;</td>
                </tr>
                <tr>
                  <td wdith="517" height="8"><form action="doneUser.php" name="Formulario_3" id="Formulario_3" method="post" >
                    <div align="center">
                      <table border="0">
                        <tr bgcolor="#FFFFCC">
                          <td width="15%">
                            <div align="right"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif">e-mail : </font></b></div></td>
                          <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text0 ?>
                                  <input type="hidden" name="hitext0" value="<?php echo $text0;?>">
                          </font></b></td>
                          <td bordercolor="#FFFFFF">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Password : </b></font></div></td>
                          <td bordercolor="#FFFFFF">
                            <div align="left"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$textp"; $miki=$textp ?> </font></b></font></div></td>
                        </tr>
                        <tr bgcolor="#FFFFCC">
                          <td width="15%">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Nombre : </font></b></font></div></td>
                          <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text1 ?>
                                  <input type="hidden" name="hitext1" value="<?php echo $text1;?>">
                          </font></b></td>
                          <td width="15%" bordercolor="#FFFFFF">
                            <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 1 : </font></b></font></div></td>
                          <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$text2" ?>
                                  <input type="hidden" name="hitext2" value="<?php echo $text2;?>">
                          </font></b></td>
                        </tr>
                        <tr bgcolor="#FFFFCC">
                          <td width="115" height="29">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Telefono :</font></b></font></div></td>
                          <td width="221" height="29"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text3 ?>
                                  <input type="hidden" name="hitext3" value="<?php echo $text3;?>">
                          </font></b></td>
                          <td width="104" bordercolor="#FFFFFF" height="29">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Apellido 2 : </font></b></font></div></td>
                          <td width="179" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$text4" ?>
                                    <input type="hidden" name="hitext4" value="<?php echo $text4;?>">
                          </font></b></font></td>
                        </tr>
                        <tr bgcolor="#FFFFCC">
                          <td width="115" height="29">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C.I.F. / N.I.F. : </font></b></font></div></td>
                          <td width="221" height="29"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text5 ?>
                                  <input type="hidden" name="hitext5" value="<?php echo $text5;?>">
                          </font></b></td>
                          <td width="104" bordercolor="#FFFFFF" height="29">
                            <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2"><b>Empresa : </b></font></div></td>
                          <td width="179" height="29"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$text6" ?>
                                  <input type="hidden" name="hitext6" value="<?php echo $text6;?>">
                          </font></b></td>
                        </tr>
                        <tr bgcolor="#FFFFCC">
                          <td rowspan="2" width="115">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Direcci&oacute;n :</font></b></font></div></td>
                          <td rowspan="2" width="221"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text7 ?>
                                  <input type="hidden" name="hitext7" value="<?php echo $text7;?>">
                          </font></b></td>
                          <td width="104">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Poblacion :</font> </b></font></div></td>
                          <td width="179"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text9 ?>
                                  <input type="hidden" name="hitext9" value="<?php echo $text9;?>">
                          </font></b></td>
                        </tr>
                        <tr>
                          <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Provincia :</font></b></font> </b></font><font face="Arial, Helvetica, sans-serif" color="#0000FF"></font></div></td>
                          <td width="179" height="32" bgcolor="#FFFFCC"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $state ?>
                                  <input type="hidden" name="histate" value="<?php echo $state;?>">
                          </font></b></td>
                        </tr>
                        <tr bgcolor="#FFFFCC">
                          <td width="115">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Pais : </b></font></div></td>
                          <td width="221"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$country" ?>
                                  <input type="hidden" name="hipais" value="<?php echo $country;?>">
                            </font></b>
                          <td width="104" bordercolor="#FFFFFF">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C. P. : </font></b></font></div>
                          <td width="179"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$text8" ?>
                                  <input type="hidden" name="hitext8" value="<?php echo $text8;?>">
                          </font></b>                   
                        </tr>
                        <tr bgcolor="#FFFFCC">
                          <td colspan="4" height="24">
                            <div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif">
                              <input type="submit" name="iniciar2" value="Crear usuario">
                              <input type="hidden" name="hidden1" value="<?php echo "$ch_1" ?>">
                              <input type="hidden" name="hidden2" value="<?php echo "$ch_2" ?>">
                          </font> </div></td>
                        </tr>
                      </table>
                      
                    </div>
                  </form></td>
                </tr>
                <tr>
                  <td wdith="517" height="8"><div align="right"><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font></div></td>
                </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table>
	
<noscript>
<p align="center">
  <?php include ( "../../eMiKi/page.parts/down.php" ) ; ?>
</noscript>
</body>
<script language="JavaScript">
function backyF ()
{
	history.back(1);
}
function AbrirVentana(url) {
	var hWnd = window.open(url,"ayuda","width=350,height=400,resizable=no,scrollbars=yes");
}
</script>
