<?php
if($_GET['email'] && $_GET['v_code'])
{
include "config.php";
$email = $_GET['email'];
$v_code = $_GET['v_code'];
$query = mysqli_query($conn,
"SELECT * FROM `user_form` WHERE `email`='".$email."' && `verification_code`='".$v_code."';"
);
if (mysqli_num_rows($query) > 0) {
$row= mysqli_fetch_array($query);
if($row['is_verified'] == 0){
mysqli_query($conn,
"UPDATE `user_form` SET `is_verified`='1' WHERE `email`='".$email."'");
$msg = "Congratulations! Your email has been verified.";
}else{
$msg = "You have already verified your account with us";
}
} else {
$msg = "This email has been not registered with us";
}
}
else
{
$msg = "Danger! Your something goes to wrong.";
}
?>