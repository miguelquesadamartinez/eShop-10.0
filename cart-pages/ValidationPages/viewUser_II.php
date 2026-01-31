<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");

?>
<html><head><title>Validacion y creacion de usuarios</title>
<?php include ("../../eMiKi/Headers/Styles/Style_001.htm") ; ?>
<?php 
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
 
$result=mysql_query("UPDATE Clientes SET Nombre='" . $text1 . "',Apellido1='" . $text2 . "',Telefono='" . $text3 . "',Apellido2='" . $text4 .
 "',Doc='" . $text5 . "',Empresa='" . $text6 . "',Direccion='" . $text7 . "',Provincia='" . $country . "',Poblacion='" . $text9 . "',Pais='" . $tpais .
  "',Cp='" . $text8 . "' Where email='" . $usr . "'" ,$link); 

		$result=mysql_query("select * from Clientes where email = '". $text0 ."'" ,$link); 
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
		$pais=(string)$row["Pais"];

		setcookie("recargas", $usr, time() + 31536000 , "/", "www.recargas-y-consumibles.net");	

if ( $lastpage='in' ){ 
	echo ('<meta http-equiv="refresh" content="2;url=../index-prods.php">'); 
}
elseif  ( $lastpage='ic' ){ 
	echo ('<meta http-equiv="refresh" content="2;url=../cart-pages/inicio-compra.php">'); 
}
else {
	echo ('<meta http-equiv="refresh" content="2;url=../index-prods.php">'); 
}

 ?>

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
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="71"><img src="../../images/index/abajo.jpg" width="770" height="71"></td>
  </tr>
  <tr>
    <td height="71"><table align="center" width="100%" cellspacing="0" cellpadding="0" border="0" height="65">
        <tr>
          <td bgcolor="#FFFFFF" height="13">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13"><table align="center" width="770" cellspacing="0" cellpadding="0" border="0" height="11">
            <tr>
              <td bgcolor="#FFFFFF" height="13">
                <div align="center"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="5">Usuario modificado</font></b></div></td>
            </tr>
            <tr>
              <td bgcolor="yellow" width="700" height="8"> </td>
            </tr>
            <tr>
              <td wdith="517" width="534" height="8"><img src="../../_Cart_Pages/ValidationPages/images/x.gif" width="1" height="1"></td>
            </tr>
          </table>          </td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13"><form action="modifUser.php" name="Formulario_2" id="Formulario_2" method="post">
            <div align="center">
              <table border="0">
                <tr bgcolor="#FFFFCC">
                  <td width="15%">
                    <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">e-mail : </font></b></font></b></div></td>
                  <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text0 ?> </font></b></td>
                  <td bordercolor="#FFFFFF">
                    <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif">Password : </font></b></div></td>
                  <td bordercolor="#FFFFFF">
                    <div align="left"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $miki ?> </font></b></font></div></td>
                </tr>
                <tr bgcolor="#FFFFCC">
                  <td width="15%">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Nombre : </font></b></font></div></td>
                  <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text1 ?> </font></b></td>
                  <td width="15%" bordercolor="#FFFFFF">
                    <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 1: </font></b></font></div></td>
                  <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text2 ?> </font></b></td>
                </tr>
                <tr bgcolor="#FFFFCC">
                  <td width="115" height="29">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Telefono :</font></b></font></div></td>
                  <td width="221" height="29"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text3 ?> </font></b></td>
                  <td width="104" bordercolor="#FFFFFF" height="29">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Apellido 2 :</b></font></div></td>
                  <td width="179" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text4 ?> </font></b></font></td>
                </tr>
                <tr bgcolor="#FFFFCC">
                  <td width="115" height="29">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C.I.F. / N.I.F. : </font></b></font></div></td>
                  <td width="221" height="29"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text5 ?> </font></b></td>
                  <td width="104" bordercolor="#FFFFFF" height="29">
                    <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2"><b>Empresa : </b></font></div></td>
                  <td width="179" height="29"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text6 ?> </font></b></td>
                </tr>
                <tr bgcolor="#FFFFCC">
                  <td rowspan="2" width="115">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Direcci&oacute;n :</font></b></font></div></td>
                  <td rowspan="2" width="221"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text7 ?> </font></b></td>
                  <td width="104">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C. P. : </font></b></font></b></font></b></font></div></td>
                  <td width="179"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text8 ?> </font></b></td>
                </tr>
                <tr>
                  <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Poblacion :</font></b></font><font face="Arial, Helvetica, sans-serif" color="#0000FF"></font> </b></font></div></td>
                  <td width="179" height="32" bgcolor="#FFFFCC"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $text9 ?> </font></b></td>
                </tr>
                <tr bgcolor="#FFFFCC">
                  <td width="115">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Pais : </b></font></div></td>
                  <td width="221"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $pais ?> </font></b>
                  <td width="104" bordercolor="#FFFFFF">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Provincia : </font></b></font></div>
                  <td width="179"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $country ; ?> </font></b>           
                </tr>
                <tr bgcolor="#FFFFCC">
                  <td colspan="4" height="24">
                    <div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif"> </font> </div></td>
                </tr>
              </table>
              </div>
          </form></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13"><div align="right"><font face="Arial, Helvetica, sans-serif"><a href="../index-prods.php"><img src="../../images/_Back.jpg" width="67" height="35" border="0"></a></font></div></td>
        </tr>
    </table></td>
  </tr>
</table>
<div align="center">
  <p align="center"> 
    <?php include ( "../../eMiKi/page.parts/down.php" ) ; ?>
  <p align="center"><span class="Estilo1"> 
    <?php 
echo ("usr: " . $lastpage . "<BR>" );?>
    </span> 
  <noscript>
    </noscript> 
</div>
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
