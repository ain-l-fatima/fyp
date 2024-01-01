<?php
include('db.php');

$id=mysqli_real_escape_string($conn,$_GET['id']);
mysqli_query($conn,"update user_form set verification_status='1' where id='$id'");
echo "Your account verified";
?>
<a href="login_form.php"> Click here for Login<</a>
