<?php
// place order php code
    session_start();
    include_once './config.php';
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $payment = mysqli_real_escape_string($conn, $_POST['payment']);
    $loggedID = mysqli_real_escape_string($conn, $_POST['loggedID']);
    $productID = mysqli_real_escape_string($conn, $_POST['productID']);

    // if all inputs are valid 
    if(!empty($name) && !empty($phone) && !empty($address) && !empty($payment)) {
        $currTime = time(); // current time
        $status = "Pending";
        // inserting into datbase table
        $sql = "INSERT INTO `userorder`(`unique_id`,`customer`,`phone`,`product_id`, `payment_method`, `address`, `currTime`, `status`) VALUES ('{$loggedID}','{$name}','{$phone}','{$productID}','{$payment}','$address','{$currTime}','{$status}')";
        $query = mysqli_query($conn, $sql);
        if($query) {
            echo "DONE";
        }
        else {
            echo "Something went wrong";
        }
    }
    else {
        echo "Please enter all inputs fields";
    }
?>