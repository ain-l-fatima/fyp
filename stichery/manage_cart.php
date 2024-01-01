<?php
session_start();
if($_SERVER["REQUEST_METHOD"] =="POST")

     {
      if(isset($_POST['add']))//isset check is variable present or not, check if button clicked or not
        {
         if(isset($_SESSION['cart']))// to access the variable globally at multiple pages.
          {
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo"<script>
                alert('item already added');
                window.location.href='index.php';
                </script>";
            }
            else{
           $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>
            alert('item added');
            window.location.href='index.php';
            </script>";
            }
          }
        else
        {
          $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
          echo"<script>
          alert('item added');
          window.location.href='index.php';
          </script>";
        }  
        
        }
           
    
        }
if(isset($_POST['remove_item']))
{
   foreach($_SESSION['cart'] as $key=> $value)
   {
     if($value['Item_Name']==$_POST['Item_Name'])
      {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart']=array_values($_SESSION['cart']);
        echo "<script>
        alert('Item Removed');
         window.location.href='mycart.php';
        </script>";
     }

    }

if(isset($_POST['Mod_Quantity']))

{
  foreach($_SESSION['cart'] as $key=> $value) //cart items are passed with its value
  {
    if($value['Item_Name']==$_POST['Item_Name']) //match item name that is sent with the item name that is in the session
    {
      $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
      print_r($_SESSION['cart']);
      // echo "<script>
      // window.location.href='mycart.php';
      // </script>";
    }
  
  }

}

}


?>