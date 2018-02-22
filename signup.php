<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" class="navbar-brand">FORTUNES SCOTT</a>
        
      </div>
      <ul class="nav navbar-nav">
     
      <li><a href="school.php" target="-blank">HOME</a></li>
       <li><a href="#" target="-blank">Sign Up</a></li>
      
      </ul>
    </div>
    <div class="jumbotron">
    <div class="container-fluid">
    	<h4>ENTER STUDENTS DETAILS</h4>
  
    	<br>
    	<form method="GET">
    	First Name  <input type="text" name="firstname" <span class="glyphicon glyphicon-user"></span>	<br>
    	Last Name   <input type="text" name="lastname"> <br>
    	Surname     <input type="text" name="surname"> <br>
    	D.O.B : <select>
 		<option value="January">January</option>
 		<option value="February">February</option>
 		<option value="March">March</option>
 		<option value="April">April</option>
 		<option value="May">May</option>
 		<option value="June">June</option>
 		<option value="July">July</option>
 		<option value="August">August</option>
 		<option value="September">September</option>
 		<option value="October">October</option>
 		<option value="November">November</option>
 		<option value="December">December</option>
 	</select>
 	Day:<input type="number" name="day" value="day">
 	</select>
 	year<input type="number" name="year" value="year"> <br>
 	Gender <br><input type="radio" name="Male" value="Male" checked="Male">Male <br>
 	<input type="radio" name="Female" value="Female" checked="Female">Female <br>
    	Parent's/Guardians name<input type="text" name="parentname"> <br>
    	 Parents Number<input type="number" name="parents no"> <br>
    	Email <input type="email" name="email"> <br>
      Password<input type="password" name="password">
      Confirm Password <input type="password" name="password">
    <button type="submit" class="btn-success">SUBMIT</button>
    <button type="reset" class="btn-danger">RESET</button>
  
    	</form>
       </div>
       </div>
    
  
  <?php 

$rw=$_GET['password'];
  $dw=$_GET['password'];
  if ($rw===$dw) {
    # code...
    echo "Welcome to Kade Academy";}
    else{
      #code...
      echo "password mismatch";
    };
  
echo "<br> ";

   ?>
    	

</body>
</html>