<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="css/signup_sheet.css">
</head>
<body>
	<div class="container">
<form action="signup.php" method="POST">
		<br><u><font size="5">Create An Account</font></u><br><br><br>
		<label>Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input type="text" name="Username" required=""><br>
		<label>Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input type="password" name="Password" required=""><br>
		<!--<label>Confirm Password</label>
		<input type="password" name="confirm" required=""><br>-->
		<label>Date Of Birth&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input type="Date" name="DOB" required=""><br>
		<label>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input type="Email" name="Email"><br>
		<label>Gender</label>
		<input type="radio" name="Gender" value="Female" checked> FEMALE<br>
		&emsp;&emsp;&emsp;&emsp;&ensp;
		<input type="radio" name="Gender" value="Male">         MALE<br>
		&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
		<input type="radio" name="Gender" value="Others">OTHERS<br><br>
		<label>Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input type="text" name="Address"><br>
		<label>Pincode&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input type="number" name="Pin"><br>
		<label>Contact&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input type="number" name="Contact" maxlength="10" required=""><br><br>
		<input class="btn-signup" type="submit" name="SIGNUP" value="SIGN UP" required="">
		<!--<div class="circle"><u><font face="verdana">&nbsp1</font></u></div>--></form>
	</div><br><br>
	<?php 
	if(isset($_POST['SIGNUP'])){
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$dob=$_POST['DOB'];
	$email=$_POST['Email'];
	$gender=$_POST['Gender'];
	$address=$_POST['Address'];
	$pin=$_POST['Pin'];
	$contact=$_POST['Contact'];
	
	$link = mysqli_connect("localhost","root","") or die("Unable to Connect");
	/*if($link)
		echo "success <br>";
	else
		echo "Unable to connect <br>";*/
	$result = mysqli_select_db($link,"test") or die("Unable to select database");
	/*if($result)
	echo "success";
	else
	echo "Unable to select";*/
	$query = "create table medical (Username varchar(20),Password varchar(20),DOB date,Address varchar(50),Gender varchar(10),Pin int(6),Contact bigint(15))";
	$res = mysqli_query($link,$query);
	if($res)
		echo "Table created";
	else
		echo "table not created";
	$query1="insert into medical values ('".$username."','".$password."','".$dob."','".$address."','".$gender."', $pin, $contact)";
	mysqli_query($link,$query1);
	
	}
	?>
	
	<a href="login.php"><input type="SUBMIT" name="LOGIN" value="BACK" class="btn-signup"></a>
	<!--<footer>PAGE CREATED BY</footer>-->
	
</body>
</html>