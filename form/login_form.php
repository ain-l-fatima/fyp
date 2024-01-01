



<?php
error_reporting(0);
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:/stichery_admin/index.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:/stichery/first.html');

      }

      elseif($row['user_type'] == 'tailor'){

        $_SESSION['user_name'] = $row['name'];
        header('location:/stichery_admin/viewOrder.php');

     }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>



  

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>



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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
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

</head>
<body>

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
                                <a class="nav-link " aria-current="page" href="#">home</a>
                              </li>
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

   <form action="" method="POST">
      <h3>login now</h3>

      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
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
                <i class="fa-brands icon-social-footer fa-whatsapp"></i>
                <i class="fa-brands icon-social-footer fa-instagram"></i>
            </div>

          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
           <div class="pages-footer">
            <h3 class="heading-pages">Pages Links</h3>
              <!-- navbar footer -->
              
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link footer-links" aria-current="page" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link footer-links" href="categories.html">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link footer-links "href="index.php">cataloge</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link footer-links "href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link footer-links dropdown-toggle" href="allServices.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="stitching.html">Stitching</a></li>
                    <li><a class="dropdown-item" href="services.html">Alteration</a></li>
                    <li><a class="dropdown-item" href="buyfabric.html">Unstitch fabric</a></li>
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

</body>
</html>