<?php

include "config.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
	
	$user_name=$_POST['u_name'];
	$mail=$_POST['email'];
	$pass=md5($_POST['pass']);
	
	    $sql="SELECT id FROM cust_regi WHERE  email='$mail' AND user_name='$u_name'";
		$result=mysql_query($sql);
		//$row=mysql_fetch_array($result);
		
		$count=mysql_num_rows($result);
		
		if($count==1)
		{
			$edit=mysql_query("UPDATE cust_regi SET pass='$pass' WHERE user_name ='$u_name' AND email='$mail'") OR die(mysql_error());
	     //echo $edit;
	     if($edit == true)
	    {
	 	      echo "<h3>update</h3>";
	    }
		}
		else{
			echo "<h3>User name or email is invalid </h3>";
		}
		
	

}
?>