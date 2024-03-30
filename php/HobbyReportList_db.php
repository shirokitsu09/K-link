<?php
session_start();
  include("../config/con_db.php");

  $uID = $_SESSION['uID']; 
  $hID = $_COOKIE['hID'];

// Bookmark hobby
    if(isset($_COOKIE['hID'])&&$_COOKIE['checkBookmark']=='on'){
      $sql = "SELECT bookmark FROM users WHERE uID = $uID";
      $result = mysqli_query($conn, $sql);
      $row = $result->fetch_assoc();
      
      $hID = $_COOKIE['hID'];

      $bookmark = $row['bookmark'];
      $UpdateArrayBookmark = explode(',',$bookmark);


      $check = array_search($hID,$UpdateArrayBookmark);
      if($check === false){ //เก็บ bookmark ใหม่ไปที่ database
        $UpdateArrayBookmark[] = $hID; //เพิ่ม hID เข้าไปใน array ที่ไว้ update
        $UpdateStringBookmark = implode(',',$UpdateArrayBookmark); //เปลี่ยน array ที่เก็บ hID ใหม่ไว้แล้ว เป็น string
        $sql_update_hID = " UPDATE `users` SET `bookmark`='$UpdateStringBookmark' WHERE uID= '$uID'";
        $result_update_hID = mysqli_query($conn, $sql_update_hID);
        if($result_update_hID) {
            echo "<br>bookmark สำเร็จ";
          } else {
            echo "<br>bookmark ผิดพลาด";
        }
        header("Location: index.php#hobby-home");
      }

    else { //ลบ bookmark ที่กดไว้แล้ว
      unset($UpdateArrayBookmark[$check]);
      // print_r($UpdateArrayBookmark);

      $UpdateStringBookmark = implode(',',$UpdateArrayBookmark); //เปลี่ยน array ที่เก็บ hID ใหม่ไว้แล้ว เป็น string
      //  echo $UpdateStringBookmark;
      $sql_update_hID = " UPDATE `users` SET `bookmark`='$UpdateStringBookmark' WHERE uID= '$uID'";
      $result_update_hID = mysqli_query($conn, $sql_update_hID);
      if($result_update_hID) {
          echo "<br>unbookmark สำเร็จ";
          print_r($UpdateStringBookmark);
        } else {
          echo "<br>unbookmark ผิดพลาด";
      }
      header("Location: index.php#hobby-home");
    }
  
  }

// Report hobby

if(isset($_POST['reportTopic'])&&$_COOKIE['checkReport']=='on'){

  $reportTopic = $_COOKIE['reportTopic'];
  $reportDetail = $_COOKIE['reportDetail'];
  
  $sql_update_hID = "INSERT INTO `reported`(`reportBy`,`reportID`,`Type`,`Detail`) VALUES ('$uID','$hID','$reportTopic','$reportDetail')";
  $result_update_hID = mysqli_query($conn, $sql_update_hID);

  if($result_update_hID) {
    echo "<br>report สำเร็จ<br>";
    echo "<br>$reportTopic<br>";
    echo "<br>$reportDetail<br>";
    } else {
    echo "<br>report ผิดพลาด";
  }
} header("Location:index.php#hobby-home");

?>