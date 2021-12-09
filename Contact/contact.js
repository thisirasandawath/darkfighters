function contactvalidate(contact)
{
	var fullname = contact.name.value;
	var email = contact.email.value;
	var mobile = contact.phone.value;
	var message = contact.message.value;
	
	if(fullname == "")
	{
		alert("Please enter your Full name.");
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
	

}

