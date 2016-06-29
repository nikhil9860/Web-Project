<html>

<body>

<?


$cuname=$_POST['uname']; 


$database="justride";
$username="root";
$password="";

$con=mysql_connect('localhost',$username,$password) or die("Unable to connect into database");
@mysql_select_db($database,$con) or die(" Unable to conect");


$qr="SELECT * FROM `bookings` WHERE `username` = ('$cuname')";


$rt=mysql_query($qr);

 if(! $rt ) {
      die('Could not get data: ' . mysql_error());
   }

   
   while($row = mysql_fetch_array($rt, MYSQL_ASSOC))   {

   	echo " <h3> Username : {$row ['username']} <br> " . " Staring Date : {$row ['dstart']} <br> " ." Starting Time : {$row['tstart']} <br>" ."Date End : {$row['dend']} <br> ". " End Time : {$row['tend']} <br> "." Expected kms : {$row['ekms']} <br> ". " Fare Rs : {$row['fare']} </h3> " ;


	}


mysql_close();


?>
	
	<form action="home.php">
		
		<input type="submit" value="home"></input>
	</form>

</body>

</html>