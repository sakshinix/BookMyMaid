<?php
require_once("config.php");

if($_SERVER['REQUEST_METHOD']=="POST")


$cname=$_POST['c_name'];
$date=$_POST['date'];
$mob_no=$_POST['mob_no'];
$service=$_POST['service'];
$cleaner_name=$_POST['cleaner_name'];
$qry=mysql_query("INSERT INTO booking(`c_name`,`date`, `mob_no`, `service`, `cleaner_name`)VALUES('$cname','$date','$mob_no','$service','$cleaner_name')");
 
   if($qry==true){
	  //echo "Inserted";
	  header("location:index.php");
	
   }   
  
  
   else{
	   echo "REQUEST METHOD IS NOT POST";
   }
?>