<?php
// login form php code
    session_start();
    include_once "./config.php";
    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
// if all inputs fields are valid
    if(!empty($mail) && !empty($pass)) {
        // sql command for validating user input
        $sql = "SELECT * FROM userreg WHERE mail='{$mail}' AND password='{$pass}'";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0) {
            $result = mysqli_fetch_assoc($query);
            $_SESSION['unique_id'] = $result['unique_id'];
            echo "Login";
        }
        else {
            echo "User is not exists";
        }
    }
    else {
        echo "All inputs fields are required";
    }
?>