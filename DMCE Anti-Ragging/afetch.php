<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	echo 'Not Connected';
}
if(!mysqli_select_db($con,'admin'))
{
	echo 'DB not selected';
}
$fname= $_POST['fname'];
$pswd= $_POST['pswd'];
$result=mysqli_query($con,"SELECT fname,pswd FROM admin");
while($row=mysqli_fetch_array($result))
{
	//echo $row['Name']." ".$row['Email'];
	//echo "<br />";
	if($fname==$row['fname'] && $pswd==$row['pswd'] )
	{
	//echo "done";
	header("refresh:0.00000001; url=view.php");

	}
else
	//echo "$fname";
    //echo "$pswd";
	//header("refresh:0.00000001; url=model2.php");
	echo "not done";
}
?>
