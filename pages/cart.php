<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
  header("location: ../index.html");
}
?>
<!-- cart page -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Organic Food- Cart</title>

  <!-- <link rel="stylesheet" href="../css/responsive.css"> -->
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/product.css" />
  <link rel="stylesheet" href="../css/placeOrder.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  <style>
    .cart__info {
      position: relative;
      padding: 50px 0px;
      text-align: center;
      border-bottom: 1px solid #ccc;
    }

    .cart__info h3 {
      color: #af1106;
      font-size: 2.1em;
    }

    .productBox {
      position: relative;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-top: -30px;
    }

    .orderProducts {
      flex: 0.6;
      border-right: 1px solid #ccc;
    }

    .userDetails {
      flex: 0.3;
      background-color: #f1f1f1;
      padding: 20px 16px;
      text-align: center;
    }

    .userDetails img {
      width: 150px;
      height: 150px;
      border-radius: 100%;
    }

    .userDetails p {
      font-size: 14px;
      font-weight: 400;
      margin: 6px 0px;
    }

    .showStatus {
      margin-top: 30px;
      font-weight: 600;
    }

    .staus {
      color: green;
    }

    .logout__btn {
      width: 150px;
      padding: 7px 12px;
      margin-top: 20px;
      border: none;
      outline: none;
      background-color: #af1106;
      color: #f1f1f1;
      cursor: pointer;
      border-radius: 5px;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <nav class="nav">
      <!-- project title -->
      <div class="nav__title">Organic Foods</div>
      <div class="navList">
        <ul>
          <li><a href="../home.php">Home</a></li>
          <li><a href="./product.php">Products</a></li>
          <li><a href="./farming.html">Farming Tips</a></li>
          <li><a href="#">Your Orders</a></li>
          <li><a href="./about.html"> About us </a></li>
        </ul>
      </div>
      <div class="navIcon"><i class="fa-solid fa-bars"></i></div>
    </nav>
    <div class="cart__info">
      <h3>Your Orders</h3>
    </div>
    <!-- get produc id and user logged in id -->
    <?php
    include_once '../php/config.php';
    $loggedID = $_SESSION['unique_id'];
    $result = "";
    $sql = "SELECT * FROM userorder LEFT JOIN products ON userorder.product_id = products.product_id WHERE unique_id = '{$loggedID}'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
      if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_assoc($query)) {
          $result .= '<div class="product__info" style="background-color: #f1f1f1; margin-right: 20px; margin-top: 15px; margin-bottom: 15px; box-shadow: 0px 3px 9px rgba(0,0,0,0.07);  ">
          <img src="' . $data['product_img'] . '" alt="" class="product__info-img" />
            <div class="prduct__info-txt" style="margin-left: 40px;">
              <h3>' . $data['product_name'] . '</h3>
              <p>' . $data['product_desc'] . '</p>
              <h2>$' . $data['product_price'] . '.00</h2>
              <p class="showStatus">Status: <span class="staus">' . $data['status'] . '</span></p>
            </div></div>
            ';
        }
      } else {
        $result .= "You don't have any orders";
      }
    }


    ?>

    <section class="productBox">
      <div class="orderProducts" style="display: flex; flex-direction: column;">
        <!-- user ordered product code -->
        <?php echo $result ?>

      </div>

      <!-- showing user details  -->
      <?php
      $sql2 = "SELECT * FROM userreg WHERE unique_id = '{$loggedID}'";
      $data1;
      $query2 = mysqli_query($conn, $sql2);
      if ($query2) {
        if (mysqli_num_rows($query2) > 0) {
          $data1 = mysqli_fetch_assoc($query2);
        }
        else {
          
        }
      }

      ?>
      <div class="userDetails">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtRs_rWILOMx5-v3aXwJu7LWUhnPceiKvvDg&usqp=CAU" alt="">

        <div class="userDetails__txt">
          <h3><?php echo $data1['name'] ?></h3>
          <p><?php echo $data1['mail'] ?></p>
          <p><?php echo $data1['phone'] ?></p>
        </div>
        <a href="../php/logout.php?unique_id=<?php echo $_SESSION['unique_id'] ?>" class="logout__btn">Log out</a>
      </div>

    </section>
  </div>

  <script src="../javascript/logout.js"></script>
  <script src="../javascript/showMenu.js"></script>
</body>

</html>

