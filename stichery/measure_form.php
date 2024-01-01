<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="m.css">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://kit.fontawesome.com/4c729db828.js' crossorigin='anonymous'></script>
    <title>Stichery</title>
  </head>
  <body style="background-color:#fcf6f6;">
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
<th>
   
<div class="container bg-#b0c0e3  " style="background-color:#fcf6f6;">
        <div class="row bg-#EEBBC3 justify-content-center">
        <div class="col-lg-12 bg-#b0c0e3 text-center  my-5 pt-70">
        <h1 class="mt-10 pt-20 " style="color:rgb(233, 154,8);"><b>Place Order!</b></h1>
        </div>
        <div class="col-sm-6 border bg-#b0c0e3 rounded p-4" style="color:#fff; background-color: rgb(105 90 90 / 94%);">
        <form action="measurement.php" method="POST" autocomplete="off">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="fullname" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="address" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Contact</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control" name="contact" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Upload Design</label>
    <div class="col-sm-10">
    <input class="form-control" type="file"  name="design" onchange="readURL(this)" accept="Image/*">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Fabric Details</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio" id="gridRadios1" value="have fabric" required>
          <label class="form-check-label" for="gridRadios1">
            I have Fabric
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio" id="gridRadios2" value="donot have fabric">
          <label class="form-check-label" for="gridRadios2">
            I donot have Fabric
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Categories</label>
    <div class="col-sm-10">
    <select class="form-control"name="category" id="exampleFormControlSelect1">
      <option>Shirt Trouser (Rs:1500)</option>
      <option>Bridal Wear (Rs:30,000)</option>
      <option>Shalwar Kameez (Rs:1200)</option>
      <option>Frocks (Rs:3000)</option>
      <option>Sinple Shirt (Rs:600)</option>
      
    </select>
    </div>
  </div>
    
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Select 
        Measurement Details</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="measuremode" id="gridRadios1" value="Collect Sample" required>
          <label class="form-check-label" for="gridRadios1">
            Collect Sample
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="measuremode" id="gridRadios2" value="Book an appointment">
          <label class="form-check-label" for="gridRadios2">
            Book an appointment
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="measuremode" id="gridRadios2" value="Select from chart">
          <label class="form-check-label" for="gridRadios2">
            Select From Chart

          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Select Your Size</label>
    <div class="col-sm-10">
        <img src="size.jpg">
      <input type="text" class="form-control mt-3"  name="size" id="inputEmail3">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Pickup Date</label>
    <div class="col-sm-10">
      <input type="date" size="30" name="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Dteails</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="details" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
    </div>
  </div>
</form>
            </div>
        </div>
    </div>












    <footer style="margin-top:10px">
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










    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>