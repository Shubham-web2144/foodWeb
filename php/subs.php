<?php
// subscriber form
    session_start();
    include_once './config.php';
    $mail = mysqli_real_escape_string($conn, $_POST['subMail']);

    if(!empty($mail)) {
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $sql = "INSERT INTO `subscribers`( `email`) VALUES ('{$mail}')";
            $query = mysqli_query($conn, $sql);
            if($query) {
                echo "DONE";
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
        echo "Please enter email id";
    }

?>