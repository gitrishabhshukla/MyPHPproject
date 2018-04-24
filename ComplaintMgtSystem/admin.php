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
  <div class="container-fluid" style="background-color: #66ccff;">
<div class="container-fluid" style="background-color:#66ccff;">
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
   
   <!-- Button trigger modal -->
<a href="ChangeStatus.php"><button id="modalBtn" class="btn btn-warning" style="margin-left:1082px;">
  Change Status
</button></a>

	
	
	
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
					 <li><?php echo "<b>Complaint Id: ".$row["Complaint_id"].""; ?><i style="margin-left:700px;margin-right:5px;">STATUS:</i><button class="btn btn-primary"  style="padding:1px;"><?php echo $row["Status"]; ?></button><br>
					   <?php echo "Complaint By(Roll Number): ".$row["rollNo"]."<br>";
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
   </div>
   
   <!-- footer -->
   <br><br>
   <div style="width:100%;">
				<div style="width:60%;float:left;padding-left:80px;background-color:black;padding-bottom:10px;">
				 <font color="white" style="font-size:15px;"> &copy; Copy right 2018 |<a href="#" style="color:white;">Privacy </a>| <a href="#" style="color:white;">Policy</a></font>
				</div>
				<div style="width:40%;float:left;background-color:black;padding-bottom:10px;padding-left:140px;">
					<font color="white"> Designed by</font> <a href="https://www.facebook.com/rishabhshukla.rks" style="color:#e65c00;">Rishabh,Tushar,Rajat,Anurag.</a> 
				</div>
  </div>
  <script>
  function solved(){
	  
	  <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "collegestudents";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE complaints SET Status='Completed' WHERE Complaint_id=c_d";

if ($conn->query($sql) === TRUE) {
    echo "Status updated successfully";
} else {
    echo "Error In updating Status: " . $conn->error;
}

$conn->close();
?>
  }
  
  </script>
 

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