<?php
ob_start();
include '../config/con_db.php';

if(isset($_POST['invite'])) {
    $invitedID = $_POST['invitedID'];
    $invitedGroup = $_POST['invitedGroup'];
    $invitePerson = $_POST['invitePerson'];

    $sql = "INSERT INTO notify(notiType, detail, `uID(Send)`, `uID(Recieve)`) 
            VALUES ('01','$invitedGroup','$invitePerson','$invitedID')";
    $result = $conn->query($sql);
    if($result) {
        header('location: InviteFriendsHasdb.php?hID='.$invitedGroup);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Handle if $_POST['invite'] is not set
}
ob_end_flush();
?>