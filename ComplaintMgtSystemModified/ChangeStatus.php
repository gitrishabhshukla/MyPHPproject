<?php
session_start();
if(isset($_SESSION["username"])){
	include 'header.php';
?>

 
   <!-- Body -->
   
  <div style="height:430px;">
    <h2 align="center">Change Status</h2>
     <form action="Changed_pahe.php" method="post">
	   <p>
	    <label>Customer Id:</label>
		<input type="text" name="cid" placeholder="Enter customer Id">
	   </p>
	   <input type="submit" name="submit" value="Change" />
	 </form>
  </div>
   <!-- footer -->
   <?php
   include 'footer.php';
   ?>


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