
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
=======
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
    <div class="setting">
      <img
        class="gesturethreebuttons-icon"
        alt=""
        src="../images/gesturethreebuttons.svg"
      />

      <!-- <div class="status-bar">
        <img class="container-icon" alt="" src="../images/container.svg" />

        <div class="status-bar-contents">
          <img class="container-icon" alt="" src="../images/bounds.svg" />

          <img class="wifi-icon" alt="" src="../images/wifi.svg" />

          <img class="reception-icon" alt="" src="../images/reception.svg" />

          <img class="battery-icon" alt="" src="../images/battery.svg" />

          <div class="time">
            <div class="div">12:30</div>
          </div>
        </div>
      </div> -->
      <div class="setting-child"></div>
      <div class="account">ACCOUNT</div>
      <img class="setting-item" alt="" src="../images/frame-420.svg" />

      <div class="setting-inner"></div>
      <div class="vector-parent">
        <img class="vector-icon" alt="" src="../images/vector.svg" />

        <div class="setting1">setting</div>
      </div>
      <div class="language-parent">
        <div class="language">language</div>
        <img class="icon-global" alt="" src="../images/-icon-global.svg" />
      </div>
      <div class="about-app-parent">
        <div class="about-app">about app</div>
        <img class="group-child" alt="" src="../images/group-202.svg" />
      </div>
      <div class="about-account-parent" id="groupContainer3">
        <div class="about-account">about account</div>
        <img
          class="icon-profile-circle"
          alt=""
          src="../images/-icon-profile-circle.svg"
        />
      </div>
      <div class="vector-group" id="groupContainer4">
        <img class="vector-icon1" alt="" src="../images/vector1.svg" />

        <div class="edit-my-post">edit my post</div>
      </div>
      <div class="status-bar">
        <img class="container-icon" alt="" src="../images/container1.svg" />

        <div class="status-bar-contents">
          <img class="container-icon" alt="" src="../images/bounds1.svg" />

          <img class="wifi-icon" alt="" src="../images/wifi1.svg" />

          <img class="reception-icon" alt="" src="../images/reception1.svg" />

          <img class="battery-icon" alt="" src="../images/battery1.svg" />

          <div class="time">
            <div class="div">12:30</div>
          </div>
        </div>
      </div>
      <img class="noti-button-icon" alt="" src="../images/noti-button.svg" />

      <div class="notification">
        <div class="parent">
          <div class="div2">notification on</div>
          <img class="instance-child" alt="" src="../images/frame-215.svg" />
        </div>
      </div>
    </div>

    <script>
      var groupContainer3 = document.getElementById("groupContainer3");
      if (groupContainer3) {
        groupContainer3.addEventListener("click", function (e) {
          // Please sync "About my account" to the project
        });
      }
      
      var groupContainer4 = document.getElementById("groupContainer4");
      if (groupContainer4) {
        groupContainer4.addEventListener("click", function (e) {
          // Please sync "my post" to the project
        });
      }
      </script>
  </body>
</html>

