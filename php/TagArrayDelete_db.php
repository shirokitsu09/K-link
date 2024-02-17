<?php
  session_start();
  include("../config/con_db.php");

   if(isset($_POST['Updatetag'])){
    echo "อะไรวะ";

  $Updatetag = $_POST['tag'];
  $UpdateArray = explode(',',$Updatetag);
  $UpdateString = implode(',',$UpdateArray);
  $hID = $_SESSION['hID'];
  echo $hID;

echo $Updatetag;
  $sql_update = "UPDATE hobby_db SET
                  tag = '$UpdateString'
                  WHERE hID = '$hID'";
   $result_update = mysqli_query($conn, $sql_update);

 } if($result_update) {
  echo "เปลี่ยนแท็กสำเร็จ";
} else {
  echo "ผิดพลาด";
}
?>
