
<?php
    include("../config/con_db.php");

    $memberMax = $_POST["memberMax"];
    $activityname = $_POST["activityname"];
    $place = $_POST["place"];
    $detail = $_POST["detail"];
    $image = $_FILES["image"];

    $sql = "INSERT INTO users
    (memberMax, 
        activityname, 
        place, 
        detail,
        image,
        roleID,
        dateCreate,
        timeCreate,
        createBy 
    )VALUES('$username',
                '$activityname',
                '$place',
                '$detail',
                '$image',
                100,
                Now(),
                Now(),
                '')";

$result = mysqli_query($condb, $sql);

if($result){
echo "บันทึกข้อมูลสำเร็จ";
}else{
echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
}