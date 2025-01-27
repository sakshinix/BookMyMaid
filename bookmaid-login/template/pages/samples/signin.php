<?php
//error_reporting(E_ALL);
session_start();
require_once("config.php");
if(isset($_SESSION['login_user']))
{
//header("location:");
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$myusername=$_POST['name']; 
$mypassword=$_POST['password']; 
$password=md5($mypassword); // Encrypted Password
$sql="SELECT id FROM admin WHERE name='$myusername' and password='$password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];
$count=mysql_num_rows($result);

if($count==1)
{
$_SESSION['login_user']=$myusername;

header("location:../../index.php");
}
else 
{
	
echo "<html><h3>Your User Name or Password is invalid</h3></html>";

}

}
?>

<html>
<head><title>Sign IN</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$("#lform").validate({
		rules:{
			username:{
				required:true,
				email:true
				},
			   password:'required'
		},
		messages:{
			
			username:{
				required:'Please enter email',
				email:'Please enter valid email'
				
			},
			password:'Please enter password'
			
			
			},
		submitHandler:function(form){
			alert("Data is correct!");
			form.submit();
			
		}
		
	
	});
});
</script>
<link rel="stylesheet" href="style1.css">
</head>
<body background="" style="background-repeat:no-repeat;background-size:100% 100%;">


<center><form  id="lform" action="" method="post">
</br></br><center><img src="pic.png" width="150px" height="140px" style="border-radius:50%;" ></center></br>
<h4 class="card-title" style="color:blue"> <b><font size="+3">BOOK MY MAID</b></font></h4>
															<input type="text" name="name" id="name" placeholder="Name" required  autocomplete=off></br></br>
															
															<input type="password" name="password" id="password" placeholder="Password" required autocomplete="off"></br></br>
															
																<button type="submit" value="SIGN IN">SIGN IN</button></br></br>
													           </br></br></br></br>
															</form></center>
</body>
</html>