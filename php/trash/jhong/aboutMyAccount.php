<?php

include("../config/con_db.php");
session_start();

$uID = $_SESSION['uID'];

if (!isset($_SESSION['uID'])) {
  header("location: ../index.php"); // redirect ไปยังหน้า login.php
  exit;  }
  else {
    $uID = $_SESSION["uID"];

$sql = "SELECT 
          *
          FROM users
          WHERE uID = '$uID' 
          ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);
  }

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="../css/globalTEST.css" />
  <link rel="stylesheet" href="../css/editaccount.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
</head>

<body>
  <div class="hobby">
    <div class="background" style="background-color: transparent;">
      <?php include 'HEADER.php'; ?>
    </div>

    <div class="part-body">
      <div class="body-background">
        <img class="profile-picture" alt="" src="../images/editacc/p2profile.svg" />
        <img class="change-profile-picture" alt="" src="../images/editacc/changepfp.svg" />
        <div class="profile-na">ชื่อเล่น</div>
        <div class="display-box-name" id="profilename">
          <div class="display-text">
            <?php echo $rows["username"]; ?>
          </div>

          <a href="aboutEditMyAccount.php">
            <img class="display-edit" src="../images/editacc/editpencil.svg" />
          </a>

          <div class="display-line"></div>
        </div>
        <div class="profile-fn">ชื่อ-นามสกุล</div>
        <div class="display-box-fullname" id="profilefullname">
          <div class="display-text">
            <?php echo $rows["fullname"]; ?>
          </div>
          <a href="aboutEditMyAccount.php">
            <img class="display-edit" src="../images/editacc/editpencil.svg" />
          </a>
          <div class="display-line"></div>
        </div>
        <div class="profile-tel">เบอร์โทรศัพท์</div>
        <div class="display-box-telephone" id="profiletelephone">
          <div class="display-text">
            <?php echo $rows["phoneNumber"]; ?>
          </div>
          <a href="aboutEditMyAccount.php">
            <img class="display-edit" src="../images/editacc/editpencil.svg" />
          </a>
          <div class="display-line"></div>
        </div>
        <div class="label-aboutme">About me</div>
        <div class="display-box-aboutme" id="profileaboutme">
          <div class="display-text">
            <?php echo $rows["aboutme"]; ?>
          </div>
          <a href="aboutEditMyAccount.php">
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
</body>

<script>
   function changeText() {
        let text = document.querySelector('.name-header');
        let box = document.querySelector('.HEADER');
        let icon = document.querySelector('.app-icon');
        let line = document.querySelector('.LINE');
        let noti = document.querySelector('.noti-button-icon a');

        text.textContent = 'แก้ไขบัญชี';
        text.style.fontSize = 'var(--h4-size)';
        text.style.width = '200px';
        text.style.left = '90px';
        text.style.top = '30px';

        noti.style.fontSize = '27.2px';
        
        box.style.height = '140px';
        box.style.width = '360px';
        box.style.borderRadius = '0';

        icon.src = '../images/backbutton.svg';
        icon.style.width = '30px';
        icon.style.height = '30px';
        icon.style.top = '37px';
        icon.style.left = '25px';

        line.style.left = '80px';
        line.style.top = '38px';
        line.style.display = 'none';
    }
    changeText();

    </script>

</html>