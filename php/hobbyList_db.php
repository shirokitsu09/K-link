<?php
include "../config/con_db.php";
ob_start();
if (isset($_POST['cancleRequest'])) {
    $hID = $_POST['hID'];
    $uID = $_POST['uID'];
    $sql_request_db = "SELECT * FROM hobby_db WHERE hID = '$hID'";
    $result_request_db = $conn->query($sql_request_db);
    $row_request = $result_request_db->fetch_assoc();

    $request = explode(',', $row_request['request']);
    
    $request_check = array_search($uID,$request);

    if($request_check !== false){
        unset($request[$request_check]); 

        $new_request = implode(',', $request);
        
        $update = "UPDATE hobby_db 
                    SET request = '$new_request'
                    WHERE hID = '$hID'";

        $sql_notifySelect = "SELECT notiKey FROM `notify` WHERE `uID(Send)` = '$uID' AND detail = '$hID'";
        $result_notifySelect = $conn->query($sql_notifySelect);
        $row_notifySelect = $result_notifySelect->fetch_assoc();
        $notiKey = $row_notifySelect['notiKey'];

        $sql_notify = "DELETE FROM `notify` WHERE notiKey = '$notiKey'";

        if ($conn->query($update) && $conn->query($sql_notify) === TRUE) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . $conn->error;
        }

        if ($conn->query($update) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    header('Location: index.php#hobby-home');
}

if (isset($_POST['sendRequest'])) {
    $hID = $_POST['hID'];
    $uID = $_POST['uID'];
    $sql_request_db = "SELECT * FROM hobby_db WHERE hID = '$hID'";
    $result_request_db = $conn->query($sql_request_db);
    $row_request = $result_request_db->fetch_assoc();

    $header = $row_request['header'];
    $request = explode(',', $row_request['request']);
    
    $request_check = array_search($uID,$request);

    if($request_check === false){
        $new_request = $request;

        $new_request[] = $uID;

        $new_request = implode(',',$new_request);

        $update = "UPDATE hobby_db 
                    SET request = '$new_request'
                    WHERE hID = '$hID'";
        
        $sql_notify = "INSERT INTO `notify`(`notiType`, `detail`, `uID(Send)`, `uID(Recieve)`) 
                              VALUES ('02','$hID','$uID','$header')";
        
        if ($conn->query($update) && $conn->query($sql_notify) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    header('Location: index.php#hobby-home');
}
ob_end_flush();
?>
