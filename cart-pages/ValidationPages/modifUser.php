<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");

 ?>
<html><head><title>Mantenimiento de usuarios</title>
<?php include ("../../eMiKi/Headers/Styles/Style_001.htm") ; ?>
</HEAD>

	<script language='JavaScript' type='text/javascript'>
	
		function validarDatos(){
			var chivi=0;
						
			if ( Formulario_2.text0.value=="" ) {
				alert ("Falta email !!");
				return (false); 
			}			else if ( Formulario_2.text1.value=="" ) {
				alert ("Falta nombre !!");
				return (false); 
			}			else if ( Formulario_2.text2.value=="" ) {
				alert ("Falta apellido 1  !!");
				return (false); 
			}			else if ( Formulario_2.text4.value=="" ) {
				alert ("Falta apellido 2  !!");
				return (false); 
			}			else if ( Formulario_2.text3.value=="" ) {
				alert ("Falta telefono !!");
				return (false); 
			}			else if ( Formulario_2.text5.value=="" ) {
				alert ("Falta C.I.F. / N.I.F. !!");
				return (false); 
			}			else if ( Formulario_2.text7.value=="" ) {
				alert ("Falta direccion !!");
				return (false); 
			}			else if ( Formulario_2.text8.value=="" ) {
				alert ("Falta Codigo Postal !!");
				return (false); 
			}			else if ( Formulario_2.text9.value=="" ) {
				alert ("Falta Poblacion !!");
				return (false); 
			} 			else if ( Formulario_2.country.value=="" ) {
				alert ("Falta provincia !!");
				return (false); 
			} 		    else if ( Formulario_2.pais.value=="" ) {
				alert ("Seleccione Pais !!");
				return (false); 
			}
			else
			{
				return (true);
			}
		}
</script>

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
    <td height="71"><table align="center" width="100%" cellspacing="0" cellpadding="0" border="0" height="52">
        <tr>
          <td bgcolor="#FFFFFF" height="13">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13"><table align="center" width="770" cellspacing="0" cellpadding="0" border="0" height="11">
            <tr>
              <td bgcolor="#FFFFFF" height="13">
                <div align="center"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="5">Mantenimiento de usuarios</font></b></div></td>
            </tr>
            <tr>
              <td bgcolor="yellow" width="700" height="8"> </td>
            </tr>
            <tr>
              <td wdith="517" width="534" height="8"><img src="../../_Cart_Pages/ValidationPages/images/x.gif" width="1" height="1"></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13"><form action="viewUser_II.php" name="Formulario_2" id="Formulario_2"  onSubmit="return validarDatos()" method="post" >
            <div align="center">
              <table width="95%" border="0">
                <tr>
                  <td width="15%" bgcolor="#FFFFCC">
                    <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">e-mail : </font></b></font></b></div></td>
                  <td width="35%"><b><font face="Arial, Helvetica, sans-serif"><?php echo $usr;?>
                        <input type="hidden" name="text0" size="30" value="<?php echo $usr;?>">
</font></b></td>
                  <td bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                    <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif">Password : </font></b></div></td>
                  <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                    <div align="left"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
                      <input type="text" name="textp" size="30" value="<?php echo $miki;?>">
                  </font></b></font></div></td>
                </tr>
                <tr>
                  <td width="15%" bgcolor="#FFFFCC">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Nombre : </font></b></font></div></td>
                  <td width="35%"><b><font face="Arial, Helvetica, sans-serif">
                    <input type="text" name="text1" id="text1" size="30" value="<?php echo $t1;?>">
                  </font></b></td>
                  <td width="15%" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                    <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 1: </font></b></font></div></td>
                  <td width="35%"><b><font face="Arial, Helvetica, sans-serif">
                    <input type="text" name="text2" size="30" value="<?php echo $t2;?>">
                  </font></b></td>
                </tr>
                <tr>
                  <td width="115" bgcolor="#FFFFCC" height="29">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Telefono :</font></b></font></div></td>
                  <td width="221" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">
                    <input type="text" size="30"
      maxlength="50" name="text3" value="<?php echo $t3;?>">
                  </font></font></td>
                  <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Apellido 2 : </b></font></div></td>
                  <td width="179" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
                    <input type="text" name="text4" size="30" value="<?php echo $t4;?>">
                  </font></b></font></td>
                </tr>
                <tr>
                  <td width="115" bgcolor="#FFFFCC" height="29">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C.I.F. / N.I.F. : </font></b></font></div></td>
                  <td width="221" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">
                    <input type="text" size="30"
      maxlength="50" name="text5" value="<?php echo $t5;?>">
                  </font></font></td>
                  <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                    <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2"><b>Empresa : </b></font></div></td>
                  <td width="179" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><font face="Arial, Helvetica, sans-serif">
                    <input type="text" name="text6" size="30" value="<?php echo $t6;?>">
                  </font> </font></font></td>
                </tr>
                <tr>
                  <td rowspan="2" bgcolor="#FFFFCC" width="115">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Direcci&oacute;n :</font></b></font></div></td>
                  <td rowspan="2" width="221"><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif">
                    <textarea name="text7" cols="30" rows="2"><?php echo $t7;?></textarea>
                  </font></b></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> </font></b> </font></td>
                  <td bgcolor="#FFFFCC" width="104">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C. P. : </font></b></font></b></font></b></font></div></td>
                  <td width="179"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> <b><font face="Arial, Helvetica, sans-serif"> </font><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                    <input type="text" name="text8" size="30" value="<?php echo $t8;?>">
                  </font></b></font></font><font face="Arial, Helvetica, sans-serif"> </font></b> </font></b> </font></td>
                </tr>
                <tr>
                  <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b></b></font><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"></font></b></font><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Poblacion : </font></b></font></b></font></b></font><font face="Arial, Helvetica, sans-serif" color="#0000FF"></font></div></td>
                  <td width="179" height="32"><font color="#000066" size="2">&nbsp;</font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">&nbsp; </font><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"> </font></b></font><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> </font><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
                    <input type="text" name="text9" size="30" value="<?php echo $t9;?>">
                  </font></b></font></b></font></b></font></font><font face="Arial, Helvetica, sans-serif"> </font></b></font><font face="Arial, Helvetica, sans-serif"> </font></b></font></td>
                </tr>
                <tr>
                  <td width="115" bgcolor="#FFFFCC">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Pais : </b></font></div></td>
                  <td width="221"> <font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                    <input type="text" name="pais" size="30" value="<?php echo $tpais;?>">
                    </font></b></font></b></font></b></font></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">&nbsp; </font>
                  <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                    <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Provincia : </font></b></font> </b></font></div>
                  <td width="179"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> </font></b></font></b></font><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                    <input type="text" name="country" size="30" value="<?php echo $t10;?>">
                  </font></b></font></b> </font></b></font></font>           
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#FFFFCC"><font color="#FF0000" face="Arial, Helvetica, sans-serif"><font size="2">
                    </font></font></td>
                  <td colspan="2" bordercolor="#FFFFFF" bgcolor="#FFFFCC"><font color="#FF0000" face="Arial, Helvetica, sans-serif"><font size="2"><font size="2">
                    </font></font></font>           
                </tr>
                <tr>
                  <td colspan="4" bgcolor="#FFFFCC" height="24">
                    <div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif">
                      <input type="submit" name="iniciar2" value="Modificar">
                      <b><font face="Arial, Helvetica, sans-serif">
</font><font color="#FF0000" face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
<input name="lastpage" type="hidden" id="lastpage" value="<?php echo $lastpage;?>" size="30">
</font></b></font><font face="Arial, Helvetica, sans-serif">                      </font></b> </font> </div></td>
                </tr>
              </table>
            </div>
          </form></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13"><div align="right"><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font></div></td>
        </tr>
    </table></td>
  </tr>
</table>
<p align="center">
  <?php include ( "../../eMiKi/page.parts/down.php" ) ; ?>
<div align="center"> </div>
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
