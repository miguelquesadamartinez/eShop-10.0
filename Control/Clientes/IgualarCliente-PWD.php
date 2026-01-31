<html><head><title>Clientes</title></head>
<?
include("../../images/productos/Funciones_PHP.miki");
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
$link_2=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link_2) ;
$link_3=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_net",$link_3) ;
?>
<body bgcolor="#FFFFFF" text="#000000">
<div align="center"></div>
<table width="654" border="1" height="45" align="center">
  <tr> 
    <td width="644" height="39"> <div align="center"> 
        <div align="right"> <font face="Arial, Helvetica, sans-serif" color="#0000FF"> 
<?php
		 echo "<table width='100%' border='1'>";

		 $result=mysql_query("Select email From Clientes",$link);	
		  while($row = mysql_fetch_array($result)) 
		  {
		  	$variable=$row["email"];
			$result_2=mysql_query("Select * From Datas where mail = '" . $variable . "'" ,$link_2);
			$row_2 = mysql_fetch_array($result_2);
			$tmpy = $row_2["mail"] ;
			
			if ($tmpy == "")
			{
				mysql_query("Delete From Clientes where email = '" . $variable . "'" ,$link);  
			}

		 }
		 $result=mysql_query("Select mail From Datas",$link);	
		  while($row = mysql_fetch_array($result)) 
		  {
		  	$variable=$row["mail"];
			$result_2=mysql_query("Select * From Clientes where email = '" . $variable . "'" ,$link_2);
			$row_2 = mysql_fetch_array($result_2);
			$tmpy = $row_2["email"] ;
			
			if ($tmpy == "")
			{
				mysql_query("Delete From Datas where mail = '" . $variable . "'" ,$link);  
			}
			$counter = 0 ;
			$counter_2 = 0 ;
			$result_3=mysql_query("Select * From Clientes " ,$link_3);  
				while($row_3 = mysql_fetch_array($result_3)) 
			  	{
					/*$tmpm = $row_3["email"] ;
					$result_2=mysql_query("Select * From Datas where mail = '" . $tmpm . "'" ,$link_2);
				 	$row_2 = mysql_fetch_array($result_2);
					if ($row_2["otro"]="")echo $counter . ". " . $tmpm . " <--> " . $row_2["mail"] . " / " . $row_2["otro"] . "<BR>" ;*/
				$counter = $counter + 1 ;
				}
		
			$result_2=mysql_query("Select * From Datas " ,$link_2);  
				while($row_2 = mysql_fetch_array($result_2)) 
			  	{
				 	$counter_2 = $counter_2 + 1 ;
				}
		  }
		echo $counter . " <-Clientes - Datas -> " . $counter_2 ;
		  echo "</table>";
		  /*
		  esto es lo antiguo
		  // Buscamos usuarios con mas de dos PWD´s
		  $result=mysql_query("Select email From Clientes",$link);	
		         
		  echo "<table width='100%' border='1'>";
		  while($row = mysql_fetch_array($result)) 
		  {
		  		$variable=$row["email"];	
				$counter=0; 
				$result_3=mysql_query("Select * From Datas where mail = '" . $variable . "'" ,$link_3);  
				while($row_3 = mysql_fetch_array($result_3)) 
			  	{
				 	$counter = $counter + 1 ;
				}
				
				if ($counter > 1 )
				{
				    $result_2=mysql_query("Select * From Datas where mail = '" . $variable . "'" ,$link_2);
			  		echo "<tr>";
			  			echo "<td>";
			  			echo $row["email"];
		  				echo "</td>";
					while($row_2 = mysql_fetch_array($result_2)) 
			  		{ 
			  				echo "<td>";
			  				echo $row_2["otro"];
			  				echo "</td>";
			  		}
				}
          		echo "</tr>";			
		  }	
		  echo "</table>";
						
		$result=mysql_query("Delete From Datas where otro = ''" ,$link);  
		
		$counter = 0 ;
		$result_3=mysql_query("Select * From Clientes " ,$link_3);  
				while($row_3 = mysql_fetch_array($result_3)) 
			  	{
				 	$counter = $counter + 1 ;
				}
		echo $counter ;
		
		$counter = 0 ;
		$result_3=mysql_query("Select * From Datas " ,$link_3);  
				while($row_3 = mysql_fetch_array($result_3)) 
			  	{
				 	$counter = $counter + 1 ;
				}
		echo " <-Clientes - Datas -> " . $counter ;
		*/
?>
          </font><font face="Arial, Helvetica, sans-serif" color="#0000FF"> </font> 
        </div>
      </div></td>
  </tr>
</table>
