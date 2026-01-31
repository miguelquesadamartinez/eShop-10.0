<?php 
include("../eMiKi/Codes/vblesession.php");
include("../eMiKi/Funciones_PHP.php");
?>
<html><head><title>Validacion y creacion de usuarios</title>

<?php 
include("../../../_Cart_Pages/images/productos/Funciones_PHP.miki");
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;


	$result=mysql_query("select * from Clientes where email = '". $user ."'" ,$link); 
	$row = mysql_fetch_array($result);
	
	$numi=(string)$row["email"];
	if ($numi=="")
	{
		echo "No existe el usuario";
	}
	else
	{
		$text0=(string)$row["email"];
		$text1=(string)$row["Nombre"];

		$text2=(string)$row["Apellido1"];
		$text3=(string)$row["Telefono"];
		$text4=(string)$row["Apellido2"];
		$text5=(string)$row["Doc"];
		$text6=(string)$row["Empresa"];
		$text7=(string)$row["Direccion"];
		$text8=(string)$row["Cp"];
		$text9=(string)$row["Poblacion"];
		$text8=(string)$row["Provincia"];
		$pais=(string)$row["Pais"];

		$userName=$text0;
$t1=$text1;$t2=$text2;$t3=$text3;$t4=$text4;$t5=$text5;$t6=$text6;$t7=$text7;$t8=$text8;$t9=$text9;$tpais=$pais;$usr=$text0;$t11=$textarea;
		}
	mysql_free_result($result); 
	mysql_close($link);

?>
</head>

<body bgcolor="White" link="#0000FF" vlink="#0000FF" text="#0000FF" alink="#0000FF">
	<table width="700" border="0" align="center">
  <tr> 
    <td><img src="../../../_Cart_Pages/images/TitleP.jpg" width="354" height="26"></td>
    <td> 
      <div align="center"><b><a href="../../../_Cart_Pages/ValidationPages/indexCart.php"><img src="../../../_Cart_Pages/images/_inicio.gif" width="32" height="34" align="baseline" border="0"></a></b></div>
    </td>
  </tr>
</table>
<table align=center width="700" cellspacing="0" cellpadding="0" border="0" height="19">
  <tr> 
    <td height="24"> 
      <div align="center"></div>
    </td>
  </tr>
</table>

<table align="center" width="700" cellspacing="0" cellpadding="0" border="0" height="11">
  <tr> 
    <td bgcolor="blue" height="13"> 
      <div align="center"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="5">Usuario 
        validado </font></b></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="yellow" width="700" height="8"> 
      
    </td>
  </tr>
  <tr> 
    <td wdith="517" width="534" height="8"><img src="../../../_Cart_Pages/ValidationPages/zz/images/x.gif" width="1" height="1"></td>
  </tr>
</table>

<table align=center width="700" cellspacing="0" cellpadding="1" border="0" height="280">
  <tr>
    <td bgcolor="#9999cc" height="305"> 
      <table align=center width="100%" cellspacing="0" cellpadding="0" border="0" height="76%">
        <tr>
          <td bgcolor="white" valign="top" height="331"> 
            <table cellspacing=20 border=0 align=center width=100% height="285">
              <tr> 
                <td width=68% valign=top height="289"> 
                  <table border="0">
                    <tr bgcolor="#FFFFCC"> 
                      <td width="15%"> 
                        <div align="right"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif">e-mail 
                          : </font></b></div>
                      </td>
                      <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo $text0 ?>
                        <input type="hidden" name="hitext0" value="<?php echo $text0;?>">
                        </font></b></td>
                      <td bordercolor="#FFFFFF"> 
                        <div align="center"> </div>
                      </td>
                      <td bordercolor="#FFFFFF"> 
                        <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../../../_Cart_Pages/images/Ayudas/qelogoSmall.GIF" width="30" height="28" border="0" onClick="AbrirVentana('Ayuditas/AyudaLogin.php')"></a></font></div>
                      </td>
                    </tr>
                    <tr bgcolor="#FFFFCC"> 
                      <td width="15%"> 
                        <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Nombre 
                          : </font></b></font></div>
                      </td>
                      <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo $text1 ?>
                        <input type="hidden" name="hitext1" value="<?php echo $text1;?>">
                        </font></b></td>
                      <td width="15%" bordercolor="#FFFFFF"> 
                        <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 
                          1 : </font></b></font></div>
                      </td>
                      <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo "$text2" ?>
                        <input type="hidden" name="hitext2" value="<?php echo $text2;?>">
                        </font></b></td>
                    </tr>
                    <tr bgcolor="#FFFFCC"> 
                      <td width="115" height="29"> 
                        <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Telefono 
                          :</font></b></font></div>
                      </td>
                      <td width="221" height="29"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo $text3 ?>
                        <input type="hidden" name="hitext3" value="<?php echo $text3;?>">
                        </font></b></td>
                      <td width="104" bordercolor="#FFFFFF" height="29"> 
                        <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Apellido 
                          2 : </font></b></font></div>
                      </td>
                      <td width="179" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo "$text4" ?>
                        <input type="hidden" name="hitext4" value="<?php echo $text4;?>">
                        </font></b></font></td>
                    </tr>
                    <tr bgcolor="#FFFFCC"> 
                      <td width="115" height="29"> 
                        <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C.I.F. 
                          / N.I.F. : </font></b></font></div>
                      </td>
                      <td width="221" height="29"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo $text5 ?>
                        <input type="hidden" name="hitext5" value="<?php echo $text5;?>">
                        </font></b></td>
                      <td width="104" bordercolor="#FFFFFF" height="29"> 
                        <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2"><b>Empresa 
                          : </b></font></div>
                      </td>
                      <td width="179" height="29"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo "$text6" ?>
                        <input type="hidden" name="hitext6" value="<?php echo $text6;?>">
                        </font></b></td>
                    </tr>
                    <tr bgcolor="#FFFFCC"> 
                      <td rowspan="2" width="115"> 
                        <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Dirección 
                          :</font></b></font></div>
                      </td>
                      <td rowspan="2" width="221"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo $text7 ?>
                        <input type="hidden" name="hitext7" value="<?php echo $text7;?>">
                        </font></b></td>
                      <td width="104"> 
                        <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Poblacion 
                          :</font> </b></font></div>
                      </td>
                      <td width="179"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo $text9 ?>
                        <input type="hidden" name="hitext9" value="<?php echo $text9;?>">
                        </font></b></td>
                    </tr>
                    <tr> 
                      <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32"> 
                        <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Provincia 
                          :</font></b></font> </b></font><font face="Arial, Helvetica, sans-serif" color="#0000FF"></font></div>
                      </td>
                      <td width="179" height="32" bgcolor="#FFFFCC"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo $state ?>
                        <input type="hidden" name="histate" value="<?php echo $state;?>">
                        </font></b></td>
                    </tr>
                    <tr bgcolor="#FFFFCC"> 
                      <td width="115"> 
                        <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Pais 
                          : </b></font></div>
                      </td>
                      <td width="221"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo "$country" ?>
                        <input type="hidden" name="hipais" value="<?php echo $country;?>">
                        </font></b> 
                      <td width="104" bordercolor="#FFFFFF"> 
                        <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C. 
                          P. : </font></b></font></div>
                      <td width="179"><b><font face="Arial, Helvetica, sans-serif"> 
                        <?php echo "$text8" ?>
                        <input type="hidden" name="hitext8" value="<?php echo $text8;?>">
                        </font></b> 
                    </tr>
                    <tr bgcolor="#FFFFCC"> 
                      <td colspan="4" height="24"> 
                        <div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif"> 
                          </font> </div>
                      </td>
                    </tr>
                  </table>
                  <p align="right"><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../../../_Cart_Pages/images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()"></a></font></p>
                  </td>
              </tr>
            </table>
          </td></tr>
		</table>
	</td></tr>
</table>
<noscript></noscript> 
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
