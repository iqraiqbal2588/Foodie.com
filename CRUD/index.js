
		function mainfunc(){
		validatename(); 
		validateusername();
		validateemail();
		validatepassword();
		return false;
		}
		function validatename(){
		var a= document.getElementById('fname').value;
		if (a==""){
		document.getElementById('ofn1').innerHTML="Required field must be Filled";
		return false;
		}
		else{
		document.getElementById('ofn1').innerhtml="";
		}
		
		}
		
		function validateusername(){
		var b= document.getElementById('uname').value;
		if (b==""){
		document.getElementById('ofn2').innerHTML="Required field must be Filled";
		return false;
		}
		else{
		document.getElementById('ofn2').innerhtml="";
		}
		}
	
		function validateemail(){
		var c= document.getElementById('xemail').value;
		if (c==""){
		document.getElementById('ofn3').innerHTML="Required field must be Filled";
		return false;
		}
		else{
		document.getElementById('ofn3').innerHtml="";
		}
	}
		function validatepassword(){
		var d= document.getElementById('pw').value;
		if (d==""){
		document.getElementById('ofn4').innerHTML="Password must be between 0 to 8 characters";
		return false;
		}
		else{
		document.getElementById('ofn4').innerHtml="";
		}
	}
