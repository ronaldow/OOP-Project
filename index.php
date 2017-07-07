<?php
	require "login.php";
	
	$login = new Login();
	$login->
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kitchen Network</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>
  <body>

<form class="form-inline" action="login.php" method="POST" >
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="Username" placeholder="Username">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="Password" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button class="btn btn-default">Log in</button>
</form>
	
  <h2>Create a new account</h2>
  <h6>Choose User Type:</h6>

<form class="form-inline" action="index_coba.php" method="post">
<select class="form-control" id="UserType">
    <option>Horeka</option>
    <option>Chef/Student</option>
    <option>Food Blogger</option>
</select>
  <br><br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">First Name</label>
    <input type="text" class="form-control" id="FirstName" placeholder="First Name">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Last Name</label>
    <input type="text" class="form-control" id="LastName" placeholder="Last Name">
  </div>
  <br>
  <div class="form-group">
    <input type="date" class="form-control" id="DateofBirth" placeholder="Birthday">
  </div>
  <br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Address</label>
    <input type="text" class="form-control" id="Address" placeholder="Address">
  </div> 
  <br>
  <div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="Gender" value="Male" checked>
    Male
  </label>
  </div>
  <div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="Gender" value="Female">
    Female
  </label>
  </div>
  <div class="radio disabled">
  <label>
    <input type="radio" name="optionsRadios" id="Gender" value="Other" disabled>
    Other
  </label>
  </div>
  <br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Phone Number</label>
    <input type="text" class="form-control" id="PhoneNumber" placeholder="Phone Number">
  </div> 
  <br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="Email" placeholder="Email Address">
  </div>
  <br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Username</label>
    <input type="text" class="form-control" id="Username" placeholder="Username">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="Password" placeholder="New Password">
  </div>
  <br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Horeka Name</label>
    <input type="text" class="form-control" id="CompanyName" placeholder="Horeka Name">
  </div>
  <br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Horeka Address</label>
    <input type="text" class="form-control" id="CompanyAddress" placeholder="Horeka Address">
  </div>  
  <br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Horeka Phone</label>
    <input type="text" class="form-control" id="OfficePhoneNumber" placeholder="Horeka Phone">
  </div>  
  <br>
  <br>
  <button type="submit" class="btn btn-default">Sign Up</button>
</form>

  </body>
</html>