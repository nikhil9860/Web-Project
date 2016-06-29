<?

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];
$user ="root";
$password = "";
$database="justride";

$connect = mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or ("Database not found");
$query ="SELECT * FROM  `users` WHERE `user`='$inputuser'";
$querypass ="SELECT * FROM  `users` WHERE `password` ='$inputpass'";

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
		if($inputpass == $serverpass){
			header('Location:home.php');

		}else{

			header('Location:fail.php');
		}
		

	}


		else {

			echo "Incorrect ID & PassWord";
			header('Location:fail.php');

		}

	// header('Location:fail.php');

 
	

?>