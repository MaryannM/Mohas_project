<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
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
        <a href="#" class="logo"><img src="Images/logo2.png" alt=""></a>

        <ul class="navmenu">
            <li><a href="#">Home</a></li>
            <li><a href="product_user.php">Shop</a></li>
            <li><a href="#">Other</a></li>
            <li><a href="#">Add Product</a></li>
            <li><a href="#">View Product</a></li>
        </ul>

        <div class="nav-icon">
            
            <a href="logout.php"><i class='bx bx-user-minus' ></i></a>
            <a href="#"><i class='bx bx-cart' ></i></a>

            <div class="bx bx-menu" id="menu-icon"></div>
            
        </div>
    </header>

    <section class="main-home">
        <div class="main-text">
            
            <h1>Hi <br><?php echo $_SESSION['user_name'] ?></h1>
            <p>Ready  To Shop?</p>

            <a href="#" class="main-btn">Shop Now<i class='bx bx-right-arrow-alt' ></i></a>
        </div>

        <div class="down-arrow">
            <a href="#trending" class="down"></a><i class='bx bx-down-arrow-alt' ></i></a>
        </div>
    </section>

    <!--trending-products-section-->
    <section class="trending-product" id="trending">
        <div class="center-text">
            <h2>Our Trending<Span> Products</Span></h2>
        </div>

        <div class="products">
            <div class="row">
                <img src="Images/1.jpg" alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Half Running Set</h4>
                    <p>$99- $129</p>
                </div>
            </div>

            <div class="row">
                <img src="Images/2.jpg" alt="">
                <div class="product-text">
                    <h5>New</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="rating">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Formal Men Lowers</h4>
                    <p>$99- $129</p>
                </div>
            </div>

            <div class="row">
                <img src="Images/3.jpg" alt="">
               
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Half Running Suit</h4>
                    <p>$99- $129</p>
                </div>
            </div>

            <div class="row">
                <img src="Images/4.jpg" alt="">
                <div class="product-text">
                    <h5>Hot</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Half Fancy Dress</h4>
                    <p>$99- $129</p>
                </div>
            </div>

            <div class="row">
                <img src="Images/5.jpg" alt="">
               
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Flix Flox Jeans</h4>
                    <p>$99- $129</p>
                </div>
            </div>

            <div class="row">
                <img src="Images/6.jpg" alt="">
                <div class="product-text">
                    <h5>Hot</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Fancy Salwar Suits</h4>
                    <p>$99- $129</p>
                </div>
            </div>

            <div class="row">
                <img src="Images/7.jpg" alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Printed Straight</h4>
                    <p>$99- $129</p>
                </div>
            </div>

            <div class="row">
                <img src="Images/8.jpg" alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Collot Full</h4>
                    <p>$99- $129</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Client-Review-Section -->
    <section class="client-reviews">
        <div class="reviews">
            <h3>Client Reviews</h3>
            <img src="Images/8.jpg"alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem saepe quod rem reprehenderit voluptatibus, obcaecati nam molestias distinctio, natus recusandae illo. Illum repellendus dolore perspiciatis inventore. Maiores aliquam ipsam veniam.</p>
            <h2>Mark Jevenue</h2>
            <p>CEO of Addle</p>
        </div>
    </section>

    <!-- update-news-section -->
    <section class="update-news">
        <div class="up-center-text">
            <h2>News Update</h2>
        </div>

        <div class="update-cart">
            <div class="cart">
                <img src="Images/bl-1.png" alt="">
                <h5>26 Jan 2022</h5>
                <h4> Lets start bringing sales on this summer</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, cumque quidem laudantium minus quae voluptatum facilis quo tempora exercitationem aut eos consectetur iste quaerat, fugiat distinctio ullam animi numquam. Nisi.</p>

                <h6>Continue Reading</h6>
            </div>
        

        
            <div class="cart">
                <img src="Images/bl-2.png" alt="">
                <h5>26 Jan 2022</h5>
                <h4> Lets start bringing sales on this summer</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, cumque quidem laudantium minus quae voluptatum facilis quo tempora exercitationem aut eos consectetur iste quaerat, fugiat distinctio ullam animi numquam. Nisi.</p>

                <h6>Continue Reading</h6>
            </div>
        

        
            <div class="cart">
                <img src="Images/bl-3.png" alt="">
                <h5>26 Jan 2022</h5>
                <h4> Lets start bringing sales on this summer</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, cumque quidem laudantium minus quae voluptatum facilis quo tempora exercitationem aut eos consectetur iste quaerat, fugiat distinctio ullam animi numquam. Nisi.</p>

                <h6>Continue Reading</h6>
            </div>
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