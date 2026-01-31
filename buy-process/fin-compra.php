<?php 
include("../eMiKi/Codes/vblesession.php");
include("../eMiKi/Funciones_PHP.php");

?>

<HTML><head><title>Compra finalizada</title>
<style type="text/css">
<!--
.Estilo1 {font-size: 10px}
.Estilo2 {	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo3 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>
<script languaje="JavaScript">
var hoy = new Date(); fecha=hoy.getYear() + "-" + (hoy.getMonth() + 1) + "-" + hoy.getDate() ;
</script>
<body bgcolor="#FFFFFF" text="#000000"> 
<div align="center"> 
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
            <td bgcolor="#FFFFFF" height="13">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" height="13"><div align="center">
              <?php
$chivato="0";

	if ($t1!="")
	{
		// Si alguno de los item tiene cantidad
		if (isset($itemsEnCesta))
		{
		foreach($itemsEnCesta as $k => $v)
		 { 	  
			if ($itemsEnCesta[$k]!="0")
			{
				$chivato="69";  	
			}
		 }
		}
		if ($chivato=="69") // Si hay cantidad
		{
		$textoMail = $textoMail . "Datos cliente" . "\n";
		$textoMail = $textoMail . "-------------" . "\n\n";
		
		$textoMail = $textoMail . "email :" . $usr . "\n";
		$textoMail = $textoMail . "Nombre :" . $t1 . "\n";
		$textoMail = $textoMail . "Apellido 1 :" . $t2 . "\n";
		$textoMail = $textoMail . "Apellido 2 :" . $t4 . "\n";
		$textoMail = $textoMail . "Telefono :" . $t3 . "\n";
		$textoMail = $textoMail . "Cif :" . $t5 . "\n";
		$textoMail = $textoMail . "Empresa :" . $t6 . "\n";
		$textoMail = $textoMail . "Direccion :" . $t7 . "\n";
		$textoMail = $textoMail . "CP :" . $t8 . "\n";
		$textoMail = $textoMail . "Poblacion :" . $t9 . "\n";
		$textoMail = $textoMail . "Pais :". $tpais . "\n";
		$textoMail = $textoMail . "Provincia :" . $t10 . "\n\n";
		$textoMail = $textoMail . "Comentario :" . $t11 . "\n\n";
	

	$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
	mysql_select_db("nelosa_nelosa",$link);
	
		// Sql consulta ultimo numero de pedido
		$result=mysql_query("Select max(ID_Pedido) From Cart_DB_Pedidos",$link);
		
			$row = mysql_fetch_array($result);
			$TmpDes=(int)$row["max(ID_Pedido)"];
	
			$numPed = $TmpDes + 1 ;
			$numPed_S =(String)$numPed;
	
			$textoMail = $textoMail . "Pedido Nº: " . $numPed_S . "\n";
			$textoMail = $textoMail . "------" . "\n";
		
		
			$tmpStore=(string)$numPed;

		// Sql pedido
		$result=mysql_query("Insert Into Cart_DB_Pedidos (ID_Pedido,email,Fecha,Total_Pedido,RefPed) 
		VALUES(" . $numPed . ",'" . $usr . "','" . Date("Y-m-d") . "'," . $totPed . ",'" . $tmpStore . "')",$link);	
		
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
			
				$textoMail = $textoMail . $S_Ref ."-" . $S_Cantidad . "\n" ;
				// Sql linesa pedido
				$result=mysql_query("Insert Into Cart_DB_L_Pedido (ID_Linea,ID_Pedido,Ref,Cant) 
				VALUES(" . $cnt_1 . "," . $numPed . "," . $I_Ref . "," . $I_Cantidad . ")",$link); 	
		      }
	
	 	} 
		  $textoMail = $textoMail . "------------" . "\n";  
		  $textoMail = $textoMail . "Descuento -> " . $dety  . "\n";
		  $textoMail = $textoMail . "Portes -> " . $gEnvio  . "\n";
		  $textoMail = $textoMail . "Total pedido -> " . $totPed  . "\n";
		  $textoMail = $textoMail . "------------" . "\n";  
		  $textoMail = $textoMail . "Vale num:  -> " . $tVale  . "\n";
		  $textoMail = $textoMail . "------------" . "\n\n";
		mail("pedidos_web@nelosa.net","Pedido",$textoMail ,"From: <pedido@recargas-y-consumibles.net>");
		mail($usr,"Confirmacion pedido Recargas-y-consumibles.net",$textoMail ,"From: <pedido@recargas-y-consumibles.net>");
		//mail("emiki@nelosa.net","Pedido",$textoMail ,"From: <pedido@recargas-y-consumibles.net>");
		if ($tVale != ""){
			mysql_query("Insert Into vales_usados (numeros) VALUES (" . $tVale . ")'",$link);
		}
		// Elimino lo de tablas temporales
		mysql_query("Delete From Cart_DB_Pedidos_TMP Where RefPed ='" . $ref_P . "'",$link);
		mysql_query("Delete From Cart_DB_L_Pedido_TMP Where RefPed ='" . $ref_P . "'",$link);
		
		// 
		mysql_query("Delete From tempDB Where email='" . $usr . "')",$link);
		
		echo "<table width='600' height='34' border='0' align='center'><tr>";
	      echo "<td width='323' height='53'><font face='Arial, Helvetica, sans-serif' color='#0000FF'><img src='../images/TitleP.jpg' width='354' height='26'></font></td>";
	      echo "<td colspan='2' height='53'>"; 
	        echo "<div align='center'><font color='#0000FF' face='Arial, Helvetica, sans-serif'>";
			echo "<a href='factura.php?text_1=" . $t1 ;
			echo "?text_2=" . $t2 . "?text_3=" . $t3 . "?text_4=" . $t4 . "?text_5=" . $t5 . "?text_6=" . $t6 ;
			echo "?text_7=" . $t7 . "?text_8=" . $t8 . "?text_9=" . $t9 . "?text_10=" . $t10  . "?pais=" . $tpais ;
			echo "'>";
			//echo "<img src='../images/_Factura.gif' width='48' height='48'>Factura para imprimir</a></font></div>";
			echo "</div>";
	      echo "</td></tr></table>";
		echo "<table width='600' border='0' align='center' height='43'>";
	    echo "<tr><td width='600' height='79' bgcolor='#FFFFFF'>"; 
	        echo "<div align='center'><p>&nbsp;</p>";
	          echo "<p><font color='#0000FF' face='Arial, Helvetica, sans-serif'><b>Gracias por su compra !!</b></font></p>";
	          echo "<p><font color='#0000FF' face='Arial, Helvetica, sans-serif'>En breve recibira un email con la confirmacion del pedido</font></p>";
	          echo "<p><font face='Arial, Helvetica, sans-serif' color='#0000FF'>";
			echo "<a href='factura.php?text_1=" . $t1 ;
			echo "?text_2=" . $t2 . "?text_3=" . $t3 . "?text_4=" . $t4 . "?text_5=" . $t5 . "?text_6=" . $t6 ;
			echo "?text_7=" . $t7 . "?text_8=" . $t8 . "?text_9=" . $t9 . "?text_10=" . $t10 . "?pais=" . $tpais ;
			echo "'>";
			  echo "Si lo desea puede acceder a un version imprimible de la factura</font></p>";
	        echo "</div></td></tr></table>";
	    }
		else // 2&ordm; if - Si el carro esta vacio
		{
			echo "<table width='600' border='0' align='center' height='43'>";
		    echo "<tr><td width='600' height='79' bgcolor='#FFFFFF'>"; 
	        echo "<div align='center'><p><font color='#0000FF' face='Arial, Helvetica, sans-serif'><b>Carro de la comra vacio</b></font></p>";
	          echo "<p><font face='Arial, Helvetica, sans-serif' color='#0000FF'><font size='2'><a href='#' onClick='backyF()'>Pulse "; 
	            echo "aqui para volver y corregirlos o en el boton [Regresar]"; 
	            echo "de su navegador</a></font></font></p>";
	          echo "</div></td></tr></table>";
		}
		
	}
	else // 1&ordm; if - Si falta algun dato
	{
		echo "<table width='600' border='0' align='center' height='43'>";
	    echo "<tr><td width='600' height='79' bgcolor='#FFFFFF'>"; 
	        echo "<div align='center'><p><font color='#0000FF' face='Arial, Helvetica, sans-serif'><b>Datos incorrectos, Ya le diremos cuales</b></font></p>";
	          echo "<p><font face='Arial, Helvetica, sans-serif' color='#0000FF'><font size='2'><a href='#' onClick='backyF()'>Pulse "; 
	            echo "aqui para volver y corregirlos o en el boton [Regresar]"; 
	            echo "de su navegador</a></font></font></p>";
	          echo "</div></td></tr></table>";
	  
	}
//}
 ?>
              <p><a href="../main.php"><img src="../images/_inicio.gif" width="32" height="34" border="0"></a></p>
            </div>
            <script language="JavaScript">
function backyF ()
{
	history.back(1);
}
function AbrirVentana(url) {
	var hWnd = window.open(url,"ayuda","width=350,height=400,resizable=no,scrollbars=yes");
}
              </script></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>