
<?php
  session_start();
  if(!isset($_SESSION['unique_id'])) {
    header("location: ../index.html");
  }

?>

<!-- product page -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Organic Product Seller-Products</title>

    <!-- Style css -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css//responsive.css" />
    <link rel="stylesheet" href="../css/product.css" />
    <!-- Font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- scroll reveal cdn -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- slider cdn -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
  </head>
  <body>
    <div class="wrapper">
      <!-- navigation section -->
      <nav class="nav">
        <!-- project title -->
        <div class="nav__title">Organic Foods</div>
        <div class="navList">
          <ul>
            <li><a href="../home.php">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="./farming.html">Farming Tips</a></li>
            <li><a href="./cart.php">Your Orders</a></li>
            <li><a href="./about.html">
              About us
          </a></li>
          </ul>
        </div>
        <div class="navIcon"><i class="fa-solid fa-bars"></i></div>
      </nav>
      <!-- slide show section -->
      <section class="slideShow">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="../images/slide-1.jpg" alt="" class="slide_img" />
            </div>
            <div class="swiper-slide">
              <img src="../images/slide-2.jpg" alt="" class="slide_img" />
            </div>
            <div class="swiper-slide">
              <img src="../images/slide-3.jpg" alt="" class="slide_img" />
            </div>
            <div class="swiper-slide">
              <img src="../images/slide-4.jpg" alt="" class="slide_img" />
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <!-- product section -->
      
      <section class="productBox">
        
      </section>
<!-- pop up window -->

      <footer class="footer">
        <h4>Organic Food</h4>
        <div class="footerList">
          <ul>
            <li>
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-regular fa-envelope"></i></a>
            </li>
          </ul>
        </div>
      </footer>
    </div>

    <script src="../javascript/showMenu.js"></script>
    <!-- slider js cdn -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../javascript/slider.js"></script>
    <script src="../javascript/productShow.js"></script>
    <script src="../javascript/addToCart.js"></script>
  </body>
</html>
