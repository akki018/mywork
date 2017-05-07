
<?php
// java script:





?>
<!-- jQuery -->
<script src="js/jquery-1.10.2.min.js "></script>
<!-- jQuery UI -->
<script src="js/jquery-ui.js "></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>
function validate()
{
	if(document.f.t1.value=="")
	{
		alert("please provide the project id");
		document.f.t1.focus();	
		return false;
	}	
	
	
	if(document.f.t2.value=="")
	{
		alert("please provide the project title");
		document.f.t2.focus();	
		 return false;
	}
		if(!isNaN(document.f.t2.value))
{
alert("Please Enter Only Characters here");
document.f.t2.focus();
document.f.t2.select();
return false;

}

	if(document.f.t3.value=="")
	{
		alert("please provide mentor's name");
		document.f.t3.focus();	
		return false;
	}	
	if(document.f.t4.value==-1)
	{
		alert("please Select the class");
		document.f.t4.focus();	
		return false;
	}	
	if(document.f.t5.value=="")
	{
		alert("please provide the name");
		document.f.t5.focus();	
		return false;
	}	
	if(!isNaN(document.f.t5.value))
{
alert("Please Enter Only Characters here");
document.f.t5.focus();
document.f.t5.select();
return false;

}
	if(document.f.t6.value=="")
	{
		alert("please provide cllg id");
		document.f.t6.focus();	
		return false;
	}	
	else{
		var x = document.f.t6.value;
		if(x<1401021000 && x>=1401021099)
		{
			alert("please provide valid cllg id");
			document.f.t6.focus();
			return false;
		}
	}
	if(document.f.t7.value=="")
	{
		alert("please provide the name");
		document.f.t7.focus();	
		return false;
	}	
	if(!isNaN(document.f.t7.value))
{
alert("Please Enter Only Characters here");
document.f.t7.focus();
document.f.t7.select();
return false;

}
	if(document.f.t8.value=="")
	{
		alert("please provide cllg id");
		document.f.t8.focus();	
		return false;
	}	
	else{
		var x = document.f.t8.value;
		if(x<1401021000 && x>=1401021099)
		{
			alert("please provide valid cllg id");
			document.f.t8.focus();
			return false;
		}
	}
	
	if(document.f.t9.value=="")
	{
		alert("please provide the name");
		document.f.t9.focus();	
		return false;
	}	
	if(!isNaN(document.f.t9.value))
{
alert("Please Enter Only Characters here");
document.f.t9.focus();
document.f.t9.select();
return false;

}
	if(document.f.t10.value=="")
	{
		alert("please provide cllg id");
		document.f.t10.focus();	
		return false;
	}	
	else{
		var x = document.f.t10.value;
		if(x<1401021000 && x>=1401021099)
		{
			alert("please provide valid cllg id");
			document.f.t10.focus();
			return false;
		}
	}
	
	if(document.f.t11.value=="")
	{
		return true;
	}	
	if(!isNaN(document.f.t11.value))
{
alert("Please Enter Only Characters here");
document.f.t11.focus();
document.f.t11.select();
return false;

}
	if(document.f.t12.value=="")
	{
		return true;
	}	
	else{
		var x = document.f.t12.value;
		if(x<1401021000 && x>=1401021099)
		{
			alert("please provide valid cllg id");
			document.f.t12.focus();
			return false;
		}
	}
		if(document.f.t13.value=="")
	{
		alert("please provide the name");
		document.f.t13.focus();	
		return false;
	}	
	if(!isNaN(document.f.t13.value))
{
alert("Please Enter Only Characters here / wrong university name");
document.f.t13.focus();
document.f.t13.select();
return false;

}
	var a=document.f.t6.value;
	var b=document.f.t8.value;
	var c=document.f.t10.value;
	var d=document.f.t12.value;
	if(a==b||a==c||a==d||b==c||b==d||c==d)
	{
		alert("id's are same please change ");
		return false;
	}
	
	var a=document.f.t5.value;
	var b=document.f.t7.value;
	var c=document.f.t9.value;
	var d=document.f.t11.value;
	if(a==b||a==c||a==d||b==c||b==d||c==d)
	{
		alert("name's are same please change ");
		return false;
	}


  var phoneno = /^\d{10}$/;  
  if(document.f.t14.value.match(phoneno))  
  {  
      return true;  
  }  
  else  
  {  
     alert("Not a valid Phone Number"); 
     document.f.t14.focus(); 
     return false;  
  }  
	
}
 
$(document).ready(function(){
	
 $("#console-debug").hide(); 
 
$("#btn-debug").click(function(){
 	$("#console-debug").toggle();
 	
 })	;
	

});


</script> 