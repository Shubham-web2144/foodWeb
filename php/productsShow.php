<?php 
//  displaying all products from database
        session_start();
        include_once './config.php';
        $sql = "SELECT * FROM products"; // sql command
        $query = mysqli_query($conn, $sql);
        $card = "";
        if($query) {
            if(mysqli_num_rows($query) > 0) {
                while($data = mysqli_fetch_assoc($query)) {
                    $card .= '
                    <div class="productCard">
                      <img
                        src="' .$data['product_img'].'"
                        class="productCard__img"
                        alt=""
                      />
                      <div class="productCard__txt">
                         <h3>'. $data['product_name'] .'</h3>
                         <p>
                            '. $data['product_desc'] .'
                          </p>
                          <h2>$'.$data['product_price'].'.00</h2>
                        <input type="text" value="'.$data['product_id'].'" hidden/>
                        <input type="text" value="'.$_SESSION['unique_id'].'" hidden/>
                         <a href="../pages/placeOrder.php?product_id='.$data['product_id'].'" type="submit" style="text-decoration: none;" class="productCard__btn">Buy Now</a>
                      </div>
                     </div>';
 
                }
            }
        }

        echo $card;

      ?>

      