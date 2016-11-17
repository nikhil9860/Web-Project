<html>

<body>
<?

if(!isset($_COOKIE["user"])) {  
    echo "Sorry, session expired !";
    header('Location:index.php');  
} else {  
    
} 

//$cuname=$_POST['uname'];
$cuname=$_COOKIE["user"]; 
$database="justride";
$username="root";
$password="";
 


$con=mysql_connect('localhost',$username,$password) or die("Unable to connect into database");
@mysql_select_db($database,$con) or die(" Unable to conect");


$qr="SELECT * FROM `bookings` WHERE `bname` = ('$cuname')";


$rt=mysql_query($qr);

 if(! $rt ) {
 		      //die('NO bookings found ' );
 		
 	  header('Location:Nobooking.php');
   }

   
   while($row = mysql_fetch_array($rt, MYSQL_ASSOC))   {

   	echo " <h3> Username : {$row ['bname']} <br> " . " Staring Date : {$row ['bsd']} <br> " ." Starting Time : {$row['bst']} <br>" ."Date End : {$row['bed']} <br> ". " End Time : {$row['bet']} <br> "." Expected kms : {$row['bekms']} <br> ". " Fare Rs : {$row['fare']} </h3> " ;


	}


mysql_close();


?>
	
	<form action="home.php">
	
		
		<input type="submit" value="home"></input>
	</form>

</body>

</html>