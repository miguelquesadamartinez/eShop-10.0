<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");
session_register('itemsEnCesta');
session_register('tot_price');
session_register('totPed');
session_register('cnt');
session_register('userName');
session_register('tpais');
session_register('dety');
session_register('det_base');
session_register('tVale');
session_register('gEnvio');
$usr=""; $miki=""; $itemsEnCesta=""; $tot_price=""; $totPed=""; $cnt=""; $userName="";
$tpais=""; $dety=""; $det_base=""; $tVale=""; $gEnvio="";
$t0=""; $t1=""; $t2=""; $t3=""; $t=""; $t4=""; $t5=""; $t6=""; $t7=""; $t8=""; $t9=""; $t10=""; $t11="";


?><!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Log Out</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>

<meta http-equiv="refresh" content="1;url=../../index.php"/>

<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#00FF00";  text-decoration: none;}
A:visited {color: "#0000FF";  text-decoration: none;}
H1{font-family:Arial, Helvetica, sans-serif}
H2{font-family:Arial, Helvetica, sans-serif}
H3{font-family:Arial, Helvetica, sans-serif}
P{font-family:Arial, Helvetica, sans-serif}
BODY{color:"#0000FF"; font-family:Arial, Helvetica, sans-serif}
body,td,th {
	color: #0000FF;
	font-size: 16px;
}
.Estilo3 {font-weight: bold}
.Estilo5 {font-size: 12px}
.Estilo6 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo12 {
	font-size: 24px;
	color: #FF0000;
	font-weight: bold;
}
</style>
</HEAD>

<body bgcolor="#CCCCCC">
<div align="center">
  <div align="center">
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
          <div align="center"></div></td>
      </tr>
    </table>
    <table align="center" width="770" cellspacing="0" cellpadding="0" border="0" height="11">
      <tr>
        <td bgcolor="yellow" width="770" height="8"> </td>
      </tr>
      <tr>
        <td width="770" height="8" bgcolor="#FFFFFF" wdith="517"><img src="../../_Cart_Pages/ValidationPages/images/x.gif" width="1" height="1"></td>
      </tr>
    </table>
    <table align=center width="770" cellspacing="0" cellpadding="1" border="0">
      <tr>
        <td bgcolor="#9999cc">
          <table align=center width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
              <td bgcolor="white" valign="top">
                <table cellspacing=20 border=0 align=center width=100% height="77">
                  <tr>
                    <td width=68% valign=top height="37">                      <form action="modifUser.php" name="Formulario_3" id="Formulario_3" method="post" >
                        <div align="center">
                          <p>&nbsp;</p>
                          <p>Sesion cerrada </p>
                          <p align="right"><font face="Arial, Helvetica, sans-serif"><a href="../../main.php"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font></p>
                        </div>
                      </form>
                      </td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table>
    <p align="center">
      <?php include ( "../../eMiKi/page.parts/down.php" ) ; ?>
  </div>
</div>
</body>
</html>
