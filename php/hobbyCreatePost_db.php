<?php
include("../config/con_db.php");

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
    
    $uID = $_POST["uID"];
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

                $sql = "INSERT INTO hobby_db
                            (hID,
                            type,
                            activityname, 
                            time,
                            `date[]`,  
                            memberMax, 
                            location, 
                            detail,
                            image,
                            dateCreate,
                            timeCreate,
                            createBy,
                            dateUpdate,
                            timeUpdate,
                            header
                            ) VALUES ('$hID',
                                    'hobby',
                                    '$activityname',
                                    '$time',
                                    '$days',
                                    '$memberMax',
                                    '$location',
                                    '$detail',
                                    '$imageNewName',
                                    NOW(),
                                    NOW(),
                                    '$uID',
                                    NOW(),
                                    NOW(),
                                    '$uID'
                                    )";

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
