<?php
include "lock.php";
require_once ("config.php");


	if(isset($_POST['view']))
		{ 
	$name=$_POST['name'];
	$q=mysql_query("SELECT * FROM details WHERE name='$name'");
	$row=mysql_fetch_array($q);
 $img=$row['image'];
 //echo "$img";
 
 echo "</br></br>"."<hr style='height:10px;background:white;'><center><img style='width:auto;display=block;margin-left:auto;margin-right:auto;' src='uploads/$img' ></center>"."</br></br>";
   
		}
		else 
		{
			echo "Image not available";
		}
?>
<html>
<body>
<center>
<button><a href="services.php">Back</a></button>
</center>
</body>
</html>