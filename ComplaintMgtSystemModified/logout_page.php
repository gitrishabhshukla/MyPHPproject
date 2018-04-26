<?php
session_start();
if(isset($_SESSION["rollNo"]))
{
	session_destroy();
	header('Location: Login.php');
}

?>