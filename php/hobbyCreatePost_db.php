<?php
include("../config/con_db.php");
session_start();

function generateID($conn) {
    $dateComponents = date('myd');

    $sql_hID = "SELECT MAX(SUBSTRING_INDEX(hID, '-', -1)) AS lastNumber FROM hobby_db WHERE hID LIKE 'h$dateComponents%'";
    $result_hID = $conn->query($sql_hID);

    if ($result_hID && $result_hID->num_rows > 0) {
        $row = $result_hID->fetch_assoc();
        $nextNumber = intval($row['lastNumber']) + 1;
    } else {
        $nextNumber = 1;
    }

    $suffix = sprintf("%03d", $nextNumber);
    return 'h' . $dateComponents . '-' . $suffix;
}

$hID = generateID($conn); 

echo $hID; 



if (isset($_POST['Create'])) {
    $activityname = $_POST["activityName"];
    $days = isset($_POST['day']) ? implode(',', array_map(function($day) use ($conn) {
        return $conn->real_escape_string($day);
    }, $_POST['day'])) : '';
    
    $uID = $_SESSION["uID"];
    $time = $_POST["time"];
    $memberMax = $_POST["memberMax"];
    $location = $_POST["location"];
    $detail = $_POST["detail"];
    $image = $_FILES["img"];
    $imageName = $_FILES['img']['name'];
    $imageTmpName = $_FILES['img']['tmp_name'];
    $imageSize = $_FILES['img']['size'];
    $imageError = $_FILES['img']['error'];
    $imageType = $_FILES['img']['type'];

    $imageExt = explode('.', $imageName);
    $imageActualExt = strtolower(end($imageExt));

    $allowed = array('jpg','jpeg','png','pdf');

    $imageDestination = '';

    if (in_array($imageActualExt, $allowed)) {
        if ($imageError === 0) {
            if ($imageSize > 1) {
                $imageNewName = uniqid('', true).".".$imageActualExt;
                $imageDestination = 'uploadedImg/'.$imageNewName;

                move_uploaded_file($imageTmpName, $imageDestination);

                $sql_img = "INSERT INTO hobby_db
                            (hID,img
                            ) VALUES ('$hID','$imageNewName'
                                     )";

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
        $sql_img = "INSERT INTO hobby_db
                            (hID
                            ) VALUES ('$hID'
                                     )";

                $result_img = mysqli_query($conn, $sql_img);
    }
    
    $sql = "UPDATE hobby_db SET
                            type = 'hobby',
                            activityName = '$activityname',
                            time = '$time',
                            `date[]` = '$days',
                            memberMax = '$memberMax',
                            location = '$location',
                            detail = '$detail',
                            dateCreate = NOW(),
                            timeCreate = NOW(),
                            createBy = '$uID',
                            dateUpdate = NOW(),
                            timeUpdate = NOW(),
                            header = '$uID'
                            WHERE hID = '$hID' ";

                                    

    $result = mysqli_query($conn, $sql);

        if($result) {
            echo "บันทึกข้อมูลสำเร็จ";
        } else {
            echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
        }
}

header("location: hobbyAboutGroup.php?hID=$hID")
?>
