<?php

if (isset($_POST['Create'])) {
    $memberMax = $_POST['memberMax'];
    $activityName = $_POST['activityName'];
    $location = $_POST['location'];
    $detail = $_POST['detail'];

    $date = isset($_POST['date']) ? $_POST['date'] : [];

    echo "Selected Days: ";
    print_r($date);
    echo "<br>";
    echo "Member Max: $memberMax<br>";
    echo "Activity Name: $activityName<br>";
    echo "Location: $location<br>";
    echo "Detail: $detail<br>";

    $selectedHour = $_POST["Hour"];
    $selectedMinute = $_POST["Minute"];
    $combinedTime = $_POST["CombinedTime"];

    echo "Selected Hour: " . $selectedHour . "<br>";
    echo "Selected Minute: " . $selectedMinute . "<br>";

    echo "CombinedTime: $combinedTime<br>";
// -------------------------------------------------------------------
    $file = $_FILES['image'];

    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','pdf');

    $fileDestination = '';

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize > 1) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploadedImg/'.$fileNameNew;

                move_uploaded_file($fileTmpName, $fileDestination);

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
// -------------------------------------------------------------------
echo '<img src="' . $fileDestination . '" alt="Uploaded Image">';


?>
