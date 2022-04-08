<?php
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$confirm=$_POST['confirm'];
if(!empty($name)|| !empty($password)|| !empty($email) || !empty($confirm))
{
    $host="localhost";
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
    if(strlen(trim($password)) < 5)
    {
       echo "Password cannot be less than 5 characters";
    }
    elseif(trim($password) !=  trim($confirm))
    {
            echo "Passwords should match";
        
    }
    else
    {

    
    $SELECT ="SELECT email From admin where email=? limit 1";
    $INSERT="INSERT INTO admin (name,email,password) values(?,?,?)";

    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;
    

    if($rnum==0)
    {
        $stmt->close();

        $stmt=$conn->prepare($INSERT);
        $stmt->bind_param("sss" , $name,$email,$password);
        
        if($stmt->execute())
        {
        echo "new record inserted";
        
        }
        else{
            echo "something wants wrong!";
        }
        
      
    }
    else{
        echo "someone already register using this email";
    }
    $stmt->close();
    $conn->close();
   }
  }
}
else
{
    echo "fill all required ";
    die();
}

?>