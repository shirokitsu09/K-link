<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/hobby.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap"
    />

    <title>Create Hobby</title>

  </head>
  <body>
    
    <div class="background">

    <link rel="stylesheet" href="./header-footer/css/HEADER.css" />
      <?php
        include './header-footer/header.php';
      ?>

      <div class="main-frame">
        <div class="frame-child"></div>

        <div class="create-cancle">
          <div class="rectangle-group">
            <div class="group-child"></div>
            <div class="div">สร้าง</div>
          </div>
          <div class="rectangle-container">
            <div class="group-item"></div>
            <div class="div1">ยกเลิก</div>
          </div>
        </div>

        <div class="PicUpload"></div>

        <div class="date-select">
            <div class="textfields">
              <div class="div2">วันที่</div>
            </div>
          <div class="frame-div">
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <div class="div3" onclick="toggleBackground(this)">จ</div>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <div class="div3" onclick="toggleBackground(this)">อ</div>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <div class="div3" onclick="toggleBackground(this)">พ</div>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <div class="div3" onclick="toggleBackground(this)">พฤ</div>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <div class="div3" onclick="toggleBackground(this)">ศ</div>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <div class="div3" onclick="toggleBackground(this)">ส</div>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <div class="div3" onclick="toggleBackground(this)">อา</div>
            </div>
          </div>
        </div>

        <div class="time-member">
          <div class="textfields-parent">
            <div class="textfields1">
              <div class="name">เวลา</div>
              <div class="textfields-child">
                      <!-- coding -->
                      <link rel="stylesheet" href="./time/css/time.css" />
                      <?php
                        include './time/time.php';
                      ?>
                      <!-- coding -->
              </div>
            </div>
          </div>
          <div class="textfields-group">
            <div class="textfields2">
              <div class="name">
                <p class="p">สมาชิก</p>
              </div>
              <div class="first1"></div>
              <div class="textfields-child"></div>
            </div>
            <div class="wrapper">
              <div class="div10">จำนวนที่รับได้</div>
            </div>
          </div>
        </div>

        <div class="hobby-name">
          <div class="name">ชื่อกิจกรรม</div>
          <div class="first2">ชื่อกลุ่มหรือกิจกรรม...</div>
          <div class="textfields-child"></div>
        </div>

        <div class="place">
          <div class="name">สถานที่</div>
          <div class="first2">สถานที่</div>
          <div class="textfields-child"></div>
        </div>
        
        <div class="detail">
          <div class="div11">รายละเอียดเพิ่มเติม เช่น ลักษณะของกิจกรรม</div>
          <div class="textarea">
            <div class="name">รายละเอียด</div>
      
          </div>
          <div class="group-child7"></div>
        </div>

        <div class="PicUpload-frame">
          <div class="group-child8"></div>
          <img class="vector-icon" alt="" src="./public/plus.svg" />
          <div class="div12">รูปโปรไฟล์กลุ่ม</div>
        </div>

        <div class="add-tag-frame">
          <div class="rectangle-parent2">
            <div class="group-child9"></div>
            <div class="add-tag">Add Tag</div>
            <img class="vector-icon1" alt="" src="./public/plus.svg" />
          </div>
          <div class="group-child10"></div>
        </div>
      </div>
    </div>
  </body>
  
  <script>
    function toggleBackground(element) {
        element.classList.toggle('select');
    }
    function changeText() {
          let text = document.querySelector('.name-header');
          let icon = document.querySelector('.app-icon');
          let line = document.querySelector('.LINE');

            text.textContent = 'งานอดิเรก';
            text.style.width = '200px';
            text.style.left = '100px';
            text.style.top = '30px';

            icon.src = './public/backbutton.svg'
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
