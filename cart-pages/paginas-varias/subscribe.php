<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");
?>
<html><head><title>Mailer</title></head>
<?php
if (isset($to))
{
	mail($to,$subject,$text,"From: <". $from .">");	
}
$to=null;  $subject=null;  $text=null;  $from=null;
?>
<body bgcolor="#FFFFFF" text="#000000">
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
          <td bgcolor="#FFFFFF" height="13">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
<table width="300" border="1" height="222">
  <tr>
    <td width="300"> 
      <form name="mailer.php" method="post" >
        <p align="right"> To 
          <input type="text" name="to" value="majordomo@nelosa.net" >
        </p>
        <p align="right"> Subject 
          <input type="text" name="subject">
        </p>
        <p align="right">Text 
          <input type="text" name="text" value='subscribe mailing'>
        </p>
        <p align="right"> From 
          <input type="text" name="from" value='admin@lamoncloa.es'>
        </p>
        <p align="center"> 
          <input type="submit" name="Submit" value="Send mail">
        </p>
      </form>
    </td>
  </tr>
</table>
</body>
</html>
