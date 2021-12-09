function loginvalidate(loginform)
{
	var uname = loginform.uname.value;
	var pwd = loginform.pwd.value;

	if(uname == "")
	{
		alert("Please enter your User name.");
		return false;
	}
	if(pwd == "")
	{
		alert("Please enter your password.");
		return false;
	}
}

