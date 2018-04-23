<?php
$conn=mysqli_connect("localhost","root","","collegestudents");

if(isset($_POST['submit'])){

		 if(!$conn)
		 { 
	       //die("Connection failed: " . mysqli_connect_error());
		   echo "connection not established";
	     }
		 else
		 {
			 $name=$_POST['name'];
			 $roll=$_POST['rollNo'];
			 $email=$_POST['email'];
			 $branch=$_POST['branch'];
			 $year=$_POST['year'];
			 $pswd=$_POST['pwd1'];
			 
			$result=mysqli_query($conn,"insert into students(name,rollNo,email,branch,year,pwd1)values 
			('$name','$roll','$email','$branch','$year','$pswd')");
			if($result)
			{
				echo "You are registered Successfully<p>";
				header('Location: signupconfirmation.php');
			}
			else
			{
				echo "Please try again". $sql . "<br>" . $conn->error;
			}
			
		 }
}
?>