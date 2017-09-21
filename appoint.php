	<?php
$link = mysqli_connect("localhost","root","") or die("Unable to Connect");
$result = mysqli_select_db($link,"test") or die("Unable to select database");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Appointment</title>
	<link rel="stylesheet" type="text/css" href="css/appoint_style.css"/>
</head>
<body >
	
	<div class="container">
		<form action="appoint1.php" method="POST">
			<br>	
			<pre ><font color=" #99ff99" size="5">                              MAKE AN APPOINTMENT                  </font></pre> 
			

			<pre>          Contact                             Department     </pre>
			<pre>   <input type="tel" name="Phone" required>            <select name="Department">    
  												<option value="CARDIOLOGY">CARDIOLOGY</option>
  												<option value="GYNAE">GYNAE</option>
  												<option value="ONCOLOGY">ONCOLOGY</option>
  												<option value="GENERAL PHYSICIAN">GENERAL PHYSICIAN</option>
											</select>   <!--<input type="Submit" name="submit1" value="Availability" class="submit">--></pre>

											
											
										
											
						<pre>          Patient's Name                          </pre>
			<pre>   <input type="text" name="Pname"   required>           </pre>								
			<pre>          Email                                     Gender </pre>
			<pre>   <input type="email" name="email"   >           <select name="Gender">
  												<option value="Male">Male</option>
  												<option value="Female">Female</option>
  												<option value="Others">Others</option> 
											</select></pre>
			<pre>         Symptoms                                   </pre>
			<pre>   <input type="text" name="symptoms" style="width:80%" required>             </pre>

			<pre>                                 <input type="Submit" value="Submit" name="Submit" class="submit"> </pre>
			
			
			
			
			<?php 
				
									//$link = mysqli_connect("localhost","root","") or die("Unable to Connect");

					if(isset($_POST['Submit'])){
						$D=$_POST['Department'];
						
							//$result = mysqli_select_db($link,"test") or die("Unable to select database");
							
							//$query = "Select * from doc where DEPARTMENT='$D'";
							//echo $query;
													//$P=$_POST['Pname'];
													//$C=$_POST['Contact'];
													

							//$query="Insert into registerApp values('$P','$D','$C')";
	//$sql=mysqli_query($link,$query);
	//$row=mysqli_fetch_assoc($sql);
	//echo $row["DOCTOR"].$row["START_TIMING"];
	
	}
	
	?>	
	
	
	<!--if(strcmp($row["PASSWORD"],$password)==0)
	{
		echo "SUCCESSFULL LOGIN <BR>"; 
			header('Location: homepage.php');            //Send browser to http://www.google.com
	}
	else
		echo "USER NOT REGISTERED<BR>";
	-->
	
							

							
						
						
						
				
		</form>
	</div>
</body>
</html>
