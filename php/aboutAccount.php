<?php

  include("../config/con_db.php");
  $uID = $_GET["uID"];

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
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/aboutaccount.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
</head>
<body>
<div class="hobby">
      <?php include'../php/report.php'
      ?>
      <div class="part-header">
      <div class="group-child"></div>
        <b class="header-text">เกี่ยวกับบัญชี</b>
        <img class="back-button" alt="" src="../images/backbutton.svg" />

        <img class="noti-button-icon" alt="" src="../images/setting/noti.svg" />
      </div>
      <div class="part-body">
      <div class="body-background">
      <img class="tdot-button" id="tdot" alt="" src="../images/Threedots.svg" />
      <img class="profile-picture" alt="" src="../images/aboutacc/p1profile.svg" />
      <div class="profile-name"><?php echo $rows["username"]; ?></div>
      <div class="profile-fn">ชื่อ : </div>
      <div class="profile-fullname"><?php echo $rows["fullname"]; ?></div>
      <div class="profile-em">Email : </div>
      <div class="profile-email"><?php echo $rows["email"]; ?></div>
      <div class="profile-tel">เบอร์โทร : </div>
      <div class="profile-telephone"><?php echo $rows["phoneNumber"]; ?></div>
      <div class="profile-fac">Faculty : </div>
      <div class="profile-faculty"><?php echo $rows["fID"]; ?></div>
      <div class="label-aboutme">About me</div>
      <div class="box-aboutme">
      <div class="profile-aboutme"><?php echo $rows["aboutme"]; ?></div>
      </div>
      </div>
    </div>
</div>
<script>

      function tpopup_open(e){
        tpopup.classList.add("on");
      }

      function tpopup_close(e){
        tpopup.classList.remove("on");
      }

  tdot = document.getElementById("tdot")
      tdot.addEventListener("click",function (e) {
      tpopup_open();
      });

</script>
</body>
</html>