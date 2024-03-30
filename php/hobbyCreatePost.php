<?php
  session_start();
  // if (!isset($_SESSION['uID'])) { // ถ้าไม่ได้เข้าระบบอยู่
  //   header("location: ../index.php"); // redirect ไปยังหน้า login.php
  //   exit;
  // } else {
  //     $uID = $_SESSION['uID'];
  // }
?>
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
    
    <div class="background-hobbycreate">
    <link rel="stylesheet" href="../css/HEADER.css" />
<div class="HEADER-HCP">
<a href="./index.php#hobby-home">
    <img class="app-icon-hobby-create" id="backButton" alt="" src="../images/backbutton.svg" />
</a>
    <div class="name-header-hobby-create" id="name-header">งานอดิเรก</div>
    <div class="noti-button-icon-hobby-create">
        <a href="notify.php?uID=<?php echo $uID ?>">
            <ion-icon name="notifications" style="width: 27.2px; height: 27.2px;"></ion-icon>
        </a>
    </div>
</div>

<form action="hobbyCreatePost_db.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
   
        <div class="frame-child">

        <div class="hobby-name">
          <label for="ActivityName" class="name">ชื่อกิจกรรม <a class="star">*<a></label>
          <input type="text" name="uID" value="<?php echo $uID?>" hidden>
          <input type="text" class="first2 textfields-child" name="activityName" placeholder="ชื่อกลุ่มหรือกิจกรรม..." maxlength="27" required></input>
        </div>

        <div class="day-select">
            <div class="textfields">
              <div class="div2">วันที่ <a class="star">*<a></div>
            
            </div>
          <div class="frame-div">

            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="0">จ
                <input type="checkbox" hidden name="day[]" id="monday" value="จ.">
              </label>
            </div>

            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="1">อ
                <input type="checkbox" hidden name="day[]" id="tuesday" value="อ.">
              </label>
            </div>

            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="2">พ
                <input type="checkbox" hidden name="day[]" id="wednesday" value="พ.">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="3">พฤ
                <input type="checkbox" hidden name="day[]" id="thursday" value="พฤ.">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="4">ศ
                <input type="checkbox" hidden name="day[]" id="friday" value="ศ.">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="5">ส
                <input type="checkbox" hidden name="day[]" id="saturday" value="ส.">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="6">อา
                <input type="checkbox" hidden name="day[]" id="sunday" value="อา.">
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
              <input type="text" class="first2 textfields-child" name="memberMax" placeholder="จำนวนที่รับได้" maxlength="2" required></input>
            </div>

            <div class="requairment">
              <div class="name"><a class="star">*</a> ไม่จำกัดสมาชิก<br>โปรดพิมพ์ "00"</div>
            </div>
        </div>

        <div class="location">
          <label for="location" class="name">สถานที่ <a class="star">*</a></label>
          <input type="text" class="first2 textfields-child" name="location" placeholder="สถานที่ทำกิจกรรม" required></input>
        </div>
        
        <div class="detail">
          <label for="detail" class="name">รายละเอียด</label>
          <textarea class="detail-text textfields-child" name="detail" placeholder="รายละเอียดเพิ่มเติมของกิจกรรม"></textarea>
        </div>

        <div class="PicUpload-frame">

          <label for="PicProfileGroup" class="div12">รูปโปรไฟล์กลุ่ม</label>
          <label class="group-child8">
            <input type="file" name="image" accept=".jpg, .jpeg, .png, .pdf" id="fileInput" hidden>     
            <div class="PicUpload">  
              <img id="preview" src="" alt="">  
              <img class="vector-icon" alt="" src="../images/plus.svg" />
            </div> 
          </label>

        </div>

        <div class="tag_detail">
          <label for="detail" class="tag_detail" name="tag">Tag</label>
        </div>
        <div class="add-tag-frame">
          <div class="group-child10">
            <div class="tagShow" id = "tagShow">
            </div>
          <div class="rectangle-parent2" onclick="TagOpen()">
            <div class="group-child9"></div>
            <div class="add-tag">Add Tag</div>
            <img class="vector-icon1" alt="" src="../images/plus.svg" />
          </div>
          </div>
        </div>

        <div class="create-cancle">
          <div class="rectangle-group">
            
          <input type="text" id="submitTag123" name="tag" hidden value="">

            <button type="submit" name="Create" class="create-button" onclick = "submitTag()">สร้าง</button>

          </div>
          <div class="rectangle-container">
            <button type="button" name="Cancle" class="button-cancle">ยกเลิก</button>
          </div>

      </div>
      </div>

      <?php include 'HobbyAddTagOverlay.php' ?>

</form>

    </div>

  </body>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    
  function validateForm() {
    var checkboxes = document.querySelectorAll('input[name="day[]"]');
    var isChecked = false;
    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        isChecked = true;
        break;
      }
    }
    if (!isChecked) {
      alert("Please select at least one day.");
      return false; 
    }
    return true; 
  }
</script>

<script>
  
    function toggleBackground(element) {
      let checkbox = element.querySelector('input[type="checkbox"]');
        if (checkbox.checked) {
        element.classList.add('select');
    } else {
        element.classList.remove('select');
    }
  }

// ------------------------------------------------------------------------
document.getElementById('fileInput').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(event) {
        document.getElementById('preview').src = event.target.result;
      }
      reader.readAsDataURL(file);
    } else {
      // Clear the preview if no file is selected
      document.getElementById('preview').src = "";
    }
  });
</script>

<script>
  function changeClassAndAddCSS() {
    var element = document.querySelector(".HEADER");
    element.className = "HEADER-ATTR";
  }
  window.onload = function () {
    changeClassAndAddCSS();
  };

</script>
 
<script>

var openTag = document.getElementById("FrameAddTag");

function TagOpen() {
  let tag = openTag;
  tag.classList.remove('hidden');
  
}

function closeTag() {
  let tag = openTag;
  tag.classList.add('hidden');
}

</script>


</html>