<!DOCTYPE html>
<html>
<head>
	<title>Car Booking Page </title>

	<link rel="stylesheet" type="text/css" href="stylefile.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
	<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet"> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">  
 </script>

	 <style type="text/css">

	body{

		background-color: #f5f5f5;
		font-family: cursive;
		font-size: 17px;
		word-spacing: 10px;
	}

	h1{

		font-size: 25px;
		text-align: center;
		color: blue;
		font-style: italic;

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

	function pop (){

		var re=document.f1.fare.value;
		if(re==0){

			alert("Booking cannot be done");
		}

	}

	</script>

</head>
<body>

<a href="home.php">Home</a>


<h1> Book Car of Your Choice and Ride ! </h1>


<form name="f1" action="book.php" method="post">

	
<!-- &nbsp Username:
<input type="text" name="uname"></input> 

 --><br>	


&nbsp Start Date :
<input type="date" name="sbd"></input> 
 &nbsp Time:
<input type="time" name="sbt"></input> 

<br>



&nbsp End Date : 
	<input type="date" name="ebd"></input> 
&nbsp	Time:
	<input type="time" name="ebt"></input> 

	<br>
	
&nbsp	Select Car: 
	<select name="car"> 
	<option value="13" name="xuv" >Xuv500</option> 
	<option value="12" name="strome">Strome</option>
	<option value="10" name="swift" >Swift</option></select>
	


	<br>

&nbsp	Expected Kms:
	<input type="number" name="kms" min="10" ></input> 
	<br>
&nbsp	Total Fare :
	<input type="" readonly="" name="fare" ></input>
	<br>
	<input type="submit" onclick="pop()" ></input>
	<input type="reset"></input> 

	<br>

</form>

		<button onclick="kmcal()" >Calculate</button>
		<button type="button" onclick="pay()" >Pay Online</button> 

</body>
</html>