<?php

include("../config/con_db.php");
session_start();
$uID = $_SESSION["uID"];
$sql = "SELECT 
          *
          FROM users
          WHERE uID = '$uID' 
          ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/globalTEST.css" />
  <link rel="stylesheet" href="../css/editaccount.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
</head>

<body>
<div class="background-page">
  <div class="HEADER">
    <a href="index.php#setting"><img class="app-icon" id="backButton" alt="" src="../images/backbutton.svg" />
    </a>

    <div class="name-header" id="name-header">แก้ไขบัญชี</div>
    <div class="noti-button-icon">
      <a href="notify.php">
        <ion-icon name="notifications"></ion-icon>
      </a>
    </div>
  </div>
  <div class="hobby">
    <div class="part-body">
      <div class="body-background">
        <img class="profile-picture" alt="" src="../images/editacc/p2profile.svg" />
        <img class="change-profile-picture" alt="" src="../images/editacc/changepfp.svg" />
        <div class="profile-na">ชื่อเล่น</div>
        <div class="display-box-name" id="profilename">
          <div class="display-text"><?php echo $rows["username"]; ?></div>
          <a href="aboutEditMyAccount.php?uID=<?php echo $uID ?>">
            <img class="display-edit" src="../images/editacc/editpencil.svg" />
          </a>
          <div class="display-line"></div>
        </div>
        <div class="profile-fn">ชื่อ-นามสกุล</div>
        <div class="display-box-fullname" id="profilefullname">
          <div class="display-text"><?php echo $rows["fullname"]; ?></div>
          <a href="aboutEditMyAccount.php?uID=<?php echo $uID ?>">
            <img class="display-edit" src="../images/editacc/editpencil.svg" />
          </a>
          <div class="display-line"></div>
        </div>
        <div class="profile-tel">เบอร์โทรศัพท์</div>
        <div class="display-box-telephone" id="profiletelephone">
          <div class="display-text"><?php echo $rows["phoneNumber"]; ?></div>
          <a href="aboutEditMyAccount.php?uID=<?php echo $uID ?>">
            <img class="display-edit" src="../images/editacc/editpencil.svg" />
          </a>
          <div class="display-line"></div>
        </div>
        <div class="label-aboutme">About me</div>
        <div class="display-box-aboutme" id="profileaboutme">
          <div class="display-text"><?php echo $rows["aboutme"]; ?></div>
          <a href="aboutEditMyAccount.php?uID=<?php echo $uID ?>">
            <img class="display-edit" src="../images/editacc/editpencil.svg" />
          </a>
          <div class="display-line"></div>
        </div>
        <div class="logout-button" id="logout">
          <div class="display-text2">Log Out</div>
          <div class="display-line2"></div>
        </div>
        <div class="delete-button" id="delete">
          <div class="display-text2">Delete Account</div>
          <div class="display-line2"></div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>

</html>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
