<?php
$user=$_POST['uname'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['p'];
$phone=$_POST['phone'];
$role=$_POST['role'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$location=$_POST['location'];
$profession=$_POST['profession'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'koshish');
$q="insert into user (user,name,phone,email,password,role,gender,address,location,profession)
 values('$user','$name',$phone,'$email','$password','$role','$gender','$address','$location','$profession')";
$result=mysqli_query($con,$q);
//echo $user." ".$name." ".$email." ".$phone." ".$role." ".$gender." ".$address." ".$location." ".$profession;
$r=mysqli_query($con,"select * from user where email='$email'");
$s=mysqli_num_rows($r);
if($s==1)
{
	echo "<h2>user is already registered<h2><br><h2>Want to go to home page:<a href='index.html'>Home</a>";
	
}

mysqli_close($con);
?>
<html>
<head></head>
<body>
<h2><?php if($result==1)
{
echo "You are successfully Registered as $name";
}
?>
</h2>
</body>
</html>