<html>
<head>
<title>Health Care | Sign Up</title>
	<link rel="stylesheet" type="text/css" href="signup.css"/>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="signup.css">
</head>
<body>
<?php include('header.html'); ?> 


	<p id="toppara">
		Register With the World of HealthCare and keep track of your health
	</p> <br/> <br/>

<br/>
<div class ="sign_up_form" style="margin: 100;">
	<form name="myForm" action="signup.php" method="post">

		<fieldset >
			<legend style="letter-spacing: 1px; font-family: Helvetica; font-size: 20px; color: #C40000; font-weight: bold;">Sign Up</legend>
			Name : <br/>
			<div style="margin: 10;">
			<input type="text" name="fname" value="" placeholder="First Name / UserName" title="Enter your First name" />&nbsp
			<input type="text" name="lname" value="" placeholder="Last Name" title="Enter your Last name"><br>
			<span id="fnameerr"></span>&nbsp 
			<span id="lnameerr"></span><br/>

			Email Address : <br/><input type="email" name="email" value="" placeholder="Enter your E-mail" title="Enter Valid E-Mail" /><br><span id="emailerr"></span><br/>
			
			Date Of Birth  (optional) : <br/><br/><input type="date" name="dob" value=""/><br><span id="doberr"></span><br/>

			Age : <br/>
			
			<input type="number" name="age" value="" min="12" required="required"/><br/><br/>

			Sex :<br/><input type="text" name="sex" placeholder="Your Gender" title="Enter your Gender" /><br><span id="sexerr"></span><br/>
			Blood Group : <br/><input type="text" name="bldgroup" placeholder="Your Blood Group" title="Enter your Blood Group" /><br><span id="bldgerr"></span><br/>
			
			Password : <br/><input type="password" name="password" placeholder="Password" title="Password should be of length greater than 8" /><br><span id="passerr"></span><br/>
			
			Confirm Password : <br/><input type="password" name="re_password" placeholder="Re-enter Password" title="Type the same Password as above" /><br><span id="confpasserr"></span><br/>

			<input type="submit" name="submit" value="Register" onclick="return validate(this.form)" />&nbsp
			<input type="reset" name="Reset" />
			</div>
		</fieldset>
	</form>
</div>
	
	
	<script type="text/javascript">

	var refname = document.getElementById("fnameerr");
	var relname = document.getElementById("lnameerr");
	var reemail = document.getElementById("emailerr");
	var redob = document.getElementById("doberr");
	var regen = document.getElementById("sexerr");
	var repass = document.getElementById("passerr");
	var rebldg = document.getElementById("bldgerr");
	var reconf = document.getElementById("confpasserr");

	function validate(form) {
		// body...
		var text = "";
		if (form.fname.value=="" ) {
			alert("First name cannot be empty");
			form.fname.value = "";
			return false;
		}
		if(form.fname.value.match(/[0-9]/)) {
			alert("First name cannot contain numbers");
			form.fname.value = "";
			return false;
		}
		if(form.fname.value!="" && !form.fname.value.match(/[0-9]/)) {
			refname.innerHTML = "";
		}

		if (form.lname.value=="" ) {
			alert("Last name cannot be empty");
			form.lname.value = "";
			return false;
		}
		if(form.lname.value.match(/[0-9]/)) {
		alert("Last name cannot contain numbers");
			form.lname.value = "";
			return false;
		}
		if(form.lname.value!="" && !form.lname.value.match(/[0-9]/)) {
			relname.innerHTML = "";
		}

		if(form.email.value=="" || form.email.value.indexOf('@',0)==-1 || form.email.value.indexOf('.')==-1 || form.email.value.indexOf('.')==0) {
			alert("Enter valid E-mail");
			reemail.innerHTML = text;
			form.email.value = "";
			return false;
		}
		if(form.email.value!="" && form.email.value.indexOf('@',0)!=-1 && form.email.value.indexOf('.')!=-1 && form.email.value.indexOf('.')!=0) {
			reemail.innerHTML = "";
		}

		if (form.sex[0].checked==false && form.sex[1].checked==false) {
			alert("Please choose your Sex");
			regen.innerHTML = text;
			return false;
		}
		if (form.sex[0].checked==true || form.sex[1].checked==true) {
			regen.innerHTML = "";
		}

		if (form.bldgroup.value=="") {
			alert("Blood Group cannot be empty");
			rebldg.innerHTML = text;
			form.bldgroup.value = "";
			return false;
		}
		if (!form.bldgroup.value.match(/^(A|B|O|AB)[+-]$/)) {
			alert("Enter Valid Blood Group");
			rebldg.innerHTML = text;
			form.bldgroup.value = "";
			return false;
		}
		if (form.bldgroup.value.match(/^(A|B|O|AB)[+-]$/)) {
			rebldg.innerHTML = "";
		}
		

		if (form.password.value.toString().length<9) {
			alert("Password should contain atleast 9 letters");
			repass.innerHTML = text;
			form.password.value = "";
			return false;
		}
		if (form.password.value.toString().length>8) {
			repass.innerHTML = text;
		}
		
		if ((form.re_password.value.toString()).localeCompare(form.password.value.toString())!=0) {
			alert("Password not matching");
			form.re_password.value = "";
			return false;
		}
		if ((form.re_password.value.toString()).localeCompare(form.password.value.toString())==0) {
			reconf.innerHTML = "";
		}
		
		alert("Form Submitted");
		return true;

	}

	</script>


<br/><br/><br/><br/><br/><br/>
<?php include('footer.html'); ?> 


</body>
</html>