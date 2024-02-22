<?php

    include("../config/con_db.php");
    session_start();

    $uID = $_POST["uID"];
    $password = $_POST["password"];

    //Retrieve inout data with database.
    $sql_check_auth = "SELECT 
                            a.*,
                            b.rName 
                            FROM users AS a
                            LEFT JOIN role AS b 
                            ON a.rID = b.rID
                            WHERE a.uID = '$uID' 
                            AND 
                            a.password = '$password' 
                        -- AND
                        --     status <> 0
                        ";
    $result_check_auth = mysqli_query($conn, $sql_check_auth);

    //Check have user account.
    if($result_check_auth->num_rows >= 1){

        $userData = mysqli_fetch_array($result_check_auth);

        $uID = $userData["uID"];
        $username = $userData["username"];
        $rfullname = $userData["fullname"];
        $fID = $userData["fID"];
        $rID = $userData["rID"];
        $status = $userData["status"];

        //Check user has active.
        if($status == 0){
            //Redirect
            header("Location: login.php");
        }

        //Store data to session.
        $_SESSION["uID"] = $userData["uID"];
        $_SESSION["username"] = $userData["username"];
        $_SESSION["fullname"] = $userData["fullname"];
        $_SESSION["fID"] = $userData["fID"];
        $_SESSION["rID"] = $userData["rID"];

        //Check premission by role.
        if($_SESSION["rID"] == 100){ //User

            header("Location: index.php");

        }elseif($_SESSION["rID"] == 300){ 
            
        }elseif($_SESSION["rID"] == 500){

        }elseif($_SESSION["rID"] == 900){ 

            //Redirect
            header("Location: xxxx.php");

        }else{

            echo "Error, สิทธ์การเข้าใช้งานไม่ถูกต้อง...กรุณาลองใหม่";

        }
        

    }else{

        echo "Error, ไม่พบข้อมูลผู้ใช้งาน....";

    }

?>