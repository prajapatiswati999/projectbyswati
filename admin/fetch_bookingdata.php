<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav1.css">
    <link rel="stylesheet" href="fetchtable.css">

  <link rel="stylesheet" href="wlc1.css">
  <title>Document</title>
</head>
<body>
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">Flipkart</label>
  </nav>
  <section class="b">
  <table class="b5"> 
        <tr>
            <td >Total Admin </td>
            <br>
        </tr>
    
      <?php
      error_reporting(0);
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
        $query="select * from admin";
        $data=mysqli_query($conn,$query);
        $total=mysqlI_num_rows($data);
       
         if($total!=0)
          {
         echo 
         "
         <tr>
         <tH > ".$total." </tH>
         </tr> </Table> 
         ";
          }
      
      }
      ?>
        
  <table class="b6"> 
        <tr>
            <td >Total Users</td>
        </tr>
    
      <?php
      error_reporting(0);
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
        $query="select * from register";
        $data=mysqli_query($conn,$query);
        $total=mysqlI_num_rows($data);
       
         if($total!=0)
          {
         echo 
         "
         <tr>
         <tH > ".$total." </tH>
         </tr> </Table> 
         ";
          }
      
      }
      ?>
       <table class="b7"> 
        <tr>
            <td >Total Orders</td>
        </tr>
    
      <?php
      error_reporting(0);
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
        $query="select * from product_booking";
        $data=mysqli_query($conn,$query);
        $total=mysqlI_num_rows($data);
       
         if($total!=0)
          {
         echo 
         "
         <tr>
         <tH > ".$total." </tH>
         </tr> </Table> 
         ";
          }
      
      }
      ?>
      <br>
      <br>
  <div class="tt">Order details</div> 
    <table class="t" >
    <tr>
    <th>id</th>
    <td>name</td>
    <th>pincode</th>
    <td>address</td>
    <th>contact</th>
    <td>amount</td>
    </tr>
    
<?php
error_reporting(0);
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
  $query="select * from product_booking";
  $data=mysqli_query($conn,$query);
  $total=mysqlI_num_rows($data);
 
   if($total!=0)
    {
    
     while($result=mysqli_fetch_assoc($data))
      { echo"
        <tr>
        <th> ".$result[id]." </th>
        <td> ".$result[name]." </td>
        <th> ".$result[pincode]." </th>
        <td> ".$result[address]."</td>
        <th> ".$result[contact]." </th>
        <th> ".$result[amount]." </th>
        
        </tr>
        
        ";
      }
    }

}

?>
</table>
   
</body>

</html>