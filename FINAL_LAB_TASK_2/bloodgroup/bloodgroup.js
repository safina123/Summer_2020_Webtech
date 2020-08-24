function validate()
{
	var a=document.bloodgroup.bloodgroup;
	if (a.value == "Select Blood Group") 
	{
		document.getElementById('bloodgroupmsg').innerHTML="Select A Blood Group";
		return false;
	}
	else
	{
		return true;
	}
}