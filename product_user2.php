<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="Images/logo2.jpeg" alt=""></a>

        <ul class="navmenu">
            <li><a href="index.html">Home</a></li>
            <li><a href="admin_page3.php">Add Product</a></li>
            <li><a href="product_user2">View Product</a></li>
        </ul>

        <div class="nav-icon">
            
            
            <a href="cart.php"><i class='bx bx-cart' ></i></a>

            <div class="bx bx-menu" id="menu-icon"></div>
            
        </div>
    </header>
    
    

    <!--trending-products-section-->
    <section class="trending-product" id="trending">
        <div class="center-text">
            <br>
            <br>
            <br>
            <h2>Here Are The Added Products</h2>
            <br>
            <br>
        </div>

        <div class="box-container">

     
   </div>

        <div class="products">
        <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      
      <div class="row">
            <img src="storage/<?php echo $fetch_product['image_url']; ?>" alt="">
            
                <div class="product-text">
                    
                </div>
                
                

                <div class="price">
                    <h4><?php echo $fetch_product['name']; ?></h4>
                    <p><?php echo $fetch_product['price']; ?></p>
                </div>
                
            </div>
     

      <?php
         };
      };
      ?>
           
           


        </div>
    </section>

    
    <!-- contact-section -->
    <section class="contact">
        <div class="contact-info">
            <div class="first-info">
                <img src="Images/logo.png" alt="">

                <p>3245 Grant Street Longview, <b> Kenya</p>
                <p>0709877878</p>
                <p>code@gmail.com</p>

                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                
                    
                </div>
            </div>

            <div class="second-info">
                <h4>Support</h4>
                <p>Contact Us</p>
                <p>About page</p>
                <p>Size Guide</p>
                <p>Shopping and returns</p>
                <p>Privacy</p>
            </div>

            
        </div>
    </section>

    <script src="java.js"></script>
    
</body>
</html>