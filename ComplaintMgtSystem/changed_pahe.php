<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegestudents";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(isset($_POST['submit'])){

		 if(!$conn)
		 { 
	       //die("Connection failed: " . mysqli_connect_error());
		   echo "connection not established";
	     }
		 else
		 {
            $Cid = $_POST["cid"]; 
		 $result =mysqli_query($conn,"UPDATE complaints SET Status='Solved' WHERE Complaint_id=$Cid");

			if ($result) {
				echo "<script type='text/javascript'>alert('Status of Complaint update Successfully');
                       window.location='admin.php';
                      </script>";
			} else {
				echo "Error updating record: " . mysqli_error($conn);
			}
		}
}

mysqli_close($conn);
?>