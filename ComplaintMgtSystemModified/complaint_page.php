<?php
session_start();
$conn=mysqli_connect("localhost","root","","collegestudents");

if(isset($_POST['submit'])){

		 if(!$conn)
		 { 
	       //die("Connection failed: " . mysqli_connect_error());
		   echo "connection not established";
	     }
		 else
		 {
			 $name=$_SESSION["name"];
			 $roll=$_SESSION["rollNo"];
			 $comp_type=$_POST['comp_type'];
			 $Comp_description=$_POST['Complaint_description'];
			 
			$result=mysqli_query($conn,"insert into complaints(name,rollNo,comp_type,Comp_description)values 
			('$name','$roll','$comp_type','$Comp_description')");
			if($result)
			{
				echo "You are registered Successfully<p>";
				header('Location: complaint.php');
			}
			else
			{
				echo "Please try again". $sql . "<br>" . $conn->error;
			}
			
		 }
}
?>