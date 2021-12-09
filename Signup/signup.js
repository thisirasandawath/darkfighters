function signupvalidate(signupform)
{
	var fname = signupform.fname.value;
	var lname = signupform.lname.value;
	var uname = signupform.uname.value;
	var email = signupform.email.value;
	var mobile = signupform.mobile.value;
	var gen = signupform.gen.value;
	var bday = signupform.bday.value;
	var pwd = signupform.pwd.value;
	var cpwd = signupform.cpwd.value;
	
	if(fname == "")
	{
		alert("Please enter your First name correctly.");
		return false;
	}
	if(lname == "")
	{
		alert("Please enter your Last name correctly.");
		return false;
	}
	if(uname == "")
	{
		alert("Please enter your User name correctly.");
		return false;
	}
	if(!email.includes("@","."))
	{
		alert("Invalid Email. Please Re-enter your email correctly");
		return false;
	}
	if(mobile == "" || isNaN(mobile))
	{
		alert("Your Mobile number is incorrect. Please Re-enter a correct one");
		return false;
	}
	if(gen == "")
	{
		alert("Please enter your Gender");
		return false;
	}
	if(bday == "")
	{
		alert("Please enter your Birthday");
		return false;
	}
	if(pwd == "")
	{
		alert("Please enter your Password");
		return false;
	}
	if(cpwd == "")
	{
		alert("Please Re-enter your Password to confirm");
		return false;
	}
	if(pwd != cpwd)
	{
		alert("Your Passwords don't match. Please Re-enter correctly");
		return false;
	}

}

