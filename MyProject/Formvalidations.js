function validationEmail(){
     var email = document.myForm.Email.value;
	  var atpos = email.indexOf("@");
	  var dotpos = email.lastIndexOf(".");
	  if(atpos<1 || (dotpos - atpos)<2){
	    alert("Please enter valid email id");
		document.myForm.Email.focus();
		return false;
	  }
	  return true;
   }
function formvalidations(){
	
	var Name = document.myForm.name.value;
	var RollNo = document.myForm.rollNo.value;
	var Email = document.myForm.email.value;
	var Year = parseInt(document.myForm.year.value);
	var Branch = document.myForm.branch.value;
	var Password = document.myForm.pwd1.value;
	
	if(Name.length<2)
	{
		alert("please enter a valid name");
		return false;
	}
	if(rollNo.lenght!=10)
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
	if(Year<0 && Year>4)
	{
		alert("please enter a valid year");
		return false;
	}
	if(branch.length<2)
	{
		alert("please enter a valid branch name");
		return false;
	}
	if(Password.length<8)
	{
		alert("Password should contain at least 8 character");
		return false;
	}
	
	return true;
	
}*/