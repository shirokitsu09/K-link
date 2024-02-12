<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/setting.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="background">

      <div class="setting-head">
        <img class="setting-item" alt="" src="../images/backbutton.svg" id="backbutton"/>
        <div class="header-text">SETTING</div>
        <img class="noti-button-icon" alt="" src="../images/noti.svg" id="notiButtonIcon"/>
      </div>

      <div class="setting-inner">
        <div class="option-parent" id="setting-option-1">
          <div class="option-text">about account</div>
          <img class="option-icon" alt="" src="../images/setting/profile-icon.svg"/>
        </div>

        <div class="option-parent" id="setting-option-2">
          <img class="option-icon" alt="" src="../images/setting/bookmark.svg" />
          <div class="option-text">saved</div>
        </div>

        <div class="option-parent" id="setting-option-3">
            <img class="option-icon" alt="" src="../images/setting/notification-icon.svg" />
            <div class="option-text">notification</div>
            <div1 class="option-mode" id="notificationMode"></div1>
        </div>

        <div class="option-parent" id="setting-option-4">
          <img class="option-icon" alt="" src="../images/setting/about-app-icon.svg" />
          <div class="option-text">about app</div>
        </div>
      </div>
      
      

    </div>


    <script>
      var backButton = document.getElementById("backbutton");
      if (backButton) {
        backButton.addEventListener("click", function (e) {
          window.location.href = "";
        });
      }
  
      var notiButtonIcon = document.getElementById("notiButtonIcon");
      if (notiButtonIcon) {
        notiButtonIcon.addEventListener("click", function (e) {
          window.location.href = "";
        });
      }
  
      var aboutAccountParent = document.getElementById("aboutAccountParent");
      if (aboutAccountParent) {
        aboutAccountParent.addEventListener("click", function (e) {
          window.location.href = "";
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
          {document.getElementById("notificationMode").innerHTML = "off";}
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
  </body>
</html>