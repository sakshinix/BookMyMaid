<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("location:signin.php");
}
include('config.php');
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select * from admin where name='$user_check'");

//$row=mysql_fetch_array($ses_sql);

?>