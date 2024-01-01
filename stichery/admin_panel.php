<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "testing");
if(mysqli_connect_error())
{
    echo "<script>
    alert('cant connect');
    window.location.href='mycart.php';
    </script>";
    exit();
}
