<?php

  session_start();
  include("../config/con_db.php");

  if (!isset($_SESSION['uID'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: ../index.php"); // redirect ไปยังหน้า login.php
    exit;
} else {
    $uID = $_SESSION['uID'];
    $hID = $_SESSION["hID"];

}
  $target_uID = $_GET["uID"];

 
  $sql_users = "SELECT 
                    a.*,
                    b.fName
                    FROM users AS a
                    LEFT JOIN faculty AS b
                    ON a.fID = b.fID
                    WHERE a.uId = '$target_uID'
            ";

  $result_users = $conn->query($sql_users);
  $row = $result_users->fetch_assoc();

  $username = $row['username'];
  $fullname = $row['fullname'];
  $email = $row['email'];
  $phoneNumber = $row['phoneNumber'];
  $faculty = $row['fName'];
  $aboutme = $row['aboutme'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/aboutaccount.css" />
    <link rel="stylesheet" href="../css/editGroupButton.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
</head>

<body>      
  <div class="hobby">
  <div class="background" style="background-color:transparent;">
      <div class="HEADER">
        <a href="member.php?hID=<?php echo $hID ?>"><img class="app-icon" id="backButton" alt="" src="../images/backbutton.svg" />
        </a>
        <div class="name-header" id="name-header">เกี่ยวกับบัญชี</div>
        <div class="noti-button-icon">
          <a href="notify.php">
            <ion-icon name="notifications"></ion-icon>
          </a>
        </div>
      </div>
    </div>
      <?php include '../php/report.php'?>
      <div class="part-body">
        <div class="body-background">
        <img class="tdot-button" id="tdot" alt="" src="../images/threedot.svg" />
        <img class="profile-picture" alt="" src="../images/aboutacc/p1profile.svg" />
        <div class="profile-name"><?php echo $username ?></div>
        <div class="profile-fn">ชื่อ : </div>
        <div class="profile-fullname"><?php echo $fullname ?></div>
        <div class="profile-em">Email : </div>
        <div class="profile-email"><?php echo $email ?></div>
        <div class="profile-tel">เบอร์โทร : </div>
        <div class="profile-telephone"><?php echo $phoneNumber ?></div>
        <div class="profile-fac">Faculty : </div>
        <div class="profile-faculty"><?php echo $faculty ?></div>
        <div class="label-aboutme">About me</div>
        <div class="box-aboutme">
        <div class="profile-aboutme"><?php echo $aboutme ?></div>
        </div>
        </div>
      </div>
  </div>


<script>

  var tdot = document.getElementById("tdot")
      tdot.addEventListener("click",function (e) {
      tpopup_open();
      });
  
  document.addEventListener('click', e => {
    if(!tpopup.contains(e.target) && !tpopupReport.contains(e.target) && !reportpopup.contains(e.target) && e.target !== tdot){
        tpopup_close();
        tpopupReport_close();
        reportpopup_close();
      }
    });
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>