<?php

	
     if(isset($_POST['update']))
		{
		$id=$_POST['id'];
	    $img=$_POST['image'];
		$cname=$_POST['cname'];
		$mobile_no=$_POST['mob_no'];
		$addr=$_POST['address'];
		$mail=$_POST['email'];
		$u_name=$_POST['user_name'];
		
		
		
		$edit="UPDATE cust_regi SET image='$img',name='$cname',mob_no='$mobile_no',address='$addr',email='$mail',user_name='$u_name' WHERE id='$id'";
		
		
		$e=mysql_query($edit);
		if($e)
		{
			
			header("location:profile.php");
		}
		else
		{
			echo "NOt Update".mysql_error();
		}
		}
		
		
		
		
		
		profile display code*/
	//$search=$_POST['searchname'];
	$user_check=$_SESSION['login_user'];
	$qry=mysql_query("SELECT * FROM cust_regi WHERE email='$user_check' ");
	
	//$qry=mysql_query("SELECT * FROM cust_regi");
	
	echo "<center><table broder='1'>
	
     
	</center>";
	
	
	while($row=mysql_fetch_array($qry))
	{   
        echo "<form action=profile.php method=POST>";
		
		 echo "<tr>";
		echo "<th>image</th>";
		echo "<td>" . "<input type=file  name=image     value=" . $row['image'] ." </td>";
		echo "</tr>";
		
        echo "<tr>";
		echo "<th>cname</th>";
		echo "<td>" . "<input type=text  name=cname     value=" . $row['name'] ." </td>";
		echo "</tr>";
		
		 echo "<tr>";
		 echo "<th>mob_no</th>";
		echo "<td>" . "<input type=text name=mob_no  value=" . $row['mob_no'] . " </td>";
		echo "</tr>";
		
		 echo "<tr>";
		 echo "<th>address</th>";
		echo "<td>" . "<input type=text name=addr   value=" . $row['address'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th>email</th>";
		echo "<td>" . "<input type=text  name=email   value=" . $row['email'] . " </td>";
		echo "</tr>";
		
		
		echo "<tr>";
		echo "<th>user_name</th>";
		echo "<td>" . "<input type=text  name=uname   value=" . $row['user_name'] . " </td>";
		echo "</tr>";
		
		
		echo "<tr>";
		echo "<td>" . "<input type=hidden name=id value=" . $row['id'] . " </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>" . "<input type=submit name=update value=save>" . " </td> ";
		echo "</tr>";
		
		echo "</form>";
		
	}
	
	echo "</table>";
	

	


	 
?>