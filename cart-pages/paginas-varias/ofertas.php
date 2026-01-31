<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");
?>
<html><head>

<title>Ofertas ! !</title>

</head>

<body bgcolor="White" link="#0000FF" vlink="#0000FF" text="#0000FF" alink="#0000FF">
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
<table width="700" border="0" align="center">
  <tr> 
    <td><img src="../../images/TitleP.jpg" width="354" height="26"></td>
    <td> 
      <div align="center"><b><a href="../../main.php"><img src="../../images/_inicio.gif" width="32" height="34" align="baseline" border="0"></a></b></div>
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
    <td bgcolor="blue" height="13" colspan="2"> 
      <div align="center"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="5">Ofertas 
        ! !</font></b></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="yellow" colspan="2" height="8"> </td>
  </tr>
  <tr> 
    <td wdith="517" width="148" height="8">&nbsp;</td>
    <td wdith="517" width="552" height="8"> 
      <div align="right"><img src="../../_Cart_Pages/paginasVarias/images/x.gif" width="1" height="1"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></div>
    </td>
  </tr>
</table>

<table align=center width="700" cellspacing="0" cellpadding="1" border="0" height="280">
  <tr> 
    <td bgcolor="#9999cc" height="305"> 
      <table align=center width="100%" cellspacing="0" cellpadding="0" border="0" height="76%">
        <tr> 
          <td bgcolor="white" valign="top" height="331"> 
            <table cellspacing=1 border=0 align=center width=100% height="285">
              <tr> 
                <td bgcolor="#FFFF00" valign=top height="7" colspan="2"></td>
                <td width=481 valign=middle height="289" rowspan="5" align="center"> 
                  <form name="form1" method="post" action="../index-prods.php">
                    <div align="center"><img src="../../images/Ofertas/Oferta_A.jpg" width="382" height="141"> 
                      <input type="hidden" name="item" value="0001">
                      <input type="hidden" name="cantidad" value="1">
                      <br>
                      <input type="submit" name="Submit" value="Comprar">
                      <hr>
                    </div>
                  </form>
                  <form name="form1" method="post" action="../index-prods.php">
                    <div align="center"><img src="../../images/Ofertas/Oferta_B.jpg" width="382" height="141"> 
                      <input type="hidden" name="item" value="0002">
                      <input type="hidden" name="cantidad" value="1">
                      <br>
                      <input type="submit" name="Submit2" value="Comprar">
                      <hr>
                    </div>
                  </form>
                  <p align="center"></p>
                  <p align="right"><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a> </font></p>
                </td>
              </tr>
              <tr> 
                <td valign=top height="8" colspan="2" bgcolor="#FFFFCC"> 
                  <div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#0000FF"><b>Cesta 
                    de la compra</b></font></div>
                </td>
              </tr>
              <tr> 
                <td width=62 valign=top  bgcolor="#FFFFCC"> 
                  <p align="right"><font face="Arial, Helvetica, sans-serif" size="2">Articulos:<br>
                    Importe:<br>
                    Gastos:<br>
                    Total:</font></p>
                </td>
                <td width=60 valign=top  bgcolor="#FFFFCC"> 
                  <font face="Arial, Helvetica, sans-serif" size="2"> 
                    <?php 
					if (isset($cnt)) {	echo $cnt; 		}
					else {	echo "0";	}
					?>
                    <br>
                    <?php 
					if (isset($totPed)) {	echo $totPed; 		}
					else {	echo "0";	}
					 ?>
                    &euro; <br>
                    <?php 
					if (isset($totPed))
					 {	
					 	if ($totPed<50)echo "3" ;
						else {echo "0";}
				  	 }
					else {	echo "0";	}
					 ?>
                    &euro; <br>
                    <?php 
					if (isset($totPed)) {	echo $totPed; 		}
					else {	echo "0";	}
					 ?>&euro; </font>
                </td>
              </tr>
              <tr> 
                <td valign=top height="8" colspan="2" bgcolor="#FFFF00"></td>
              </tr>
              <tr> 
                <td valign=top height="135" colspan="2" bgcolor="#FFFFFF">
<div align="center"></div>
                  
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<noscript></noscript> 
</body>
<script language="JavaScript">
function backyF ()
{
	history.back(1);
}
</script>
