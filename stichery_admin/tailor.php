<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link href="adminpanel.css" rel="stylesheet">
    <title>Stichery_Admin</title>
  </head>
  <body>
  <!-- <nav class="navbar navbar-expand-lg menu px-3 fixed-top" style="background-color: #232946;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color:#eebbc3"><i><strong>STITCHERY</strong></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active px-3" aria-current="page" href="tailor.php" style="color:#ffffff">Tailors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="about.php" style="color:#ffffff;">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="categories.html" style="color:#ffffff;">Customer</a>
          </li>
          
         
         
      </div>
      <a href="/form/logout.php">
      <button class="loginBtn " style="border-radius: 7px;">Log Out</button></a>
      </div>
    </div>
  </nav> -->

<div class="container">
 <div class="row">
  <div class="col-lg-12">   
<table class="table table-success table-hover">
            
   <thead>
    <tr>
      <th scope="col">Order Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">Orders</th>
    </tr>
  </thead>
  <tbody>
   <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="cart";
    //create connection
    $conn = new mysqli($servername, $username,$password,$database);
    //check connection
    if($conn->connect_error)
    {
        die("connection fail:". $conn->connect_error);

    }
   $query="SELECT * FROM `order_manager`";
   $user_result=mysqli_query($conn,$query);
   while($user_fetch= mysqli_fetch_assoc($user_result))
   {
    echo
    "
    <tr>
    <td>$user_fetch[Order_id]</td>
    <td>$user_fetch[Full_Name]</td>
    <td>$user_fetch[Phone_No]</td>
    <td>$user_fetch[Address]</td>
    <td>
      <table class='table table-dark'>
         <thead>
            <tr>
            <th scope='col'>Item Name</th>
            <th scope='col'>Price</th>
            <th scope='col'>Quantity</th>
            </tr>
         </thead>
      <tbody>";
      $order_query="SELECT * FROM `user_orders` WHERE 'Order_id'='$user_fetch[Order_id]'";
      $order_result=mysqli_query($conn,$order_query);
      while($order_fetch=mysqli_fetch_assoc($order_result))
      {
      echo
       "
       <tr>
         <td>$order_fetch[Item_Name]</td>
         <td>$order_fetch[Price]</td>
         <td>$order_fetch[Quantity]</td>
       </tr>
   ";
      }

    echo "
  
    </tbody>
    </table>
    <td>
  </tr>
    ";
   }
   ?>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>order</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Larry the Bird</td>
      <td>@twitter</td>
      <td>Order</td>
    </tr> 
  </tbody>


 </table>
</div>
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>