<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- css custom link-->
    <link rel="stylesheet" href="style.css">
    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <!-- bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


    <!-- header section starts-->

<header class="header">

<a href="#" class="logo">logo
<img src="" alt=""></a>
 
<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="#about">About</a>
    <a href="#review">Review</a>
    <a href="#contact">Contact</a>
 </nav>
 <div class="icons">
     <div class="fas fa-search" id="search-btn"></div>
     <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
            $count=count($_SESSION['cart']);
        }
        ?>
        <a href="mycart.php"><div class="fas fa-shopping-cart" style="color:var(--main-color)" id="cart-btn">(<?php echo $count?>)</div></a>
     <div class="fas fa-bars" id="menu-btn"></div>
 </div>

 <div class="search-form">
     <input type="search" id="search-box" placeholder="search here...">
     <label  for="search-box" class="fas fa-search"></label>
 </div>

 
</header>

<!-- header section ends -->


<div class="size">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php

                        $total=0;
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr=$key+1;
                                $total=$total+$value['Price'];
                                echo "
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                        <input class='text-center iquantity' onchange='this.form.submit();' name = 'Mod_Quantity' type='number' value='$value[Quantity]' min='1' max='10'>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form
                                    </td>
                                        <td class='itotal'></td>
                                    <td> 
                                        <form action='manage_cart.php' method='POST'>
                                        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </td>
                                </tr>   
                                ";
                            }
                        }

                        ?>            
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3" style="width:320px">
                <div class="border bg-light rounded p-4">
                    <h2>Grand Total: </h2>
                    <h5 type="text" style="font-size:20px" id="gtotal"></h5>
                    <br>
                    <?php
                      if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                      {

                    ?>
                    <form action="purchase.php" method="POST">      
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone"class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="password" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pay_mode" value="COD"id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery
                            </label>
                        </div><br>

                        <button class="btn1" name="purchase">Make Purchase</button>
                        

                    </form>
                    <?php
                            
                        }
                    ?>

                </div>
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
    for(i=0;i<iprice.length;i++)
    {
        itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);

        gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText=gt;
}
subTotal();

</script>


 <!-- swiper css link-->
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
 <!-- js custom link-->
 <script src="script.js"></script>




</body>
</html>