<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <a href="mycart.php"><div class="fas fa-shopping-cart" id="cart-btn">(<?php echo $count?>)</div></a>

        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label  for="search-box" class="fas fa-search"></label>
    </div>

    
</header>

<!-- header section ends -->


<section class="booking">

    <form action="book_form.php" method="POST" class="book-form">
        <div class="flex">
            <div class="input-box">
                <span>Name</span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>
            <div class="input-box">
                <span>Surname</span>
                <input type="text" placeholder="Enter your surname" name="surname">
            </div>
            <div class="input-box">
                <span>Number</span>
                <input type="text" placeholder="Enter your number" name="number">
            </div>
            <div class="input-box">
                <span>Email</span>
                <input type="email" placeholder="Enter your email" name="email">
            </div>
            <div class="input-box">
                <span>Address</span>
                <input type="address" placeholder="Enter your address" name="address">
            </div>
            
        </div>
        <br><br>

        <input type="submit" value="submit" class="btn1" name="send" style="">
        
    </form>
</section>














 <!-- swiper css link-->
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
    <!-- js custom link-->
    <script src="script.js"></script>



</body>
</html>