<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	echo 'Not Connected';
}
if(!mysqli_select_db($con,'student'))
{
	echo 'DB not selected';
}
$fname= $_POST['fname'];
$lname=$_POST['lname'];
$mail= $_POST['mail'];
$pswd= $_POST['pswd'];
$dob= $_POST['dob'];
$mno= $_POST['mno'];
$sql = "INSERT INTO details(fname,lname,mail,pswd,dob,mno) VALUES('$fname','$lname','$mail','$pswd','$dob','$mno')";
if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
}
else
{
	header("refresh:0.00000001; url=Sr.php");
}

//header("refresh:0.00000001; url=Homepage.php");

?>