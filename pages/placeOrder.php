<?php
    session_start();
    if(!isset($_SESSION['unique_id'])) {
        header("location: ../index.html");
    }

?>

<!-- place order form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Food - Place Order</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/placeOrder.css" />
    <link rel="stylesheet" href="../css/product.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="container__title">
                <h2>Order Summery</h2>
            </div>
            <div class="product__info">
                <?php
                    include_once '../php/config.php';
                    $product_id = mysqli_real_escape_string($conn, $_GET['product_id']);
                    $sql = "SELECT * FROM products WHERE product_id='{$product_id}'";
                    $query = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($query) > 0) {
                        $data = mysqli_fetch_assoc($query);
                    }
                ?>
                <img src="<?php echo $data['product_img']?>" alt="" class="product__info-img"/>
                <div class="prduct__info-txt">
                    <h3><?php echo $data['product_name']?></h3>
                    <p><?php echo $data['product_desc']?></p>
                    <h2>$<?php echo $data['product_price']?>.00</h2>
                </div>
            </div>
            <form action="#" class="productOrder__form">
                <div class="productOrder__form-input">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" />
                </div>
                <div class="productOrder__form-input">
                    <label for="phone">Phone No</label>
                    <input type="number" name="phone" />
                </div>
                <div class="productOrder__form-input">
                    <label for="address">Address</label>
                    <input type="text" name="address"/>
                </div>
                <div class="productOrder__form-input">
                    <label for="name">Payment Mode</label>
                    <select name="payment" id="">
                        <option value="cod">Cash On Delivery</option>
                    </select>
                </div>
                <input type="text" name="loggedID" value="<?php echo $_SESSION['unique_id']?>" hidden>
                <input type="text" name="productID" value="<?php echo $data['product_id']?>" hidden>
                <button type="submit" class="productOrder__btn">Place Order</button>
            </form>

            
        </div>
    </div>   

    <script src="../javascript/placeOrder.js"></script>
    <script src="../javascript/show_hide_popBox.js"></script>
</body>
</html>