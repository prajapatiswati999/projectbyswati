<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Responsive Navbar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="nav1.css">
  <link rel="stylesheet" href="wlc1.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body >
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">Flipkart</label>
    <label class="logout" ><a href="logout.php">Logout</a></label>
    <!--<ul>
<li><a class="active" href="#">my profile</a></li>
<li><a href="#">manage user</a></li>
<li><a href="#">manage product</a></li>
<li><a href="#">manage order</a></li>

</ul>-->
  </nav>

  <!--<marquee >To perceive a career in renowned firm with dedicated effort and associated 
  my self with an organization that gives the chance to update my knowledge</marquee>
 -->
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
     
          
      
      

     <div class="b1"><a href="fetch_admindata.php">Admin Record</a> </div>
      <div class="b2"><a href="fetch_registerdata.php">User Record</a></div>
      <div class="b4"><a href="fetch_bookingdata.php"> Order Detail</a></div>
    
  </section>



</body>

</html>