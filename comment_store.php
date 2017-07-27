<?php
session_start();
if (!isset($_SESSION['login_username'])) {
	header("location:login.php");
}
$comnt = $_POST['comment'];
$user_name = $_SESSION['login_username'];
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con , 'website_1');
$q_all = "INSERT INTO comments(comment,username,date) VALUES('$comnt','$user_name',now());";
mysqli_query($con ,$q_all);
mysqli_close($con);
header('location:comment.php');
?>