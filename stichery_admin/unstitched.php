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
  <nav class="navbar navbar-expand-lg menu px-3 fixed-top" style="background-color: #232946;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color:#eebbc3"><i><strong>STITCHERY</strong></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active px-3" aria-current="page" href="index.php" style="color:#ffffff">Tailors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="order.php" style="color:#ffffff;">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="customer.php" style="color:#ffffff;">Customer</a>
          </li>
          
         
         
      </div>
      <a href="/form/logout.php">
      <button class="loginBtn " style="border-radius: 7px;">Log Out</button></a>
      </div>
    </div>
  </nav>

       
    <div class="container my-5 container-primary container-hover">
    <h2  class="text-center"><strong>ADMIN DASHBOARD</strong></h2>   
    <h2>List Of Unstitched Order</h2>
    <a class="btn btn-primary"href="/stichery_admin/create.php" role="button" style="margin-bottom: 28px; margin-top: 1rem;">Add New Tailors</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ORDER ID</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>pay Mode</th>
                <th>Order</th>
                <th>Action</th>
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
            $sql="SELECT * FROM order_manager";
            $result = $conn->query($sql);
            if(!$result)
            {
                die("invalid :".$conn->error);
            }
            while($row = $result->fetch_assoc())
            {
                echo "
                <tr>
                <td>$row[Order_Id]</td>
                <td>$row[fullname]</td>
                <td>$row[phone_no]</td>
                <td>$row[address]</td>
                <td>$row[pay_mode]</td>
                <td>
                    <a class='btn btn-success btn-sm' href='viewOrder.php?id=$row[id]'>View Order</a>
                <td>
                    <a class='btn btn-primary btn-sm' href='edit.php'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='delete.php'>Delete</a>
                </td>
            </tr>";
            }
            ?>
            <!-- <tr>
                <td>1</td>
                <td>iqra</td>
                <td>iqra12@gmail.com</td>
                <td>03114263916</td>
                <td>township</td>
                <td>2023-07-01 15:04:3</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="edit.php">Edit</a>
                    <a class="btn btn-danger btn-sm" href="#">Delete</a>
                </td>
            </tr> -->

        </tbody>

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