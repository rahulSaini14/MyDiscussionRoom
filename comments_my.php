<?php
session_start();
if (!isset($_SESSION['login_username'])) {
	header("location:login.php");
}
$u_name = $_SESSION['login_username'];
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			background-color: #FFFFFF;
		}
		#mbody {
			background-image: url("comments_my.jpg");
			background-attachment: fixed;
			background-size: cover;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-repeat: no-repeat;
			display: none;
		}
		#bigtxt {
			font-size: 80px;
			text-shadow: 5px 5px #FFFF00;
			font-weight: bold;
			color: #FF0000;
		}
		#maincomment {
			min-height: 100px;
			max-width: 500px;
		}
		.cmntuser {
			box-shadow: 5px 5px #FF8C00;
			display: table;
			margin-top: 20px;
			margin-bottom: 20px;
			background-color: rgba(148,0,211,0.5);
			border-style: outset;
			border-color: #B8860B;
			font-size: 20px;
			color: #FFFFFF;
			max-width: 400px;
			word-break: break-all;
		}
		.name_cmnt {
			font-size: 15px;
			color: #FFFF00;
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
	<title>comments</title>
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
		<div>
			<p id="bigtxt">My Comments...</p>
			<div id="maincomment">
				<?php 
					$con = mysqli_connect('localhost','root');
					mysqli_select_db($con , 'website_1');
				$txt = "Select * from comments;";
				$result = mysqli_query($con , $txt);
				$i = mysqli_num_rows($result);
				for ($k=0; $k<$i; $k++) { 
					$prnt = mysqli_fetch_array($result,MYSQLI_NUM);
					if (strcmp($u_name, $prnt[2])==0) {
						echo "<p class=\"cmntuser\"><span class=\"name_cmnt\" >$prnt[2]:  ".$prnt[3]."</span></br> $prnt[1] </br><form action=\"comment_delete_my.php\" onsubmit='return isdelete()' method=\"post\"><input type=\"hidden\" name=\"cmnt_id\" value='$prnt[0]'/><input type=\"submit\" value=\"Delete\"/></form></p>";
					}
				}
				mysqli_close($con);
				?>
			</div>
		</div>
	</center>
</div>
</body>
<script type="text/javascript">
	function isdelete() {
		var isdlt = confirm("Are you really want to delete your comment?");
		return isdlt;
	}
	<script src="jquery-3.2.1.js"></script>
	<script src="jquery-3.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#loading').hide();
			$('body').css("background-color","#90CAF9");
			$('#mbody').show(1000);
		});
	</script>
</script>
</html>
