<?php
ob_start();

    include("../config/con_db.php");
    session_start();

        $uID = $_POST['uID'];
        $username = $_POST['username'];
        $fullname = $_POST['fullname'];
        $mID = $_POST['mID'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];

        $email = $uID."@kmitl.ac.th";

        if ($password != $c_password) {
            $_SESSION['error'] = 'Password are not matching';
            header("location: register.php");
        } else {
                //Insert data to database...
                $sql = "INSERT INTO users
                            (uID, 
                                username, 
                                fullname, 
                                email,
                                mID,
                                password
                            )VALUES('$uID',
                                        '$username',
                                        '$fullname',
                                        '$email',
                                        '$mID',
                                        '$password')";

                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "สมัครสมาชิกสำเร็จ";
                    header('location:index.php');
                    $_SESSION['uID'] = $uID;
                }else{
                    echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
                    header('location:../register.php');
                }
        }
ob_end_flush();

?>

