<?php

session_start();
$con=mysqli_connect("localhost", "root", "", "shop");
if(mysqli_connect_error()){
    echo "<script>
    alert('cannot connect on database');
    window.location.href='mycart.php';
    </script>";
    exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        $query1="INSERT INTO `users`(`Name`, `Phone`, `Address`, `Email`, `Paymode`) VALUES ('$_POST[name]','$_POST[phone]','$_POST[address]','$_POST[email]','$_POST[pay_mode]')";
    if(mysqli_query($con,$query1))
    {
        echo "<script>
        alert('Successful purchase')
        window.location.href='home.php';
        </script>";
        
    }
    }else
    {
        echo "<script>
        alert('SQL error');
        window.location.href='mycart.php';
        </script>";
    }
}
?>