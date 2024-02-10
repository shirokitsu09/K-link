<?php
include("../config/con_db.php");
if (isset($_POST['Create'])) {
    $activityname = $_POST["activityName"];
    $days = implode(',', array_map(function($day) use ($conn) {
        return $conn->real_escape_string($day);
    }, $_POST['day']));
    
    $time = $_POST["time"];
    $memberMax = $_POST["memberMax"];
    $location = $_POST["location"];
    $detail = $_POST["detail"];
    $image = $_FILES["image"];
    echo $days;
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];
    $imageError = $_FILES['image']['error'];
    $imageType = $_FILES['image']['type'];

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

                $sql = "INSERT INTO hobby_db
                            (hID,
                            activityname, 
                            time,
                            `date[]`,  
                            memberMax, 
                            location, 
                            detail,
                            image,
                            dateCreate,
                            timeCreate,
                            createBy 
                            ) VALUES ('3',
                                    '$activityname',
                                    '$time',
                                    '$days',
                                    '$memberMax',
                                    '$location',
                                    '$detail',
                                    '$imageNewName',
                                    NOW(),
                                    NOW(),
                                    '')";

                $result = mysqli_query($conn, $sql);

                if($result) {
                    echo "บันทึกข้อมูลสำเร็จ";
                } else {
                    echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
                }
            } else {
                echo "Your file is too large!";
            }

        } else {
            echo "There was an error uploading your file...";
        }
    } else {
        echo "You can't upload files of this type!";
    }
}
?>
