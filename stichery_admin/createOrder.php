<?php

$servername="localhost";
$username="root";
$password="";
$database="size";
//create connection
$conn = new mysqli($servername, $username,$password,$database);
//check connection
if($conn->connect_error)
{
    die("connection fail:". $conn->connect_error);

}




 $name="";
 $email="";
 $address="";
 $phone="";
 $errorMessage="";
 $successMessage="";

 if($_SERVER['REQUEST_METHOD']=='POST'){



   
    $name=$_POST["name"];
    $addres=$_POST["address"];
    $contact=$_POST["contact"];
    $design=$_POST["design"];
    $fabric_detai=$_POST["radio"];
    $category=$_POST["category"];
    $measure_mode=$_POST["measuremode"];
    $size=$_POST["size"];
    $date=$_POST["date"];
    $detail=$_POST["details"];


    do{
        if(empty($name)|| empty($email) || empty($addres) || empty($contact))
        {
            $errorMessage = "Fill All Feilds";
            break;
        }
        //add new client
        $sql="INSERT INTO `measurement`( `name`, `address`, `contact`, `design`, `fabric_detail`, `category`, `measure_mode`, `size`, `date`, `detail`) VALUES ('$_POST[fullname]','$_POST[address]','$_POST[contact]','$_POST[design]','$_POST[radio]','$_POST[category]','$_POST[measuremode]','$_POST[size]','$_POST[date]','$_POST[details]')";

        $result = $conn->query($sql);
    if(!$result)
       {
         $errorMessage="invalid query:".$conn->error;
         break;
        }


        $name="";
    $addres="";
    $contact="";
    $design="";
    $fabric_detai="";
    $category="";
    $measure_mode="";
    $size="";
    $date="";
    $detail="";


        $successMessage=" Order added";
        header("location:order.php");
        exit;

    }while(false);

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

    <title>Sticthery Admin</title>
  </head>
  <body>
  <div class="container my-5">
        <h2>New Tailor</h2>
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
        <form action="" method="POST">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"name="name" value="<?php echo $name;?>">
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
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"name="name" value="<?php echo $name;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"name="name" value="<?php echo $name;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"name="name" value="<?php echo $name;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"name="name" value="<?php echo $name;?>">
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pick Up Date</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"name="date" value="<?php echo $date;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Add Details</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"name="detail" value="<?php echo $detail;?>">
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