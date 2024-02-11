<?php

    $con = mysqli_connect("127.0.0.1", "root", "", "k-link");
    mysqli_set_charset($con, "utf8");

    if(!$con){
        echo "Error to connect database...";
    }

?>