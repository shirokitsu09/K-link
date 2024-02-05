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

<form action="hobbyCreatePost_db2.php" method="post" enctype="multipart/form-data">

      <div class="main-frame">      
        <div class="frame-child"></div>

        <div class="hobby-name">
          <label for="ActivityName" class="name">ชื่อกิจกรรม <a class="star">*<a></label>
          <input type="text" class="first2 textfields-child" name="activityName" placeholder="ชื่อกลุ่มหรือกิจกรรม..." maxlength="27"></input>
        </div>

        <div class="day-select">
            <div class="textfields">
              <div class="div2">วันที่ <a class="star">*<a></div>
            
            </div>
          <div class="frame-div">

            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="0">จ
                <input type="checkbox" hidden name="day[]" id="monday" value="monday">
              </label>
            </div>

            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="1">อ
                <input type="checkbox" hidden name="day[]" id="tuesday" value="tuesday">
              </label>
            </div>

            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="2">พ
                <input type="checkbox" hidden name="day[]" id="wednesday" value="wednesday">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="3">พฤ
                <input type="checkbox" hidden name="day[]" id="thursday" value="thursday">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="4">ศ
                <input type="checkbox" hidden name="day[]" id="friday" value="friday">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="5">ส
                <input type="checkbox" hidden name="day[]" id="saturday" value="saturday">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="6">อา
                <input type="checkbox" hidden name="day[]" id="sunday" value="sunday">
              </label>
            </div>
          </div>
        </div>

        <div class="time-member">

          <div class="textfields-parent">
            <div class="textfields1">
              <div class="name">เวลา <a class="star">*</a></div>
              <div class="textfields-child">
                      <!-- coding -->
                      <link rel="stylesheet" href="../css/time.css" />
                      <?php
                        include '../php/assets/time.php';
                      ?>
                      <!-- coding -->
              </div>
            </div>
          </div>

            <div class="member">
              <div class="name">สมาชิก <a class="star">*</a></div>
              <input type="text" class="first2 textfields-child" name="memberMax" placeholder="จำนวนที่รับได้" maxlength="2"></input>
            </div>

            <div class="requairment">
              <div class="name"><a class="star">*</a> ไม่จำกัดสมาชิก<br>โปรดพิมพ์ "00"</div>
            </div>
        </div>

        <div class="location">
          <label for="location" class="name">สถานที่ <a class="star">*</a></label>
          <input type="text" class="first2 textfields-child" name="location" placeholder="สถานที่ทำกิจกรรม"></input>
        </div>
        
        <div class="detail">
          <label for="detail" class="name">รายละเอียด</label>
          <textarea class="detail-text textfields-child" name="detail" placeholder="รายละเอียดเพิ่มเติมของกิจกรรม"></textarea>
        </div>

        <div class="PicUpload-frame">

          <label for="PicProfileGroup" class="div12">รูปโปรไฟล์กลุ่ม</label>
          <label class="group-child8">
            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png, .pdf">     
            <div class="PicUpload">    
              <img class="vector-icon" alt="" src="../images/plus.svg" />
            </div> 
          </label>

        </div>

        <div class="tag">
          <label for="detail" class="tag" name="tag">Tag</label>
        </div>
        <div class="add-tag-frame">
          <div class="group-child10">
          <div class="rectangle-parent2">
            <div class="group-child9"></div>
            <div class="add-tag">Add Tag</div>
            <img class="vector-icon1" alt="" src="../images/plus.svg" />
          </div>
          </div>
        </div>

        <div class="create-cancle">
          <div class="rectangle-group">
            <button type="submit" name="Create" class="create-button">สร้าง</button>
          </div>
          <div class="rectangle-container">
            <button type="button" name="Cancle" class="button-cancle">ยกเลิก</button>
          </div>

      </div>

</form>

    </div>
  </body>

<script>
    function toggleBackground(element) {
      let checkbox = element.querySelector('input[type="checkbox"]');
        if (checkbox.checked) {
        element.classList.add('select');
    } else {
        element.classList.remove('select');
    }
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