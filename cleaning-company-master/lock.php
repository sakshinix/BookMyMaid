<?php
session_start();
if(!isset($_SESSION['login_user']))
{
	header("Location:login.php");

}
include('config.php');
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select* from cust_regi where email='$user_check'");
/*$row=mysql_fetch_array($ses_sql);
 $img=$row['image'];
 //echo "$img";
 
 echo "</br></br>"."<center><img style='width:10%; margin-left:auto;  border-radius:50%;'src='photo/$img' ></center>"."</br></br>";*/
?>