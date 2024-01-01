<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "2checkout_db");
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
    $sql="INSERT INTO `product`(`email`, `card_detail`, `date`, `CVV`, `CH_name`, `bank`, `transaction_image`) VALUES ('$_POST[email]','$_POST[card_detail]','$_POST[date]','$_POST[CVV]','$_POST[CH_name]','$_POST[bank]','$_POST[image]')";
    // $sql="INSERT INTO `product`( `email`, `card_detail`,'date', `CVV`, `CH_name`, `bank`,'transaction_image') VALUES ('$_POST[email]','$_POST[card_detail]','$_POST[date]','$_POST[CVV]','$_POST[CH_name]','$_POST[bank]','$_POST[image])'";
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
