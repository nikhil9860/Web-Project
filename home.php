<? 

if(!isset($_COOKIE["user"])) {  
    echo "Sorry, session expired !";
    header('Location:index.php');  
} else {  
    
} 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Book your Self Driven Car Here</title>
<style type="text/css">
	
a{
	font-style: italic;
	float:right;
	padding-right: 14px;
	text-decoration : none ;
	font-size: 20px;

}

a:hover{
	font-size: 25px;
	color: red;
}

body{

	background-image: url("images/bmw.jpg");
 background-color:#f5f5f5;
}

nav{

	margin-bottom: 15px;
 
}	

h3{

	color:black;


}

</style>

</head>

<script type="text/javascript">
	
	function msg(){

		aler("logout");
	}


</script>

<body>

<nav>
<a href="logout.php">Logout</a>
	<a href="check.php">Check Booking</a>
	<a href="booking.php"> Booking</a>
	<a href="tariffs.php">Trariffs  </a>
	<a href="faqs.php">FAQs</a>
	

	
</nav>
&nbsp<h3 align="top" > Welcome User  
<? 

if(!isset($_COOKIE["user"])) {  
    echo "Sorry, cookie is not found!";  
} else {  
    echo $_COOKIE["user"];  
}  

?> Select your choice</h3>

</body>
</html>
