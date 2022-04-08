<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$confirm=$_POST['confirm'];
if(!empty($username)|| !empty($password)|| !empty($email) || !empty($confirm))
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

    
    $SELECT ="SELECT email From register where email=? limit 1";
    $INSERT="INSERT INTO register (username,email,password) values(?,?,?)";

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
        $stmt->bind_param("sss" , $username,$email,$password);
        
        if($stmt->execute())
        {
            header("location: login_reg_page.html");
        
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