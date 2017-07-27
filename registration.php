<?php
$name = $_POST["nameOfUser"];
$email = $_POST['email'];
$pass = $_POST['password'];
$Upname = ucfirst($name);
$con = mysqli_connect('localhost','root');
mysqli_select_db($con , 'website_1');
$check = "select * from user where username='$name'";
$result=mysqli_query($con , $check);
$row=mysqli_num_rows($result);
if ($row==0) {
	$q = "INSERT INTO user(username , password, email, date_of_creation) VALUES('$name' , '$pass', '$email', now());";
	mysqli_query($con ,$q);
	header("location:login.php");
}
else {
	echo "<script>alert('Username already exists !');
	window.location.href='registration_type.php';</script>";
}
mysqli_close($con);

?>
