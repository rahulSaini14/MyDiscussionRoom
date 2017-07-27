<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			background-color: #FFFFFF;
		}
		#mbody {
			background-image: url('login_background.jpg');
			background-attachment: fixed;
			background-size: cover;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-repeat: no-repeat;
			display: none;
		}
		#login_content {
			background-color: #0000FF;
			max-width: 500px;
		}
		#login_heading {
			font-size: 50px;
			margin-bottom: 30px;
			color: #FFFFFF;
			font-weight: bold;
		}
		#login_form {
			background-color: #0000FF;
			color: #FFFFFF;
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
	<title>Login here</title>
</head>
<body><div id="loading"></div><div id="mbody">
	<center>
		<header style="background-color: #FFFFFF;">
			<div>
				<p style="font-size: 80px;color: #795548;font-weight: bold;margin-top: 10px;margin-bottom: 10px;text-shadow: 5px 5px #FFFF00;">My Discussion Room</p>
			</div>
		</header>
		<div id="login_content">
			<p id="login_heading">Login</p>
			<div id="login_form">
				<form action="validation.php" method="post" autocomplete="off">
					<table>
						<tr>
							<td><p class="loginDetails">User Name : </p></td>
							<td><input type="text" maxlength="20" name="login_username" required></td>
						</tr>
						<tr>
							<td><p class="loginDetails">User Password : </p></td>
							<td><input type="Password" maxlength="8" name="login_password" required></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Login"></td>
						</tr>
					</table>
					<p><a style="color: #FFFFFF" href="registration_type.php">Not registered?</a></p>
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