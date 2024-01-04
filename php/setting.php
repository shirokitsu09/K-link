<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
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
        <img class="setting-item" alt="" src="../images/setting/backbutton.svg" id="backbutton"/>
        <div class="header-text">SETTING</div>
        <img class="noti-button-icon" alt="" src="../images/setting/noti.svg" id="notiButtonIcon"/>
      </div>

      <div class="setting-inner">
        <div class="option1-parent" id="aboutAccountParent">
          <div class="option1-text">about account</div>
          <img class="option1-icon" alt="" src="../images/setting/profile-icon.svg"/>
        </div>

        <div class="option2-parent" id="option2">
          <img class="option2-icon" alt="" src="../images/setting/bookmark.svg" />
          <div class="option2-text">saved</div>
        </div>

        <div class="option3-parent" id="languageParent">
          <div class="option3-text" >language</div>
          <img class="option3-icon" alt="" src="../images/setting/global-icon.svg" />
        </div>

        <div class="option4-parent" id="notificationParent">
            <img class="option4-icon" alt="" src="../images/setting/notification-icon.svg" />
            <div class="option4-text">notification</div>
            <div1 class="option4-mode" id="notificationMode"></div1>
        </div>

        <div class="option5-parent" id="aboutAppParent">
          <img class="option5-icon" alt="" src="../images/setting/about-app-icon.svg" />
          <div class="option5-text">about app</div>
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