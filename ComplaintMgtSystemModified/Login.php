<?php
 include 'header.php';
?>

 
   <!-- Body -->
  <div style="width:30%;margin: 0px auto;">
   <img src="imglogin.png" width="200px" height="200px" style="margin-left:110px;">
   <h2 style="text-align:center;">Student Login</h2>
    <div class="center-block" style="background-color:#ffffcc;border-radius:10px;padding:20px;">
  <form action="login_page.php" method="POST">
    <div class="form-group">
      <label for="rollNo"><b>Roll Number:</b></label>
      <input type="Number" class="form-control" id="rollNo" placeholder="Enter roll Number" name="rollNo" style="border:none;border-bottom:2px solid red;background-color:#ffffcc;">
    </div>
    <div class="form-group">
      <label for="pswd"><b>Password:</b></label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" style="border:none;border-bottom:2px solid red;background-color:#ffffcc;">
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <input type="submit" value="Login" name="submit" class="btn btn-success" />
	<a href="SIgnUp.php" style="margin-left:110px;">click here to register</button></a>
  </form>
</div>
</div>

<?php
include 'footer.php';
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script  src="bootstrap\bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
    
</html>