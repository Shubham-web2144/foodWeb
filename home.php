<?php
  session_start();
  if(!isset($_SESSION['unique_id'])) {
    header("location: ./index.html");
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Organic Products Seller</title>

    <!-- Style css -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css//responsive.css">
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
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
  </head>
  <body>
    <!-- main container -->
    <div class="wrapper">
      <!-- navigation section -->
      <nav class="nav">
        <!-- project title -->
        <div class="nav__title">Organic Foods</div>
        <div class="navList">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="./pages/product.php">Products</a></li>
            <li><a href="./pages/farming.html">Farming Tips</a></li>
            <li><a href="./pages/cart.php">Your Orders</a></li>
            <li><a href="./pages/about.html">
              About us
          </a></li>
          </ul>
        </div>
        <div class="navIcon"><i class="fa-solid fa-bars"></i></div>
      </nav>
      <!-- banner section -->
      <section class="banner">
        <div class="banner__txt">
          <span class="banner__txt-head"> Organic Vegetables </span>
          <span>and</span>
          <span class="banner__txt-head"> Fresh Fruites </span>
          <span
            >Best quality fresh fruites & vegetables from the farmer's
            house</span
          >
        </div>
      </section>
      <!-- about home page section -->
      <section class="about">
        <img src="./images/about_home.jpg" alt="" class="about__img" />
        <div class="about__txt">
          <h3>About fruite and vegetables</h3>
          <h2>Super market</h2>
          <span>
            We deliver fresh farm produce fruits and vegitables to our esteemed
            customers. Our team memebrers are farm and horticulture experts, who
            helps us to choose the best quality products from the farmer’s house
            accorss the country.
          </span>
          <br />
          <br />
          <br />
          <a href="./pages/about.html" class="about__btn">Read More</a>
        </div>
      </section>

      <!-- product category section -->
      <section class="products">
        <h1>Our Product Categorys</h1>
        <p>
          We pick the farm fresh vegetables and fruits and process with our
          three stage cleaning to completely remove the pesticides and chemicals
          if used. Call us and we will deliver your favorites at your door step.
        </p>
        <div class="products__list">
          <div class="product__card">
            <img src="./images/product_3.jpg" alt="" />
            <span class="product__card-title">Organic food</span>
          </div>
          <!-- above code same as below -->
          <div class="product__card">
            <img src="./images/product_2.jpg" alt="" />
            <span class="product__card-title">Fresh Fruites</span>
          </div>
          <div class="product__card">
            <img src="./images/product_4.jpg" alt="" />
            <span class="product__card-title">Organic Vegetables</span>
          </div>
          <div class="product__card">
            <img src="./images/product_1.jpg" alt="" />
            <span class="product__card-title">Farming</span>
          </div>
        </div>
      </section>

      <!-- offer section -->
      <section class="offerSection"></section>

      <!-- subscribe section -->
      <section class="subscribe">
        <h3>Why everyone love us? subscribe to us</h3>
        <p>
          sign up for our monthly email newsletter containing recipes and meal
          ideas for tasty and farm fresh vegetables and fruits
        </p>
        <form action="" class="subForm">
          <input type="text" name="subMail" placeholder="Your Email address" />
          <button type="submit" class="subForm__btn">subscribe now</button>
        </form>
        <div class="result">This is result</div>
      </section>
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

    <!-- js file -->
    <script src="./javascript/showMenu.js"></script>
    <script src="./javascript/scrollreveal.js"></script>
    <script src="./javascript/subscribe.js"></script>
  </body>
</html>
