<!DOCTYPE html>
<html>
<body>

<?

$bname=$_POST['uname'];
$bsd=$_POST['sbd'];
$bst=$_POST['sbt'];
$bed=$_POST['ebd'];
$bet=$_POST['ebt'];
$bc=$_POST['car'];
$bekms=$_POST['kms'];
$bf=$_POST['fare'];

$database="justride";
$username="root";
$password="";



$con=mysql_connect('localhost',$username,$password) or die("Unable to connect into database");
@mysql_select_db($database,$con) or die(" Unable to conect");
mysql_query("INSERT into `bookings` VALUES ('$bname','$bsd','$bst','$bed','$bet','$bc','$bekms','$bf')") or die("Strange error");

	echo "<center><h1>Booking completed Click on Home Button to visit Home Page  or Logout</h1></center>";



mysql_close($con);

?>

<form action="home.php" method="post">
	<center>	
<input type="submit"></input>
	</center>

</form>

<br>

<form action="index.html" method="post">
	<center>	
<input type="submit" value="logout"></input>
	</center>

</form>
		





</body>
</html>