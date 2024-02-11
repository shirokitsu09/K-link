
<?php
  session_start();

  include("../config/con_db.php");

  $sql_hobby_db = "SELECT * FROM hobby_db";
  $sql_hobby_dbCount = "SELECT COUNT(*) as count FROM hobby_db";
  $result_hobby_db = $con->query($sql_hobby_db);
  $result_hobby_dbCount = $con->query($sql_hobby_dbCount);

  if ($result_hobby_db !== false && $result_hobby_dbCount->num_rows > 0) {
    // Fetch the result
    $row = $result_hobby_dbCount->fetch_assoc();
    $rowCount = $row['count'];

    echo "Number of rows in the table: " . $rowCount;
} else {
    echo "No rows found";
}
  ?>
  
  <div class="list-frame">
  
  <div class="tpopup" id="tpopup">
  
        <div class="tpopup-drag" id="tpopupdrag"><div class="OutFrame"></div></div>
        <div class="tpopup-option" id="tpopup-option-1">
          <img class="tpopup-option-icon" src="../images/librarylist/tdotblock.svg">
          <div class="tpopup-option-text">บล็อก</div> 
        </div>
        <div class="tpopup-option" id="tpopup-option-2">
        <img class="tpopup-option-icon" src="../images/librarylist/report.svg">
          <div class="tpopup-option-text">รายงาน</div> 
        </div>
      </div>
<?php
  if ($result_hobby_db->num_rows > 0) {

    $id = 1;
    while ($id <= $rowCount && ($row = $result_hobby_db->fetch_assoc())) {
      
    // Session
    $_SESSION['activityName'] = $row['activityName'];
    $_SESSION['location'] = $row['location'];
    $_SESSION['time'] = $row['time'];
    $_SESSION['memberCount'] = $row['memberCount'];
    $_SESSION['memberMax'] = $row['memberMax'];
    $_SESSION['detail'] = $row['detail'];
    // 

      $pic = $row['image'];
      if ($pic === NULL) {
        $pic = 'emptyPicture.svg';
      }
          ?>
      <div class="list" id="list-<?php echo $id?>">

        <div class="list-inner">
        <div class="list-inner-head">
        <img class="group-flag-banner" alt="" src="../images/grouplist/groupbanner.svg" />
        <img class="tdot-button" id="tdot-1" alt="" src="../images/threedot.svg" />
            <div class="tag-group">

              <?php
                 $dataArray = explode(",", $row["tag"]);
                 $count = count($dataArray);
                 if (count($dataArray) > 0) {
                  $AmountOfTag = 0;
                  while (($AmountOfTag < $count) && ($dataArray != '')) {
                    ?>
                      <div class="tag" id="tag<?php echo $id?>-1"><?php echo $dataArray[$AmountOfTag]?></div>
            <?php $AmountOfTag++; }
                } else {
                    echo "Error: Insufficient data.<br>";
                }
              ?>

            </div>
            <div class="tag-group1">
            <div class="tag"></div>
            <div class="tag"></div>
            </div>

        <b class="group-amount available"><?php echo $row['memberCount'] ."/". $row['memberMax']; ?></b>
        </div>
        <div class="list-inner-body" id="innerlist-<?php echo $id?>">
        <b class="group-name"><?php echo $row['activityName']; ?></b>
        <div class="leader">หัวหน้า : <?php echo $row['header']; ?></div>
        <div class="imgFrame">
          <img class="group-profile-picture" alt="" src="uploadedImg/<?php echo $pic?>" />
        </div>
        <div class="group-date">วัน : <?php echo $row['date[]']; ?></div>
        <div class="group-time">เวลา : <?php echo $row['time']; ?></div>
        <div class="group-location">สถานที่ : <?php echo $row['location']; ?></div>
        <div class="group-description">รายละเอียด : <?php echo $row['detail']; ?></div>
        </div>
      </div>
        
        <div class="tutoringjoin" id="tutoringjoin-<?php echo $id?>" style="display: none;">
        <div class="join-button" id="join-<?php echo $id?>" value="join-1">
          
        <a href="hobbyAboutGroup.php?hID=<?php echo $row['hID'];?>">  
          <div class="group">

              <div class="button-text">เข้าร่วมกลุ่ม</div>
              <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-join.svg" />
            </div>
          </div>
        </a>

          <div class="member-button" id="member-2">
            <div class="group">
              <div class="button-text">สมาชิกกลุ่ม</div>
              <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-member.svg" />
            </div>
          </div>

          <div class="close-button" id="close-2">
                <div class="group">
                  <div class="button-text">ปิด</div>
                  <img class="button-icon1" alt="" src="../images/tutoringlist/tutoring-close.svg" />
                </div>
          </div>
      </div>
      </div>

      <div class="list" id="list-3">
        <div class="list-inner">
        <div class="list-inner-head">
        <img class="group-flag-banner" alt="" src="../images/grouplist/groupbanner.svg" />
        <img class="tdot-button" id="tdot-3" alt="" src="../images/threedot.svg" />
            <div class="tag-group">
            <div class="tag">วิศวกรรมศาสตร์</div>
            <div class="tag">Calculus</div>
            <div class="tag"></div>
            </div>
            <b class="group-amount available">10/ไม่จำกัด</b>
            </div>
            <div class="list-inner-body" id="innerlist-3">
            <b class="group-name">เชียร์บาสภาคคอมรวมตัว</b>
            <div class="leader">เหน่ง iot</div>
            <img class="group-profile-picture" alt="" src="../images/grouplist/group-profilepic3.svg" />
            <div class="group-date">ทุกวันจันทร์ อังคาร</div>
            <div class="group-tim">เวลา : </div>
            <div class="group-time">17:00 น.</div>
            <div class="group-loc">สถานที่ : </div>
            <div class="group-location">สนามบาสข้างโรงเอ</div>
            <div class="group-desc">รายละเอียด : </div>
            <div class="group-description">เพื่อช่วยเหล่าผู้เล่นให้ได้มากที่สุด ขณะเดียวกันผู้เล่นคนอื่น ๆ </div>
            </div>
        </div> 
        
        <div class="joinbar" id="joinbar-3" style="display: none">
        <div class="join-button" id="join-3">
          <div class="group">
            <div class="button-text">เข้าร่วมกลุ่ม</div>
            <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-join.svg" />
          </div>
        </div>

        <div class="member-button" id="member-3">
          <div class="group">
            <div class="button-text">สมาชิกกลุ่ม</div>
            <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-member.svg" />
          </div>
        </div>

        <div class="close-button" id="close-3">
              <div class="group">
                <div class="button-text">ปิด</div>
                <img class="button-icon1" alt="" src="../images/tutoringlist/tutoring-close.svg" />
              </div>
        </div>
      </div>
      
      </div>

    <script>
      var display = 0;
      var list1 = document.getElementById("list-1");
      var joinbar1 =document.getElementById("joinbar-1");
      var innerlist1 = document.getElementById("innerlist-1");
      var tpopup = document.getElementById("tpopup"); // three dot pop up id

      var list2 = document.getElementById("list-2");
      var joinbar2 =document.getElementById("joinbar-2");
      var innerlist2 = document.getElementById("innerlist-2");

      var list3 = document.getElementById("list-3");
      var joinbar3 =document.getElementById("joinbar-3");
      var innerlist3 = document.getElementById("innerlist-3");
      
      function close_joinbar(e){
        joinbar1.style.display = 'none';
        joinbar2.style.display = 'none';
        joinbar3.style.display = 'none';
        document.querySelector('.padding')?.classList.remove('padding')
      }
      
  } else {
      echo "0 results";
  }
  
  // Close the database connection
  $con->close();
?>  
</div>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/grouplist.css" />
    <link rel="stylesheet" href="../css/time.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
  </head>
  <body>
    
  <script>
document.addEventListener("DOMContentLoaded", function () {
  var numberOfLists = <?php echo $rowCount?>; // Set the actual number of elements dynamically
  var tpopup = document.getElementById("tpopup");

  function close_tutoringjoin() {
    for (var i = 1; i <= numberOfLists; i++) {
      var tutoringjoin = document.getElementById("tutoringjoin-" + i);
      if (tutoringjoin) {
        tutoringjoin.style.display = 'none';

      }

      if (innerlist2) {
        innerlist2.addEventListener("click", function (e) {
          if (list2 != 'list-2.padding'){
            close_joinbar();
            joinbar2.style.display = 'block';
            document.querySelector('.padding')?.classList.remove('padding')
            list2.classList.add('padding');
          }
        });
      }

      if (innerlist3) {
        innerlist3.addEventListener("click", function (e) {
          if (list3 != 'list-3.padding'){
            close_joinbar();
            joinbar3.style.display = 'block';
            document.querySelector('.padding')?.classList.remove('padding')
            list3.classList.add('padding');
          }
        });
      }

//

// tpopup
      tdot1 = document.getElementById("tdot-1");
      tdot1.addEventListener("click",function (e) {
        close_joinbar();
        tpopup_open();
      });

      tdot2 = document.getElementById("tdot-2");
      tdot2.addEventListener("click",function (e) {
        close_joinbar();
        tpopup_open();
      });

      tdot3 = document.getElementById("tdot-3");
      tdot3.addEventListener("click",function (e) {
        close_joinbar();
        tpopup_open();
      });

    document.addEventListener('click', e => {
    if(!tpopup.contains(e.target) && !tpopupReport.contains(e.target) && !reportpopup.contains(e.target) && e.target !== tdot1 && e.target !== tdot2 && e.target !== tdot3){
        tpopup_close();
        tpopupReport_close();
        reportpopup_close();
      }
    });
      
// 
      

    </script>

  </body>
</html>
