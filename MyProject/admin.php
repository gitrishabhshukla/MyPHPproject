<?php
session_start();
if(isset($_SESSION["username"])){
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
   <form action="Alogout_page.php" method="post" style="float:right;"><input type="submit" name="submit" value="Logout" class="btn btn-danger"></form>
   <div class="container">
     <h3 style="text-align: center;">Total Complaints</h3>
     <div class="row">
       <div class="col-sm-12 jumbotron" style="padding-top: 5px;background-color:#ffffff;border-radius:20px;border:1px solid black;overflow:scroll;height:500px;"><font style="font-size: 20px;">Complaint list</font></br>
	   <ol>
		<?php
		$servername = "localhost";
	    $username = "root";
	    $password = "";
	    $dbname = "collegestudents";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		 else{
		
		$sql = "SELECT * FROM complaints";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				 ?> 
					 <li><?php echo "<b>Complaint Id: ".$row["Complaint_id"]."<br>";
					    echo "Complaint By(Roll Number): ".$row["rollNo"]."<br>";
					    echo "Complaint Type: ".$row["comp_type"]."<br>";
					    echo "Complaint Description: </b>".$row["Comp_description"].""; ?></li>
						<hr>
					 
			<?php
			}
		} else {
			echo "We don't have any Complaint Yet!!!!";
		}
		 }
	mysqli_close($conn);
?>
      </ol>
   
	   </div>
     </div>
   </div><br><br>
   <div style="width:100%;">
				<div style="width:60%;float:left;padding-left:80px;background-color:black;padding-bottom:10px;">
				 <font color="white" style="font-size:15px;"> &copy; Copy right 2018 |<a href="#" style="color:white;">Privacy </a>| <a href="#" style="color:white;">Policy</a></font>
				</div>
				<div style="width:40%;float:left;background-color:black;padding-bottom:10px;padding-left:140px;">
					<font color="white"> Designed by</font> <a href="https://www.facebook.com/rishabhshukla.rks" style="color:#e65c00;">Rishabh,Tushar,Rajat,Anurag.</a> 
				</div>
  </div
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="bootstrap\bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
   
  </body>
</html>
<?php
}
else{
	header('Location: admin_login.php');
}
?>