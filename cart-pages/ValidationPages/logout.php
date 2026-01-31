<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");

?>
<html><head><title>Validacion y creacion de usuarios</title>
<meta http-equiv="refresh" content="1;url=../../main.php">
<?php include ("../../eMiKi/Headers/Styles/Style_001.htm") ;>
			
			$result=mysql_query("select * from Clientes where email = '". $user ."'" ,$link); 
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
	  <?php
	  if ($algo=="0"){
	  	echo "Usuario validado";
	  }
	  if ($algo=="1"){
		echo "No existe el usuario";	  
	  }
	  if ($algo=="2"){
	 		echo "No coincide el password";
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

	  
<table align=center width="770" cellspacing="0" cellpadding="1" border="0" height="155">
  <tr> 
    <td height="155" bgcolor="#9999cc"> <table align=center width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr> 
          <td bgcolor="white" valign="top"> <table cellspacing=20 border=0 align=center width=100% height="153">
              <tr> 
                <td width=68% valign=top height="113"> 
                  <p align="center">&nbsp;</p>
                  <p align="center">Sesion cerrada</p>
                  <p align="right"><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font></p></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<p align="center">
  <?php include ( "../../eMiKi/page.parts/down.php" ) ; ?>
<div align="center">
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
