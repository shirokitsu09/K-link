<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/hobby.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap"
    />

    <title>Create Hobby</title>

  </head>
  <body>
    
    <div class="background">

    <link rel="stylesheet" href="../css/HEADER.css" />
      <?php
        include '../php/header.php';
      ?>

<form action="#" method="#">

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
                      <link rel="stylesheet" href="../css/time.css" />
                      <?php
                        include '../php/time.php';
                      ?>
                      <!-- coding -->
              </div>
            </div>
          </div>

            <div class="member">
              <div class="name">สมาชิก</div>
              <input type="text" class="first2 textfields-child" placeholder="จำนวนที่รับได้" maxlength="2"></input>
          </div>

        </div>

        <div class="hobby-name">
          <label for="ActivityName" class="name">ชื่อกิจกรรม</label>
          <input type="text" class="first2 textfields-child" placeholder="ชื่อกลุ่มหรือกิจกรรม..." maxlength="27"></input>
        </div>

        <div class="place">
          <label for="place" class="name">สถานที่</label>
          <input type="text" class="first2 textfields-child" placeholder="สถานที่ทำกิจกรรม"></input>
        </div>
        
        <div class="detail">
          <label for="detail" class="name">รายละเอียด</label>
          <textarea class="detail-text textfields-child" placeholder="รายละเอียดเพิ่มเติมของกิจกรรม"></textarea>
        </div>

        <div class="PicUpload-frame">

          <label for="PicProfileGroup" class="div12">รูปโปรไฟล์กลุ่ม</label>
          <label class="group-child8">
            <input type="file" name="image" id="image" accept="image/*">     
            <div class="PicUpload">    
              <img class="vector-icon" alt="" src="../images/plus.svg" />
            </div> 
          </label>

        </div>

        <div class="add-tag-frame">
          <div class="rectangle-parent2">
            <div class="group-child9"></div>
            <div class="add-tag">Add Tag</div>
            <img class="vector-icon1" alt="" src="../images/plus.svg" />
          </div>
          <div class="group-child10"></div>
        </div>
      </div>

</form>

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
