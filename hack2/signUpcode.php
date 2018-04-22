<?php

$name=$_POST['name'];
$roll=$_POST['rollNo'];
$email=$_POST['email'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$pswd=$_POST['pwd1'];

$conn=mysqli_connect("localhost","root","","collegeStudents");
if(isset($_POST['submit'])){
 if(!$conn)
	 die("Connection failed: " . mysqli_connect_error());
 else
	 echo "Connection is established successfully"
 //insert into database
$result=mysqli_query($conn,"insert into students(name,rollNo,email,branch,year,pwd1) values
('$name','$roll','$email','$branch','$year','$pswd')");
if($result)
	echo "You are Registered Successfully."
else
	echo "Some Technical Fault occur try again.";


}
mysqli_close($conn);
?>