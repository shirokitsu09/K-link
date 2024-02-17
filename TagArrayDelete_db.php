<?php
  session_start();
  include("../config/con_db.php");

   if(isset($_POST['Updatetag'])){
    echo "อะไรวะ";

  $Updatetag = $_POST['tag'];
  $hID = $_SESSION['hID'];
  echo $hID;

echo $Updatetag;
  $sql_update = "UPDATE hobby_db SET
                  tag = '$Updatetag'
                  WHERE hID = '$hID'";

 }
?>
