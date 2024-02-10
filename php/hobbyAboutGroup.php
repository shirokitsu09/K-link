<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/hobbyaboutgroup.css" />
    <link rel="stylesheet" href="../css/HEADER.css" />
    <link rel="stylesheet" href="../css/editGroupButton.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
  </head>
  <body>
    <div class="hobby">
     <?php
        include '../php/header.php';
      ?>
      

      <div class="about-group-body">
        <div class="body-background">
        <img class="tdot-button" alt="" src="../images/ThreeDots.svg" />
          <b class="group-name">ชื่อกลุ่ม</b>
            <img class="group-picture" alt="" src="../images/" />

          <div class="group-date">
            <div class="group-date-title">วันทำกิจกกรม</div>
            <div class="group-date-container">
              <div class="ellipse-date">
                <div class="date">จ</div>
              </div>
              <div class="ellipse-date">
                <div class="date">อ</div>
              </div>
              <div class="ellipse-date">
                <div class="date">พ</div>
              </div>
              <div class="ellipse-date">
                <div class="date">พฤ</div>
              </div>
              <div class="ellipse-date">
                <div class="date">ศ</div>
              </div>
              <div class="ellipse-date">
                <div class="date">ส</div>
              </div>
              <div class="ellipse-date">
                <div class="date">อา</div>
              </div>
            </div>
          </div>
          
          <div class="group-location">
          <div class="group-location-title">สถานที่</div>
            <div class="group-location-container">
              <div class="group-location-text">โดมเห็ดรูม A (ข้างโรงเอ วิศวะ)</div>
            </div>
          </div>

          <div class="group-time-container">
            <div class="group-time-title">เวลา :</div>
            <div class="group-time-time">20:00</div>
            </div>

          <div class="group-member-container">
              <div class="group-member-text">สมาชิก :</div>
              <div class="group-member-amount availible">25</div><div class="group-member-max availible">/ไม่จำกัด</div>
              <img class="vector-icon1" alt="" src="../images/aboutgroup/magnifyglass.svg" />
            </div>

          <div class="group-parent1">
            <div class="rectangle-parent4">
              <div class="group-description-container">วิ่งเก็บเห็ด</div>
      
            </div>
            <div class="div14">รายละเอียด</div>
          </div>
          <div class="rectangle-parent5">
            <div class="tag-container">
            <div class="div17">วิ่ง</div>
            <div class="div17">กีฬา</div>
            <div class="div17">ช่วงเย็น</div>
            <div class="div17">สนามกีฬา</div>
            <div class="div17">ออกกำลังกาย</div>
            </div>
            <div class="tag">Tag</div>
          </div>
          <div class="rectangle-parent10">
          <div class="button-invite"></div>
          <div class="div20">ชวนเพื่อนเข้ากลุ่ม</div>
          <img class="vector-icon2" alt="" src="../images/aboutgroup/addfriendtogroup.svg" />
        </div>
        </div>
      </div>
    </div>

        <div class="footerIndividual">
            <a href="hobbyEditAboutGroup.php" class="createGroupButton">
                <img src="../images/wrench.svg">
            </a>
        </div>
    <script>
      var groupContainer11 = document.getElementById("groupContainer11");
      if (groupContainer11) {
        groupContainer11.addEventListener("click", function (e) {
          // Please sync "tutoring  group 12" to the project
        });
      }
      
      var groupContainer22 = document.getElementById("groupContainer22");
      if (groupContainer22) {
        groupContainer22.addEventListener("click", function (e) {
          // Please sync "user edit" to the project
        });
      }
      
      var frameIcon = document.getElementById("frameIcon");
      if (frameIcon) {
        frameIcon.addEventListener("click", function (e) {
          // Please sync "ThreeDotsOption" to the project
        });
      }

      function changeText() {
        let text = document.querySelector('.name-header');
        let box = document.querySelector('.HEADER');
        let icon = document.querySelector('.app-icon');
        let line = document.querySelector('.LINE');
        let noti = document.querySelector('.noti-button-icon a');

        text.textContent = 'About Group';
        text.style.fontSize = 'var(--h4-size)';
        text.style.width = '200px';
        text.style.left = '90px';
        text.style.top = '30px';

        noti.style.fontSize = '27.2px';
        
        box.style.height = '140px';
        box.style.borderRadius = '0';

        icon.src = '../images/backbutton.svg';
        icon.style.width = '30px';
        icon.style.height = '30px';
        icon.style.top = '37px';
        icon.style.left = '25px';

        line.style.left = '80px';
        line.style.top = '38px';
    }


    changeText();

      </script>
  </body>
</html>
