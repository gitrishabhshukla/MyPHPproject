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
  margin-right: auto;
  margin-left: auto;
  border-radius:20px;
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
  <div class="container" >
  <div style="padding:20px 40px 20px 40px;" class="center-block">
  <img src="loginimg.png" width="300px" height="90px" style="margin-left:400px;" >
  <form name="myForm" onsubmit="return formvalidations()" action="SignUp_page.php" method="post">
     <div class="form-group">
      <label for="name"><b>Name:</b></label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
    </div>
    <div class="form-group">
      <label for="rollNo"><b>Roll No:</b></label>
      <input type="text" class="form-control" id="rollNo" placeholder="Enter your Roll Number" name="rollNo" required>
    </div>
    <div class="form-group">
      <label for="email"><b>Email:</b></label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="branch"><b>Branch:</b></label>
      <input type="text" class="form-control" id="branch" placeholder="Enter Branch Name" name="branch" required>
    </div>
    <div class="form-group">
      <label for="year"><b>Year:</b></label>
      <input type="text" class="form-control" id="year" placeholder="Enter Year" name="year" required>
    </div>
    <div class="form-group">
      <label for="pwd1"><b>Password:</b></label>
      <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pwd1" required>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"><b> Remember me</b>
      </label>
    </div>
    <input type="submit" class="btn btn-primary" value="Register" name="submit" /> 
  </form>
</div>
</div><br><br>
    <div style="width:100%;">
				<div style="width:60%;float:left;padding-left:80px;background-color:black;padding-bottom:10px;">
				 <font color="white" style="font-size:15px;"> &copy; Copy right 2018 |<a href="#" style="color:white;">Privacy </a>| <a href="#" style="color:white;">Policy</a></font>
				</div>
				<div style="width:40%;float:left;background-color:black;padding-bottom:10px;padding-left:140px;">
					<font color="white"> Designed by</font> <a href="https://www.facebook.com/rishabhshukla.rks" style="color:#e65c00;">Rishabh,Tushar,Rajat,Anurag.</a> 
				</div>
  </div>
    
<script type="text/javascript">
   function formvalidations(){
	
	var Name = document.myForm.name.value;
	var RollNo = document.myForm.rollNo.value;
	var Email = document.myForm.email.value;
	var Branch = document.myForm.branch.value;
	var Password = document.myForm.pwd1.value;
	
	if(Name.length<2)
	{
		alert("please enter a valid name");
		return false;
	}
	if(RollNo.length!=10)
	{
		alert("please enter a valid roll number");
		return false;
	}
	 var atpos = Email.indexOf("@");
	  var dotpos = Email.lastIndexOf(".");
	  if(atpos<1 || (dotpos - atpos)<2){
	    alert("Please enter valid email id");
		document.myForm.email.focus();
		return false;
	  }
	  if(document.myForm.year.value.length>1)
	  {
		  alert("Please enter valid year");
		  return false;
	  }
	  var numbers = /^[1-4]+$/;
      if(document.myForm.year.value.match(numbers))
      {
      // alert('Your Registration number has accepted....');
       //document.form1.text1.focus();
      }
      else
      {
      alert('Please enter valid Year');
      //document.form1.text1.focus();
      return false;
      }
	  
	if(Branch.length<2)
	{
		alert("please enter a valid branch name");
		return false;
	}
	if(Password.length<8)
	{
		alert("Password should contain at least 8 character");
		return false;
	}
	
	return true;
	
}
   </script>  
</html>