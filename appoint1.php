<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/appoint_style.css"/>
</head>
<body>


<div class="container">
<center>
<br><br><br>
<?php

$link = mysqli_connect("localhost","root","") or die("Unable to Connect");


													$result = mysqli_select_db($link,"test") or die("Unable to select database");
if(isset($_POST['Department']))
{
													$D= $_POST['Department'];
													echo " DEPARTMENT: ".$D;
							$query = "Select * from doc where DEPARTMENT='$D'";
	$sql=mysqli_query($link,$query);
	$row=mysqli_fetch_assoc($sql);
	$DOC1=$row["DOCTOR"];
	$MON1=$row["MONDAY"];
	$TUE1=$row["TUESDAY"];
	$WED1=$row["WEDNESDAY"];
	$THU1=$row["THURSDAY"];
	$FRI1=$row["FRIDAY"];
	$SAT1=$row["SATURDAY"];
	$SUN1=$row["SUNDAY"];
	$STIME=$row['START_TIMING'];
	$ETIME=$row['END_TIMING'];
	
	echo "<br><br>";
	 echo "AVAILABLE DOCTOR : ".$DOC1."<BR>";
	echo "<br><br>";
	echo "DOCTOR'S WEEK :";
	$WEEK=array('MONDAY'=>$MON1,'TUESDAY'=>$TUE1,'WEDNESDAY'=>$WED1,'THURSDAY'=>$THU1,'FRIDAY'=>$FRI1,'SATURDAY'=>$SAT1,'SUNDAY'=>$SUN1);
	foreach($WEEK as $x=>$value){			
						if($value==1)
							echo " ".$x;
						}
						
	echo "<br><br> TIMINGS:".$STIME."-".$ETIME."<BR><BR>";					
}											
										?>
										
										<form action="appoint1.php" method="POST">
										<pre>                  <input type="SUBMIT" value="REGISTER APPOINTMENT" name="Submit" class="submit"> </pre><br>
										<pre>		<u><a href="appoint.php" >FIND A NEW DOCTOR</u></a>
										</center>
										</div>
										
										<?php

										$link = mysqli_connect("localhost","root","") or die("Unable to Connect");


											if(isset($_POST['Submit']))
												{
													$result = mysqli_select_db($link,"test") or die("Unable to select database");
													//$D= $_POST['Department'];

													$P=$_POST['Pname'];
													$C=$_POST['Contact'];
													
													$query="Insert into registerApp values('$P','$D','$C','$DOC1','$STIME')";
	
												
													
							//$query = "Select * from doc where DEPARTMENT='$D'";
	$sql=mysqli_query($link,$query);
	//$row=mysqli_fetch_assoc($sql);
												}
												?>
										</form>
										</body>
										</html>