<?php 
include("../../eMiKi/Codes/vblesession.php");
include("../../eMiKi/Funciones_PHP.php");

 ?>
<html><head><title>Validacion y creacion de usuarios</title>

</head>
	<script language='JavaScript' type='text/javascript'>
		function validarDatos_3(){	
			if ( Formulario_3.user.value==""){
				alert ("Falta usuario !!");
				return (false);
			}
			if ( Formulario_3.pwd.value==""){
				alert ("Falta password !!");
				return (false);
			}
		}
		function validarDatos(){
		
			var chivi=0;
			for (i=0; i < Formulario_2.state.length; i++)	if (Formulario_2.state.options[i].selected)chivi=1;
			
			if ( Formulario_2.text0.value=="" ) {
				alert ("Falta email !!");
				return (false); 
			}			else if ( Formulario_2.textp.value=="" ) {
				alert ("Falta password !!");
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
			}			else if (chivi==0){
				alert ("Seleccione Provincia !!");
				return (false); 
			}			else			{
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
<div align="center"><img src="../../images/index/abajo.jpg" width="770" height="71"></div>
<table align=center width="770" cellspacing="0" cellpadding="0" border="0" height="19">
  <tr> 
    <td height="24" bgcolor="#FFFFFF"> 
      <div align="center"></div>    </td>
  </tr>
</table>

<table align="center" width="770" cellspacing="0" cellpadding="0" border="0" height="11">
  <tr> 
    <td bgcolor="blue" height="13"> 
      <div align="center"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="5">Creacion de usuarios</font></b></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="yellow" width="700" height="8"> 
      
    </td>
  </tr>
  <tr> 
    <td width="534" height="8" bgcolor="#FFFFFF" wdith="517"><img src="../../_Cart_Pages/ValidationPages/images/x.gif" width="1" height="1"></td>
  </tr>
</table>

<table align=center width="770" cellspacing="0" cellpadding="1" border="0" height="280">
  <tr>
    <td bgcolor="#9999cc" height="305"> 
      <table align=center width="100%" cellspacing="0" cellpadding="0" border="0" height="76%">
        <tr>
          <td bgcolor="white" valign="top" height="331"> 
            <table cellspacing=20 border=0 align=center width=100% height="285">
              <tr> 
                <td width=68% valign=top height="289"><form action="createUser.php" name="Formulario_2" id="Formulario_2"  onSubmit="return validarDatos()" method="post" ><div align="center">
                  <table border="0">
                        <tr> 
                          <td width="15%" bgcolor="#FFFFCC"> 
                            <div align="right"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif">e-mail 
                              : </font></b></div>
                          </td>
                          <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
                            <input type="text" name="text0" id="text0" size="30" value="<?php if(isset($usr))echo $usr; ?>" >
                            </font></b></td>
                          <td bordercolor="#FFFFFF" bgcolor="#FFFFCC"> 
                            <div align="right"><font face="Arial, Helvetica, sans-serif"><b><font size="2">Password 
                              :</font> </b></font></div>
                          </td>
                          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
                            <div align="left"><b><font face="Arial, Helvetica, sans-serif"> 
                              <input type="text" name="textp" size="30" value="<?php if(isset($miki))echo $miki; ?>">
                              </font></b></div>
                          </td>
                        </tr>
                        <tr> 
                          <td width="15%" bgcolor="#FFFFCC"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Nombre 
                              : </font></b></font></div>
                          </td>
                          <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
                            <input type="text" name="text1" id="text1" size="30" value="<?php if(isset($t1))echo $t1; ?>" >
                            </font></b></td>
                          <td width="15%" bordercolor="#FFFFFF" bgcolor="#FFFFCC"> 
                            <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 
                              1 : </font></b></font></div>
                          </td>
                          <td width="35%"><b><font face="Arial, Helvetica, sans-serif"> 
                            <input type="text" name="text2" size="30" value="<?php if(isset($t2))echo $t2; ?>">
                            </font></b></td>
                        </tr>
                        <tr> 
                          <td width="115" bgcolor="#FFFFCC" height="29"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Telefono 
                              :</font></b></font></div>
                          </td>
                          <td width="221" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"> 
                            <input type="text" size="30" maxlength="50" name="text3"  value="<?php if(isset($t3))echo $t3; ?>">
                            </font></font></td>
                          <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Apellido 
                              2 : </font></b></font></div>
                          </td>
                          <td width="179" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> 
                            <input type="text" name="text4" size="30" value="<?php if(isset($t4))echo $t4; ?>">
                            </font></b></font></td>
                        </tr>
                        <tr> 
                          <td width="115" bgcolor="#FFFFCC" height="29"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C.I.F. 
                              / N.I.F. : </font></b></font></div>
                          </td>
                          <td width="221" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"> 
                            <input type="text" size="30" maxlength="50" name="text5" value="<?php if(isset($t5))echo $t5; ?>">
                            </font></font></td>
                          <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29"> 
                            <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2"><b>Empresa 
                              : </b></font></div>
                          </td>
                          <td width="179" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> 
                            <input type="text" name="text6" size="30" value="<?php if(isset($t6))echo $t6; ?>">
                            </font></b> </font></font></td>
                        </tr>
                        <tr> 
                          <td rowspan="2" bgcolor="#FFFFCC" width="115"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Dirección 
                              :</font></b></font></div>
                          </td>
                          <td rowspan="2" width="221"><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"> 
                            <textarea name="text7" cols="30" rows="2"><?php if(isset($t7))echo $t7; ?></textarea>
                            </font></b></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> 
                            </font></b> </font></td>
                          <td bgcolor="#FFFFCC" width="104"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C. 
                              P. : </font></b></font></div>
                          </td>
                          <td width="179"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> 
                            <input type="text" name="text8" size="30"  value="<?php if(isset($t8))echo $t8; ?>">
                            </font></b></font></font><font face="Arial, Helvetica, sans-serif"> 
                            </font></b> </font></td>
                        </tr>
                        <tr> 
                          <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Poblacion 
                              : </font></b></font><font face="Arial, Helvetica, sans-serif" color="#0000FF"></font></div>
                          </td>
                          <td width="179" height="32"><font color="#000066" size="2">&nbsp;</font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">&nbsp; 
                            </font><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"> 
                            </font></b></font><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> 
                            <input type="text" name="text9" size="30"  value="<?php if(isset($t9))echo $t9; ?>">
                            </font></b></font></td>
                        </tr>
                        <tr> 
                          <td width="115" bgcolor="#FFFFCC"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Pais 
                              : </b></font></div>
                          </td>
                          <td width="221"> 
                            <script language="JavaScript">
<!--
	var pais_=new Array("Selecciona Región");
	var pais_undefined=new Array("Selecciona Región");
    var pais_Espana=new Array("A Coruña","Alava","Albacete","Alicante","Almeria","Asturias","Avila","Badajoz","Baleares","Barcelona","Burgos","Cáceres","Cadiz","Cantabria","Castellón","Ceuta","Ciudad Real","Córdoba","Cuenca","Girona","Granada","Guadalajara","Guipúzcoa","Huelva","Huesca","Jaen","La Rioja","Las Palmas","León","Lleida","Lugo","Madrid","Málaga","Melilla","Murcia","Navarra","Orense","Palencia","Pontevedra","S. C. Tenerife","Salamanca","Segovia","Sevilla","Soria","Tarragona","Teruel","Toledo","Valencia","Valladolid","Vizcaya","Zamora","Zaragoza","Otra");
	var pais_Andorra=new Array("Andorra la Vella","Resto");
    var pais_Portugal=new Array("Aveiro","Azores","Baixo Alentejo","Beira Alta","Beja","Braga","Bragança","Castelo Branco","Coimbra","Douro","Estremadura","Faro","Guarda","Leira","Lisboa","Madeira","Oeiras","Portalegre","Porto","Santarem","Setubal","VilaReal","Viseu")
    
	var pais_Colombia=new Array("Amazonas","Antioquia","Arauca","Atlántico","Bolivar","Caquetá","Casanare","Cauca","Choco","Cesar","Cordoba","Guainia","Guaviare","Huila","La Guajira","Magdalena","Meta","Norte de Santander","Nariño","Putumayo","Santander","Santander","Sucre","Valle del Cauca","Vaupes","Vichada","Resto")

    var pais_Argentina=new Array("Buenos Aires","Capital Federal","Catamarca","Chaco","Chubut","Cordoba","Corrientes","Entre Rios","Formosa","Jujuy","La Pampa","La Rioja","Mendoza","Misiones","Neuquen","Patagonia","Rio Negro","Salta","San Juan","San Luis","Santa Cruz","Santa Fe","Santiago del Estero","Tierra del Fuego","Tucumán");
    var pais_Bolivia=new Array("Beni","Chuquisaca","Cochabamba","La Paz","Oruro","Pando","Potosí","Santa Cruz","Tarija");
    var pais_Brasil=new Array("Acre","Alagoas","Amapá","Amazonas","Bahia","Ceará","Distrito Federal","Espirito Santo","Goias","Maranhão","Mato Grosso","Mato Grosso do Sul","Minas Gerais","Paraíba","Pará","Paraná","Pernambuco","Piaui","Rio de Janeiro","Rio Grande do Norte","Rio Grande do Sul","Rondonia","Roraima","Santa Catarina","Sergipe","São Paulo","Tocantins")
    var pais_Chile=new Array("Antofagasta","Asién G. C. Ibáñez del Campo","Atacama","Biobio","Coquimbo","La Araucania","Los Lagos","Magallanes/A.chilena","Maule","Santiago","Tarapacá","Valparaiso/Rapa Nui");
    var pais_Cuba=new Array("Ciudad de la Habana","La Habana","Matanzas","Santiago de Cuba","Resto");
    var pais_Rep_Dominicana=new Array("Santo Domingo","Resto");
    var pais_Ecuador=new Array("Azuay","Chimborazo","Esmeraldas","Galapagos","Guayas","Imbabura","Loja","Manabi","Napo","Pichincha","Tungurahua");
    var pais_Guatemala=new Array("Antigua Guatemala","Guatemala","Huehuetenango","Jalapa","Sololá","Resto");
    var pais_Mexico=new Array("Aguascalientes","Baja California","Campeche","Chiapas","Chihuahua","Coahuila","Colima","Distrito Federal","Durango","Guanajuato","Guerrero","Hidalgo","Jalisco","Mexico","Michoacan de Ocampo","Morelos","Nayarit","Nuevo Leon","Oaxaca","Puebla", "Querétaro","Quintana Roo","San Luis Potosí","Sinaloa","Sonora","Tabasco","Tamaulipas","Tlaxcala","Veracruz-Llave","Yucatan","Zacatecas");
    var pais_Uruguay=new Array("Artigas","Canelones","Cerro Largo", "Colonia","Durazno","Flores","Florida","Interior","Lavalleja","Maldonado","Montevideo","Paysandú","Río Negro","Rivera","Rocha","Salto","San José","Soriano","Tacuarembó","Treinta y Tres");
    var pais_Panama=new Array("Boquete","Ciudad de Panamá","Colon","Paitilla","Resto");
    var pais_Nicaragua=new Array("Estelí","Granada","Jinotepe","León","Managua","Resto");
    var pais_Honduras=new Array("El Progreso","La Ceiba","San Pedro Sula","Tegucigalpa","Tela","Resto");
    var pais_El_Salvador=new Array("Colonia Escalón","San Salvador","Soyapango","Resto");
    var pais_Paraguay=new Array("Asunción","Resto");
    var pais_Peru=new Array("Arequipa","Callao","Chiclayo","Chimbote","Cuzco","Lima","Piura","Trujillo","Resto");
    var pais_Puerto_Rico=new Array("Bayamon","Caguas","Carolina","Mayagüez","San Juan","Resto");
    var pais_Estados_Unidos=new Array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado","Connecticut","Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois","Indiana","Iowa", "Kansas","Kentucky", "Louisiana","Maine", "Maryland","Massachussetts","Michigan","Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada","New Hampshire", "New Jersey", "New Mexico","New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma","Oregon","Pennsylvania","Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah","Vermont","Virginia", "Washington","Washington D.C.","West Virginia", "Wisconsin","Wyoming");
    var pais_Venezuela=new Array("Amazonas","Anzoategui","Apure","Arague","Barinas","Bolivar","Carabobo","Cojedes","Delta Amacuro","Distrito Federal","Falcon","Guarico","Lara","Merida","Miranda","Monagas","Nueva Esparta","Portuguesa","Sucre","Tachira","Trujillo","Yaracuy","Zulia");
	var pais_Costa_Rica=new Array("Alajuela","Cartago","Guanacaste","Heredia","Limon","Puntarenas","San Jose");
	var pais_Alemania=new Array("Berlín","Frankfurt","Munich","Stuttgart","Resto");
	var pais_Belgica=new Array("Bruselas","Resto");
	var pais_Australia=new Array("New South Wales", "Northern Territory", "South Australia", "Queensland", "Western Australia");
	var pais_Canada=new Array("Alberta","British Columbia", "Manitoba", "New Brunswick", "Nueva Escocia", "Nunavut", "Ontario","Quebec", "Saakatchewan", "Resto");
	var pais_Francia=new Array("Burdeos","Brest","Cherbourg","Corcega","Dijon","Grenoble","Lille","Limoges","Lyon","Marsella","Nancy","Nantes","Niza","Perpignan","Rouen","Toulouse","Toulon","Resto");
	var pais_Italia=new Array("Roma","Abruzzo","Basilicata","Calabria","Campania","Emilia-Romagna","Piemonte","Lombardía","Liguria","Lazio","Marche","Molise","Sicilia","Priuli-Venezia Giulia", "Sardegna", "Sudtirol","Toscana","Umbria","Valle d'Aosta","Veneto","Vaticano");
	var pais_Japon=new Array("Chubu","Chugoku","Hokkaido","Kanto","Kinki","Kyushu","Shikoku","Tohoku");
	var pais_Reino_Unido=new Array("Midlands","Northern England","N.Ireland & Eire","South East England","Scotland","Wales","West Country");
	var pais_Suiza=new Array("Bern","Geneva","Lausanne","Lucerne","Zurich","Resto");
	var pais_Taiwan=new Array("Taipei","Changhua","Chiayi","Hsinchu","Hualien","Ilan","Kaosiung","Miaoli","Nantou","Pingtung","Taichung","Tainan","Taitung","Taoyuan");
	var pais_Otro=new Array("Africa","America","Asia","Europa", "Pacífico");

function updateMenus(){
    var p;

    p=document.Formulario_2.country[document.Formulario_2.country.selectedIndex].value;

   seleccion=eval("pais_"+p);
    howmany=seleccion.length;
    document.Formulario_2.state.length=howmany;
    for(i=0;i<howmany;i++){
       document.Formulario_2.state.options[i].value=seleccion[i];
       document.Formulario_2.state.options[i].text=seleccion[i];
    }
}

function setSecMenu(){
	var p;

	i=document.Formulario_2.country.selectedIndex;
	if(i!=-1) {
		p=document.Formulario_2.country[i].value;

		seleccion=eval("pais_"+p);
		howmany=seleccion.length;
		document.Formulario_2.state.length=howmany;
		for(i=0;i<howmany;i++){
			document.Formulario_2.state.options[i].value=seleccion[i];
			document.Formulario_2.state.options[i].text=seleccion[i];
			document.Formulario_2.state.options[i].selected = false;
			if(seleccion[i]=="") 
				document.Formulario_2.state.options[i].selected = true;
		}
    }
}

// -->
</script>
                            <select name="country" size=2 onChange="javascript:updateMenus();">
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
                          <td width="104" bordercolor="#FFFFFF" bgcolor="#FFFFCC"> 
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Provincia 
                              : </font></b></font></div>
                          <td width="179"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> 
                            <select name="state" size=2>
                              <option value="">Selecciona Región</option>
                            </select>
<script language="JavaScript">
setSecMenu();
</script>
                            </font></b></font></font> </tr>
                        <tr> 
                          <td colspan="2" bgcolor="#FFFFCC"><font color="#FF0000" face="Arial, Helvetica, sans-serif"><font size="2"> 
                            </font></font></td>
                          <td colspan="2" bordercolor="#FFFFFF" bgcolor="#FFFFCC"><font color="#FF0000" face="Arial, Helvetica, sans-serif"><font size="2"><font size="2"> 
                            </font></font></font> 
                        </tr>
                        <tr> 
                          <td colspan="4" bgcolor="#FFFFCC" height="24"> 
                            <div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif"> 
                              <input type="submit" name="iniciar2" value="Nuevo usuario">
                              </font> </div>
                          </td>
                        </tr>
                      </table>
                      
                    </div>
                  </form> 
			    <p align="right"><font face="Arial, Helvetica, sans-serif"><a href="#"><img src="../../images/_Back.jpg" width="67" height="35" name="backy" onClick="backyF()" border="0"></a></font></p>                </td>
              </tr>
            </table>
          </td></tr>
	  </table>
	</td></tr>
</table>
<p align="center">
  <?php include ( "../../eMiKi/page.parts/down.php" ) ; ?>
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
