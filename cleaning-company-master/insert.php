<?php
include ("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $path= "photo/";
    $valid_formats=array("jpg","png","gif","JPG","bmp");
	$name=$_POST['name'];
	$uemail=$_POST['email'];
	$uname=$_POST['username'];
	$upass=md5($_POST['password']);
	$ucont=$_POST['cont'];
	$uadd=$_POST['address'];
	
	  $time=time();
	  $actual_img_name=$_FILES['img']['name'];
	  $reimg=$time.$actual_img_name;
	  $size=$_FILES['img']['size'];
	  $tmp=$_FILES['img']['tmp_name'];
	  $ext=explode(".",$actual_img_name);
	  //print_r($ext);
	  if(in_array($ext[1],$valid_formats)){
		  if(move_uploaded_file($tmp,$path.$reimg)){
			  
	$qry=mysql_query("INSERT INTO cust_regi(`image`, `name`, `mob_no`, `address`, `email`, `user_name`, `pass`) VALUES('$reimg','$name','$ucont','$uadd','$uemail','$uname','$upass')");
		  }
		  else {
			  
		  echo "not";
		  }
	  }
	   else {
			  echo "enter valid formates";
		  }
   if($qry==true){
	  //echo "Inserted";
	  header("location:index.php");
   }   
   else{
	   echo "not".mysql_error();
   }
  }
   else{
	   echo "REQUEST METHOD IS NOT POST";
   }
   
?>