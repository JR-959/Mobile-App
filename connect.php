<?php


//!-- Your connection information needs to go here, 
$hostname="localhost";
$username="jrikhisiboev_usn";
$password="9iH8py_6";
$dbname="jrikhisiboev330_db";
$usertable="ad_table";

$link = mysqli_connect($hostname, $username, $password);
   if(!$link){
      echo('bad connect');
   }
  else
  {
      //echo('good connect');
  }

if (!mysqli_select_db($link, $dbname))
{
	echo('no database selected'); 
	
}
else
{   
  //echo('database selected');  
}
?>