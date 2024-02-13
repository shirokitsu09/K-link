<link rel="stylesheet" href="../css/setting.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
<div class="background">

  <div class="setting-head">
    <img class="setting-item" alt="" src="../images/backbutton.svg" id="backbuttonSetting" />
    <div class="header-text">SETTING</div>
    <div class="noti-button-icon">
      <a href="#noti">
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
      window.location.href = "../php/editAccount.php";
    });
  }

  var option2 = document.getElementById("option2");
  if (option2) {
    option2.addEventListener("click", function (e) {
      window.location.href = "";
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
        window.location.href = "";
      });
    }
  }
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const backButton = document.getElementById('backbuttonSetting');
    if (backButton) {
        backButton.addEventListener('click', function(event) {
            event.preventDefault(); // ป้องกันการโหลดหน้าเว็บใหม่
            
            // ตรวจสอบ URL ปัจจุบันของเว็บไซต์
            const currentURL = window.location.href;
            const previousURL = document.referrer; // URL ก่อนหน้าที่เรามาจาก

            if (previousURL) {
                window.location.href = previousURL; // ไปยัง URL ก่อนหน้า
            } else {
                // ถ้าไม่มี URL ก่อนหน้า ให้กลับไปที่ # ของ section ก่อนหน้า
                const currentHashIndex = currentURL.lastIndexOf('#');
                if (currentHashIndex !== -1) {
                    const previousHash = currentURL.substring(0, currentHashIndex);
                    window.location.href = previousHash;
                }
            }
        });
    }
});

</script>