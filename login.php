<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/login_style.css?ts=%3C?=time()?%3E&quot"/>
</head>
<body>
	<div class="container">
		<img src="blank.png">
		<form action="#" method="POST">
		
			<div class="form_input">
			
				&nbsp&nbsp&nbsp <input type="text" name="username" placeholder="Enter Username">
			</div>
			<div>
				&nbsp&nbsp&nbsp <input type="password" name="password" placeholder="Enter Password">
			</div>
			&nbsp&nbsp&nbsp&nbsp <input type="submit" name="submit" value="LOGIN" class="btn-login">
		</form><br>
		<!--<font face="verdana" color="white"><a href="#"> Forget password?</a></font><br><br>-->
		<font face="verdana" color="white"> <pre> Not a member?  </font> <a href="signup.php"><b>Sign Up!!</b></a></pre>
	</div>
	
	<?php 
	
	
	$link = mysqli_connect("localhost","root","") or die("Unable to Connect");

	if(isset($_POST['submit'])){
		
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$result = mysqli_select_db($link,"test") or die("Unable to select database");
	
	$query = "Select PASSWORD from medical where USERNAME='$username'";
	$sql=mysqli_query($link,$query);
	$row=mysqli_fetch_assoc($sql);
	echo $row["PASSWORD"];
	if(strcmp($row["PASSWORD"],$password)==0)
	{
		echo "SUCCESSFULL LOGIN <BR>"; 
			header('Location: homepage.php');            //Send browser to http://www.google.com
	}
	else
		echo "USER NOT REGISTERED<BR>";
	
	}
	?>
	
</body>
</html>