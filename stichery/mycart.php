<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bag
    </title>

      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href=mycart.css>
  </head>

<body>
    <div class="container">
    <div class="row">
      
    <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>Your Cart</h1>
        </div>
        <div class="col-lg-9">
<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial no</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th> 
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart']as$key=>$value) 
    {
        $sr=$key+1;
        
         echo"
          <tr>
          <td>$sr</td>
          <td>$value[Item_Name]</td>
          <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
          <td>
          <form action='manage_cart.php' method='POST'>
          <input class='text-center iquantity' name='Mod_Qunatity' onchange='subTotal()'onchange='this.form.submit();' type='number' value ='$value[Quantity]' min='1' max='10'>
          <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
          </form>
          </td>
          <td class='itotal'></td>
          <td>
          <form action='manage_cart.php' method='POST'>
          <button  name='remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
          <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
          </form>
          </td>
         </tr>";

    }
    }

    ?>

   
  </tbody>
</table>
        </div>
      <div class="col-lg-3">
        <div class ="border bg-light rounded p-4">
        <h3> Grand Total</h3>
        <h5 class="text-right" id="gtotal"></h5>
        <br>
        <?php
         if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
         {
        ?>
        <form action="purchase.php" method="POST" autocomplete="off">
         <div class="form-group">
          <label >Full Name:</label>
               <input type="text" class="form-control"  name="fullname" placeholder="Enter Your Name" required>
           </div>
           <div class="form-group">
          <label >Address:</label>
               <input type="text" class="form-control"name="address"  placeholder="Enter Your Address" required>
           </div>
           <div class="form-group">
          <label >Contact:</label>
               <input type="number" class="form-control" name="phone_no" placeholder="Enter Your Contact" required>
           </div>
           
          <div class="custom-control custom-radio">
           <!-- <---- <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="pay_mode" >
            <label class="custom-control-label" for="defaultGroupExample1">Cash On Delivery</label>--->
            
            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="pay_mode" >
            <label class="custom-control-label" for="defaultGroupExample1">Cash On Delivery</label>
          </div>
      

        
          
          <button class="btn btn-primary btn-block my-3" name="purchase">Place Order</button>
          <button class="btn btn-primary btn-block my-3" name="purchase"><a href="/FinalYearProject/checkout/index.php" style="color:#fff; decoration:none;">Online Payment</a></button>
        </form>
        <?php
         }
         ?>
        </div>
      </div>
    </div>
  </div>


<script>

 
   var gt=0;
  var iprice=document.getElementsByClassName('iprice');
  var iquantity=document.getElementsByClassName('iquantity');
  var itotal=document.getElementsByClassName('itotal');
  var gtotal=document.getElementById('gtotal');

  function subTotal()
  {
         gt=0;
         for(i=0; i<iprice.length; i++)
         {

          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
          gt=gt+(iprice[i].value)*(iquantity[i].value);
         }
         gtotal.innerText=gt;

  }
  
  subTotal();
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>