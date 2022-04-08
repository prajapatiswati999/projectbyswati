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

 if(isset($_POST['username']))
 {
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="SELECT * FROM register where username='".$username."'AND password='".$password."' ";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0)
	{
		header("location: index.html");
	}
	else
	{
		echo "fail";
	}
 }
}

?>
