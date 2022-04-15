<?php
    $host = "localhost"; // host name
    $user = "root"; // user name
    $pass = ""; // user password
    $db = "organicfood"; // database name

    $conn = mysqli_connect($host,$user,$pass,$db); // connection 

    if(!$conn) { // ifvconnect erorr occurs
        echo "Db is not connected" . mysqli_connect_error();
    }

?>