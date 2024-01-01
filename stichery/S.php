<?php
    
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "measurement");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $unit = $_POST['unit'];
        $ls = $_POST['ls'];
        $shs = $_POST['shs'];
        $ss= $_POST['ss'];
        $ts = $_POST['ts'];
        $details= $_POST['details'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $final = $_POST['final'];
    
        
      
      // Connecting to the Database
    //   $servername = "localhost";
    //   $username = "root";
    //   $password = "";
    //   $database = "measurements";

    //   // Create a connection
    //   $conn = mysqli_connect($servername, $username, $password, $database);
    //   // Die if connection was not successful
    //   if (!$conn){
    //       die("Sorry we failed to connect: ". mysqli_connect_error());
    //   }
    //   else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `size` (`unit`, `length`, 'shoulder`, `trouser`,'details','address','contact','seleves','final') VALUES ('$unit', '$ls', '$shs', '$ts','$details','$address','$contact','$ss','$final')";
 
    //     if($result){
    //       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //       <strong>Success!</strong> Your entry has been submitted successfully!
    //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">×</span>
    //       </button>
    //     </div>';
    //     }
    //     else{
    //         // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    //         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //       <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
    //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">×</span>
    //       </button>
    //     </div>';
    //     }

    //   }
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }}
     
    // Close connection
    mysqli_close($link);
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="S.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Add Measurements
        </div>
        <form action="home.php"  method="POST">
        <div class="form">
            <div class="input-feild">
                <Label>Unit Of Measurement</Label>
                <input type="text" name="unit" class="input">
            </div>

            <div class="input-feild">
                <Label>Length Size</Label>
                <input type="number" name="length" class="input">
            </div>

            <div class="input-feild">
                <Label>Shoulders Size</Label>
                <input type="number" name="shouldersize" class="input">
            </div>

            <div class="input-feild">
                <Label>Sleeves Size </Label>
                <input type="number" name="sleevessize" class="input">
            </div>

            <div class="input-feild">
                <Label>Trousers Size</Label>
                <input type="number"  name="trousersize"class="input">
            </div>

            <div class="input-feild">
                <Label> Others Details</Label>
                <textarea class="textarea" name="details"></textarea>
            </div>

            <div class="title">
                Dispatch Your Sample
            </div>
               
            <div class="input-feild">
                <Label>Adress</Label>
                <input type="text"  name="address"class="input" >
            </div>

            <div class="input-feild">
                <Label>Contact Number</Label>
                <input type="tel" name="contact" class="input">
            </div>
            <div class="title">
                Select From chart
            </div>
      </div>
            <div class="input-feild">
                <Label>Select Your Measurement :
                <!-- <input type="button" class="button" value="Chart" onclick="ShowImage();" > -->
                <img id="aea" src="ns.jpeg"  width="400" height="280" style="padding-top: 14px;"> 
            </Label>
            </div>
                <div class="input-feild">
                <input type="text"  class="m" name="final" placeholder="Enter Your Measurements" style="margin-top: 13px;
                height: 31px; margin-bottom: 6px;" > 
            </div> 
                <input type="submit" class="button" value="Submit" >
                
            </div>
              
               
                <!-- <div class="btn-field">
                    <button type="button">Sign Up <img src="size.jpeg" alt=""></button>
            </div> -->

            <!-- <button type="submit">
                <img  class="image"src="size.jpeg" >
                onclick="history.go(0)
              </button>
            </div>-->

</form>   
    </div>

     <!-- <script>
         function ShowImage(){
            document.getElementById('aea').style.visibility="visible";
         }
    </script>  -->

         
        </body>
        </html>