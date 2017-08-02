<?php
session_start();
if (!isset($_SESSION['login_username'])) {
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		body {
			background-color: #FFFFFF;
		}
		#mbody {
			background-image: url('comment_type_background.jpg');
			background-attachment: fixed;
			background-size: cover;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-repeat: no-repeat;
			display: none;
		}
		#mainHeading {
			font-size: 80px;
			color: #191970;
			background-color: #87CEEB;
			max-width: 500px;
			font-weight: bold;
		}
		#mainform {
			background-color: #87CEEB;
			max-width: 500px;
		}
		#commentid {
			width: 200px;
			margin-bottom: 0px;
		}
		#textlimit {
			margin-top: 0px;
			margin-bottom: 20px;
			font-size: 15px;
		}
		#submit {
			margin-bottom: 20px;
		}
		.upper {
			color: #0000FF;
			background-color: #FFFFFF;
			max-width: 100px
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
	<title>Enter comment</title>
	<script type="text/javascript">
		function forminput() {
			var commt = document.getElementById('commentid');
			var txtlmt = document.getElementById('textlimit');
			var d = 200-(commt.value.length);
			txtlmt.innerHTML = d;
			if (commt.value.length==200) {
				commt.style.backgroundColor = "#FFA500";
			}
			if (commt.value.length==0) {
				commt.style.backgroundColor = "#FFFFFF"
			}
			else {
				commt.style.backgroundColor = "#FFFF00";
			}
		}
	</script>
</head>
<body><div id="loading"></div><div id="mbody">
	<center>
		<header style="background-color: #FFFFFF;">
			<div>
				<p style="font-size: 80px;color: #795548;font-weight: bold;margin-top: 10px;margin-bottom: 10px;text-shadow: 5px 5px #FFFF00;">My Discussion Room</p>
			</div>
		</header>
	</center>
	<p><a class="upper" href="logout.php">Log out</a>&nbsp&nbsp<a class="upper" href="user_home.php">My Home</a></p>
	<center>
		<div id="allcontent">
			<p id="mainHeading">Comment</p>
			<div id="mainform"><br/>
				<form action="comment_store.php" method="post" autocomplete="off">
					<textarea class="form-control" rows="3" name="comment" placeholder="write comment" type="text" maxlength="200" id="commentid" onkeyup="forminput()" required></textarea>
					<p id="textlimit">Maximum word limit is 200</p>
					<input type="submit" name="submit" value="Post" id="submit">
				</form>
			</div>
		</div><br/><br/>
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