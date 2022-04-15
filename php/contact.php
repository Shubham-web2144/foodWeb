<?php
// contact form php
    session_start();
    include_once './config.php';
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // if all inputs are valid
    if(!empty($name) && !empty($mail) && !empty($message)) {
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('{$name}','{$mail}','{$message}')";
            $query = mysqli_query($conn, $sql);
            if($query) {
                echo "Done";
            }
            else {
                echo "Something went wrong";
            }
        }
        else {
            echo "Please enter valid email id";
        }
    }
    else {
        echo "Please enter all inputs field";
    }
?>