<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "size");
if(mysqli_connect_error())
{
    echo "<script>
    alert('cant connect');
    window.location.href='mycart.php';
    </script>";
    exit();
}
else{
    echo "done";
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $sql="INSERT INTO `measurement`( `name`, `address`, `contact`, `design`, `fabric_detail`, `category`, `measure_mode`, `size`, `date`, `detail`) VALUES ('$_POST[fullname]','$_POST[address]','$_POST[contact]','$_POST[design]','$_POST[radio]','$_POST[category]','$_POST[measuremode]','$_POST[size]','$_POST[date]','$_POST[details]')";
    if(mysqli_query($con,$sql))
    {
        echo "submit";
    }
    else{
        echo "
        <script>
        alert('SQL ERROR);
        window.location.href='mycart.php';
        </script>";
    }

}
