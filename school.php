<!DOCTYPE html>
<html>
<head>
	<title> home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" class="navbar-brand">KADE ACADEMY</a>
        
      </div>
      <ul class="nav navbar-nav">
      <li><a href="#" target="-blank">Home</a></li>
      <li><a href="login.php" target="-blank">Log In</a></li>
      </ul>
    </div>
  </nav>
	<div class="jumbotron">
		<div class="container-fluid">
				<img src="pictures/FB.jpg" width="1000px" height="200px">
			<h3><span style="color:blue "> SCHOOL MOTTO- TO THE HEIGTS BY HARD WORK</span></h3>
			<h3>SCHOOL VISION- To nurture children into responsible members of the society</h3>
			<br>
			<br>

			<br>
			<h4> <span style="color:brown">ENTER STUDENT'S MARKS</span></h4>
			<form method="GET">

				MATHS      : <input type="number" name="MATHS"> <br>
				ENGLISH    : <input type="number" name="ENGLISH"> <br>
				KISWAHILI  : <input type="number" name="KISWAHILI"> <br>
				BIOLOGY    : <input type="number" name="BIOLOGY"> <br>
				CHEMISTRY  : <input type="number" name="CHEMISTRY"> <br>
				PHYSICS    : <input type="number" name="PHYSICS"> <br>
				GEOGRAPHY  : <input type="number" name="GEOGRAPHY"> <br>
				COMPUTER   : <input type="number" name="COMPUTER"> <br>
            <button type="submit" class="btn-success">SUBMIT</button>
  	<button type="reset" class="btn-danger">RESET</button>
        
			</form>

			
		</div>
		
	</div>
	<br>
	<?php 

	$eng=$_GET["ENGLISH"];
	$mat=$_GET["MATHS"];
	$kis=$_GET["KISWAHILI"];
	$bio=$_GET["BIOLOGY"];
	$chem=$_GET["CHEMISTRY"];
	$phy=$_GET["PHYSICS"];
	$geo=$_GET["GEOGRAPHY"];
	$comp=$_GET["COMPUTER"];


    $average=($eng+$mat+$kis+$bio+$chem+$chem+$phy+$geo+$comp)/8;
    $fin_avg=$average*0.8;
    echo $average;
    echo "<br>";
    
	 
	 if ($average>=80) {
	 	# code...
	 	echo " A";
	 } elseif ($average>=75) {
	 	# code...
	 	echo "A-";
	 } elseif ($average>=70) {
	 	# code...
	 	echo "B+";
	 }elseif ($average>=65) {
	 	# code...
	 	echo "B";
	 } elseif ($average>=60) {
	 	# code...
	 	echo "B-";
	 } elseif ($average>=55) {
	 	# code...
	 	echo "C+";
	 }elseif ($average>=50) {
	 	# code...
	 	echo "C";
	 }elseif ($average>=45) {
	 	# code...
	 	echo "D+";
	 }elseif ($average>=40) {
	 	# code...
	 	echo "D";
	 }elseif ($average>=35) {
	 	# code...
	 	echo "D-";
	 }else{
	 	# code...
	 	echo "E";
	 }

	 ?>				
	

</body>
</html>
