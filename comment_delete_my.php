<?php
	session_start();
	$id_comnt = $_POST['cmnt_id'];
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con , 'website_1');
	$delt = "Delete from comments where id='$id_comnt'";
	mysqli_query($con,$delt);
	mysqli_close($con);
	header('location:comments_my.php');
?>