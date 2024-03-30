<?php
if (!isset($_SESSION['uID'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: ../index.php"); // redirect ไปยังหน้า login.php
    exit;
  } else {
    $uID = $_SESSION['uID'];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/invitefriends.css">
    <title>Invite Friends</title>
</head>

<body>
    <div class="header-invitefriends">
        <div class="name-header-invitefriends" id="name-header">ชวนเพื่อน</div>
        <div class="LINE"></div>
        <div class="noti-button-icon">
            <a href="#noti">
                <ion-icon name="notifications"></ion-icon>
            </a>
        </div>
        <img class="backBtnInviteF" alt="" src="../images/backbutton.svg" id="backbuttonInviteFriends" />
    </div>
    <div class="InviteFriend-Frame">
        <div class="select-menu">
            <div class="select-btn">
                <span class="sBtn-text">Select</span>
            </div>
        </div>
    </div>

</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>