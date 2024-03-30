<?php
  SESSION_START();
  ob_start();
include("../config/con_db.php");
if(isset($_SESSION['hID'])){
    $hID = $_SESSION['hID'];

    $sql_hobby_db = "SELECT time FROM hobby_db WHERE hID = '$hID'";
    $result_hobby_db = $conn->query($sql_hobby_db);
    $row = $result_hobby_db->fetch_assoc();
    
    $time = $row['time'];
    
    }

if (isset($_POST['Update'])) {
    $hID = $_SESSION['hID'];
    // echo $_SESSION['hID'];

    $activityname = $_POST["activityName"];
    $days = isset($_POST['day']) ? implode(',', array_map(function($day) use ($conn) {
        return $conn->real_escape_string($day);
    }, $_POST['day'])) : '';
    
    $Updatetag = $_POST['tag'];
    $UpdateArray = explode(',',$Updatetag);
    $tag = implode(',',$UpdateArray);

    $time = $_POST["time"];
    $memberMax = $_POST["memberMax"];
    $location = $_POST["location"];
    $detail = $_POST["detail"];

    $tag = $_POST["tag"];

    $image = $_FILES["image"];
    $imageName = $_FILES["image"]["name"];
    $imageTmpName = $_FILES["image"]["tmp_name"];
    $imageSize = $_FILES["image"]["size"];
    $imageError = $_FILES["image"]["error"];
    $imageType = $_FILES["image"]["type"];

    $imageExt = explode('.', $imageName);
    $imageActualExt = strtolower(end($imageExt));

    $allowed = array('jpg','jpeg','png','pdf');

    $imageDestination = '';

    if (in_array($imageActualExt, $allowed) || $image != '') {
        if ($imageError === 0) {
            if ($imageSize > 1) {
                $imageNewName = uniqid('', true).".".$imageActualExt;
                $imageDestination = 'uploadedImg/'.$imageNewName;

                move_uploaded_file($imageTmpName, $imageDestination);

                $sql_img = "UPDATE hobby_db SET
                            img = '$imageNewName'
                            
                        WHERE `hID` = '$hID'";

                $result_img = mysqli_query($conn, $sql_img);

                if($result_img) {
                    echo "บันทึกรูปสำเร็จ <br>";
                } else {
                    echo "ผิดพลาด, ไม่สามารถบันทึกรูปได้... <br>";
                }
            } else {
                echo "ไฟล์รูปใหญ่เกินไป";
            }

        } else {
            echo "เกิดข้อผิดพลาดบางอย่างเกี่ยวกับการอัพโหลดรูป หรือรูปไม่มีการเปลี่ยนแปลง<br>";
            header('location:hobbyAboutGroup.php?hID='.$hID);
        }
    } else {
        echo "ไม่มีการอัพโหลดรูปใหม่ <br>";
    }

    if($memberMax =="00" || $memberMax =="0" || $memberMax == "ไม่จำกัด" ){
        $memberMax = NULL;

        $sql = "UPDATE hobby_db SET
                activityname = '$activityname',
                time = '$time',
                `date[]` = '$days', 
                memberMax = NULL,
                location = '$location',
                detail = '$detail',
                tag = '$tag',
                dateUpdate = NOW(),
                timeUpdate = NOW()
                
            WHERE `hID` = '$hID'";
    } else{

    $sql = "UPDATE hobby_db SET
                activityname = '$activityname',
                time = '$time',
                `date[]` = '$days', 
                memberMax = '$memberMax',
                location = '$location',
                detail = '$detail',
                tag = '$tag',
                dateUpdate = NOW(),
                timeUpdate = NOW()
                
            WHERE `hID` = '$hID'";
    }
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "บันทึกข้อมูลสำเร็จ";
        header('location:hobbyAboutGroup.php?hID='.$hID);
    } else {
        echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
    }
}

if (isset($_POST['Delete'])) {
    $hID = $_SESSION['hID'];
    $sql_delete = "DELETE FROM hobby_db WHERE hID = '$hID'";
    $result_delete = mysqli_query($conn, $sql_delete);

        if($result_delete) {
            echo "ลบกลุ่มสำเร็จ";
        } else {
            echo "ผิดพลาด, ไม่สามารถลบกลุ่มได้...";
        }
        header('location:index.php#hobby-home');
}

ob_end_flush();
?>
