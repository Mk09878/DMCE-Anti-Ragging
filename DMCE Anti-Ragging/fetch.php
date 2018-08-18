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
$pswd= $_POST['pswd'];
$result=mysqli_query($con,"SELECT fname,pswd FROM details");
while($row=mysqli_fetch_array($result))
{
	//echo $row['Name']." ".$row['Email'];
	//echo "<br />";
	if($fname==$row['fname'] && $pswd==$row['pswd'] )
	{
	
	header("refresh:0.000000001; url=SL.php");

	}
else
	//echo "$fname";
    //echo "$pswd";
	header("refresh:0.00000001; url=Incorrect.php");
}
?>
