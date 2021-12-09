function subscribevalidate(subscribe)
{
	var email = subscribe.email.value;
	
	
	if(!email.includes("@","."))
	{
		alert("Invalid Email. Please Re-enter your email correctly");
		return false;
	}
	

}

function bigimage(x)
{
    x.style.height = "100.5%";
    x.style.width = "100.5%";
}
function normalimage(y)
{
    y.style.height = "100%";
    y.style.width = "100%";
}
