<?php
session_start();
if($_SERVER["REQUEST_METHOD"] =="POST")
{
  if(isset($_POST['add']))//isset check is variable present or not, check if button clicked or not
  {
    if(isset($_SESSION['cart']))// to access the variable globally at multiple pages.
    {
      $count=count($_SESSION['cart']);//to count items
    }
    else
    {
      $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);//associative array which has a key
      print_r($_SESSION['cart']);
    }
  }
}
?>

<!-- <nav class="navbar navbar-expand-lg menu px-3 fixed-top" style="background-color: #232946;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color:#eebbc3"><i><strong>STITCHERY</strong></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active px-3" aria-current="page" href="#" style="color:#ffffff">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="about.php" style="color:#ffffff;">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="categories.php" style="color:#ffffff;">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="catalog.php" style="color:#ffffff;">Catalogue</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="allServices.html" style="color:#ffffff;">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="contact.php" style="color:#ffffff;">Contact Us</a>
          </li>
          
      </div>
      <a href="/form/login.php">
      <button class="loginBtn">Register</button></a>
      </div>
    </div>
  </nav>
   -->