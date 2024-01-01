<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Stichery_Admin</title>
  </head>
  <body>
    <div class="container my-5">
    <h2>List Of Tailors</h2>
    <a class="btn btn-primary"href="/stichery_admin/create.php" role="button">New Tailors</a>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Serial no</th>
             <th scope="col">Item Name</th>
             <th scope="col">Item Price</th>
            <th scope="col">Quantity</th>
           <th scope="col">Total</th>
           <th scope="col"></th> 
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
                <td>$row[Serialno]</td>
                <td>$row[ItemName]</td>
                <td>$row[ItemPrice]</td>
                <td>$row[Quantity]</td>
                <td>$row[Total]</td>
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
  </body>
</html>