<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unstiched Fabric</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fstyle.css">
    <link rel="stylesheet" href="media.css">
       <link rel="styleesheet"  href="cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/4c729db828.js' crossorigin='anonymous'></script>
  </head>
<body>
 
 <section>
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
      <?php
      $count=0;
      if(isset($_SESSION['cart']))
      {
        $count=count($_SESSION['cart']);
      }
      ?>

                              <li class="nav-item">
                              <a href="mycart.php" class="btn btn-secondary">Cart (<?php echo $count?>)</a>
                              </li>

                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </div>
 



      <!-- <?php
      $count=0;
      if(isset($_SESSION['cart']))
      {
        $count=count($_SESSION['cart']);
      }
      ?>
      <a href="mycart.php">
      <button class="loginBtn" style="height: 41px;
    background-color: #eebbc3;
    width: 103px;
    border-radius: 7px;
    border: none;
    color: #232946;">Cart (<?php echo $count?>)</button></a>
      </div>
    </div>
  </nav>   -->
  
  
  
<div class="container-fluid mt-70px" style="padding: 6rem 0rem;">
    <div class="row text-center pt-5 mx-5">
       <div class="col-sm-3 my-3 ">
        <form action="manage_cart.php" method="POST">
           <div class="card">
            <div>
              <img src="p92.webp" class="img-fluid card-img-top">
            </div>
            <div class="card-body">
               <h5 class="card-title">3pcs Embroided</h5>
                <p class="card-text">Price Rs:4000</p>
                


          <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
          </button>
           <input type="hidden" name="Item_Name" value="bag1">
           <input type="hidden" name="Price" value="3000">
          </div>
          </div>
        </form>
        </div>

  <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p2.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">3pcs Embroided</h5>
        <p class="card-text">price Rs:3000</p>  
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag2">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
</form>
  </div>

    <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p3.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">3pcs Printed</h5>
        <p class="card-text">Price Rs:2500</p>   
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag3">
        <input type="hidden" name="Price"Price value="3000">
      </div>
    </div>
</form>
  </div>

    <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p4.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">2pcs Printed</h5>
        <p class="card-text">Price Rs:4000</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
      
      </button>
        <input type="hidden" name="Item_Name" value="bag4">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
</form>
  </div>
</div>

<div class="row text-center py-1 mx-5 ">
  <div class="col-sm-3 my-3 ">
    <form action="manage_cart.php" method="POST">
    <div class="card">
        <div>
            <img src="p5.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">2pcs Embroided</h5>
        <p class="card-text">Price Rs:3500</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag5">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
     </form>
  </div>

  <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p6.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">2pcs Printed</h5>
        <p class="card-text">Price Rs:2000</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag6">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
</form>
  </div>

    <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p7.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">2pcs Printed</h5>
        <p class="card-text">Price Rs:2500</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag7">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
</form>
  </div>

    <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p8.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">3pcs Printed</h5>
        <p class="card-text">Price Rs:3500</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag8">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
</form>
  </div>
</div>   

<div class="row text-center py-1 mx-5 ">
  <div class="col-sm-3 my-3 ">
    <form action="manage_cart.php" method="POST">
    <div class="card">
        <div>
            <img src="p10.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">2pcs Embroided</h5>
        <p class="card-text">Price Rs:2000</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag9">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
     </form>
  </div>

  <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p11.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">3pcs Printed</h5>
        <p class="card-text">Price Rs:4000</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag10">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
</form>
  </div>

    <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p12.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">3pcs Embroided</h5>
        <p class="card-text">Price Rs:3000</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag11">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
</form>
  </div>

    <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p18.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">3pcs Printed</h5>
        <p class="card-text">Price Rs:2500</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag12">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
</form>
  </div>
</div>



<div class="row text-center py-1 mx-5 ">
  <div class="col-sm-3 my-3 ">
    <form action="manage_cart.php" method="POST">
    <div class="card">
        <div>
            <img src="p14.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">3pcs Printed</h5>
        <p class="card-text">Price Rs:2500</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag13">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
     </form>
  </div>

  <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p15.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">2pcs Embroided</h5>
        <p class="card-text">Price Rs:3000</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag14">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
</form>
  </div>

    <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p16.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">2pcs Printed</h5>
        <p class="card-text">Price Rs:2500</p>
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag15">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
</form>
  </div>

    <div class="col-sm-3 my-3">
  <form action="manage_cart.php" method="POST">
    <div class="card">
    <div>
            <img src="p17.webp" class="img-fluid card-img-top">
         </div>
      <div class="card-body">
        <h5 class="card-title">2pcs Embroided</h5>
        <p class="card-text">Price Rs:3000</p>
        
       <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i>
        </button>
        <input type="hidden" name="Item_Name" value="bag16">
        <input type="hidden" name="Price" value="3000">
      </div>
    </div>
</form>
  </div>
</div>
</div>
 <!--footer-->
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


  </section>

</section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script type="text/javascript">
function pay(amount) {
var handler = StripeCheckout.configure({
key: 'pk_test_51NV6CnKkxmqADoBZzZeDYmeGpoCtZG9c0llzbN5fM81pMr5rthoaVUtVZeZNblbjNRA0B0hxs4fQQvqAbPYmYa2h00pUAFHijv', // your publisher key id
locale: 'auto',
token: function (token) {
// You can access the token ID with `token.id`.
// Get the token ID to your server-side code for use.
console.log('Token Created!!');
console.log(token)
$('#token_response').html(JSON.stringify(token));
$.ajax({
url:"payment.php",
method: 'post',
data: { tokenId: token.id, amount: amount },
dataType: "json",
success: function( response ) {
console.log(response.data);
$('#token_response').append( '<br />' + JSON.stringify(response.data));
}
})
}
});
handler.open({
name: 'Demo Site',
description: '2 widgets',
amount: amount * 100
});
}
</script>
</body>
</html>
</body>
</html>