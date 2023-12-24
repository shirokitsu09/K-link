<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/account.css" />
    <link rel="stylesheet" href="../css/HEADER.css" />
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
      <img class="setting-item" alt="" src="../public/backbutton.svg" id="backbutton"/>
     
      <div class="setting-head">
        <div class="account">ACCOUNT</div>
      </div>

      <div class="setting-inner">

        <div class="about-account-parent" id="aboutAccountParent">
          <div class="about-account-text">about account</div>
          <img class="about-account-icon" alt="" src="../public/profile-icon.svg"/>
        </div>

        <div class="edit-mypost-parent" id="editMypostParent">
          <img class="edit-mypost-icon" alt="" src="../public/edit-mypost-icon.svg" />
          <div class="edit-mypost-text">edit my post</div>
        </div>

        <div class="language-parent" id="languageParent">
          <div class="language-text" >language</div>
          <img class="language-icon" alt="" src="../public/global-icon.svg" />
        </div>

        <div class="notification-parent" id="notificationParent">
            <img class="notification-icon" alt="" src="../public/notification-icon.svg" />
            <div class="notification-text" id="notificationText">notification on</div>
        </div>

        <div class="setting-parent" id="settingParent">
          <img class="setting-icon" alt="" src="../public/setting-icon.svg" />
          <div class="setting-text">setting</div>
        </div>

        <div class="about-app-parent" id="aboutAppParent">
          <img class="about-app-icon" alt="" src="../public/about-app-icon.svg" />
          <div class="about-app-text">about app</div>
        </div>
      </div>
      
      <div class="noti-button-icon">
    <a href="#n">
        <ion-icon name="notifications"></ion-icon>
    </a>
</div>

    </div>


    <script>
      var backButton = document.getElementById("backbutton");
      if (backButton) {
        backButton.addEventListener("click", function (e) {
          window.location.href = "index.php";
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
  
      var editMypostParent = document.getElementById("editMypostParent");
      if (editMypostParent) {
        editMypostParent.addEventListener("click", function (e) {
          window.location.href = "";
        });
      }
  
      var languageParent = document.getElementById("languageParent");
      if (languageParent) {
        languageParent.addEventListener("click", function (e) {
          window.location.href = "";
        });
      }

      var notificationParent = document.getElementById("notificationParent");
      if (notificationParent) {
        notificationParent.addEventListener("click", function (e) {
          {document.getElementById("notificationText").innerHTML = "notification off";}
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

    <!-- scirpt of noti-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
</html>