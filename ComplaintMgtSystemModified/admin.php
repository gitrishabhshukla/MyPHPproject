<?php
session_start();
if(isset($_SESSION["username"])){
	include 'header.php';
?>

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
		
		$sql = "SELECT * FROM complaints ORDER BY Complaint_id DESC";
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