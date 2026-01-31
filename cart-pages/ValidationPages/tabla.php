<table cellspacing=20 border=0 align=center width=100% height="285">
  <tr>
    <td width=68% valign=top height="289">
      <form action="modifUser.php" name="Formulario_3" id="Formulario_3" method="post" >
        <div align="center">
          <table border="0">
            <tr bgcolor="#FFFFCC">
              <td width="15%">
                <div align="right"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif">e-mail : </font></b></div></td>
              <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $usr ?>
                      <input type="hidden" name="hitext0" value="<?php echo $usr ?>">
              </font></b></td>
              <td bordercolor="#FFFFFF">
                <div align="center"> </div></td>
              <td bordercolor="#FFFFFF">
                <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td width="15%">
                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Nombre : </font></b></font></div></td>
              <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $t1 ?>
                      <input type="hidden" name="hitext1" value="<?php echo $t1 ?>">
              </font></b></td>
              <td width="15%" bordercolor="#FFFFFF">
                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Apellido 1 : </font></b></font></div></td>
              <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$t2" ?>
                      <input type="hidden" name="hitext2" value="<?php echo $t2 ?>">
              </font></b></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td width="115" height="29">
                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Telefono :</font></b></font></div></td>
              <td width="221" height="29"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $t3 ?>
                      <input type="hidden" name="hitext3" value="<?php echo $t3 ?>">
              </font></b></td>
              <td width="104" bordercolor="#FFFFFF" height="29">
                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Apellido 2 : </font></b></font></div></td>
              <td width="179" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$t4" ?>
                        <input type="hidden" name="hitext4" value="<?php echo $t4 ?>">
              </font></b></font></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td width="115" height="29">
                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C.I.F. / N.I.F. : </font></b></font></div></td>
              <td width="221" height="29"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $t5 ?>
                      <input type="hidden" name="hitext5" value="<?php echo $t5?>">
              </font></b></td>
              <td width="104" bordercolor="#FFFFFF" height="29">
                <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2"><b>Empresa : </b></font></div></td>
              <td width="179" height="29"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$t6" ?>
                      <input type="hidden" name="hitext6" value="<?php echo $t6 ?>">
              </font></b></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td rowspan="2" width="115">
                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Direcci&oacute;n :</font></b></font></div></td>
              <td rowspan="2" width="221"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $t7 ?>
                      <input type="hidden" name="hitext7" value="<?php echo $t7 ?>">
              </font></b></td>
              <td width="104">
                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Poblacion :</font></b></font><font face="Arial, Helvetica, sans-serif" color="#0000FF"> </font></div></td>
              <td width="179"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$t9" ?>
                      <input type="hidden" name="hitext9" value="<?php echo $t9 ?>">
              </font></b></td>
            </tr>
            <tr>
              <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Provincia : </font></b></font></b></font></div></td>
              <td width="179" height="32" bgcolor="#FFFFCC"><b><font face="Arial, Helvetica, sans-serif"> <?php echo $t10 ?>
                      <input type="hidden" name="histate" value="<?php echo $t10 ?>">
              </font></b></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td width="115">
                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Pais : </b></font></div></td>
              <td width="221"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$tpais" ?>
                      <input type="hidden" name="hipais" value="<?php echo $tpais ?>">
                </font></b>
              <td width="104" bordercolor="#FFFFFF">
                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C. P. : </font></b></font></div>
              <td width="179"><b><font face="Arial, Helvetica, sans-serif"> <?php echo "$t8" ?>
                      <input type="hidden" name="hitext8" value="<?php echo $t8 ?>">
              </font></b> 
            </tr>
            <tr bgcolor="#FFFFCC">
              <td colspan="4" height="24">
                <div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif">
                  <input type="submit" name="iniciar2" value="Modificar usuario">
              </font> </div></td>
            </tr>
          </table>
        </div>
      </form>
      <p align="right"><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font></p></td>
  </tr>
</table>
      
