<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/report.css">
</head>
<body>
	<div id="header">
		<img src="images/h1.jpg" id="header_img">
	</div>
	<div class="container">
		<br><u id="create"><font size="5">Submit Your Report</font></u><br><br>
		<hr><br><br>
		<form action="<?php $_PHP_SELF?>" method="POST" ecntype="multipart/form-data">
			<label style="color: #99ff99;position: absolute;left: 32%;text-shadow: 2px 2px black">Personal Information</label><br>
			<!--<hr style="position: absolute;margin-left: 15px;width: 250px"><br><br>--><br>
			<label>First Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="firstname" required=""><br>
			<label>Last Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="lastname" required=""><br>
			<label>Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="address" required=""><br>
			<label>Country&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="country" required=""><br>
			<label>State&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="state" required=""><br>
			<label>City&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="city" required=""><br>
			<label>Phone/Mobile&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="number" name="number" required=""><br>
			<label>Email Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="email" name="email" required=""><br><br><br>

			<label style="color: #99ff99;position: absolute;left: 32%;text-shadow: 2px 2px black">Your Comment</label><br><br>
			<!--<input id="comment" type="text" name="comment" placeholder="type your comment here"><br><br> -->
					<textarea name="comment" cols="60" rows="5" placeholder="comment here"></textarea>
<br><br>
			<label style="color:#99ff99;position: absolute;left: 32%;top: 173%;text-shadow: 2px 2px black">Attach Document</label><br><br>
			<u style="text-decoration: none;position: absolute;left: 33%;top: 180%">Document :</u> <input type="file" name="file" style="position: absolute;top: 180%;left: 43%"><br><br><br><br><br>
			<input class="btn-submit" type="submit" name="SIGNUP" value="SUBMIT REPORT" required="">
		<!--<div class="circle"><u><font face="verdana">&nbsp1</font></u></div>--></form>

	</div>
	<br><br><br><br>
	<div style="height: 30px;width: 100%;float: right;text-align: right;line-height: 0px;margin-right: 30px"><p>
	<font style="color: black;text-align: right;font-family: sans-serif;"><strong><u>Follow Us online</u></strong></font></p></div>
	<div style="width: 30px;height: 30px;margin-bottom: 40px">
		<a href="https://www.facebook.com/"><img src="images/fb.jpg" style="width: 30px;height: 30px;margin-left: 1190px;margin-bottom: 0px"></a>
	</div>
	<div style="width: 30px;height: 30px;margin-bottom: 20px">
		<a href="https://www.youtube.com/"><img src="images/yt.jpg" style="width: 40px;height: 40px;margin-left: 1190px;"></a>
	</div>
	<div style="width: 100%px;height: 60px;background-color: #7B68EE;color: black">
	<div ></div>
				<footer style="color: white;text-align: center;line-height: 60px;font-family: Open Sans;font-size: 15px;box-shadow: 0px -5px 5px ">
				Copyright © 2017 Losmolo Medical Services. All Rights Reserved.</footer>
	</div>
</body>
</html>
<?php
if(isset($_POST['SIGNUP'])){
	
	$Fname=$_POST['firstname'];
	$Lname=$_POST['lastname'];
	$Add=$_POST['address'];
	$State=$_POST['state'];
	$City=$_POST['city'];
	$No=$_POST['number'];
	$Comm=$_POST['comment'];
	$link = mysqli_connect("localhost","root","") or die("Unable to Connect");
	$result = mysqli_select_db($link,"test") or die("Unable to select database");
	$query = "insert into report values ('$Fname','$Lname','$Add','$State','$City','$No','$Comm')";
	$sql=mysqli_query($link,$query);
}
?>