<?php
include 'header.php';
?>

   <!-- Body -->
  <div class="container" >
  <div style="padding:20px 40px 20px 40px;" class="center-block">
  <img src="loginimg.png" width="300px" height="90px" style="margin-left:400px;" >
  <form name="myForm" onsubmit="return formvalidations()" action="SignUp_page.php" method="post">
     <div class="form-group">
      <label for="name"><b>Name:</b></label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
    </div>
    <div class="form-group">
      <label for="rollNo"><b>Roll No:</b></label>
      <input type="text" class="form-control" id="rollNo" placeholder="Enter your Roll Number" name="rollNo" required>
    </div>
    <div class="form-group">
      <label for="email"><b>Email:</b></label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="branch"><b>Branch:</b></label>
      <input type="text" class="form-control" id="branch" placeholder="Enter Branch Name" name="branch" required>
    </div>
    <div class="form-group">
      <label for="year"><b>Year:</b></label>
      <input type="text" class="form-control" id="year" placeholder="Enter Year" name="year" required>
    </div>
    <div class="form-group">
      <label for="pwd1"><b>Password:</b></label>
      <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pwd1" required>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"><b> Remember me</b>
      </label>
    </div>
    <input type="submit" class="btn btn-primary" value="Register" name="submit" /> 
  </form>
</div>
</div>

<?php
include 'footer.php';
?>
    
<script type="text/javascript">
   function formvalidations(){
	
	var Name = document.myForm.name.value;
	var RollNo = document.myForm.rollNo.value;
	var Email = document.myForm.email.value;
	var Branch = document.myForm.branch.value;
	var Password = document.myForm.pwd1.value;
	
	if(Name.length<2)
	{
		alert("please enter a valid name");
		return false;
	}
	var letters = /^[a-zA-Z ]+$/;
   if(document.myForm.name.value.match(letters))
     {
       
     }
	 else {
		 alert("only alphabets are allowed in name");
		 return false;
	 }
	if(RollNo.length!=10)
	{
		alert("please enter a valid roll number");
		return false;
	}
	 var atpos = Email.indexOf("@");
	  var dotpos = Email.lastIndexOf(".");
	  if(atpos<1 || (dotpos - atpos)<2){
	    alert("Please enter valid email id");
		document.myForm.email.focus();
		return false;
	  }
	  if(document.myForm.year.value.length>1)
	  {
		  alert("Please enter valid year");
		  return false;
	  }
	  var numbers = /^[1-4]+$/;
      if(document.myForm.year.value.match(numbers))
      {
      // alert('Your Registration number has accepted....');
       //document.form1.text1.focus();
      }
      else
      {
      alert('Please enter valid Year');
      //document.form1.text1.focus();
      return false;
      }
	  
	if(Branch.length<2)
	{
		alert("please enter a valid branch name");
		return false;
	}
	var letters = /^[a-zA-Z ]+$/;
   if(document.myForm.branch.value.match(letters))
     {
       
     }
	 else {
		 alert("Only Alphabet are allowed in branch name");
		 return false;
	 }
	if(Password.length<8)
	{
		alert("Password should contain at least 8 character");
		return false;
	}
	
	return true;
	
}
   </script>  
</html>