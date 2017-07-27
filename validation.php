<?php 
session_start();
$login_input_name = $_POST['login_username'];
$login_input_password = $_POST['login_password'];
$con = mysqli_connect('localhost','root');
mysqli_select_db($con , 'website_1');
$q = "select * from user where username='$login_input_name' AND password='$login_input_password'";
$result = mysqli_query($con , $q);
$row = mysqli_num_rows($result);
if ($row==0) {
	echo "<script>alert('Incorrect username or password !');
	window.location.href='login.php';</script>";
}
else {
	$_SESSION['login_username']=$login_input_name;
	header("location:user_home.php");
}
?>