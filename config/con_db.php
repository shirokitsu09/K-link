<?php

    $conn = mysqli_connect("127.0.0.1", "root", "", "k-link_db");
    mysqli_set_charset($conn, "utf8");

    if(!$conn){
        echo "Error to connect database...";
    }
    else{
        echo "connected";
    }

?>