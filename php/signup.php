<?php
// signup form php code
    session_start();
    include_once "./config.php";
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($name) && !empty($mail) && !empty($phone) && !empty($password)) {
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $randomNum = rand(0,10000000);
            $sql = "INSERT INTO `userreg`(`unique_id`, `name`, `mail`, `phone`, `password`) VALUES ('{$randomNum}','{$name}','{$mail}','{$phone}','{$password}')";

            $query = mysqli_query($conn, $sql);

            if($query) {
                $sql2 = "SELECT * FROM userreg WHERE mail= '{$mail}'";
                $query2 = mysqli_query($conn, $sql2);
                if(mysqli_num_rows($query2) > 0) {
                    $data = mysqli_fetch_assoc($query2);
                    $_SESSION['unique_id'] = $data['unique_id'];
                    echo "success";
                }
            }else {
                echo "Something went wrong";
            }
        }
        else {
            echo "Please enter valid email id";
        }
    }else {
        echo "Please enter all inputs field";
    }
?>