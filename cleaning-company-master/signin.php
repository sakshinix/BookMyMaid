<?php
//error_reporting(E_ALL);
session_start();
require_once("config.php");
if(isset($_SESSION['login_user']))
{
header("location:index.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$myusername=$_POST['email']; 
$mypassword=$_POST['password']; 
$password=md5($mypassword); // Encrypted Password
$sql="SELECT id FROM cust_regi WHERE email='$myusername' and pass='$password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];
$count=mysql_num_rows($result);

if($count==1)
{
$_SESSION['login_user']=$myusername;

header("location:index.php");
}
else 
{
echo "<h3>Your User Name or Password is invalid</h3>";

}
}
?>