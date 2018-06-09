<?php
session_start();
$uname=$_POST['uname'];
$password=$_POST['psw'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'koshish');
$q="Select * from user where user='$uname' && password='$password'";
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
echo $uname." ".$password;
if($num==1)
{
	$_SESSION['uname']=$email;
	header('location:http://localhost/Koshish/volunteer.php');
}
else
{
  // header('location:http://localhost/Koshish/index.html');	
}
?>