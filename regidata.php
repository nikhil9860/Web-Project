
<!DOCTYPE html>
<html>
<head>
	<title>Booking done </title>
</head>
<body>
<?

//get user input
$userreg= $_POST['uname'];
$passreg= $_POST['pass'];
$regname=$_POST['name'];
$regsrname=$_POST['sname'];
$regaddr=$_POST['addtext'];
$regcity=$_POST['val'];
$regpin=$_POST['pintext'];
$regemailid=$_POST['email'];

//create local variable 

$take ="fale";
$database="justride";
$username="root";
$password="";

 if ($userreg && $passreg) {


	$con=mysql_connect('localhost',$username,$password) or die("Unable to connect into database");

	@mysql_select_db($database,$con) or die(" Unable to conect");

	mysql_query("INSERT into `users` VALUES ('$userreg','$passreg') ") or die("Strange error for user");
	
	mysql_query("INSERT into `info` VALUES ('$regname','$regsrname','$regaddr','$regcity','$regpin','$regemailid') ") or die("Strange error for into table");	



	
	echo " <h1>Account Created Plese Go to Home Page: <h1>";

	

	mysql_close($con);

	header("Location : index.html");

}

	else{

		echo"you need to have both username and password";


	}



	
?>

<form action="index.html" >
	
	<input type="submit" value="home"></input>

</form>
	

</body>



</html>
