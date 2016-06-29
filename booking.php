<!DOCTYPE html>
<html>
<head>
	<title>Car Booking Page </title>

	<style type="text/css">

	body{

		background-color: #f5f5f5;
		font-family: cursive;
		font-size: 23px;
		word-spacing: 10px;
	}

	h1{

		font-size: 30px;
		text-align: center;
		color: blue;
		font-style: italic;

	}

	a{
	font-style: arial;
	float:right;
	padding-right: 14px;
	text-decoration : none ;
	font-size: 22px;
	font-family: serif;

}

	</style>

	<script type="text/javascript">
		

	function namecheck(){

		a = document.f1.uname.value.length;

		if(a==0){

			alert("Username cannot be blank");
		}


	}

	function kmcal(){

		var rate =document.f1.car.value;
		var price =document.f1.kms.value;
		var result =price * rate;
		document.f1.fare.value=result;

	}

	function pay(){


		window.location="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=PTB7BR9EJUVD8";

	}

	</script>

</head>
<body>

<a href="home.php">Home</a>


<h1> Book Car of Your Choice and Ride ! </h1>


<form name="f1" action="book.php" method="post">

	
Username:
<input type="text" name="uname" onblur="namecheck()"></input> 

<br>	


	Start Date :
<input type="date" name="sbd"></input> 
 Time:
<input type="time" name="sbt"></input> 

<br>



	End Date : 
	<input type="date" name="ebd"></input> 
	Time:
	<input type="time" name="ebt"></input> 

	<br>
	
	Select Car: 
	<select name="car"> 
	<option value="13" name="xuv" >Xuv500</option> 
	<option value="12" name="strome">Strome</option>
	<option value="10" name="swift" >Swift</option></select>
	


	<br>

	Expected Kms:
	<input type="number" name="kms" min="10" ></input> 
	<br>
	Total Fare :
	<input type="" readonly="" name="fare" ></input>
	<br>
	<input type="submit"></input>
	<input type="reset"></input> 

	<br>

</form>

		<button onclick="kmcal()" >Calculate</button>
		<button type="button" onclick="pay()" >Pay Online</button> 

</body>
</html>