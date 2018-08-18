<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	echo 'Not Connected';
}
if(!mysqli_select_db($con,'complaint'))
{
	echo 'DB not selected';
}
$cname= $_POST['cname'];
$vname=$_POST['vname'];
$oname= $_POST['oname'];
$date= $_POST['date'];
$complaint= $_POST['complaint'];
$sql = "INSERT INTO comp(cname,vname,oname,date,complaint) VALUES('$cname','$vname','$oname','$date','$complaint')";
if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
}
else
{
	header("refresh:0.00000001; url=scr.php");
}



?>