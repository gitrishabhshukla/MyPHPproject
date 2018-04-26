<?php
session_start();
if(isset($_SESSION["rollNo"])){
include 'header.php';
?>

 
   <!-- Body -->
   <div class="container" style="align-content: center;">
       <div class="row">
        <div class="col-sm-6"> <h3 style="text-align: center;">Make Your Complaint Here</h3><br></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3" id="User_name" style="float: right;">
		<form action="logout_page.php" method="post" style="margin-left:300px;"><input type="submit" name="submit" value="Logout" class="btn btn-danger"></form>
		<?php 
		echo "<b>".$_SESSION["name"]."<br>";
	    echo "".$_SESSION["rollNo"]."</b>"; ?> 
        
		 </div>
       </div>
	   <form action="complaint_page.php" method="POST">
	   
       <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8" style="align-items: center;">
       <select class="select" name="comp_type">
         <option value="General_complaint">Choose Your Complaint type</option>
         <option value="hostel_complaint">Complaint About Facilities of hostel</option>
         <option value="Campus_complaint">Complaint About Campus Facility</option>
         <option value="Management_complaint">Complaint About Management Authority</option> 
          <option value="Faculty_complaint">Complaint About Faculty</option>
       </select></div>
       <div class="col-sm-3"></div>
      </div>
      <div class="row" style="margin-top: 20px;">
        <div class="col-sm-5" style="padding: 0px;">
          <textarea name="Complaint_description" value="Complaint_description" rows="10" cols="70" placeholder="Enter the description of your complaint here"></textarea>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-5 jumbotron" style="padding-top: 0px;background-color:white;overflow:scroll; height:260px;border:1px solid black;">
          <font style="font-size: 20px;"><b>Your Previous Complaints</b></font>
		 </br>
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
				 if($row["rollNo"]==$_SESSION["rollNo"])
				 {  ?><li><?php echo "<b>".$row["comp_type"]."</b>";?><i style="margin-left:53px;margin-right:3px;"><b>Status:</i><font color="lightpurple"><?php echo $row["Status"]; ?></font></b></br>
					       <?php echo "".$row["Comp_description"].""; ?></li><hr>
			<?php	 }
			}
		} else {
			echo "you have not done any complaint earlier";
		}
		 }
	mysqli_close($conn);
?>
		</ol>   
		  
        </div>
      </div>
	  <div class="row">
	  <div class="col-sm-12"><button type="submit" class="btn btn-success" name="submit" value="submit">Click Here to Submit your Complaint</button>
	  </div>
	  </div>
	  </form>
   </div>
  
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
	header('Location: Login.php');
}
?>