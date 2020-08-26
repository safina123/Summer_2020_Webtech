function validate()
{
	var namevalid=false;
	var username=document.getElementById('uername').value;
	if (username=="") 
	{
		document.getElementById('uernamemsg').innerHTML="Name can not be empty";
		return false;
	}	
	else
	{
		if((username[0]>='a' && username[0]<='z') || (username[0]>='A' && username[0]<='Z'))
		{
			if (username.split("").length>=2) 
			{
				var a=0;
				var b=username.length;
				while(a<b)
				{
					if(!((username[a]>='a' && username[a]<='z') ||(username[a]>='A' && username[a]<='Z') || username[a]=='.' || username[a]=='-' || username[a]==''))
					{
						document.getElementById('uernamemsg').innerHTML="Can only contain A-Z or a-z or . or -";
						return false;
					}
					a=a+1;
				}
				return true;
			}
			else
			{
				document.getElementById('uernamemsg').innerHTML="Contain at least two words";
				return false;
			}
		}
		else
		{
			document.getElementById('uernamemsg').innerHTML="Must start with a letter";
			return false;
		}
	}
	return false;


function remover()
{
	document.getElementById('uernamemsg').innerHTML="";
}

    var emailvalid=false;
	var email=document.getElementById('email').value;
	if (email=="") 
	{
		document.getElementById('emailmsg').innerHTML="Email can not be empty";
		return false;
	}	


function remover()
{
	document.getElementById('emailmsg').innerHTML="";
}

    var gendervalid=false;
	var a=document.gender.gender;
	for (i=0;i<a.length;i++) 
	{
		if (a[i].checked==true) 
		{
			return true;
		}
	}
	{
	document.getElementById('gendermsg').innerHTML="Gender Required";
	return false;
    }

function remover()
{
	document.getElementById('gendermsg').innerHTML="";
}
 
 var dateofbirthvalid=false;
 var day=document.getElementById('day').value;
	var month=document.getElementById('month').value;
	var year=document.getElementById('year').value;
	if (day!="" && month!="" && year!="") 
	{
		if(day>0 && day<32 && month>0 && month<13 && year>1899 && year<2017)
		{
			return true;
		}
		else
		{
			document.getElementById('dateofbirthmsg').innerHTML="day range 0 to 31 and month range 1 to 12 and year range 1900 to 2016";
			return false;
		}
	}
	else
	{
		document.getElementById('dateofbirthmsg').innerHTML="Date can not be empty";
		return false;
	}
	
function remover()
{
	document.getElementById('dateofbirthmsg').innerHTML="";
}

 var degreevalid=false;
 if(document.getElementById('degree1').checked || document.getElementById('degree2').checked || document.getElementById('degree3').checked)
	{
		return true;
	}
	if(document.getElementById('degree1').checked=="" || document.getElementById('degree2').checked=="" || document.getElementById('degree3').checked=="")
	{
		document.getElementById('degreemsg').innerHTML="Choose atleast one degree";
		return false;
	}

	 var bloodgroupvalid=false;
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

	var filvalid=false;
	if (document.getElementById('number').value!="" && document.getElementById('file').value!="") 
	{
		if (parseInt(number,35)>0) 
		{
			return true;
		}
		else
		{
			document.getElementById('filemsg').innerHTML="Enter positive number";
			return false;
		}
	}
	else
	{
		document.getElementById('filemsg').innerHTML="File and user id required";
		return false;
	}

function remover()
{
	if(document.getElementById('number').value!="")
	{
		document.getElementById('filemsg').innerHTML="";
	}
}

}