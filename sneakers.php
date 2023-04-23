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
        <a href="mycart.php"><div class="fas fa-shopping-cart"style="color:var(--main-color)" id="cart-btn">(<?php echo $count?>)</div></a>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label  for="search-box" class="fas fa-search"></label>
    </div>

    
</header>

<!-- header section ends -->




<!-- section clothes starts -->



<div class="container mt-5">
    <div class="row">

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika23.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag1</h5>
                        <p class="card-text" style="font-size:20px">Price: $450</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag1">
                        <input type="hidden" name="Price" value="450">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika24.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag2</h5>
                        <p class="card-text" style="font-size:20px">Price: $650</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag2">
                        <input type="hidden" name="Price" value="650">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika25.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag3</h5>
                        <p class="card-text"  style="font-size:20px">Price: $750</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag3">
                        <input type="hidden" name="Price" value="750">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika27.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag4</h5>
                        <p class="card-text" style="font-size:20px">Price: $950</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag4">
                        <input type="hidden" name="Price" value="950">
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>


<div class="container mt-5">
    <div class="row">

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika11.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag1</h5>
                        <p class="card-text" style="font-size:20px">Price: $450</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag1">
                        <input type="hidden" name="Price" value="450">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika26.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag2</h5>
                        <p class="card-text" style="font-size:20px">Price: $650</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag2">
                        <input type="hidden" name="Price" value="650">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika13.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag3</h5>
                        <p class="card-text"  style="font-size:20px">Price: $750</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag3">
                        <input type="hidden" name="Price" value="750">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika14.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag4</h5>
                        <p class="card-text" style="font-size:20px">Price: $950</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag4">
                        <input type="hidden" name="Price" value="950">
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>


<div class="container mt-5">
    <div class="row">

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika15.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag1</h5>
                        <p class="card-text" style="font-size:20px">Price: $450</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag1">
                        <input type="hidden" name="Price" value="450">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika16.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag2</h5>
                        <p class="card-text" style="font-size:20px">Price: $650</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag2">
                        <input type="hidden" name="Price" value="650">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika17.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag3</h5>
                        <p class="card-text"  style="font-size:20px">Price: $750</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag3">
                        <input type="hidden" name="Price" value="750">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika18.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag4</h5>
                        <p class="card-text" style="font-size:20px">Price: $950</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag4">
                        <input type="hidden" name="Price" value="950">
                    </div>
                </div>
            </form>
        </div>
      
    </div>
</div>


<div class="container mt-5">
    <div class="row">

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika19.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag1</h5>
                        <p class="card-text" style="font-size:20px">Price: $450</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag1">
                        <input type="hidden" name="Price" value="450">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika20.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag2</h5>
                        <p class="card-text" style="font-size:20px">Price: $650</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag2">
                        <input type="hidden" name="Price" value="650">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika21.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag3</h5>
                        <p class="card-text"  style="font-size:20px">Price: $750</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag3">
                        <input type="hidden" name="Price" value="750">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/patika22.jpg" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:15px">Bag4</h5>
                        <p class="card-text" style="font-size:20px">Price: $950</p>
                        <button type="submit" name= "Add_To_Cart" class="btn9">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag4">
                        <input type="hidden" name="Price" value="950">
                    </div>
                </div>
            </form>
        </div>
      
    </div>
</div>
<!-- section clothes endss -->





<!--  footer section starts -->


<div class="footer">
  <div class="box-container">

    <div class="box">
      <h3>Quicky links</h3>
      <a href="home.php"><i class="fa fa-arrow-circle-right"></i> home</a>
      <a href="about.php"><i class="fa fa-arrow-circle-right"></i> about</a>
      <a href="review.php"><i class="fa fa-arrow-circle-right"></i> review</a>
      <a href="contact.php"><i class="fa fa-arrow-circle-right"></i> contact</a>
    </div>

    <div class="box">
      <h3>Contact info</h3>
      <a href="#"><i class="fas fa-phone"></i>+381 64 345 789</a>
      <a href="#"><i class="fas fa-phone"></i>+381 63 212 987</a>
      <a href="#"><i class="fa fa-envelope"></i>nekiemail@gmail,com</a>
      <a href="#"><i class="fas fa-map"></i>Belgrade, Serbia</a>
    </div>

    <div class="box">
         <h3>Follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

  </div>
</div>

<!--  footer section ends -->






    <!-- swiper css link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
    <!-- js custom link-->
    <script src="script.js"></script>



</body>
</html>