<?php

@include 'config.php';
@include 'verify_recaptcha.php';
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email, $v_code)
{
  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';

  $mail = new PHPMailer(true);
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


//Create an instance; passing `true` enables exceptions


try {
    //Server settings
                        //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ainul.zahra72@gmail.com';                     //SMTP username
    $mail->Password   = 'kjhqbelmbvisfcpx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ainul.zahra72@gmail.com', 'STITCHERY');
    $mail->addAddress($email);     //Add a recipient
   
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email Verification ';
    $mail->Body    = "Thanks for registration!
                       Click the link below for verification <a href='http://localhost/form/verify.php?email=$email&v_code=$v_code'>Verify</a>";
   

    $mail->send();
    return true;
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    return false;
}
}

$returnMsg = ''; 


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone = $_POST['phone'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $image = $_POST['image'];
   $cnic = $_POST['cnic'];
   $v_code=bin2hex(random_bytes(16));

//     if(empty($name))
//     {
//         echo "please enter your name";
//     }

//     if(!preg_match("/^[a-zA-Z\s]+$/", $name))
//     {
//         echo "Enter string only";

//     }
//     if(!preg_match('/^[0-9]*$/',$phone))
//     {
// echo "enter numbers only";
//     }
//     if(strlen(   $phone)>11){
//         echo"enter valid number";
//     }
//     if(strlen(   $phone)<11){
//         echo"enter valid number";
//     }

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);








   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';
      

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
         
      }else{

         $insert = "INSERT INTO user_form(name,image,cnic, email, password, user_type, verification_code, is_verified) VALUES('$name','$image', '$cnic','$email','$pass','$user_type','$v_code','0')";
        
        
        
        
         mysqli_query($conn, $insert )&& sendMail($_POST['email'],$v_code) ;

       

         echo "<script>
         alert('Registration is successful');
         window.location.href='login_form.php';
         </script>
         ";}
      }
      
   
};

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src='https://kit.fontawesome.com/4c729db828.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>STITCHERY!</title>
    <style>
      .message{
        color:red;
      }


      body{
    background-color: #fcf6f6;
}
/* .container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 700px;
    background-color: #fcf6f6;
} */
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    background-color: rgb(245,240,240) !important;
    /* height: 200vh; */
}
.header{
    width:100% ;
    height: 100vh;
}
.text-container{
    display: flex;
    align-items: center;
    justify-content: space-between;

}
.nav_bar-top{
    background-color: #fcf6f6;
    width: 100%;
    height: 16vh;
    padding: 26px;
}
.text-content{
    display: flex;
    align-items: center;
}
.para-text{
    margin-bottom: 0px;
    font-size: 17px;
    color: rgba(0,0,0,0.589);
    font-weight: 500;
    margin: 0px 4px;
}
.span-text{
    padding: 0px 6px;
}
.icon-social{
    color:rgb(244,0,0);
    font-size: 21px;
    padding: 0px 5px;
    margin: 0px 7px;
    cursor: pointer;
}
.icon-social:hover{
    color:rgb(117,6,6);
}
.navbar-container{
    position: absolute;
    top: 70px;
    left: 52px;
    width: 90%;
    background-color: white;
    padding: 16px 38px;
    z-index: 55;
}
.heading-logo{
    font-size: 38px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 0px;
}
.heading-logo span{
    color: rgb(233, 154,8);
}
.nav-item .nav-link{
    color: rgba(8, 8, 8, 0.685);
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
}
.nav-item .nav-link:hover{
    color: rgba(255, 102, 0,0.911);
}
footer{
   width: 100%;
   /* height: 90vh; */
   background-color: rgb(31,29,29);
   /* padding: 24px; */
}
.footer-container{
   margin-top:20px;
   padding: 30px 4px 9px 4px;

}
.footer-logo{
   color: rgba(255,255, 255,0.863);
   letter-spacing: 2px;
   font-weight: 800;
}
.footer-para{
   font-size: 14px;
   line-height: 30px;
   color: rgba(255,255,255,0.534);
   margin: 25px 0px;
}
.heading-sm-footer{
   color: rgb(255,255,255,0.863);
   font-size: 22px;
   letter-spacing: 4px;
   font-weight: 700;
   margin: 18px 0px;    

}
.social-link-footer{
   margin: 16px 0px;

}
.icon-social-footer{
   font-size: 21px;
   padding: 9px;
   border: 1px solid rgb(13, 196, 13);
   color: rgb(13, 196, 13);
   margin: 0px 4px;
   cursor: pointer;
}
.icon-social-footer:hover{
   background-color: rgb(13, 196, 13);
   color: white;
}
.heading-pages{
   color: rgba(255,255,255,0.863);
   font-size: 25px;
   letter-spacing: 2px;
   font-weight: 700;
   margin-bottom: 18px;
}
.footer-links{
   font-size: 15px!important;
   color: rgba(255,255,255,0.863)!important;

}
.footer-links:hover{
   color: white;
}
.contact-footer{
   display: flex;
   flex-direction: column;
}
.text-contact{
   margin: 16px 0px;
   color: white;
   font-size: 19px;
   color: rgba(255,255,255,0.534);
}
.footer-icons{
   font-size: 19px;
   color:rgba(255,255,255,0.863); 
   padding: 0px 9px;
}
.footer-rights{
   margin-top: 22px; 
   border-top:1px solid rgba(255,255,255,0.32) ;
   width: 100%;
   /* height: 100px; */
   display: flex;
   align-items: center;
   justify-content: center;
}
.rights-para{
   margin: 0px;
   color: rgba(255,255,255,0.623);
   font-size: 16px;
   
}
    </style>
  </head>
  <body >


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
                          <a class="navbar-brand" href="/FinalYearProject/stichery/first.html">
                            <h3 class="heading-logo">STITCH<span>ERY</span></h3>
                          </a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ms-auto">
                              
                              <li class="nav-item">
                              <a class="nav-link" href="register_form.php">Register</a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" href="login_form.php">Login</a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" href="logout.php">Logout</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </div>



<div class="form-container">


<script>
function myFun(){
   var correct_way=/^[A-Za-z]+$/;
  var a=document.getElementById("name").value;
  var em = document.getElementById("email").pattern;
          
  if(a==""){
    document.getElementById("msg").innerHTML="**Please Fill User Name";
    return false;
  }
  if(a.match(correct_way))
  true;
  else{
    document.getElementById("msg").innerHTML="name should be alphabets only";
    return false;
  }

  
}

  </script>

   <form action="" method="post" autocomplete="off" onsubmit="return myFun()">
      <h3><b>Register Now</b></h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      
      <input type="text" name="name" id="name" required placeholder="Enter Your Name"><span id="msg"></span>
      <input class="file-upload-input" type="file"  name="image" required placeholder="Upload Profile Picture" accept="Image/*">
     
      

      <input type="text" pattern="^[0-9]{5}-[0-9]{7}-[0-9]{1}$" 
      name="cnic"  
      title="Enter CNIC like 12345-1234567-1" required placeholder="Enter Your CNIC">
      <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" id="email" name="email" required placeholder="Enter Your Email"><span id="GFG"></span>
      <input type="tel"  name="phone" required placeholder="Enter Your Contact Number">
      <input type="password" name="password" required placeholder="Enter Your Password">
      <input type="password" name="cpassword" required placeholder="Confirm Your Password">
      <input type="text" name="address" required placeholder="Enter Your Address">
      <select name="user_type">
         <option value="user">User</option>
         <option value="admin">Admin</option>
         <option value="tailor">Tailor</option>
      </select>
     
      <div class="g-recaptcha" data-sitekey="6Le3gUEnAAAAAMYnVEczskvWj-67lAoGad5VLdVi" required></div>
      <input type="submit" name="submit" value="register now" class="form-btn bg-darkblue color-white"> 
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>



<footer>
    <div class="footer-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <h3 class="heading-logo footer-logo">STITCH<span>ERY</span></h3>
            <p class="footer-para">Welcome to our cutting-edge
              online
              tailoring system, where fashion meets technology in perfect harmony. We bring the power of the customization and
              convenience right to your fingertips</p>

              <h5 class="heading-sm-footer">FOLLOW US</h5>
              <div class="social-links-footer">
                <i class="fa-brands icon-social-footer fa-facebook"></i>
                <i class="fa-brands icon-social-footer fa-snapchat"></i>
                <a href="https://wa.me/03184500927" target="_blank"><i class="fa-brands icon-social-footer fa-whatsapp"></i></a>
                <i class="fa-brands icon-social-footer fa-instagram"></i>
            </div>

          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
           <div class="pages-footer">
            <h3 class="heading-pages">Pages Links</h3>
              <!-- navbar footer -->
              
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link footer-links" aria-current="page" href="/FinalYearProject/stichery/about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link footer-links" href="/FinalYearProject/stichery/categories.html">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link footer-links "href="/FinalYearProject/stichery/index.php">cataloge</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link footer-links "href="/FinalYearProject/stichery/contact.php">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link footer-links dropdown-toggle" href="/FinalYearProject/stichery/allServices.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/FinalYearProject/stichery/stitching.html">Stitching</a></li>
                    <li><a class="dropdown-item" href="/FinalYearProject/stichery/services.html">Alteration</a></li>
                    <li><a class="dropdown-item" href="/FinalYearProject/stichery/buyfabric.html">Unstitch fabric</a></li>
                  </ul>
                </li>
              </ul>
           </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
        <h3 class="heading-pages">Contact Us</h3>
        <p class="contact-footer">
          <span class="text-contact"><i class="fa-solid footer-icons  fa-location-dot"></i>Johar Town, lahore</span>
          <span class="text-contact"><i class="fa-solid  footer-icons fa-envelope"></i>stitchery73@gmail.com</span>
          <span class="text-contact"><i class="fa-solid  footer-icons fa-phone"></i>03114263619</span>
        </p>
        </div>
      </div>
    </div>
    </div>
    <div class="container-fluid gx-0">
      <div class="footer-rights">
        <div class="rights-para">
          Copyright - 2023 Stitchery | All Rights Reserved.
        </div>
      </div>

    </div>
  
  </footer>
   








  <?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    if(empty($name))
    {
        echo "please enter your name";
    }

    if(!preg_match("/^[a-zA-Z\s]+$/", $name))
    {
        echo "Enter string only";

    }
    if(!preg_match('/^[0-9]*$/',$phone))
    {
echo "enter numbers only";
    }
    if(strlen(   $phone)>11){
        echo"enter valid number";
    }
    if(strlen(   $phone)<11){
        echo"enter valid number";
    }
}
?>








    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>

</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
