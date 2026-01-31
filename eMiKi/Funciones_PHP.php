<?php 
/*function calcular_portes($medio, $destino, $flete, $baf, $ton, $m3)
{
$var_medio = $medio;
$var_destino = $destino;
$var_flete = $flete;
$var_baf = $baf;
$var_ton = $ton ;
$var_m3 = $m3 ;	

if ( $m3 < 1 )
{
	$var_ton = 1 ;
	$var_m3 = 1 ;	
} 	
		
$res_11 = $flete * $ton ;
$res_12 = $baf  * $ton ;

$fin_1 = $res_11 + $res_12 ;

$res_21 = $flete * $m3 ;
$res_22 = $baf  * $m3 ;
		
$fin_2 = $res_21 + $res_22 ;

if ( $fin_1 > $fin_2 ) 
{
	$parte_1 = $fin_1 ;
}
else
{
	$parte_1 = $fin_2 ;
}

$parte_2 = 18 * $m3 ;
$parte_2 = $parte_2 + 40;
$parte_2 = $parte_2 +( 3 * $ton);
$parte_2 = $parte_2 + 40;
$parte_2 = $parte_2 + 21;
$parte_2 = $parte_2 + 30;

if ($parte_2 < 139) $parte_2 = 139;

$total = $parte_1 + $parte_2 ;

return $total;
}*/


function emi ($address)
{
	if( ereg( ".*<(.+)>", $address, $regs ) ) {
		$address = $regs[1];
	}
 	if(ereg( "^[^@  ]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9\-]{2}|net|com|gov|mil|org|edu|int|biz)\$",$address) ) 
 		return true;
 	else
 		return false;
}

function conectarse() 
{ 
   if (!($link=mysql_connect("localhost","nelosa_nelosa","mqm1804"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db("nelosa_nelosa",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 

function Get_Ip ()
{
  function iptype1 () 
  {
   if (getenv("HTTP_CLIENT_IP")) 
     {
      return getenv("HTTP_CLIENT_IP");
     }
   else 
    {
      return "none";
    }
  }
  function iptype2 () 
  {
    if (getenv("HTTP_X_FORWARDED_FOR")) 
     {
      return getenv("HTTP_X_FORWARDED_FOR");
     }  
   else  
     {
      return "none";
     }
  }
  function iptype3 ()
  {
    if (getenv("REMOTE_ADDR")) 
      {
        return getenv("REMOTE_ADDR");
      }
    else 
      {
        return "none";
      }
  }
  
 function ip() {
    $ip1 = iptype1();
    $ip2 = iptype2();
    $ip3 = iptype3();
    if (isset($ip1) && $ip1 != "none" && $ip1 != "unknown") {
      return $ip1;
    } else if (isset($ip2) && $ip2 != "none" && $ip2 != "unknown") {
      return $ip2;
    } else if (isset($ip3) && $ip3 != "none" && $ip3 != "unknown") {
      return $ip3;
    } else {
      return "none";
    }
  }
  return $ipaddress = ip();
}
?>