<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/hamburger.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap"
    />
  </head>
  <body>
   
      <div class="clickHamburger" id="clickHamburger" onclick="openpopup()">
        <img class="HamburgerIcon" src="../public/hamburger.svg" id="Hamburger">
      </div> 
<!-- -----------------------------------------poppup----------------------------------------------- -->
      <div class="frame-parent" id="frame-parent">
        <div class="group-parent">
        <a href="#">
          <div class="popuplist-post" id="popuplist-post" onclick="closepopup()">
              <div class="sub-background"></div>
              <div class="main-background"></div>
              <img class="createpost" alt="" src="../public/createpost.svg"/>
              <div class="postcontent">สร้างโพสต์</div>
          </div>
        </a>  

        <a href="#">
          <div class="popuplist-tutor" id="popuplist-tutor" onclick="closepopup()">
              <div class="sub-background"></div>
              <div class="main-background"></div>
              <img class="tutoring" alt="" src="../public/tutoring.svg">
              <div class="tutorcontent">ติวหนังสือ</div>
          </div>
        </a>  
          
          <div class="popuplist-close" id="popuplist-close" onclick="closepopup()"> 
              <div class="sub-background"></div>
              <div class="main-background"></div>
              <div class="clickClose" id="clickClose">
                <img class="close" alt="" src="../public/close.svg">   
              </div> 
              <div class="closecontent">ปิด</div>
          </div>
        </div>
      </div>
<!-- -----------------------------------------poppup----------------------------------------------- -->

<!-- -----------------------------------------script----------------------------------------------- -->

<script>
  
    function openpopup() {
      document.getElementById('frame-parent').style.left = '212px';
      let  clickHamburger = document.getElementById('clickHamburger');
      document.getElementById('frame-parent').style.scale = '1';
      document.querySelector('.HamburgerIcon').classList.add('hidden');
    }

    function closepopup() {
      document.querySelector('.HamburgerIcon').classList.remove('hidden');
      document.getElementById('frame-parent').style.left = '360px';
      setTimeout(function() {
        document.getElementById('frame-parent').style.scale = '0';
    }, 300);
    }

  </script>

<!-- -----------------------------------------script----------------------------------------------- -->

  </body>
</html>
<!-- 36px -->