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

$id="";
$name="";
$email="";
$address="";
$phone="";
$errorMessage="";
$successMessage="";


if($_SERVER['REQUEST_METHOD']=='GET')
{
    if(!isset($_GET["id"]))
    {
        header("location:/stichery_admin/index.php");
        exit;
    }
    $id = $_GET["id"];

    $sql="SELECT * FROM `tailors` WHERE id = $id ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row)
    {
       header("location:index.php");
        exit;
    
    }
        $name = $row["name"];
        $email = $row["email"];
        $phone = $row["phone"];
        $address = $row["address"];

}

//post update data
else{
    $id=$_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];

    do{
        if( empty($id) || empty($name)|| empty($email) || empty($address) || empty($phone))
        {
            $errorMessage = "Fill All Feilds";
            break;
        }
        $sql= "UPDATE tailors".
        " SET name ='$name',email ='$email',phone='$phone',address ='$address'".
         "WHERE id = $id";

        $result=$conn->query($sql);

        if(!$result)
       {
         $errorMessage="invalid query:".$conn->error;
         break;
        }
        
        $successMessage=" Client added";
         header("location:index.php");
        exit;
    }while(true);
}
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/stichery/fstyle.css">
<link rel="stylesheet" href="media.css">
<script src='https://kit.fontawesome.com/4c729db828.js' crossorigin='anonymous'></script>
<title>Sticthery Admin</title>
<style>

.my-5 {
margin-top: 9rem!important;
margin-bottom: 3rem!important;
}
    </style>   <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/stichery/fstyle.css">
<link rel="stylesheet" href="media.css">
<script src='https://kit.fontawesome.com/4c729db828.js' crossorigin='anonymous'></script>
<title>Sticthery Admin</title>
<style>
back
.my-5 {
margin-top: 9rem!important;
margin-bottom: 3rem!important;
}
    </style>
    <title>Sticthery Admin</title>
  </head>
 <body style="background-color:#fcf6f6;">

<div class="header">
  <div class="nav_bar-top">
      <div class="container-fluid">
          <div class="text-container">
              <div class="text-content">
                <p class="para-text"><span class="span-text"><i class="fa-solid fa-envelope"></i></span>stitchery73@gmail.com</p>
                <p class="para-text"><span class="span-text"><i class="fa-solid fa-phone"></i></span>03114263619</p>
              </div>

              <div class="social-links">
                  <i class="fa-brands icon-social fa-facebook"></i>
                  <i class="fa-brands icon-social fa-snapchat"></i>
                  <i class="fa-brands icon-social fa-whatsapp"></i>
                  <i class="fa-brands icon-social fa-instagram"></i>
              </div>

              <!-- navbar -->

              <div class="navbar-container">
                  <nav class="navbar navbar-expand-lg ">
                      <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                          <h3 class="heading-logo">STITCH<span>ERY</span></h3>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                          <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                              <a class="nav-link " aria-current="page" href="#">About</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Categories</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">cataloge</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Stitching</a></li>
                                <li><a class="dropdown-item" href="#">Alteration</a></li>
                                <li><a class="dropdown-item" href="#">Unstitch fabric</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
              </div>
          </div>
      </div>
  </div>
  <!-- navbar end -->
    <div class="container my-5">
        <h2>Update Tailor Data</h2>
        <?php
        if(!empty($errorMessage))
        {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong> $errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
           </div>
            ";
        }?>
        <form  method="post">
            <input type="hidden"name="id" value="<?php echo $id;?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name"  value="<?php echo $name;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control"name="email" value="<?php echo $email;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="tel" class="form-control"name="phone" value="<?php echo $phone;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"name="address" value="<?php echo $address;?>">
                </div>
            </div>
            <?php
               if(!empty($successMessage))
               {
                echo "
                <div class='row-mb-3'>
                <div class='offset-sm-3 col-sm-6 d-grid'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                </div>
                "; 
               }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="index.php" role="button">Cancel</a>
                </div>
            </div>

            
        </form>

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