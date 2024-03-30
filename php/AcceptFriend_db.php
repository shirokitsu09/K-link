<?php
session_start();
  include("../config/con_db.php");

  $uID = $_SESSION['uID']; 

  if($_POST['accept'] && $_POST['hID']){
    $accept = $_POST['accept'];
    $hID = $_POST['hID'];
    $sql = "SELECT * FROM hobby_db WHERE hobby_db.hID = '$hID'";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();

    $request = $row['request'];
    $ArrayRequest = explode(',',$request);
    var_dump($ArrayRequest);  echo "<br>";
    $member = $row['member'];
    $ArrayMember = explode(',',$member);
    var_dump($ArrayMember);
    echo "<br>";
    echo $hID; echo "<br>";
    echo $accept; echo "<br>";

    $check = array_search($accept,$ArrayRequest);
    var_dump($check);
    if($check === false) {
        echo "Yeah none";
    }
    else {
        unset($ArrayRequest[$check]);
        $ArrayMember[] = $accept;
        $memberString = implode(',',$ArrayMember);
        $requestString = implode(',',$ArrayRequest);

        $sql_request = " UPDATE `hobby_db` 
                    SET `request`= '$requestString',
                        `member` = '$memberString'
                    WHERE hobby_db.hID= '$hID'";
        
        $result_request = mysqli_query($conn, $sql_request);

        if($result_request){
            echo "Yeah";
        } else {
            echo "Nope";
        }
    }

    $sql_notify = "INSERT INTO `notify`(`notiType`, `detail`, `uID(Send)`, `uID(Recieve)`) 
                              VALUES ('03','$hID','$uID','$accept')";
                              $conn->query($sql_notify);

    $sql_notifySelect = "SELECT notiKey FROM `notify` WHERE `uID(Recieve)` = '$uID' AND detail = '$hID'";
    $result_notifySelect = $conn->query($sql_notifySelect);
    $row_notifySelect = $result_notifySelect->fetch_assoc();
    $notiKey = $row_notifySelect['notiKey'];

    $sql_notify = "DELETE FROM `notify` WHERE notiKey = '$notiKey'";
    $conn->query($sql_notify);

  }
?>