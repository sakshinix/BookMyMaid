<?php
require_once ("config.php");

if($_SERVER['REQUEST_METHOD']=="POST")



$uname=$_POST['name'];
$sub=$_POST['subject'];
$mesg=$_POST['message'];
$uemail=$_POST['email'];
$qry=mysql_query("INSERT INTO cont_us(`full_name`, `subject`, `message`, `email`)VALUES('$uname','$sub','$mesg','$uemail')");
  
		  
     if($qry==true){
	  //echo "Inserted";
	  header("location:contact.php");
   }   
   else{
	   echo "not".mysql_error();
   }
   
?>