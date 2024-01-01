<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_us";

$conn = mysqli_connect($servername, $username, $password, $database);

// if(!$conn)
// {
//     die("sorry:" .mysqli_connect_error());

// }
// else{
//     echo " connected";
// }
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$fname= $_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
// $message=$_POST['message'];



$sql ="INSERT INTO `comment`(`id`, `fname`, `lname`, `email`) VALUES ('[4]','[ali]','[ahmad]','[abx@gmail.com]')";
$result =  mysqli_query($conn, $sql);
if($result)
{
    echo "insert";
}
else{
    echo "not";
    mysqli_error($conn);}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fstyle.css">
    <link rel="stylesheet" href="media.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="contact.css">
<script src='https://kit.fontawesome.com/4c729db828.js' crossorigin='anonymous'></script>
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
                          <a class="navbar-brand" href="first.html">
                            <h3 class="heading-logo">STITCH<span>ERY</span></h3>
                          </a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ms-auto">
                              <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="categories.html">Categories</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="index.php">cataloge</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="allServices.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                      </nav>
                </div>
            </div>
        </div>
    </div>
<!------ Include the above in your HEAD tag ---------->
<div class="box">
<div class="container">
	
<form action=""  method="POST">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" style="padding-left: 4.5rem;">
				<h2 style="color:white;">Contact Us</h2>
				<h4 style="color:white;"> We would love to hear from you !</h4>
			</div>
		</div>
		
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">First Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Last Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="message">Email:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="message" placeholder="Enter email" name="message">
				  </div>
				</div>
				<!-- <div class="form-group">
				  <label class="control-label col-sm-2" for="message">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="message" name="message"></textarea>
				  </div>
				</div> -->
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<input type="submit"  onclick="submitted()" class="btn btn-secondary btn-default"></button>
				  </div>
				</div>
			</div>
		</div>

	</div>
</form>
</div>

</div>

       <!-- footer-->
    
	   <footer style="margin-top:0px">
    <div class="footer-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:0px">
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

<script>
         function submitted(){
           alert("Your message are submitted successfully, Thanks for contact us")
         }
    </script>  
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>