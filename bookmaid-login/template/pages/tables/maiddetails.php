<?php
//include "lock.php";
require_once "config.php";

 if(isset($_POST['view']))
		{ 
	$name=$_POST['name'];
{
	$q=mysql_query("SELECT * FROM details WHERE id='$id");
	$row=mysql_fetch_array($q);
	echo "<center><table broder='1'>
	
	<tr>
	<th>ID</th>
	<th>Profile</th>
	<th>Name</th>
	<th>Contact</th>
	<th>Address</th>
	<th>City</th>
	<th>Email</th>
	<th>Addhar card no</th>
	<th>Experience</th>
	<th>Gender</th>
	<th>Profession</th>
	<th>FIR Rrgistered</th>
	<th>No. of complaints registered</th>
	<th>Bank account number</th>
	<th>IFC code</th>
	<th>External Details</th>
	<th>Salary</th>
	</tr></center>";
	
	
	while($row=mysql_fetch_array($qry))
	{   
echo "<form action=maiddetails.php method=POST>";
        echo "<tr>";
		echo "<td>". $row["id"]."</td>";
		echo "<td>". $row["image"]."</td>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["mob_no"]."</td>";
		echo "<td>".$row["address"]."</td>";
		echo "<td>".$row["city"]."</td>";
		echo "<td>".$row["email"]."</td>";
		echo "<td>".$row["addhar"]."</td>";
		echo "<td>".$row["experience"]."</td>";
		echo "<td>".$row["gender"]."</td>";
		echo "<td>".$row["profession"]."</td>";
		echo "<td>".$row["fir_reg"]."</td>";
		echo "<td>".$row["no_of_comp"]."</td>";
		echo "<td>".$row["acc_no"]."</td>";
		echo "<td>".$row["ifc"]."</td>";
		echo "<td>".$row["detail"]."</td>";
		echo "<td>".$row["salary"]."</td>";
		echo "<tr>";
		echo "<td>" . "<input type=submit name=update value=update>" . " </td> ";
		echo "</tr>";
		echo "</form>";
		
	}
	
	echo "</table>";
	
}
		}
		
		
		
		if(isset($_POST['update']))
		{
		$id=$_POST['id'];
	  $image=$_POST['image'];
	  $name=$_POST['name'];
	  $mob_no=$_POST['mob_no'];
	  $address=$_POST['address'];
	  $city=$_POST['city'];
	  $email=$_POST['email'];
	  $addhar=$_POST['addhar'];
	  $experience=$_POST['experience'];
		$profession=$_POST['profession'];
		$fir_reg=$_POST['fir_reg'];
		$no_of_comp=$_POST['no_of_comp'];
		$acc_no=$_POST['acc_no'];
		$ifc=$_POST['ifc'];
		$detail=$_POST['detail'];
		$salary=$_POST['salary'];
	
		
		$edit=" UPDATE `details` SET image='$image',name='$name',mob_no='$mob_no',address='$address',city='$city',email='$email',addhar='$addhar',experience='$experience',profession='$profession',fir_reg='$fir_reg',no_of_comp='$no_of_comp',acc_no='$acc_no',ifc='$ifc',detail='$detail',salary='$salary' WHERE id='$id'";

	$e=mysql_query($edit);
		if($e)
		{
			
			header("location:Maidtable.php");
		}
		else
		{
			echo "NOt Update".mysql_error();
		}
		}
?>