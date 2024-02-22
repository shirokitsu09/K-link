<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/create-post.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="background">

    <link rel="stylesheet" href="../css/HEADER.css" />
      <?php
        include '../php/header.php';
      ?>

      <div class="inner">
        <div class="inner-background"></div>
        <div class="create-cancle">
          <div class="create">
            <div class="create-background"></div>
            <div class="div">สร้าง</div>
          </div>
          <div class="cancle">
            <div class="cancle-background"></div>
            <div class="div1">ยกเลิก</div>
          </div>
        </div>
        <div class="tag-show"></div>
        <div class="tag">
          <div class="tag-background"></div>
          <div class="add-tag">Add Tag</div>
          <img class="plus-icon" alt="" src="../images/plus.svg" />
        </div>
        <div class="detail">
          <div class="detail-inner">
            <div class="detail-input">
              รายละเอียดเพิ่มเติม เช่น ลักษณะของกิจกรรม
            </div>
            <div class="detail-background"></div>
          </div>
          <div class="title">รายละเอียด</div>
        </div>
        <div class="upload-file">
          <div class="uoload-file-input">
            <div class="upload-file-background"></div>
            <div class="upload-file-text">Upload FiLE</div>
            <img class="upload-icon" alt="" src="../images/upload-icon.svg" />
          </div>
          <div class="title1">อัปโหลดไฟล์</div>
        </div>
        <div class="saakaa">
          <div class="saakaa-background">
            <div class="filter-title">สาขา</div>
            <img
              class="filter-icon-background"
              alt=""
              src="../images/drop-icon-background.svg"
            />
          </div>
        </div>
        <div class="paak-subject">
          <div class="paak-subject-background">
            <div class="filter-title">ภาควิชา</div>
            <img
              class="filter-icon-background"
              alt=""
              src="../images/drop-icon-background.svg"
            />
          </div>
        </div>
        <div class="kana">
          <div class="paak-subject-background">
            <div class="filter-title">คณะ</div>
            <img
              class="filter-icon-background"
              alt=""
              src="../images/drop-icon-background.svg"
            />
          </div>
        </div>
        <div class="subject-code">
          <div class="title2">รหัสวิชา</div>
          <div class="subject-code-inner">
            <div class="subject-code-background"></div>
            <div class="subject-code-input">รหัสของวิชา</div>
          </div>
        </div>
        <div class="subject">
          <div class="subject-inner">
            <div class="subject-code-input">ชื่อวิชาหรือโพสต์...</div>
            <div class="subject-background"></div>
          </div>
          <div class="title3">ชื่อวิชา</div>
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

            text.textContent = 'อัพโหลดไฟล์';
            text.style.width = '200px';
            text.style.left = '95px';
            text.style.top = '30px';

            icon.src = '../images/backbutton.svg';
            icon.style.width = '30px';
            icon.style.height = '30px';
            icon.style.top = '37px';
            icon.style.left = '25px';

            line.style.left = '75px';
            line.style.top = '38px';
          }
          changeText();
</script>

</html>
