<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/tutor.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />

    <title>Create Tutor</title>

  </head>
  <body>
    <div class="background">
    
      <link rel="stylesheet" href="../css/HEADER.css" />
      <?php
        include '../php/header.php';
      ?>

      <div class="main-frame">
        <div class="frame-child"></div>
        <div class="ok-cancel-button">
          <div class="create-button" id="groupContainer">
            <div class="create-background"></div>
            <div class="div">สร้าง</div>
          </div>
          <div class="cancel-button">
            <div class="cancel-background" id="rectangle2"></div>
            <div class="div1">ยกเลิก</div>
          </div>
        </div>
        <b class="b">วิศวกรรมศาสตร์</b>
        <div class="add-tag">
          <div class="group-inner"></div>
          <div class="add-tag-text">Add Tag</div>
          <img class="plus-tag" alt="" src="../images/plus.svg" />
        </div>
<!---------------------------------------------------------------------------------------------->
        <div class="date-month-year">
            <div class="date-month-year-border">
                <div class="name">วันที่</div>
                    <div class="textfields-child">
                            <!-- coding -->
                            <link rel="stylesheet" href="../css/date.css" />
                            <?php
                              include '../php/date.php';
                            ?>
                            <!-- coding -->
                    </div>
            </div>

        </div>
<!---------------------------------------------------------------------------------------------->        
        
        <div class="subject">
          <div class="name">วิชา</div>
          <div class="first1">ชื่อวิชาหรือชื่อกลุ่ม</div>
          <div class="textfields-child"></div>
        </div>

        <div class="tag-frame"></div>
<!--  -->
        <div class="time-member">

            <div class="textfields2">
              <div class="name">เวลา</div>
                <div class="textfields-child">
                        <!-- coding -->
                        <link rel="stylesheet" href="../css/time.css" />
                        <?php
                          include '../php/time.php';
                        ?>
                        <!-- coding -->
                </div>
            </div>

            <div class="textfields-container">
            <div class="textfields3">
              <div class="name">
                <p class="p">สมาชิก</p>
              </div>
              <div class="first3"></div>
              <div class="textfields-child"></div>
            </div>
            <div class="div7">จำนวนสมาชิก</div>
          </div>

        </div>
<!--  -->
<!--  -->
        <div class="place">
          <div class="name">สถานที่</div>
          <div class="first1">สถานที่</div>
          <div class="textfields-child"></div>
        </div>

        <div class="detail">
          <div class="div8">รายละเอียดเพิ่มเติม เช่น ลักษณะของกิจกรรม</div>
          <div class="textarea">
            <div class="name">รายละเอียด</div>
            <div class="textarea-child"></div>
          </div>
          <div class="group-child1"></div>
        </div>
<!--  -->
      </div>

  </body>

  <script src="../js/date.js"></script>
  <script>
        function changeText() {
          let text = document.querySelector('.name-header');
          let icon = document.querySelector('.app-icon');
          let line = document.querySelector('.LINE');

            text.textContent = 'สร้างกลุ่มติว';
            text.style.width = '200px';
            text.style.left = '100px';
            text.style.top = '30px';

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
</html>
