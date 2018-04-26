<?php
 session_start();
  if(isset($_POST['submit'])){
	
    
	$username=$_POST['username'];
	$pwd1=$_POST['pswd'];
	
			if($username=="12345678" && $pwd1=="admin")
			{
				$_SESSION["username"]=$username;
				header('Location: admin.php');
			}
	        else
			{ 
		        echo "<script type='text/javascript'>alert('Invalid username or Password ,Please enter valid username and password');
                       window.location='admin_login.php';
                      </script>";
				//header('Location: admin_login.php');
				
			}
  }
?>