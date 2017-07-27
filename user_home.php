<?php
session_start();
if (!isset($_SESSION['login_username'])) {
	header("location:login.php");
}
$name = $_SESSION['login_username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Home</title>
	<style type="text/css">
		body {
			background-color: #FFFFFF;
		}
		#mbody {
			background-image: url('user_home_background.jpg');
			background-attachment: fixed;
			background-size: cover;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-repeat: no-repeat;
			display: none;
		}
		.upper {
			color: #FF0000;
			background-color: #87CEEB;
			max-width: 100px
		}
		#write_cmnt {
			max-width: 320px;
			max-height: 200px;
			font-size: 50px;
			margin-top: 20px;
			margin-bottom: 20px;
			background-color: #673AB7;
			font-weight: bold;
			color: #FFFFFF;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 10px;
			padding-right: 10px;
			text-shadow: 5px 5px #000000;
		}
		#watch_my_cmnt {
			max-width: 320px;
			max-height: 200px;
			font-size: 50px;
			margin-top: 20px;
			margin-bottom: 20px;
			background-color: #FFD700;
			font-weight: bold;
			color: #FFFFFF;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 10px;
			padding-right: 10px;
			text-shadow: 5px 5px #000000;
		}
		#watch_cmnt {
			max-width: 320px;
			max-height: 200px;
			font-size: 50px;
			margin-top: 20px;
			margin-bottom: 20px;
			background-color: #388E3C;
			font-weight: bold;
			color: #FFFFFF;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 10px;
			padding-right: 10px;
			text-shadow: 5px 5px #000000;
		}
		#delete_accnt {
			max-width: 320px;
			max-height: 200px;
			font-size: 20px;
			margin-top: 20px;
			margin-bottom: 20px;
			background-color: #FF0000;
			font-weight: bold;
			color: #FFFFFF;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 10px;
			padding-right: 10px;
		}
		#hello {
			font-size: 50px;
			color: #0000FF;
			background-color: rgba(255,140,0,0.8);
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
		<header style="background-color: #87CEEB;">
			<div>
				<p style="font-size: 80px;color: #795548;font-weight: bold;margin-top: 10px;margin-bottom: 10px;text-shadow: 5px 5px #FFFF00;">My Discussion Room</p>
			</div>
		</header>
	</center>
	<p><a class="upper" href="logout.php">Log out</a>&nbsp&nbsp<a class="upper" href="user_home.php">My Home</a></p>
	<center>
		<p id="hello">Hello, <?php echo "$name"; ?></p>
		<button id="write_cmnt" onclick="window.location.href='comment_type.php'">Post a comment</button><br/>
		<button id="watch_my_cmnt" onclick="window.location.href='comments_my.php'">My comments</button><br/>
		<button id="watch_cmnt" onclick="window.location.href='comment.php'">All comments</button><br/>
		<button id="delete_accnt" onclick="isdelete()">Delete account</button>
	</center> 
</div>
<script type="text/javascript">
	function isdelete() {
		var isdlt = confirm("Are you really want to delete your Account?");
		if (isdlt) {
			window.location.href='delete_acct.php';
		}
		else{
			window.location.href='user_home.php';
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