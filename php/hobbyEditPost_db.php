<?php
  SESSION_START();

include("../config/con_db.php");
if(isset($_SESSION['hID'])){
    $hID = $_SESSION['hID'];

    $sql_hobby_db = "SELECT time FROM hobby_db WHERE hID = '$hID'";
    $result_hobby_db = $conn->query($sql_hobby_db);
    $row = $result_hobby_db->fetch_assoc();
    
    $time = $row['time'];
    
    }

if (isset($_POST['Update']) && isset($_SESSION['hID'])) {
    $hID = $_SESSION['hID'];
    // echo $_SESSION['hID'];

    $activityname = $_POST["activityName"];
    $days = isset($_POST['day']) ? implode(',', array_map(function($day) use ($conn) {
        return $conn->real_escape_string($day);
    }, $_POST['day'])) : '';
    
    $time = $_POST["time"];
    $memberMax = $_POST["memberMax"];
    $location = $_POST["location"];
    $detail = $_POST["detail"];
    $image = $_FILES["image"];
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];
    $imageError = $_FILES['image']['error'];
    $imageType = $_FILES['image']['type'];

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
                            image = '$imageNewName',
                            
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
        }
    } else {
        echo "ไม่มีการอัพโหลดรูปใหม่ <br>";
    }

    $sql = "UPDATE hobby_db SET
                activityname = '$activityname',
                time = '$time',
                `date[]` = '$days', 
                memberMax = '$memberMax',
                location = '$location',
                detail = '$detail',
                dateUpdate = NOW(),
                timeUpdate = NOW()
                
            WHERE `hID` = '$hID'";

    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "บันทึกข้อมูลสำเร็จ";
    } else {
        echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
    }
}
?>
