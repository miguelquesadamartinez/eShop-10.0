<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");
?>
<HTML><HEAD><TITLE>e M i K i</TITLE></HEAD>
<BODY bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
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
          <td bgcolor="#FFFFFF" height="13">
            <div align="center">
              <table align=center width="100%" cellspacing="0" cellpadding="0" border="0" height="72">
                <tr>
                  <td height="24">
                    <div align="center"></div></td>
                </tr>
                <tr>
                  <td height="24"><div align="center">
</div></td>
                </tr>
                <tr>
                  <td height="24"><div align="center">
                    <?php       
$str1="imagesProds/";
$str2=".jpg";

   	$link=mysql_connect("db","eshop_user","eshop_pass");
	mysql_select_db("eshop_db",$link);


	$result=mysql_query("select * from prods Where Grupo='31'",$link); 

if (!($otrolink=mysql_connect("db","eshop_user","eshop_pass")))    { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db("nelosa_textos",$otrolink))    { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
		  
while($row = mysql_fetch_array($result)) 
{ 
	$strTmp=(string)$row["Ref"];
	$precio=(string)$row["precio_eshop"];
	if ($precio != 0 )
	{
			//echo "select texto from Descs_esp Where Ref='" . $strTmp . "'<BR>" ;
			$otroresult=mysql_query("select texto from Descs_esp Where Ref='" . $strTmp . "'",$otrolink); 
			$row_2 = mysql_fetch_array($otroresult);
			$strDes=(string)$row["Des"];
			$desi=(string)$row_2["texto"];
			$str1 = "<IMG SRC='../images/productos/" . $strTmp  . ".jpg'>";
			
			//echo "<table width='750'  border='0' cellspacing='0' cellpadding='0' align='center' bordercolor='#9999FF'>" ;
		  //echo "<tr><td>";
			  echo "<table width='95%' border=1 align='center'>";
				echo "<tr>";
				  echo "<TD align='center' width='55%'><b><font color='#0000FF' face='Arial, Helvetica, sans-serif'>"; 
				  echo "$strTmp - $strDes</b><br>$desi</font> ";
				  echo "<TD align='center' width='20%'>";
					echo "<form action='../index-prods.php' align='center'>";
					echo "<input type=hidden name='item' align='center' value='" . $strTmp  . "'>";
					echo "<br>" . $row["precio_eshop"] . " €  ";
					echo "<input type='text' name='cantidad' align='center' size='3'>  Und.";
							echo "<BR>";
							echo "<input type='submit' value='Comprar' align='center' name='submit' size='3'>";
							echo "</form>";
				  echo "</td></tr>";
			   echo "</table>";
		  //echo "</td></tr></table>\n";
	}
} 
mysql_free_result($result); 
mysql_close($link); 
?>
                  </div></td>
                </tr>
              </table>
              <p align="right"><b><font face="Arial, Helvetica, sans-serif"><a href="../index-prods.php"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" border="0"></a></font></b></p>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" height="13">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
<p align="center">
  <?php include ( "../../eMiKi/page.parts/down.php" ) ; ?>
</BODY></HTML>