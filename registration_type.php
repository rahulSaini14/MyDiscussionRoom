<html>
<head>
	<title>Home</title>
	<style type="text/css">
		body {
			background-color: #FFFFFF;
		}
		#mbody {
			background-image: url('register-background.jpg');
			background-attachment: fixed;
			background-size: cover;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-repeat: no-repeat;
			display: none;
		}
		#nameOfUser {
			background-color: #FFFFFF;
		}
		#allcontent {
			background-color: #FFDAB9;
			max-width: 500px;
		}
		#topheading {
			font-size: 80px;
			color: #0000FF;
			margin-bottom: 40px;
			font-weight: bold;
		}
		#mainform {
			
		}
		#nameOfUser {
			margin-top: 20px;
		}
		#email {
			margin-bottom: 16px;
		}
		#password {
			margin-top: 4px;
		}
		#passwordrow {
			margin-top: 20px;
		}
		#ConfirmPassword {
			margin-top: 4px;
		}
		.passwordstring {
			font-size: 13px;
			margin-top: 0px;
			margin-bottom: 0px;
		}
		#submit {
			margin-top: 4px;
		}
		#loading {
			width: 100%;
			height: 100%;
			position: absolute;
			top: 50%;
			left: 50%;
			background-position: center;
			z-index: 9999;
			background:url(loading_gif.gif);
			background-repeat: no-repeat;
		}
	</style>
</head>
<body><div id="loading"></div><div id="mbody">
	<center>
		<header style="background-color: #FFFFFF;">
			<div>
				<p style="font-size: 80px;color: #795548;font-weight: bold;margin-top: 10px;margin-bottom: 10px;text-shadow: 5px 5px #FFFF00;">My Discussion Room</p>
			</div>
		</header>
		<div id="allcontent">
			<p id="topheading">Register here</p>
			<div id="mainform">
				<form method="post"  autocomplete="off" action="registration.php" id="formtag"  onsubmit="return checkform()">
					<table>
						<tr>
							<td>
								<input type="text" name="nameOfUser" id="nameOfUser" maxlength="20" placeholder="User name" oninput="username()" required />
								<p id="namewarn" class="passwordstring">in 20 characters</p>
							</td>
						</tr>
						<tr>
							<td>
								<input type="email" name="email" id="email" placeholder="Enter email id" />
							</td>
						</tr>
						<tr>
							<td id="passwordrow" >
								<input type="password" name="password" id="password" placeholder="password" maxlength="8" minlength="4" onkeyup="passwordofuser()" />
								<p id="passwordWarn" class="passwordstring">Minimum digits must be 4.</p>
							</td>
						</tr>
						<tr>
							<td>
								<input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="confirm password" maxlength="8" minlength="4" onkeyup="confirmpass()" />
								<p id="confirmwarn" class="passwordstring">confirm password</p>
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" id="submit"/>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<footer style="color: #FFFFFF;font-size: 20px;">
			<table style="padding-top: 20px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;background-color: #000000;table-layout: fixed;width: 500px;">
				<tr>
					<td><a href="index.html">Home</a></td>
					<td><a href="home_aboutus.html">About us</a></td>
					<td><a href="home_tandc.html">Terms and conditions</a></td>
				</tr>
			</table>
		</footer>
	</center>
</div>
<script type="text/javascript">
	var passw = document.getElementById('password');
	var name = document.getElementById('nameOfUser');
	var confirmp = document.getElementById('ConfirmPassword');
	function username() {
		var name = document.getElementById('nameOfUser');
		if (name.value.length==0) {
			name.style.backgroundColor = "#FF0000";
		}
		else{
			name.style.backgroundColor = "#ADFF2F";
		}
	}
	function passwordofuser() {
		var war = document.getElementById('passwordWarn');
		confirmpass();
		if (passw.value.length<4) {
			passw.style.backgroundColor = "#FF0000";
			war.innerHTML="Minimum length must be 4 !";
		}
		if (passw.value.length<8 && passw.value.length>=4) {
			passw.style.backgroundColor = "#ADFF2F";
			var d = 8-(passw.value.length);
			war.innerHTML=d+" digits left";
		}
		if (passw.value.length==8) {
			passw.style.backgroundColor = "#FFA500";
			war.innerHTML="Maximum limit is 8!";
		}
	}
	function confirmpass(){
		var connfirmwarn = document.getElementById('confirmwarn');
		var comp = (passw.value).localeCompare(confirmp.value);
		if (comp==0) {
			confirmp.style.backgroundColor = "#ADFF2F";
			confirmwarn.innerHTML = "password confirmed";
			connfirmwarn.style.color = "#228B22";
		}
		else{
			confirmp.style.backgroundColor = "#FF0000";
			connfirmwarn.style.color = "#FF0000";
			connfirmwarn.innerHTML = "password does not match!";
		}
	}
	function checkform(){
		var compare = (passw.value).localeCompare(confirmp.value);
		if (compare==0 && passw.value.length!=0 && confirmp.value.length!=0 && passw.value.length>=4 || confirmp.value.length>=4) {
			var finalconfirm = confirm("Do you want to submit?");
			return finalconfirm;
		}
		if (passw.value.length==0 || confirmp.value.length==0) {
			alert("Enter password");
			return false;
		}
		else {
			alert("Enter correct password");
			return false;
		}
	}
</script>
<script src="jquery-3.2.1.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#loading').hide();
		$('body').css("background-color","#90CAF9");
		$('#mbody').show(1000);
	});
</script>
</body>
</html>
