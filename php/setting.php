<?php
  if (!isset($_SESSION['uID'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: ../index.php"); // redirect ไปยังหน้า login.php
    exit;
  } else {
    $uID = $_SESSION['uID'];
  }
?>
<link rel="stylesheet" href="../css/setting.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />

  <div class="setting-head">
  <a href="index.php">
    <img class="setting-item" alt="" src="../images/backbutton.svg" id="backbuttonSetting" />
  </a>
    <div class="header-text">SETTING</div>
    <div class="noti-button-icon-setting">
      <a href="notify.php">
        <ion-icon name="notifications"></ion-icon>
      </a>
    </div>
  </div>

  <div class="setting-inner">
    <div class="option-parent" id="aboutAccountParent">
      <img class="option-icon" alt="" src="../images/profile-icon.svg" />
      <div class="option-text">เกี่ยวกับบัญชี</div>
    </div>

    <div class="option-parent" id="option2">
      <img class="option-icon" alt="" src="../images/setting/bookmark.svg" />
      <div class="option-text">ที่บันทึกไว้</div>
    </div>

    <!-- <div class="option3-parent" id="languageParent">
      <div class="option3-text">language</div>
      <img class="option3-icon" alt="" src="../images/global-icon.svg" />
    </div> -->

    <div class="option-parent" id="notificationParent">
      <img class="option-icon" alt="" src="../images/notification-icon.svg" />
      <div class="option-text">ปิดการแจ้งเตือน</div>
      <div1 class="option-mode" id="notificationMode"></div1>
    </div>

    <div class="option-parent" id="aboutAppParent">
      <img class="option-icon" alt="" src="../images/about-app-icon.svg" />
      <div class="option-text">เกี่ยวกับแอพ</div>
    </div>
  </div>

<script>

  // var backButton = document.getElementById("backbuttonSetting");
  // if (backButton) {
  //   backButton.addEventListener("click", function (e) {
  //     window.history.back();
  //   });
  // }

  var notiButtonIcon = document.getElementById("notiButtonIcon");
  if (notiButtonIcon) {
    notiButtonIcon.addEventListener("click", function (e) {
      window.location.href = "";
    });
  }

  var aboutAccountParent = document.getElementById("aboutAccountParent");
  if (aboutAccountParent) {
    aboutAccountParent.addEventListener("click", function (e) {
      window.location.href = "../php/aboutMyAccount.php";
    });
  }

  var option2 = document.getElementById("option2");
  if (option2) {
    option2.addEventListener("click", function (e) {
      window.location.href = "../php/bookmark.php";
    });
  }

  var languageParent = document.getElementById("languageParent");
  if (languageParent) {
    languageParent.addEventListener("click", function (e) {
      window.location.href = "";
    });
  }

  var notificationMode = document.getElementById("notificationMode");
  if (notificationMode) {
    notificationMode.addEventListener("click", function (e) {
      { document.getElementById("notificationMode").innerHTML = "off"; }
    });

    var settingParent = document.getElementById("settingParent");
    if (settingParent) {
      settingParent.addEventListener("click", function (e) {
        window.location.href = "";
      });
    }

    var aboutAppParent = document.getElementById("aboutAppParent");
    if (aboutAppParent) {
      aboutAppParent.addEventListener("click", function (e) {
        window.location.href = "../php/aboutApp.php";
      });
    }
  }

</script>