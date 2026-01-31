<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");

include("../images/productos/Funciones_PHP.miki");
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;

$result=mysql_query("Select otro From Datas Where mail = '". $emilio ."'" ,$link); 
		  
$row = mysql_fetch_array($result);
$numi=(string)$row["otro"];

	$text = "Su password es: " . $numi;

	mail($emilio,"Password recargas-y-consumibles.net",$text,"From: <password@recargas-y-consumibles.net>");


?>

<html><head>

<title>Soporte productos</title>
<meta http-equiv="refresh" content="1;url=index-prods.php">
</head>

<body bgcolor="White" link="#0000FF" vlink="#0000FF" text="#0000FF" alink="#0000FF">
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="55"><img src="../images/index/arriva.jpg" width="770" height="55"></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="../images/index/d1.001.jpg" width="155" height="20"></td>
    <td><a href="../main.php"><img src="../images/index/d1.002.jpg" width="100" height="20" border="0"></a></td>
    <td><a href="index-prods.php"><img src="../images/index/d1.003.jpg" width="105" height="20" border="0"></a></td>
    <td><a href="paginas-varias/contactar.php"><img src="../images/index/d1.004.jpg" width="208" height="20" border="0"></a></td>
    <td><a href="http://www.nelosa.net/gueb/paginas/instrucciones/index.php" target="_blank"><img src="../images/index/d1.005.jpg" width="202" height="20" border="0"></a></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="71"><img src="../images/index/abajo.jpg" width="770" height="71"></td>
  </tr>
  <tr>
    <td height="71"><table align="center" width="100%" cellspacing="0" cellpadding="0" border="0" height="26">
        <tr>
          <td bgcolor="#FFFFFF" height="13">
            <div align="center">
              <table align=center width="700" cellspacing="0" cellpadding="0" border="0" height="19">
                <tr>
                  <td height="24">
                    <div align="center"></div></td>
                </tr>
              </table>
              <table align="center" width="770" cellspacing="0" cellpadding="0" border="0" height="45">
                <tr>
                  <td bgcolor="#FFFFFF" height="13">
                    <div align="center"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="5">Password enviado a <?php echo $emilio;?> </font></b></div></td>
                </tr>
                <tr>
                  <td bgcolor="yellow" height="8">
                    <div align="center"><font color="#000000"><b></b></font></div></td>
                </tr>
                <tr>
                  <td wdith="517" width="534" height="8"></td>
                </tr>
                <tr>
                  <td wdith="517" height="8"><div align="center"><font face="Arial, Helvetica, sans-serif" size="4">En breves minutos recibira su password a la direccion de correo indicada.</font></div></td>
                </tr>
                <tr>
                  <td wdith="517" height="8">&nbsp;</td>
                </tr>
              </table>
              <p align="right"><b><font face="Arial, Helvetica, sans-serif"><a href="index-prods.php"><img src="../images/_Back.jpg" width="67" height="35" name="backy" border="0"></a></font></b></p>
            </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
<noscript></noscript> 
</body>