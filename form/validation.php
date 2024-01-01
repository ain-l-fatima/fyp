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