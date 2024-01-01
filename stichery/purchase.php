<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "cart");
if(mysqli_connect_error())
{
    echo "<script>
    alert('cant connect');
    window.location.href='mycart.php';
    </script>";
    exit();
}
if (!$con){
    die("Connection failed: ".mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
     if(isset($_POST['purchase']))
     {
        $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        if(mysqli_query($con,$query1))
        {
            $Order_id=mysqli_insert_id($con);
            $query2="INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                   mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_Name,$Price,$Quantity);
   
                   foreach($_SESSION['cart'] as $key=> $values)
                   {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                   }
                   unset($_SESSION['cart']);
                   echo "<script>
                alert('order placed');
                window.location.href='index.php';
                </script>";
            }
            
            else
            {
                echo "<script>
                alert('sql query prepare error');
                window.location.href='mycart.php';
                </script>";
            }
        }
        elseif($row['pay_mode'] == 'online'){

        
            header('location:stichery/home.php');
    
         }
        else
        {
           echo "
           <script>
           alert('SQL ERROR);
           window.location.href='mycart.php';
           </script>";
        }
     }
  
}

?>