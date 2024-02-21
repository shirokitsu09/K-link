<?php
  session_start();
  include("../config/con_db.php");

  if(isset($_GET['hID'])){
    $hID = $_GET['hID'];

    $_SESSION['hID'] = $hID;

    $sql_hobby_db = "SELECT * FROM hobby_db WHERE hID = '$hID'";
    $result_hobby_db = $conn->query($sql_hobby_db);
    $row = $result_hobby_db->fetch_assoc();
    
    $activityName = $row['activityName'];
    $location = $row['location'];
    $time = $row['time'];
    $memberCount = $row['memberCount'];
    $memberMax = $row['memberMax'];
    $detail = $row['detail'];
    $image = $row['image'];
    $day = $row['date[]'];
    
    $dayArray = explode(",", $day);

    $tag = $row['tag'];
    $eachTag = explode("," , $tag);
    $eachTag_count = count($eachTag);
    
    $formattedTime = date("H:i", strtotime($time));
    list($hour, $minute) = explode(':', $formattedTime);

      if($image === NULL) {
        $image = 'emptyPicture.svg';
      }
    }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/hobbyEdit.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap"
    />

    <title>Edit-Hobby's Post</title>

  </head>
  <body>
    
    <div class="background">

    <link rel="stylesheet" href="../css/HEADER.css" />
      <?php
        include '../php/header.php';
      ?>

<form action="hobbyEditPost_db.php" method="post" enctype="multipart/form-data">

      <div class="main-frame">      
        <div class="frame-child"></div>

        <div class="hobby-name">
          <label for="ActivityName" class="name">ชื่อกิจกรรม<a class="star">*<a></label>
          <input type="text" class="first2 textfields-child" name="activityName" value ="<?php echo $activityName ?>" maxlength="27"></input>
        </div>

        <div class="day-select">
            <div class="textfields">
              <div class="div2">วันที่ <a class="star">*<a></div>
            
            </div>
          <div class="frame-div">

            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="0">จ
                <input type="checkbox" hidden name="day[]" id="monday" value="จ">
              </label>
            </div>

            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="1">อ
                <input type="checkbox" hidden name="day[]" id="tuesday" value="อ">
              </label>
            </div>

            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="2">พ
                <input type="checkbox" hidden name="day[]" id="wednesday" value="พ">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="3">พฤ
                <input type="checkbox" hidden name="day[]" id="thursday" value="พฤ">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="4">ศ
                <input type="checkbox" hidden name="day[]" id="friday" value="ศ">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="5">ส
                <input type="checkbox" hidden name="day[]" id="saturday" value="ส">
              </label>
            </div>
            <div class="ellipse-parent">
              <div class="group-inner"></div>
              <label class="div3" onclick="toggleBackground(this)" data-day="6">อา
                <input type="checkbox" hidden name="day[]" id="sunday" value="อา">
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
              <div class="name">สมาชิกที่รับ <a class="star">*</a></div>
              <input type="text" class="first2 textfields-child" name="memberMax" value ="<?php echo $memberMax ?>" maxlength="2"></input>
            </div>

            <div class="requairment">
              <div class="name"><a class="star">*</a> ไม่จำกัดสมาชิก<br>โปรดพิมพ์ "00"</div>
            </div>
        </div>

        <div class="location">
          <label for="location" class="name">สถานที่ <a class="star">*</a></label>
          <input type="text" class="first2 textfields-child" name="location" value ="<?php echo $location ?>"></input>
        </div>
        
        <div class="detail">
          <label for="detail" class="name">รายละเอียด</label>
          <textarea class="detail-text textfields-child" name="detail" placeholder ="<?php echo $detail ?> " value ="<?php echo $detail ?> "></textarea>
        </div>

        <div class="PicUpload-frame">

          <label for="PicProfileGroup" class="div12">รูปโปรไฟล์กลุ่ม</label>
          <label class="group-child8">
            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png, .pdf">     
            <div class="PicUpload">    
              <img class="vector-icon" alt="" src="./uploadedImg/<?php echo $image ?> " value ="<?php echo $image ?> "/>
            </div> 
          </label>

        </div>

        <div class="tag">
          <label for="detail" class="tag" name="tag">Tag</label>
        </div>
        <div class="add-tag-frame">
          <div class="group-child10">
            <div class="tag-container">

    <?php for ($i = 0 ; $i<$eachTag_count ; $i++) {?>
        <div class="div17">          
          <?php echo $eachTag[$i] .'<img class = "DeleteTagIcon" src="../images/TagDeleteIcon.svg">'?>
        </div>
    <?php } ?>
    
            </div>
          <div class="rectangle-parent2">
            <div class="group-child9"></div>
            <div class="add-tag">Add Tag</div>
            <img class="vector-icon1" alt="" src="../images/plus.svg" />
          </div>
          </div>
        </div>

        <div class="create-cancle">
          <div class="rectangle-group">
            <button type="submit" name="Update" class="create-button">ยืนยัน</button>
          </div>
          <div class="rectangle-container">
            <button type="button" name="Cancle" class="button-cancle">ยกเลิก</button>
          </div>
          <div class="rectangle-delete">
            <button type="submit" name="Delete" class="button-delete">ลบกลุ่ม</button>
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

        text.textContent = 'แก้ไขกลุ่ม';
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

    function changeTime_starter() {
        let hour = document.getElementById('HourInput');
        let minute = document.getElementById('MinuteInput');
        let hour_show = document.getElementById('hour');
        let minute_show = document.getElementById('minute');

          hour.value = '<?php echo $hour; ?>';
          minute.value = '<?php echo $minute; ?>';

        let combinedTime = hour.value + ":" + minute.value;

        document.getElementById("CombinedTimeInput").value = combinedTime;

        hour_show.textContent = '<?php echo $hour; ?>';
        minute_show.textContent = '<?php echo $minute; ?>';
    }

    document.addEventListener('DOMContentLoaded', function() {
    let ellipseDates = document.querySelectorAll(".div3");

    ellipseDates.forEach(function(ellipseDate) {
        let date = ellipseDate.textContent.trim();

       <?php
        if(isset($dayArray)) {
            echo "let dayArray = " . json_encode($dayArray) . ";";

            echo "dayArray.forEach(function(day) {";
            echo "    ellipseDates.forEach(function(ellipseDate) {";
            echo "        if (ellipseDate.textContent.trim() === day) {";
            echo "            let checkbox_edit = ellipseDate.querySelector('input[type=\"checkbox\"]');";
            echo "            checkbox_edit.checked = true;";
            echo "            ellipseDate.classList.add('select');";
            echo "        }";
            echo "    });";
            echo "});";
        }
        ?>

    });
    changeText();
    changeTime_starter();
    TagIconPosition();

});

function TagIconPosition() {
    let leftPositions = document.querySelectorAll('.DeleteTagIcon');
    let div17s = document.querySelectorAll('.div17');

    div17s.forEach(function(div17, index) {
        let div17Width = div17.offsetWidth;

        let leftPosition = leftPositions[index];

        if (div17Width > 100) {
            leftPosition.style.left = "90%";
        } else if(div17Width > 150) {
            leftPosition.style.left = "95%";
        } else {
            leftPosition.style.left = "80%";
        }
    });
}

</script>

</html>