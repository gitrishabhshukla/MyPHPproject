<?php
include 'header.php';
?>

 
   <!-- Body -->
   <div style="width:30%;margin: 0px auto;">
   <img src="adminlogin.png" width="200px" height="200px" style="margin-left:110px;">
    <div class="center-block" style="background-color:white;border-radius:10px;padding:20px;">
  <form action="adminlogin_page.php" method="POST">
    <div class="form-group">
      <label for="rollNo"><b>username:</b></label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" style="border:none;border-bottom:2px solid gray;">
    </div>
    <div class="form-group">
      <label for="pswd"><b>Password:</b></label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" style="border:none;border-bottom:2px solid gray;">
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <input type="submit" value="submit" name="submit" class="btn btn-success" />
  </form>
</div>
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