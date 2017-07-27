<?php
session_start();
$user_name = $_SESSION['login_username'];
echo $user_name;
$con = mysqli_connect('localhost','root');
mysqli_select_db($con , 'website_1');
$dlt = "delete from user where username='$user_name'";
mysqli_query($con,$dlt);
$dlt_cmnt = "delete from comments where username='$user_name'";
mysqli_query($con,$dlt_cmnt);
mysqli_close($con);
session_destroy();
echo "<script type=\"text/javascript\">alert(\"Thank you for joining us. We hope you will come back soon.\");
window.location.href='index.html'</script>";
?>
