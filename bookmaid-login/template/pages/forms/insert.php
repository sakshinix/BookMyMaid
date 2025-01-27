<?php
error_reporting(0);
require_once("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$path= "uploads/";
    $valid_formats=array("jpg","png","gif","JPG","bmp","jpeg","pdf");
	
	$a=$_POST['name'];
	$b=$_POST['mob_no'];
	$c=$_POST['address'];
	$d=$_POST['city'];
	$e=$_POST['email'];
	$f=md5($_POST['password']);
	$g=$_POST['addhar'];
    $h=$_POST['experience'];
	$i=$_POST['gender'];
	$j=$_POST['profession'];
	$k=$_POST['fir-reg'];
	$l=$_POST['no_of_comp'];
	$m=$_POST['acc_no'];
	$n=$_POST['ifc'];
	$o=$_POST['detail'];
	$p=$_POST['salary'];
	
	 
      $time=time();
	  $actual_img_name=$_FILES['img']['name'];
	  $reimg=$time.$actual_img_name;
	  $size=$_FILES['img']['size'];
	  $tmp=$_FILES['img']['tmp_name'];
	  $ext=explode(".",$actual_img_name);
	  
	  $time1=time();
	  $actual_img_name1=$_FILES['img1']['name'];
	  $reimg1=$time1.$actual_img_name1;
	  $size1=$_FILES['img1']['size'];
	  $tmp1=$_FILES['img1']['tmp_name'];
	  $ext1=explode(".",$actual_img_name1);
	  in_array($ext1[1],$valid_formats);
	  move_uploaded_file($tmp1,$path.$reimg1);
	  
	   $time2=time();
	  $actual_img_name2=$_FILES['img2']['name'];
	  $reimg2=$time2.$actual_img_name2;
	  $size2=$_FILES['img2']['size'];
	  $tmp2=$_FILES['img2']['tmp_name'];
	  $ext2=explode(".",$actual_img_name2);
	  in_array($ext2[1],$valid_formats);
	  move_uploaded_file($tmp2,$path.$reimg2);
	  //print_r($ext);
	  if(in_array($ext[1],$valid_formats)){
		  if(move_uploaded_file($tmp,$path.$reimg)){	 
	
$qry=mysql_query("INSERT INTO details ( `image`, `name`, `mob_no`, `address`, `city`, `email`, `password`, `addhar`, `experience`, `gender`, `profession`, `fir-reg`, `no_of_comp`, `acc_no`, `ifc`, `detail`, `salary`, `addhar_pdf`, `criminal_pdf`)
VALUES('$reimg','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$reimg1','$reimg2')");
		}
		else {
			  
		  echo "not";
		  }
	  
	   }
	   else {
			  echo "enter valid formates";
		  }
	 		  
if($qry==true)
{
	 header("location:../../pages/forms/registration.php");
	//echo"data inserted";

	
}
else
{
	echo"not".mysql_error();
}
}
else
{
	echo"Request method is not POST";
}
?>