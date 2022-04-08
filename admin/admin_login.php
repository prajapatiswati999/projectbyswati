<?php

$HOST="localhost";
$dbusername="root";
$dbpassword="";
$dbname="registration";

$conn= new mysqli($HOST,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
   {
       die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error() );
   }
else
{

 if(isset($_POST['name']))
 {
	$admin=$_POST['name'];
	$password=$_POST['password'];
	$sql= "SELECT * FROM admin where name='".$admin."'AND password='".$password."' ";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0)
	{
		header("location: wlc.php");
	}
	else
	{
		echo "fail";
	}
 }
}

?>
