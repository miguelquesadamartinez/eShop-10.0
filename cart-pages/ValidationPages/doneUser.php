<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");
?>
<html><head><title>Validacion y creacion de usuarios</title>
<?php 
$link=mysql_connect("db","eshop_user","eshop_pass") ;
mysql_select_db("eshop_db",$link) ;

$result=mysql_query("select * from Clientes where email = '". $miki ."'" ,$link); 
		  
$row = mysql_fetch_array($result);
$numi=(string)$row["email"];
if ($numi=="") // Si no existe el usuario
	{
		$result=mysql_query("INSERT INTO Datas (mail,otro) VALUES('" . $hitext0 . "','" . $miki . "')",$link);
	
		if ($hidden1=="")		{
			$ch1="0";
		}else		{
			$ch1="1";		}
		
		if ($hidden2=="")		{
			$ch2="0";
		}else		{
			$ch2="1";		}
	
		$userName=$hitext0;
	
		$result=mysql_query("INSERT INTO Clientes (email,Nombre,Apellido1,Telefono,Apellido2,Doc,Empresa,Direccion,Poblacion,Provincia,Pais,Cp,L_Promos,L_Recarga) VALUES('" . $hitext0 . "','" . $hitext1 . "','" . $hitext2 . "','" . $hitext3 . "','" . $hitext4 . "','" . $hitext5 . "','" . $hitext6 . "','" . $hitext7 . "','" . $hitext9 . "','" . $histate . "','" . $hipais . "','" . $hitext8 . "','" . $ch1 . "','" . $ch2 . "')",$link);
		
		$result=mysql_query("select * from Clientes where email = '". $userName ."'" ,$link); 
		$row = mysql_fetch_array($result);

		$usr=(string)$row["email"];
		$t1=(string)$row["Nombre"];

		$t2=(string)$row["Apellido1"];
		$t3=(string)$row["Telefono"];
		$t4=(string)$row["Apellido2"];
		$t5=(string)$row["Doc"];
		$t6=(string)$row["Empresa"];
		$t7=(string)$row["Direccion"];
		$t8=(string)$row["Cp"];
		$t9=(string)$row["Poblacion"];
		$t10=(string)$row["Provincia"];
		$tpais=(string)$row["Pais"];
		
		setcookie("recargas", $usr, time() + 31536000 , "/", "www.recargas-y-consumibles.net");


		$jandler="0";	
}
else // Si existe el usuario
{
	$jandler="1";
}
?>
<?php include ("../../eMiKi/Headers/Styles/Style_001.htm") ; ?>
</head>

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
<div align="center"><img src="../../images/index/abajo.jpg" width="770" height="71"></div>
<table align=center width="770" cellspacing="0" cellpadding="0" border="0" height="19">
  <tr> 
    <td height="24" bgcolor="#FFFFFF"> 
      <div align="center"></div>    </td>
  </tr>
</table>

<table align="center" width="770" cellspacing="0" cellpadding="0" border="0" height="11">
  <tr> 
    <td bgcolor="blue" height="13"> 
      <div align="center"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="5">
	  <?PHP
	  if ($algo=="0"){
	  	echo "Usuario validado";
	  }
	  if ($algo=="1"){
			echo "Ya existe el usuario";  
	  }
	  ?>
	  </font></b></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="yellow" width="770" height="8"> 
      
    </td>
  </tr>
  <tr> 
    <td width="534" height="8" bgcolor="#FFFFFF" wdith="517"><img src="../../_Cart_Pages/ValidationPages/images/x.gif" width="1" height="1"></td>
  </tr>
</table>

<table align=center width="770" cellspacing="0" cellpadding="1" border="0" height="280">
  <tr>
    <td bgcolor="#9999cc" height="305"> 
      <table align=center width="100%" cellspacing="0" cellpadding="0" border="0" height="76%">
        <tr>
          <td bgcolor="white" valign="top" height="331"> 
            <table cellspacing=20 border=0 align=center width=100% height="285">
              <tr> 
                <td width=68% valign=top height="289"> 
                  <form action="modifUser.php" name="Formulario_3" id="Formulario_3" method="post" >
                    <div align="center">
                      <table width="100%" border="0">
                        <tr bgcolor="#FFFFCC"> 
                          <td width="15%"> 
                            <div align="right"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif">e-mail 
                              : </font></b></div>
                          </td>
                          <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo $usr ?>
                            <input type="hidden" name="hitext0" value="<?php echo $usr ?>">
                            </font></b></td>
                          <td bordercolor="#FFFFFF"> 
                            <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif">Password 
                              : </font></b></div>
                          </td>
                          <td bordercolor="#FFFFFF"> 
                            <div align="left"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> 
                              <?php echo "$miki" ?>
                              </font></b></font></div>
                          </td>
                        </tr>
                        <tr bgcolor="#FFFFCC"> 
                          <td width="15%"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Nombre 
                              : </font></b></font></div>
                          </td>
                          <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo $t1 ?>
                            <input type="hidden" name="hitext1" value="<?php echo $t1 ?>">
                            </font></b></td>
                          <td width="15%" bordercolor="#FFFFFF"> 
                            <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 
                              1 : </font></b></font></div>
                          </td>
                          <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo "$t2" ?>
                            <input type="hidden" name="hitext2" value="<?php echo $t2 ?>">
                            </font></b></td>
                        </tr>
                        <tr bgcolor="#FFFFCC"> 
                          <td width="115" height="29"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Telefono 
                              :</font></b></font></div>
                          </td>
                          <td width="221" height="29"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo $t3 ?>
                            <input type="hidden" name="hitext3" value="<?php echo $t3 ?>">
                            </font></b></td>
                          <td width="104" bordercolor="#FFFFFF" height="29"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Apellido 
                              2 : </font></b></font></div>
                          </td>
                          <td width="179" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo "$t4" ?>
                            <input type="hidden" name="hitext4" value="<?php echo $t4 ?>">
                            </font></b></font></td>
                        </tr>
                        <tr bgcolor="#FFFFCC"> 
                          <td width="115" height="29"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C.I.F. 
                              / N.I.F. : </font></b></font></div>
                          </td>
                          <td width="221" height="29"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo $t5 ?>
                            <input type="hidden" name="hitext5" value="<?php echo $t5?>">
                            </font></b></td>
                          <td width="104" bordercolor="#FFFFFF" height="29"> 
                            <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2"><b>Empresa 
                              : </b></font></div>
                          </td>
                          <td width="179" height="29"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo "$t6" ?>
                            <input type="hidden" name="hitext6" value="<?php echo $t6 ?>">
                            </font></b></td>
                        </tr>
                        <tr bgcolor="#FFFFCC"> 
                          <td rowspan="2" width="115"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Dirección 
                              :</font></b></font></div>
                          </td>
                          <td rowspan="2" width="221"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo $t7 ?>
                            <input type="hidden" name="hitext7" value="<?php echo $t7 ?>">
                            </font></b></td>
                          <td width="104"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Poblacion 
                              :</font></b></font><font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
                              </font></div>
                          </td>
                          <td width="179"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo "$t9" ?>
                            <input type="hidden" name="hitext9" value="<?php echo $t9 ?>">
                            </font></b></td>
                        </tr>
                        <tr> 
                          <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Provincia 
                              : </font></b></font></b></font></div>
                          </td>
                          <td width="179" height="32" bgcolor="#FFFFCC"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo $t10 ?>
                            <input type="hidden" name="histate" value="<?php echo $t10 ?>">
                            </font></b></td>
                        </tr>
                        <tr bgcolor="#FFFFCC"> 
                          <td width="115"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Pais 
                              : </b></font></div>
                          </td>
                          <td width="221"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo "$tpais" ?>
                            <input type="hidden" name="hipais" value="<?php echo $tpais ?>">
                            </font></b> 
                          <td width="104" bordercolor="#FFFFFF"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C. 
                              P. : </font></b></font></div>
                          <td width="179"><b><font face="Arial, Helvetica, sans-serif"> 
                            <?php echo "$t8" ?>
                            <input type="hidden" name="hitext8" value="<?php echo $t8 ?>">
                            </font></b> 
                        </tr>
                        <tr bgcolor="#FFFFCC"> 
                          <td colspan="4" height="24"> 
                            <div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif"> 
                              <input type="submit" name="iniciar2" value="Modificar usuario">
                              </font> </div>
                          </td>
                        </tr>
                      </table>
                      
                    </div>
                  </form> 
				  <p align="right"><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font></p>
                </td>
              </tr>
            </table>
          </td></tr>
	  </table>
	</td></tr>
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
