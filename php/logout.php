<?php 
    // logout page php code
    session_start();
    include_once './config.php';
    $logOut = mysqli_real_escape_string($conn, $_GET['unique_id']);
    if(isset($_SESSION['unique_id'])) {
        session_unset();
        session_destroy();

        header("location: ../pages/login.html");
    }else {
        header("location: ../index.html");
    }


                
?>