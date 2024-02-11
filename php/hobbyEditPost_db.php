<?php
  SESSION_START();

include("../config/con_db.php");
if (isset($_POST['Update']) && isset($_SESSION['hID'])) {
    $hID = $_SESSION['hID'];
    echo $_SESSION['hID'];

    $activityname = $_POST["activityName"];
    $days = isset($_POST['day']) ? implode(',', array_map(function($day) use ($con) {
        return $con->real_escape_string($day);
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

    if (in_array($imageActualExt, $allowed)) {
        if ($imageError === 0) {
            if ($imageSize > 1) {
                $imageNewName = uniqid('', true).".".$imageActualExt;
                $imageDestination = 'uploadedImg/'.$imageNewName;

                move_uploaded_file($imageTmpName, $imageDestination);

                $sql = "UPDATE hobby_db SET
                            activityname = '$activityname',
                            time = '$time',
                            `date[]` = '$days', 
                            memberMax = '$memberMax',
                            location = '$location',
                            detail = '$detail',
                            image = '$imageNewName',
                            dateUpdate = NOW(),
                            timeUpdate = NOW()
                            
                        WHERE `hID` = '$hID'";

                $result = mysqli_query($con, $sql);

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
