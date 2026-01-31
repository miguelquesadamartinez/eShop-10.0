  <table width="100%"  border="0">
    <tr>
      <td height="225" bgcolor="#FFFFFF"><div align="center"> 
        <table border="0">
          <tr> 
            <td width="15%" bgcolor="#FFFFCC"> <div align="right"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif">e-mail 
                : </font></b></div></td>
            <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
              <input type="text" name="text0" id="text0" size="30" value="<?php if(isset($usr))echo $usr; ?>" >
              </font></b></td>
            <td bordercolor="#FFFFFF" bgcolor="#FFFFCC"> <div align="right"><font face="Arial, Helvetica, sans-serif"><b> 
                </b></font></div></td>
            <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"> <div align="left"><b><font face="Arial, Helvetica, sans-serif"> 
                </font></b></div></td>
          </tr>
          <tr> 
            <td width="15%" bgcolor="#FFFFCC"> <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Nombre 
                : </font></b></font></div></td>
            <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
              <input type="text" name="text1" id="text1" size="30" value="<?php if(isset($t1))echo $t1; ?>" >
              </font></b></td>
            <td width="15%" bordercolor="#FFFFFF" bgcolor="#FFFFCC"> <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 
                1 : </font></b></font></div></td>
            <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
              <input type="text" name="text2" size="30" value="<?php if(isset($t2))echo $t2; ?>">
              </font></b></td>
          </tr>
          <tr> 
            <td width="115" bgcolor="#FFFFCC" height="29"> <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Telefono 
                :</font></b></font></div></td>
            <td width="221" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"> 
              <input type="text" size="30" maxlength="50" name="text3"  value="<?php if(isset($t3))echo $t3; ?>">
              </font></font></td>
            <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29"> 
              <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Apellido 
                2 : </font></b></font></div></td>
            <td width="179" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> 
              <input type="text" name="text4" size="30" value="<?php if(isset($t4))echo $t4; ?>">
              </font></b></font></td>
          </tr>
          <tr> 
            <td width="115" bgcolor="#FFFFCC" height="29"> <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C.I.F. 
                / N.I.F. : </font></b></font></div></td>
            <td width="221" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"> 
              <input type="text" size="30" maxlength="50" name="text5" value="<?php if(isset($t5))echo $t5; ?>">
              </font></font></td>
            <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29"> 
              <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2"><b>Empresa 
                : </b></font></div></td>
            <td width="179" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> 
              <input type="text" name="text6" size="30" value="<?php if(isset($t6))echo $t6; ?>">
              </font></b> </font></font></td>
          </tr>
          <tr> 
            <td rowspan="2" bgcolor="#FFFFCC" width="115"> <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Dirección 
                :</font></b></font></div></td>
            <td rowspan="2" width="221"><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"> 
              <textarea name="text7" cols="30" rows="2"><?php if(isset($t7))echo $t7; ?></textarea>
              </font></b></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> 
              </font></b> </font></td>
            <td bgcolor="#FFFFCC" width="104"> <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C. 
                P. : </font></b></font></div></td>
            <td width="179"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> 
              <input type="text" name="text8" size="30"  value="<?php if(isset($t8))echo $t8; ?>">
              </font></b></font></font><font face="Arial, Helvetica, sans-serif"> 
              </font></b> </font></td>
          </tr>
          <tr> 
            <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32"> 
              <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Poblacion 
                : </font></b></font><font face="Arial, Helvetica, sans-serif" color="#0000FF"></font></div></td>
            <td width="179" height="32"><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"> 
              </font></b></font><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> 
              <input type="text" name="text9" size="30"  value="<?php if(isset($t9))echo $t9; ?>">
              </font></b></font></td>
          </tr>
          <tr> 
            <td width="115" bgcolor="#FFFFCC"> <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Pais 
                : </b></font></div></td>
            <td width="221">
              <select name="pais" size=2 id="pais">
                <option value=""  >Selecciona País</option>
                <option value="Espana" selected >España</option>
                <option value="Andorra" >Andorra</option>
                <option value="Argentina" >Argentina</option>
                <option value="Bolivia" >Bolivia</option>
                <option value="Brasil" >Brasil</option>
                <option value="Chile" >Chile</option>
                <option value="Colombia" >Colombia</option>
                <option value="Costa_Rica" >Costa Rica</option>
                <option value="Cuba" >Cuba</option>
                <option value="Estados_Unidos" >Estados Unidos</option>
                <option value="Ecuador" >Ecuador</option>
                <option value="El_Salvador" >El Salvador</option>
                <option value="Guatemala" >Guatemala</option>
                <option value="Honduras" >Honduras</option>
                <option value="Mexico" >México</option>
                <option value="Nicaragua" >Nicaragua</option>
                <option value="Panama" >Panamá</option>
                <option value="Paraguay" >Paraguay</option>
                <option value="Peru" >Perú</option>
                <option value="Puerto_Rico" >Puerto Rico</option>
                <option value="Rep_Dominicana" >República Dominicana</option>
                <option value="Uruguay" >Uruguay</option>
                <option value="Venezuela" >Venezuela</option>
                <option value="Alemania" >Alemania</option>
                <option value="Belgica" >Bélgica</option>
                <option value="Australia" >Australia</option>
                <option value="Canada" >Canadá</option>
                <option value="Francia" >Francia</option>
                <option value="Italia" >Italia</option>
                <option value="Japon" >Japón</option>
                <option value="Portugal" >Portugal</option>
                <option value="Reino_Unido" >Reino Unido</option>
                <option value="Suiza" >Suiza</option>
                <option value="Taiwan" >Taiwan</option>
                <option value="Otro" >Otro</option>
              </select>
            <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC"> <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Provincia 
                : </font></b></font></div>
            <td width="179"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> 
              </font><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
              <input name="text10" type="text" value="<?php if(isset($t10))echo $t10; ?>" size="30">
              </font></b></font></font><font face="Arial, Helvetica, sans-serif">

              </font></b></font></font> </tr>
          <tr> 
            <td colspan="2" bgcolor="#FFFFCC"><font color="#FF0000" face="Arial, Helvetica, sans-serif"><font size="2"> 
              </font></font></td>
            <td colspan="2" bordercolor="#FFFFFF" bgcolor="#FFFFCC"><font color="#FF0000" face="Arial, Helvetica, sans-serif"><font size="2"><font size="2"> 
              </font></font></font> </tr>
          <tr> 
            <td colspan="4" bgcolor="#FFFFCC" height="24"> <div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif"> 
                <input type="submit" name="iniciar2" value="Nuevo usuario">
                </font> </div></td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
