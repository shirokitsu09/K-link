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
    <div class="part-header">
      <div class="group-child"></div>
      <b class="header-text">แก้ไขบัญชี</b>
      <img class="back-button" alt="" src="../images/backbutton.svg" onclick="goBack()" />
      <!-- <img class="noti-button-icon" alt="" src="../images/noti.svg" /> -->
      <div class="noti-button-icon">
        <a href="#noti">
          <ion-icon name="notifications"></ion-icon>
        </a>
      </div>
    </div>

    <div class="part-body">
      <div class="body-background">
        <img class="profile-picture" alt="" src="../images/editacc/p2profile.svg" />
        <img class="change-profile-picture" alt="" src="../images/editacc/changepfp.svg" />
        <div class="profile-na">ชื่อเล่น</div>
        <div class="display-box-name" id="profilename">
          <div class="display-text">JustiNa_Xie</div>
          <img class="display-edit" src="../images/editacc/editpencil.svg" />
          <div class="display-line"></div>
        </div>
        <div class="profile-fn">ชื่อ-นามสกุล</div>
        <div class="display-box-fullname" id="profilefullname">
          <div class="display-text">Aijong Jomkan</div>
          <img class="display-edit" src="../images/editacc/editpencil.svg" />
          <div class="display-line"></div>
        </div>
        <div class="profile-tel">เบอร์โทรศัพท์</div>
        <div class="display-box-telephone" id="profiletelephone">
          <div class="display-text">087-999-9999</div>
          <img class="display-edit" src="../images/editacc/editpencil.svg" />
          <div class="display-line"></div>
        </div>
        <div class="label-aboutme">About me</div>
        <div class="display-box-aboutme" id="profileaboutme">
          <div class="display-text"> I Love JustiNa_Xie </div>
          <img class="display-edit" src="../images/editacc/editpencil.svg" />
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
</body>
<script>

  function redirectToSettingSection() {
    window.location.href = 'index.php#setting';
  }
  function goBack() {
    window.history.back();
  }

</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>