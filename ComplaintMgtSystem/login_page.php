<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegestudents";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
  if(isset($_POST['submit'])){
	
    if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
     else{
    
	$roll=$_POST['rollNo'];
	$pwd1=$_POST['pswd'];
	$count=0;
	$sql = "SELECT * FROM students";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			if($row["rollNo"]==$roll && $row["pwd1"]==$pwd1)
			{   
				$_SESSION["rollNo"]=$roll;
				$_SESSION["name"]=$row["name"];
				header('Location: complaint.php');
			}
		}
	} else 
	{
		echo "Enter Valid username or password";
	}
	if($count==0)
	{echo "<script type='text/javascript'>alert('Invalid Roll Number or Password ,Please enter valid Roll Number and password');
                       window.location='Login.php';
                      </script>";}
	 }
  }
mysqli_close($conn);
?>