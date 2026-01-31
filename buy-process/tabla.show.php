  <table width="100%"  border="0">
  <tr>
      <td bgcolor="#FFFFFF"><div align="center">
        <form ACTION="middle-compra.php" name='Formulario' id='Formulario' onSubmit='return validarDatos()' method="post">
          <div align="center">
            <table width="770" border="0">
              <tr>
                <td width="107" bgcolor="#FFFFCC">
                  <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#0000FF">e-mail : </font></b></div></td>
                <td width="222"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($usr))echo $usr; ?>
                </font></b></td>
                <td bordercolor="#FFFFFF" bgcolor="#FFFFFF" width="95">&nbsp; </td>
                <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="246">&nbsp; </td>
              </tr>
              <tr>
                <td width="107" bgcolor="#FFFFCC">
                  <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#0000FF">Nombre : </font></b></div></td>
                <td width="222"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($t1))echo $t1; ?>
                </font></b></td>
                <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                  <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#0000FF">Apellido 1 : </font></b></div></td>
                <td width="246"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($t2))echo $t2; ?>
                </font></b></td>
              </tr>
              <tr>
                <td width="107" bgcolor="#FFFFCC" height="29">
                  <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#0000FF">Telefono : </font></b></div></td>
                <td width="222"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($t3))echo $t3; ?>
                </font></b></td>
                <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                  <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#0000FF">Apelido 2 : </font></b></div></td>
                <td width="246"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($t4))echo $t4; ?>
                </font></b></td>
              </tr>
              <tr>
                <td width="107" bgcolor="#FFFFCC" height="29">
                  <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#0000FF">C.I.F. / N.I.F. : </font></b></div></td>
                <td width="222"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($t5))echo $t5; ?>
                </font></b></td>
                <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                  <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#0000FF">Empresa : </font></b></div></td>
                <td width="246"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($t6))echo $t6; ?>
                </font></b></td>
              </tr>
              <tr>
                <td rowspan="2" bgcolor="#FFFFCC" width="107">
                  <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#0000FF">Direcci&oacute;n : </font></b></div></td>
                <td rowspan="2" width="222"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($t7))echo $t7; ?>
                </font></b></td>
                <td bgcolor="#FFFFCC" width="95">
                  <div align="right"><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif"><b>C. P. : </b></font></div></td>
                <td width="246"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($t8))echo $t8; ?>
                </font></b></td>
              </tr>
              <tr>
                <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                  <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#0000FF">Poblacion : </font></b></div></td>
                <td width="246"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($t9))echo $t9; ?>
                </font></b></td>
              </tr>
              <tr>
                <td width="107" bgcolor="#FFFFCC">
                  <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#0000FF">Pais : </font></b></div></td>
                <td width="222"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($tpais))echo $tpais; ?>
                </font> </b></td>
                <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                  <div align="right"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#0000FF">Provincia : </font></b></div></td>
                <td width="246"><b><font face="Arial, Helvetica, sans-serif">
                  <?php if(isset($t10))echo $t10; ?>
                </font></b></td>
              </tr>
            </table>
            <p align="center" class="Estilo1011"><a href="../cart-pages/ValidationPages/modifUser.php?lastpage=ic">Modificar usuario</a>&nbsp;</p>
          </div>
        </form> 
        </div></td>
    </tr>
  </table>
