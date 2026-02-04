<?php 
include("../eMiKi/Codes/vblesession.php");
include("../eMiKi/Funciones_PHP.php");

$tVale=$vale;
if ($text1 <> ""){
	$t1=$text1;$t2=$text2;$t3=$text3;$t4=$text4;$t5=$text5;$t6=$text6;$t7=$text7;$t8=$text8;$t9=$text9;$t10=$text10;$t11=$textarea;
	$tpais=$pais;$usr=$text0;
}
	$link=mysql_connect("db","eshop_user","eshop_pass");
	mysql_select_db("eshop_db",$link);

// Si no existe el usuario lo creamos
 
$result=mysql_query("Select * From Clientes Where email ='" . $usr . "'",$link);
$row = mysql_fetch_array($result);
$numi=(string)$row["email"];

//Anulado, solo se cre usuario, si se registra

if ($numi=="")	{
	// Sql creacion cliente //
	$result=mysql_query("INSERT INTO Clientes (email,Nombre,Apellido1,Apellido2,Telefono,Doc,Empresa,Direccion,Cp,Poblacion,Pais,Provincia,L_Promos,L_Recarga)
	VALUES('" .$usr. "','".$t1."','".$t2."','".$t4."','".$t3."','".$t5."','".$t6."','".$t7."','".$t8."','".$t9."','".$pais."','".$t10."','s','s')",$link);
	//echo "Opr - 1"  ;
	$result=mysql_query("INSERT INTO `Datas` ( `mail` , `otro` ) VALUES ('" .$usr. "', '" .$usr. "')",$link);

//	echo("INSERT INTO Clientes (email,Nombre,Apellido1,Apellido2,Telefono,Doc,Empresa,Direccion,Cp,Poblacion,Pais,Provincia,L_Promos,L_Recarga)
	//VALUES('" .$usr. "','".$t1."','".$t2."','".$t4."','".$t3."','".$t5."','".$t6."','".$t7."','".$t8."','".$t9."','".$pais."','".$t10."','s','s')<BR>");


		setcookie("recargas", $usr, time() + 31536000 , "/", "www.recargas-y-consumibles.net");
}
else { // Si no actualizara el que tenga ese email
$result=mysql_query("UPDATE Clientes SET Nombre='" . $t1 . "',Apellido1='" . $t2 . "',Telefono='" . $t3 . "',Apellido2='" . $t4 .
"',Doc='" . $t5 . "',Empresa='" . $t6 . "',Direccion='" . $t7 . "',Provincia='" . $t10 . "',Poblacion='" . $t9 . "',Pais='" . $tpais .
"',Cp='" . $t8 . "' Where email='" . $usr . "'" ,$link); 
 	 //echo "Opr - 2"  ;
}

// Obtenemos la ultima referencia 
$result=mysql_query("Select max(last) From lasty",$link);
$row = mysql_fetch_array($result);
$TmpNumTpv=(int)$row["max(last)"];
$nextTpv = $TmpNumTpv + 1 ;

//Establecemos el siguiente numero de referencia de pedido
mysql_query("Insert Into lasty (last)Values(" . $nextTpv . ")",$link);

// Eliminamos la penultima referencia
mysql_query("Delete From lasty Where last<" . $nextTpv . ")",$link);


// Guardamos, para sacarlo en 'TPVresp', RefPed y precio total
$tot_price_S=(string)$totPed;
mysql_query("Insert Into tempDB (RefPed_D,email,tot_price_D) values ('".$nextTpv."','".$usr."','".$tot_price_S."')",$link);

// Creamos el pedido temporal
$result=mysql_query("Insert Into Cart_DB_Pedidos_TMP (RefPed,email,Fecha,Total_Pedido) 
VALUES(" . $nextTpv . ",'" . $usr . "','" . Date("Y-m-d") . "'," . $totPed . ")",$link);

// Para la pagina finComnpra de Contrarrembolso, este pedido lo elimia de los temporales
$ref_P=$nextTpv;

$cnt_1=0;
	 foreach($itemsEnCesta as $k => $v)
	 { 
		 $cnt_1=$cnt_1+1;
		  if ($itemsEnCesta[$k]!="0")
	  	  {
		    $S_Ref=(String)$k;

			$I_Ref=(int)$k;
			$I_Cantidad=(int)$itemsEnCesta[$k]; 
			$S_Cantidad=(string)$itemsEnCesta[$k]; 
		
			// Sql lineas temporales
			$result=mysql_query("Insert Into Cart_DB_L_Pedido_TMP (ID_Linea,RefPed,Ref,Cant) 
			VALUES(" . $cnt_1 . "," . $nextTpv . "," . $I_Ref . "," . $I_Cantidad . ")",$link); 	
	      }
      } 
?>
<html> 
<body bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="55"><img src="../images/index/arriva.jpg" width="770" height="55"></td>
  </tr>
</table>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="../images/index/d1.001.jpg" width="155" height="20"></td>
    <td><a href="../main.php"><img src="../images/index/d1.002.jpg" width="100" height="20" border="0"></a></td>
    <td><a href="../cart-pages/index-prods.php"><img src="../images/index/d1.003.jpg" width="105" height="20" border="0"></a></td>
    <td><a href="../cart-pages/paginas-varias/contactar.php"><img src="../images/index/d1.004.jpg" width="208" height="20" border="0"></a></td>
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
          <td bgcolor="#FFFFFF" height="13"><table border="0" width="767">
            <tr>
              <td width="84" bgcolor="#FFFFCC">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b>e-mail : </b></font></div></td>
              <td width="206"><b> <font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"> <?php echo $usr; ?> </font></b></td>
              <td bordercolor="#FFFFFF" bgcolor="#FFFFFF" width="85">
                <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b> 
                    </b></font></div></td>
              <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="235">
                <div align="center"><font color="#CCCCCC"><b><b><b><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"> </font><font color="#0000FF"><font face="Arial, Helvetica, sans-serif"><font size="2"></font></font></font></b></b></b></b></font></div></td>
            </tr>
            <tr>
              <td width="84" bgcolor="#FFFFCC">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b>Nombre : </b></font></div></td>
              <td width="206"><b> <font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"> <?php echo $t1; ?> </font></b></td>
              <td width="85" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b>Apellido 1 : </b></font></div></td>
              <td width="235"><b> <font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"> <?php echo $t2; ?> </font></b></td>
            </tr>
            <tr>
              <td width="84" bgcolor="#FFFFCC" height="29">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b>Telefono :</b></font></div></td>
              <td width="206" height="29"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif"> <?php echo $t3; ?> </font></b></td>
              <td width="85" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b>Apellido 2 : </b></font></div></td>
              <td width="235" height="29"><b> <font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"> <?php echo $t4; ?> </font></b></td>
            </tr>
            <tr>
              <td width="84" bgcolor="#FFFFCC" height="29">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b>C.I.F. / N.I.F. : </b></font></div></td>
              <td width="206" height="29"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif"> <?php echo $t5; ?> </font></b></td>
              <td width="85" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b>Empresa : </b></font></div></td>
              <td width="235" height="29"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif"> <?php echo $t6; ?> </font></b></td>
            </tr>
            <tr>
              <td rowspan="2" bgcolor="#FFFFCC" width="84">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b>Direcci&oacute;n :</b></font></div></td>
              <td rowspan="2" width="206"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif"> <?php echo $t7; ?> </font></b></td>
              <td bgcolor="#FFFFCC" width="85">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b>C. P. : </b></font></div></td>
              <td width="235"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif"> <?php echo $t8; ?> </font></b></td>
            </tr>
            <tr>
              <td width="85" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b> Poblacion : </b></font></div></td>
              <td width="235" height="32"><b> <font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"> <?php echo $t9; ?> </font></b></td>
            </tr>
            <tr>
              <td width="84" bgcolor="#FFFFCC">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b>Pais : </b></font></div></td>
              <td width="206"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif"> <?php echo $tpais; ?> </font> </b>
              <td width="85" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                <div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b>Provincia : </b></font></div>
              <td width="235"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif"> <?php echo $t10; ?> </font> </b>           
            </tr>
          </table>
            <table width="100%" border="1">
              <tr bgcolor="#FFFFCC">
                <td>
                  <div align="center"><b><font face="Arial, Helvetica, sans-serif">Finalice el proceso pulsando en el boton</font></b></div></td>
              </tr>
              <tr bgcolor="#FFFFCC">
                <td>
                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif">Pulse solo una vez en el boton, para evitar la duplicacion del pedido, la velocidad de respuesta a esta pegina dependera de su conexion y del estado de la red.</font></div></td>
              </tr>
              <tr>
                <td>
                  <form name='Form1' id='Form1' method='post' action='fin-compra.php'  onSubmit='return Repite()'  >
                    <div align="center"> <img src="../images/Visas/_Contra.JPG" width="39" height="39"><br>
                        <input type="submit" name="contra" value="Pago Contrarreembolso">
                        <input type="hidden" name="pressed">
                    </div>
                </form></td>
              </tr>
            </table>
          <p align="center"></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13"><div align="center">
            <p align="center"><font face='Arial, Helvetica, sans-serif' color='#0000FF'><font size='2'><a href='#' onClick='backyF()'>Pulse aqui para volver y corregirlos o en el boton [Regresar] de su navegador</a></font></font></p>
            <p align="right"><font face="Arial, Helvetica, sans-serif"><img src="../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()"></font></p>
              </div>
          </td>
        </tr>
    </table></td>
  </tr>
</table>
<script language="JavaScript">
function backyF (){
	history.back(1);
}
function AbrirVentana(url) {
	var hWnd = window.open(url,"ayuda","width=350,height=400,resizable=no,scrollbars=yes");
}
function mesaje ()
{
	alert ("Solo disponible opcion Contrarrembolso\nPago por tarjeta disponible en breve");
}

	function Repite(){	
			if ( Form1.pressed.value=="s"){
				return (false);
			}
			else
			{
				Form1.pressed.value="s";
				return (true);
			}

		}

</script>
</body> 
</html> 