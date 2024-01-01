<?php
if( isset($_GET["id"]))
{
    $id= $_GET["id"];

    $servername="localhost";
    $username="root";
    $password="";
    $database="size";
    //create connection
   $conn = new mysqli($servername, $username,$password,$database);
   $sql = " DELETE FROM `measurement` WHERE id = $id ";
   $conn->query($sql);
}
   header("location:tailor_login.php");
   exit;
?>