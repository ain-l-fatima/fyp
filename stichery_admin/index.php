<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="/stichery/fstyle.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link href="adminpanel.css" rel="stylesheet">
     
    <script src='https://kit.fontawesome.com/4c729db828.js' crossorigin='anonymous'></script>
    <title>Stichery_Admin</title>
  </head>
  <body>
  <div class="navbar-container">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="/FinalYearProject/stichery/first.html">
                            <h3 class="heading-logo">STITCH<span>ERY</span></h3>
                          </a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ms-auto">
                             
                              <li class="nav-item">
                                <a class="nav-link" href="index.php">Tailors</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="customer.php">Customer</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="order.php">Orders</a>
                              </li>
                             
                              <li class="nav-item">
                                <a href="logout.php" class="btn btn-secondary">Log Out</a>
                                </li>
  
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </div>

  
       
    <div class="container my-5 container-primary container-hover">
    <h2  class="text-center" style="
    text-align: center!important;
    padding-top: 96px;"><strong>ADMIN DASHBOARD</strong></h2>   
    <h2>List Of Tailors</h2>
    <a class="btn btn-primary"href="/stichery_admin/create.php" role="button" style="margin-bottom: 28px; margin-top: 1rem;">Add New Tailors</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Order</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="sticthery_admin";
            //create connection
            $conn = new mysqli($servername, $username,$password,$database);
            //check connection
            if($conn->connect_error)
            {
                die("connection fail:". $conn->connect_error);

            }
            $sql="SELECT * FROM tailors";
            $result = $conn->query($sql);
            if(!$result)
            {
                die("invalid :".$conn->error);
            }
            while($row = $result->fetch_assoc())
            {
                echo "
                <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[phone]</td>
                <td>$row[address]</td>
                <td>$row[created_at]</td>
                <td>
                    <a class='btn btn-success btn-sm' href='viewOrder.php?id=$row[id]'>View Order</a>
                <td>
                    <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
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
  


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>

</html>