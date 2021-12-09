function deleteuser(deluserform)
{
    var username = deluserform.username.value;
    
    if(username == "")
	{
		alert("Please enter your Username.");
		return false;
	}
}


function createadmin(cadminform)
{
    var uname = cadminform.uname.value;
    
    if(uname == "")
	{
		alert("Please enter  Username.");
		return false;
	}
}