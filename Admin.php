<?php

$adminuser=$_POST['adminuser'];
$adminpassword=$_POST['adminpassword'];
$user ="root";
$password = "";
$database="justride";



$connect = mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or ("Database not found");
$query ="SELECT * FROM  `Admin` WHERE `user`='$adminuser'";
$querypass ="SELECT * FROM  `Admin` WHERE `password` ='$adminpassword'";

$result = mysql_query($query);
$resultpass = mysql_query($querypass);

$row = mysql_fetch_array($result);
$rowpass = mysql_fetch_array($resultpass);

$serveruser =$row['user'];
$serverpass =$rowpass['password'];

if($serveruser&&$serverpass){
		if(!$result){

			die("invalid");
		}

		echo"Database output";
		mysql_close();
		if($adminpassword == $serverpass){
			header('Location:AdminHome.php');

		}else{

			header('Location:Adminfail.php');
		}
		

	}


		else {

			echo "Incorrect ID & PassWord";
			header('Location:Adminfail.php');

		}



?>