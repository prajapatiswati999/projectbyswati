<?php
$name=$_POST['name'];
$pincode=$_POST['pincode'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$amount=$_POST['amount'];
if(!empty($name)|| !empty($pincode)|| !empty($address) || !empty($contact) || !empty($amount))
{   $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $DBNAME="registration";
    $conn=new mysqli($host,$dbusername,$dbpassword,$DBNAME);
   if(mysqli_connect_error())
   {
       die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error() );
   }
   else
   {
    if(strlen(trim($pincode)) != 6)
    {
       echo "enter valid pincode";
    }
    elseif(strlen(trim($contact)) !=10)
    {
       echo "enter valid phone number";
    }
    else
    {
        $stmt=mysqli_query($conn,"insert into product_booking(name,pincode,address,contact,amount)
        values('$name','$pincode','$address','$contact','$amount')");
        if($stmt)
        {
        echo "successfully booked your product ! thank you";
        }
        else
        {echo "booking unsuccessfull !";
        }
    }
   }
}
else
{
    echo "fill all required ";
    die();
}
?>