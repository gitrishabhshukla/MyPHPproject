<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap\bootstrap-4.0.0-dist\css\bootstrap.min.css">
    <title>BIET JHANSI</title>
    <style type="text/css">
        .center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}
      body {
   background-image: url("imgbackground.jpg");
}

    </style>
  </head>
  <body>
  <!-- Logo -->
<div class="container-fluid" style="background-color: blue;">
    <div class="row">
      <div class="col-sm-3" style="background-color: blue;"><img src="biet-logo.jpg" width="100px" height="100px"><font style="font-size:40px; margin-left: 10px;">BIET Jhansi</font></div>
      <div class="col-sm-6" style="background-color:blue;"><font style="text-align: center; font-size: 28px;">Bundelkhand Institute Of Engineering & Tchnology</font><br><font style="font-size: 20px;">An Autonomous Institute funded by the U.P. Government<br></font><font style="font-size: 16px;">
      (APPROVED BY AICTE & NOT APPROVED FOR ACCREDIATION BY NBA)
      </font></div>
      <div class="col-sm-3" style="background-color:blue; padding-top: 10px;padding-left: 80px;"><h5>Helpline Number:<br>0510-2980211<br>For General Queries</h5></div>
      </div>
  </div>


  <!-- Navbar -->
   <nav class="navbar navbar-expand-md bg-light navbar-light">
    <pre>           </pre>
  <a class="navbar-brand" href="index.html">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">About Us</a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Governance</a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Academics</a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Departments</a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Training & Placements</a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Facility & Resources</a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Examination</a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Alumni</a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Contact Us</a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div> 
    </li>  
    </ul>
  </div>  
</nav>
 
   <!-- Body -->
  <div style="width:30%;margin: 0px auto;">
   <img src="imglogin.png" width="200px" height="200px" style="margin-left:110px;">
   <h2 style="text-align:center;">Student Login</h2>
    <div class="center-block" style="background-color:#ffffcc;border-radius:10px;padding:20px;">
  <form action="login_page.php" method="POST">
    <div class="form-group">
      <label for="rollNo"><b>Roll Number:</b></label>
      <input type="Number" class="form-control" id="rollNo" placeholder="Enter roll Number" name="rollNo" style="border:none;border-bottom:2px solid red;background-color:#ffffcc;">
    </div>
    <div class="form-group">
      <label for="pswd"><b>Password:</b></label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" style="border:none;border-bottom:2px solid red;background-color:#ffffcc;">
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <input type="submit" value="Login" name="submit" class="btn btn-success" />
  </form>
</div>
</div><br><br>
<div style="width:100%;">
				<div style="width:60%;float:left;padding-left:80px;background-color:black;padding-bottom:10px;">
				 <font color="white" style="font-size:15px;"> &copy; Copy right 2018 |<a href="#" style="color:white;">Privacy </a>| <a href="#" style="color:white;">Policy</a></font>
				</div>
				<div style="width:40%;float:left;background-color:black;padding-bottom:10px;padding-left:140px;">
					<font color="white"> Designed by</font> <a href="https://www.facebook.com/rishabhshukla.rks" style="color:#e65c00;">Rishabh</a> 
				</div>
  </div

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script  src="bootstrap\bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
    
</html>