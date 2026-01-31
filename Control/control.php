<?php 
session_name ('miki');
session_start(); 
session_register('Using_DB'); 
?>
<html><head><title>Pagina de Control de Eshop</title></head>
<?
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;

// Sql consulta ultimo numero de pedido
$result=mysql_query("Select max(last) From lasty",$link);
$row = mysql_fetch_array($result);
$numPed=(int)$row["max(last)"];

$numPed_S =(String)$numPed;

?>
<body bgcolor="#FFFFFF" text="#000000">
<table width="663" border="0" align="center">
  <tr>
    <td width="440"><img src="../images/TitleP.jpg" width="354" height="26"></td>
    <td width="221">
      <div align="center"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif">Pagina 
        de Control Softec</font></b></div>
    </td>
  </tr>
</table>
<table width="664" border="0" height="250" align="center" name="hasta">
  <tr> 
    <td colspan="3" height="19"></td>
  </tr>
  <tr bgcolor="#FFFFCC"> 
    <td height="20" width="200"> 
      <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"><b> 
        N&ordm; de pedido eShop
        <?php echo $numPed_S; ?> </b></font> <font size="2"> 
        </font></div>
    </td>
    <td width="246" height="20"> 
      <div align="center"><b><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="4">Clientes</font></b></div>
    </td>
    <td width="204" height="20"> 
      <div align="center"><b><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="4">Pedidos</font></b></div>
    </td> 
  </tr>
  <tr> 
    <td height="102" width="200"> 
      <form name="form1" method="post" action="Numeros/delLasty.php">
        <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"> 
          <input type="submit" value="Vaciar DB " name="Submit">
          <input type="hidden" name="val" value="<?php echo $numPed_S; ?>">
          </font></div>
      </form>
    </td>
    <td width="246" height="102"> 
      <div align="center"> 
        <form name="form2" method="post" action="Clientes/clientes.php">
          <p><b><font color="#0000FF" face="Arial, Helvetica, sans-serif">Listado 
            Clientes</font></b> <br>
            <input type="submit" name="Submit2" value="Listar">
          </p>
          <p><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong><a href="Clientes/IgualarCliente-PWD.php">Igualar 
            Cliente-PWD</a></strong></font></p>
        </form>
        <font color="#0000FF" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td rowspan="3" height="211" width="204"> 
      <form name="form2" method="post" action="Pedidos/pedidos.php">
          
        <p align="center"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif">Listado 
          Pedidos<br>
          </font></b> <font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
          <input type="submit" name="Submit22" value="Listar">
          <BR>
          Desde<BR>
          <input type="text" name="desde">
          <BR>
          Hasta<BR>
          <input type="text" name="hasta" value="<?php echo Date("Y-m-d");?>">
          </font></p>
        </form>
        <font color="#0000FF" face="Arial, Helvetica, sans-serif">&nbsp;</font><font color="#0000FF" face="Arial, Helvetica, sans-serif"><br></font>
<div align="center"><font color="#0000FF"><font face="Arial, Helvetica, sans-serif"></font></font></div>
    </td>
  </tr>
  <tr bgcolor="#FFFFCC"> 
    <td height="15" width="200"> 
      <div align="center"><font size="2"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif"> 
        N&ordm; de pedido Nelosa
        <?php
		  // Sql consulta ultimo numero de pedido
			$result=mysql_query("Select max(last) From lasty_nelosa",$link);
			$row = mysql_fetch_array($result);
			$numPed=(int)$row["max(last)"];

			$numPed_S =(String)$numPed;

			echo $numPed_S;
		  
		  ?></font></b> 
        </font></div>
    </td>
    <td width="246" height="15"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" color="#FF0000">Articulos</font></b></div>
    </td>
  </tr>
  <tr> 
    <td height="81" width="200"> 
      <form name="form1" method="post" action="Numeros/delLasty_nelosa.php">
          <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2"> 
            <input type="submit" value="Vaciar DB" name="Submit3">
            <input type="hidden" name="val2" value="<?php echo $numPed_S; ?>">
            </font></div>
        </form>
   
    </td>
    <td width="246" height="81"> 
      <div align="center">
        <form name="form2" method="post" action="Articulos/articulos.php">
          <b><font color="#0000FF" face="Arial, Helvetica, sans-serif">Listado 
          Articulos</font></b><br>
          <select name="select" size="2">
            <option>prods</option>
            <option selected>prods_Nelosa</option>
          </select>
          <br>
          <input type="submit" name="Submit23" value="Listar">
        </form>
        <font color="#0000FF" face="Arial, Helvetica, sans-serif"></font>
        <form name="form3" method="post" action="Articulos/descrip.php">
          <font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Descripciones</strong></font><br>
          <input type="submit" name="Submit4" value="Submit">
        </form>
        <font color="#0000FF"><font face="Arial, Helvetica, sans-serif"></font></font></div>
    </td>
  </tr>
</table>
</body>
</html>
