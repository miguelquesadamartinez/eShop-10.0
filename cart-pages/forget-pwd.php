<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");
?>

<html><head><title>Soporte productos</title></head>
<script language="JavaScript">
function backyF ()
{
	history.back(1);
}
function AbrirVentana(url) {
	var hWnd = window.open(url,"ayuda","width=350,height=400,resizable=no,scrollbars=yes");
}

	function validarDatos(){	
			if ( form.emilio.value==""){
				alert ("Falta email (Usuario) !!");
				return (false);
			}
		}
</script>
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
    <td height="71"><table align="center" width="100%" cellspacing="0" cellpadding="0" border="0" height="13">
        <tr>
          <td bgcolor="#FFFFFF" height="13">
            <div align="center">
              <table align=center width="700" cellspacing="0" cellpadding="0" border="0" height="19">
                <tr>
                  <td height="24">
                    <div align="center"></div></td>
                </tr>
              </table>
              <table align="center" width="699" cellspacing="0" cellpadding="0" border="0" height="11">
                <tr>
                  <td bgcolor="#FFFFFF" height="13">
                    <div align="center"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="5">Olvido su password</font></b></div></td>
                </tr>
                <tr>
                  <td bgcolor="yellow" height="8"><div align="center"></div></td>
                </tr>
                <tr>
                  <td wdith="517" width="534" height="8"></td>
                </tr>
              </table>
              <form name="form" id="form" method="post" action="send-pwd.php" onSubmit="return validarDatos()">
                <div align="center">
                  <p><font face="Arial, Helvetica, sans-serif" size="4">Introduzca su email (Usuario) y se le enviara el password en breves minutos</font></p>
                  <p>
                    <input type="text" name="emilio" size="50">
                    <input type="submit" name="Submit" value="Enviar">
                  </p>
                </div>
              </form>
              <p align="right"><b><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font></b></p>
          </div></td>
        </tr>
    </table></td>
  </tr>
</table>
<noscript></noscript> 
</body>
