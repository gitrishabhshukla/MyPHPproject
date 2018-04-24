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
<div class="container-fluid" style="background-color: #66ccff;">
   <div class="row">
     <img src="logoofficial.png" width="100%" height="100px;" />
  </div>


 <!-- Navbar -->
   <nav class="navbar navbar-fixed-top navbar-expand-md bg-light navbar-light">
    <pre>   </pre>
 <a class="navbar-brand" href="index.html">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><b>About Us</b></a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">About Institute</a>
        <a class="dropdown-item" href="#">Vission & Mission</a>
        <a class="dropdown-item" href="#">Rules and Regulations</a>
        <a class="dropdown-item" href="#">BIET Logo</a>
        <a class="dropdown-item" href="#">Institut Brochure</a>
        <a class="dropdown-item" href="#">Infrastructure</a>
        <a class="dropdown-item" href="#">Accrediation</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><b>Governance</b></a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Director</a>
        <a class="dropdown-item" href="#">Board of Governors</a>
        <a class="dropdown-item" href="#">Finance Committee</a>
        <a class="dropdown-item" href="#">Academic Committee</a>
        <a class="dropdown-item" href="#">Student Affairs Committee</a>
        <a class="dropdown-item" href="#">Training & Placement Officer</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><b>Departments</b></a>
         <div class="dropdown-menu">
         <a class="dropdown-item" href="#">Information Technology</a>
        <a class="dropdown-item" href="#">Computer Science</a>
        <a class="dropdown-item" href="#">Mechanical Enginering</a>
        <a class="dropdown-item" href="#">Civil Enginering</a>
        <a class="dropdown-item" href="#">Chemical Enginering</a>
        <a class="dropdown-item" href="#">Electrical Enginering</a>
        <a class="dropdown-item" href="#">Electronics & Communication Enginering</a>
      </div>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><b>Academics</b></a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Academic Programmes</a>
        <a class="dropdown-item" href="#">Syllabus</a>
        <a class="dropdown-item" href="#">Academic Calender</a>
        <a class="dropdown-item" href="#">Admissions</a>
        <a class="dropdown-item" href="#">Fees Structure</a>
        <a class="dropdown-item" href="#">List of Holidays</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><b>Training & Placements</b></a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Placement Statistics</a>
        <a class="dropdown-item" href="#">Brochure</a>
        <a class="dropdown-item" href="#">Recruitments</a>
        <a class="dropdown-item" href="#">Recruiting Parteners</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><b>Facility & Resources</b></a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Hostels</a>
        <a class="dropdown-item" href="#">24x7 Internet</a>
        <a class="dropdown-item" href="#">Central Library</a>
      </div>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><b>Examination</b></a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Examination Results</a>
       
      </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><b>Contact Us</b></a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Address</a>
        <a class="dropdown-item" href="#">Maps & Locations</a>
        <a class="dropdown-item" href="#">Phone Directory</a>
        <a class="dropdown-item" href="#">Feedback/Query</a>
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
	var letters = /^[a-zA-Z ]+$/;
   if(document.myForm.name.value.match(letters))
     {
       
     }
	 else {
		 alert("only alphabets are allowed in name");
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
	var letters = /^[a-zA-Z ]+$/;
   if(document.myForm.branch.value.match(letters))
     {
       
     }
	 else {
		 alert("Only Alphabet are allowed in branch name");
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