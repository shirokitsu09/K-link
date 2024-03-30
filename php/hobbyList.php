<?php
include "../config/con_db.php";

if (!isset($_SESSION['uID'])) { // ถ้าไม่ได้เข้าระบบอยู่
  header("location: ../index.php"); // redirect ไปยังหน้า login.php
  exit;
} else {
  $uID = $_SESSION['uID'];
}

if (!isset($_POST['search'])) {

    $sql_hobby_db = "SELECT * FROM hobby_db JOIN users ON hobby_db.header = users.uID ORDER BY dateCreate DESC";
    $sql_hobby_dbCount = "SELECT COUNT(*) as count FROM hobby_db";
    $result_hobby_db = $conn->query($sql_hobby_db);
    $result_hobby_dbCount = $conn->query($sql_hobby_dbCount);

    if ($result_hobby_db !== false && $result_hobby_dbCount->num_rows > 0) {
        // Fetch the result
        $row = $result_hobby_dbCount->fetch_assoc();
        $rowCount = $row['count'];
        
    } else {
        echo "No rows found";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="../css/globalTEST.css" />
  <link rel="stylesheet" href="../css/grouplist.css" />
  <link rel="stylesheet" href="../css/reportList.css" />
  <link rel="stylesheet" href="../css/Alert-hobby.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>

<div class="list-frame-hobby">
    <!-- <div class="status-bar"></div> -->
    <!-- -->

    <?php
if ($result_hobby_db->num_rows > 0) {

    $id = 1;
    while ($id <= $rowCount && ($row = $result_hobby_db->fetch_assoc())) {

        $requestCheck = explode(",",$row['request']);  
        $memberCheck = explode(",",$row['member']);
        $hID = $row['hID'];
      //check bookmark table where user uID
      // echo $uID;
      $sql_bookmark = "SELECT bookmark FROM users WHERE uID = '$uID'";
      $result_bookmark = mysqli_query($conn, $sql_bookmark);
      $row_bookmark = $result_bookmark->fetch_assoc();
      $bookmarked = $row_bookmark['bookmark'];
      //
      
        $pic = $row['img'];
        
        ?>

        <div class="list-hobby" id="list-<?php echo $id ?>-hobby">
          <div class="list-inner-hobby">
            <div class="list-inner-head-hobby">
              <img class="group-flag-banner-hobby" alt="" src="../images/grouplist/groupbanner.svg" />
              <input type="hidden" value="<?php echo $bookmarked;?>" id="bookmarked"/>
              <input  type="hidden" name="hID" value ="<?php echo $row['hID'] ?>" id="gethID-<?php echo $id;?>">
              <img class="tdot-button-hobby" id="tdot-<?php echo $id ?>-hobby" alt="" src="../images/tutoringlist/threedot.svg" />
              <div class="tag-group">


                <?php 
$dataArray = explode(",", $row["tag"]);
        $count = count($dataArray);
        if (count($dataArray) > 1) {
            $AmountOfTag = 0;
            while (($AmountOfTag < $count) && ($dataArray != '')) {
                ?>
                    <div class="tag" id="tag<?php echo $id ?>-1">
                      <?php echo $dataArray[$AmountOfTag] ?>
                    </div>
                    <?php $AmountOfTag++;
            }
        } else {
        }
        ?>
              </div>
              <!-- <div class="tag-group1">
            <div class="tag"></div>
            <div class="tag"></div>
          </div> -->
          <?php if( COUNT(explode(',',$row['member'])) == $row['memberMax'] && $row['memberMax'] != NULL) { ?>
              <b class="group-amount available" style= "color : #ff0101;">
                   <?php echo COUNT(explode(',',$row['member'])) . "/" . $row['memberMax'];?>
              </b>
              <?php } else if(COUNT(explode(',',$row['member'])) < $row['memberMax'] || $row['memberMax'] == NULL){ ?>
                <b class="group-amount available" >
                  <?php if($row['memberMax'] == NULL) { ?>
                    <?php echo COUNT(explode(',',$row['member'])) . "/" . "ไม่จำกัด";
                    } else { ?>
                        <?php echo COUNT(explode(',',$row['member'])) . "/" . $row['memberMax'];
                        } ?>
              </b>
          <?php } ?>
          <!-- --------------------------------------------------------------- -->
            </div>
            <div class="list-inner-body-hobby" id="innerlist-<?php echo $id ?>-hobby">
              <b class="group-name">
                <?php echo $row['activityName'] ?>
              </b>
              <div class="leader">
                <?php echo $row['username'] ?>
              </div> <!-- จางไป -->
                <div class="imgFrame">
                  <img class="group-profile-picture" alt="" src="../php/uploadedImg/<?php 
                  if ($pic === null) {
                    $pic = 'emptyPicture.svg';
                    echo $pic;
                  } else {
                    echo $pic; 
                    } ?>" 
                    />
                </div>
              <div class="group-date">วัน :
                <?php echo $row['date[]'] ?>
              </div>
              <div class="group-time">เวลา :
                <?php echo $row['time'] ?> น.
              </div>
              <div class="group-location">สถานที่ :
                <?php echo $row['location'] ?>
              </div>
              <div class="group-description"><p class="textDetailBreak"><?php echo 'รายละเอียด : '.$row['detail']; ?></p>
              </div>
            </div>
          </div>
          
          <div class="hobbyjoin" id="hobbyjoin-<?php echo $id ?>">
          <!-- ------------------------------------------------------------------------------ -->

          <?php if( COUNT(explode(',',$row['member'])) == $row['memberMax']) { 
            
              if (!in_array($uID,$memberCheck)) {
                if (in_array($uID,$requestCheck)) { ?>
            <form action="hobbyList_db.php" method="POST">
                <button name="cancleRequest" class="join-button-hobby" id="join-<?php echo $id ?>-hobby" value="join-1">
                  <div class="group">
                    <div class="button-text" style="font-size:14px;">ยกเลิกคำขอ</div>
                    <img class="button-icon" alt="" src="../images/cancle-request.svg" />
                    <input type="hidden" name="uID" value="<?php echo $uID ?>">
                    <input type="hidden" name="hID" value="<?php echo $hID ?>">
                  </div>
                </button>
            </form>
                <?php } else if (!in_array($uID,$requestCheck)) { ?>
                  <!-- <form action="" method="POST"> -->
                    <button class="join-button-hobby" id="join-<?php echo $id ?>-hobby" value="join-1">
                      <div class="group">
                        <div class="button-text">กลุ่มเต็ม</div>
                        <img class="button-icon" alt="" src="../images/group-full.svg" />
                      </div>
                    </button>
                  <!-- </form> -->
                  
            <?php }
                    
              } else if(in_array($uID,$memberCheck)) { ?>
                  <a href="hobbyAboutGroup.php?hID=<?php echo $row['hID'] ?>">
                    <button class="join-button-hobby" id="join-<?php echo $id ?>-hobby" value="join-1">
                      <div class="group">
                        <div class="button-text">ดูกลุ่ม</div>
                        <img class="button-icon" alt="" src="../images/about-group.svg" />
                      </div>
                    </button>
                  </a>
                <?php }
          } else if ( COUNT(explode(',',$row['member'])) < $row['memberMax'] || $row['memberMax'] == NULL) { 
            if (!in_array($uID,$memberCheck)) {
                if (in_array($uID,$requestCheck)) {?>
                  <form action="hobbyList_db.php" method="POST">
                        <button name="cancleRequest" class="join-button-hobby" id="join-<?php echo $id ?>-hobby" value="join-1">
                          <div class="group">
                            <div class="button-text" style="font-size:14px;">ยกเลิกคำขอ</div>
                            <img class="button-icon" alt="" src="../images/cancle-request.svg" />
                            <input type="hidden" name="uID" value="<?php echo $uID ?>">
                            <input type="hidden" name="hID" value="<?php echo $hID ?>">
                          </div>
                        </button>
                    </form>
                <?php } else if (!in_array($uID,$requestCheck)) { ?>
                  <form action="hobbyList_db.php" method="POST">
                      <button name="sendRequest" class="join-button-hobby" id="join-<?php echo $id ?>-hobby" value="join-1">
                        <div class="group">
                          <div class="button-text">ขอเข้ากลุ่ม</div>
                          <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-join.svg" />
                          <input type="hidden" name="uID" value="<?php echo $uID ?>">
                          <input type="hidden" name="hID" value="<?php echo $hID ?>">
                        </div>
                      </button>
                  </form>
                      
                <?php }
                    }
                   else if(in_array($uID,$memberCheck)) { ?>
                      <a href="hobbyAboutGroup.php?hID=<?php echo $row['hID'] ?>">
                        <button class="join-button-hobby" id="join-<?php echo $id ?>-hobby" value="join-1">
                          <div class="group">
                            <div class="button-text">ดูกลุ่ม</div>
                            <img class="button-icon" alt="" src="../images/about-group.svg" />
                          </div>
                        </button>
                      </a>
                    <?php }
                    } ?>
      
          <!-- ------------------------------------------------------------------------------ -->
          <a href="member.php?hID=<?php echo $row['hID'] ?>">
            <div class="member-button-hobby" id="member-<?php echo $id ?>-hobby">
              <div class="group">
                <div class="button-text" style="color:black;">สมาชิกกลุ่ม</div>
                <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-member.svg" />
              </div>
            </div>
          </a>

            <div class="close-button-hobby" id="close-<?php echo $id ?>-hobby">
              <div class="group">
                <div class="button-text">ปิด</div>
                <img class="button-icon1" alt="" src="../images/tutoringlist/tutoring-close.svg" />
              </div>
            </div>
          </div>
        </div>

        <?php
$id++;
    }
} else {
    echo "<div class='NoGroup' style='position:relative; left:130px;'>
    ไม่มีกลุ่มที่ค้นหา
    </div>";
}

// Close the database connection
$conn->close();
?>

  </div>

  <!-- Popup Page 1 -->
  <div class="tpopup-hobby" id="tpopup-hobby">
    <div class="tpopup-drag" onclick="dragclose()"></div>

  <!-- Pop up Page 1 first button bookmark -->
    <form  action="HobbyReportList_db.php" method="POST" name="bookmark" id="bookmark_submit">
      <button type="submit" class="tpopup-button-hobby" value="submit" onclick="onclicktpopupHobby('menu-1')" id="tpopup-option-1-h">
        <input type="hidden" name="reportTopic" value="" id="reportTopic" />
        <input type="hidden" class="" name="hID" value="<?php echo $hID; ?>"/>
          <img class="tpopup-button-icon" id="tpopup-image-1" src="../images/report/bookmark.svg">
          <div class="tpopup-button-text-hobby" id="tpopup-text-1"></div>
          <div class="tpopup-option-line"></div>
      </button>
    </form>
  <!-- --------------------------------------------------------------- bookmark -->

   <!-- Pop up Page 1 second button report -->
    <div class="tpopup-option-hobby" onclick="onclicktpopupHobby('menu-2')" id="tpopup-option-2-h">
      <img class="tpopup-option-icon" src="../images/report/report.svg">
      <div class="tpopup-option-text-hobby">รายงาน</div>
      <div class="tpopup-option-line"></div>
    </div>
  </div>
 <!-- --------------------------------------------------------------- report -->
 <!-- end popup page 1 -->

 <!-- Pop up Page 2 -->
  <div class="tpopup-report" id="tpopup-report-h">
  <div class="tpopup-drag" onclick="dragclose()"></div>
  <img class="back-button" id="backbutton-1" alt="" src="../images/report/backbutton.svg" />
  <b class="report-title">กรุณาระบุปัญหา</b>

    <div style="top: 50px;" class="tpopup-option-hobby" id="tpopup-report-option-1-h">
      <div class="tpopup-option-text-hobby" onclick="onclickreportTopic('Spam')">Spam</div>
      <img style="top: 15px;" class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div style="top: 50px;" class="tpopup-option-hobby" id="tpopup-report-option-2-h">
      <div class="tpopup-option-text-hobby" onclick="onclickreportTopic('อนาจาร')">อนาจาร</div>
      <img style="top: 15px;" class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div style="top: 50px;" class="tpopup-option-hobby" id="tpopup-report-option-3-h">
      <div class="tpopup-option-text-hobby" onclick="onclickreportTopic('ความรุนแรง')">ความรุนแรง</div>
      <img style="top: 15px;" class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div style="top: 50px;" class="tpopup-option-hobby" id="tpopup-report-option-4-h">
      <div class="tpopup-option-text-hobby" onclick="onclickreportTopic('การล่วงละเมิด')">การล่วงละเมิด</div>
      <img style="top: 15px;" class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div style="top: 50px;" class="tpopup-option-hobby" id="tpopup-report-option-5-h">
      <div class="tpopup-option-text-hobby" onclick="onclickreportTopic('การก่อการร้าย')">การก่อการร้าย</div>
      <img style="top: 15px;" class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div style="top: 50px;" class="tpopup-option-hobby" id="tpopup-report-option-6-h">
      <div class="tpopup-option-text-hobby" onclick="onclickreportTopic('คำพูดแสดงความเกลียดชัง')">คำพูดแสดงความเกลียดชัง</div>
      <img style="top: 15px;" class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div style="top: 50px;" class="tpopup-option-hobby" id="tpopup-report-option-7-h">
      <div class="tpopup-option-text-hobby" onclick="onclickreportTopic('เกี่ยวกับเด็ก')">เกี่ยวกับเด็ก</div>
      <img style="top: 15px;" class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div style="top: 50px;" class="tpopup-option-hobby" id="tpopup-report-option-8-h">
      <div class="tpopup-option-text-hobby" onclick="onclickreportTopic('ทำร้ายตัวเอง')">การฆ่าตัวตาย ทำร้ายตัวเอง</div>
      <img style="top: 15px;" class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div style="top: 50px;" class="tpopup-option-hobby" id="tpopup-report-option-9-h">
      <div class="tpopup-option-text-hobby" onclick="onclickreportTopic('ข้อมูลเท็จ')">ข้อมูลเท็จ</div>
      <img style="top: 15px;" class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div style="top: 50px;" class="tpopup-option-hobby" id="tpopup-report-option-10-h">
      <div class="tpopup-option-text-hobby" onclick="onclickreportTopic('อื่น ๆ')">อื่น ๆ</div>
      <img style="top: 15px;" class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>
  </div>
  <!-- end popup page 2 -->

  <!-- Popup page 3 -->
  <div class="report-popup" id="report-popup-h">
    <div class="tpopup-drag" onclick="dragclose()"></div>
    <img class="back-button" id="backbutton-2" alt="" src="../images/report/backbutton.svg" />
    <b class="report-title">ยืนยันการรายงาน</b>
    <div class="report-sub-title" id="report-sub-title"></div>
    <textarea value="" placeholder="รายละเอียดเพิ่มเติม..." class="report-description" id="reportText"></textarea>
    <div class="confirm-report-button" onclick="alertconfirm('ยืนยัน')">ยืนยัน</div>
  </div>
  <!-- end popup page 3 -->

  <!-- Alert -->
  <ul class="notifications"></ul>
    <div class="alert-hobby-box" id="alert-report-hobby-box">
    <div class="alert-hobby-redbar"></div>
    <div class="alert-hobby-box-text">ต้องการ</div><div class="alert-hobby-box-text-highlight">การรายงาน</div><div class="alert-hobby-box-text">หรือไม่</div>
    <form action="HobbyReportList_db.php" method="POST">
    <div class="buttons">
        <input type="hidden" class="" name="hID" value="<?php echo $hID; ?>"/>
        <input type="text" name="reportTopic" value="" id="reportTopic" hidden/>
        <input type="text" name="reportDetail" value="" id="reportDetail" hidden/>
        <button type="submit" class="btn" onclick="onclickreportText('ตกลง')" id="accent_report">ตกลง</button>
    </form>
    <div class="btn" onclick="onclickreportText('ยกเลิก')" id="neutrals">ยกเลิก</div>
    </div>
    <!-- end alert -->

</body>
<script>
  // set zero 
  let display = 0;
  let id;
  let loop_count = <?php echo $rowCount ?>;
  console.log("loop : " + loop_count);
  document.cookie = "hID="; // reset cookie
  //
  
  for (id = 1 ; id <= loop_count ; id++) {

  let list_1 = document.getElementById("list-"+ id +"-hobby"); //list id for padding
  let Hobbyjoin1 = document.getElementById("hobbyjoin-"+ id); //join group id slide in
  let innerlist_1 = document.getElementById("innerlist-"+ id +"-hobby"); //touch id for response

  let tpopupH = document.getElementById("tpopup-hobby-"+ id); // three dot pop up id
  // bookmarked display
  let bookmarked = document.getElementById("bookmarked").value;
  let gethID = document.getElementById("gethID-"+id).value;
  let bookmarkresult = bookmarked.includes(gethID);

  // tutoring response button
  function close_Hobbyjoin() {
  const rem = id;
    for (id = 1 ; id <= loop_count ; id++) {
      if(id !== rem){
        let Hobbyjoin1 = document.getElementById("hobbyjoin-"+ id);
        Hobbyjoin1.classList.remove('active');
        document.querySelector('.padding')?.classList.remove('padding');
      }
    } 
  }

  let close_1 = document.getElementById("close-"+ id +"-hobby");
  close_1.addEventListener("click", close_Hobbyjoin);

  // let join_1 = document.getElementById("join-"+ id +"-hobby");
  // join_1.addEventListener("click", function () {
  //   console.log("join group"+ id +" requested");
  //   close_Hobbyjoin();
  // });

  let member_1 = document.getElementById("member-"+ id +"-hobby")
  member_1.addEventListener("click", function () {
    console.log("member group"+ id +" view requested")
    close_Hobbyjoin();
  });

  tdot_1 = document.getElementById("tdot-"+ id +"-hobby")
  tdot_1.addEventListener("click", function () {
    close_Hobbyjoin();
    tpopup_open_H();
  });
  
  // Open tutoring join
  if (list_1){
    list_1.addEventListener("click", function () {
      const rem = id;
      console.log(gethID);
      console.log(bookmarked);
      console.log(bookmarkresult);
      hobby_display(bookmarkresult);
      document.cookie = "hID="+gethID;
      for (id = 1 ; id <= loop_count ; id++) {
      if(id !== rem){
      // console.log("list"+id);
      }
    }
    });
  }

  if (innerlist_1) {
    innerlist_1.addEventListener("click", function () {
      if (list_1 != "list-"+ id +"-hobby.padding") {
        close_Hobbyjoin();
        Hobbyjoin1.classList.add('active');
        list_1.classList.add('padding');
      }
    });
  }
  
  } // end list script


  // Popup script
    var tpopupH = document.getElementById("tpopup-hobby");
    var tpopupReport = document.getElementById("tpopup-report-h");
    var backbutton_1 = document.getElementById("backbutton-1");
    var backbutton_2 = document.getElementById("backbutton-2");
    var reportpopup = document.getElementById("report-popup-h");

    var reportTopic = document.getElementById("reportTopic").value;
    var reportDetail = document.getElementById("reportDetail").value;
    var overlay_check = 0;
    // var bookmarked = document.getElementById("bookmarked").value;

    document.cookie ="checkBookmark=off";
    document.cookie ="checkReport=off";

    let TpopUpReport_Hobby = false;
    function tpopupReport_open_hobby(e) {
      tpopupReport.classList.add("on");
      // TpopUpReport_Hobby = true;
    }

    function tpopupReport_close_hobby(e) {
      tpopupReport.classList.remove("on");
      // TpopUpReport_Hobby = false;
    }
    //===========================report popup================//
    var tpopupimage1 = document.getElementById("tpopup-image-1");
    var tpopuptext1 = document.getElementById("tpopup-text-1");
    function hobby_display(x){
    if(x == false){
      tpopupimage1.src = "../images/report/bookmark.svg";
      tpopuptext1.innerHTML = "บันทึก";
    }
    else if(x == true){
      tpopupimage1.src = "../images/report/bookmarked.svg";
      tpopuptext1.innerHTML = "บันทึกแล้ว";
    }
  }

    function reportpopup_open_h(e) {
      reportpopup.classList.add("on");
      // reportPoPUP_Hobby = true;
    }

    function reportpopup_close_h(e) {
      reportpopup.classList.remove("on");
      // reportPoPUP_Hobby = false;
    }

    function clearReport(e) {
      var reportTopic = document.getElementById("reportTopic").value = "";
      var reportText = document.getElementById("reportText").value = "";
    }

    document.cookie ="reportTopic="+reportTopic;
    document.cookie ="reportDetail="+reportDetail;
    //สร้างพื้นหลังขาวตอนเปิด popup ครั้งแรกในหน้า hobby !important
    function tpopup_open_H() {
    tpopupH.classList.add("on");
    createOverlay_hobby_report();

  }
    //ปิดพื้นหลังขาวตอนเปิด popup ครั้งแรกในหน้า hobby !important
    function tpopup_close_H() {
    tpopupH.classList.remove("on");
    //removeOverlay_hobby_report();
  }

    //close popup
    function dragclose() {
    tpopup_close_H();
    tpopupReport_close_hobby();
    reportpopup_close_h();
    removeOverlay_hobby_report();
  }
  // close

    // tpopup
    backbutton_1.addEventListener("click", function (e) {
    tpopupH.classList.add("on");
    tpopupReport_close_hobby();
    });

    backbutton_2.addEventListener("click", function (e) {
    reportpopup_close_h();
    tpopupReport_open_hobby();
    });

    function onclicktpopupHobby(menu) {
      if (menu === 'menu-1') {
      document.cookie ="checkBookmark=on";
      document.cookie ="checkReport=off";
      }
      else if (menu === 'menu-2') {
        tpopup_close_H();
        tpopupReport_open_hobby();
        overlay_check = 1;
      document.cookie ="checkBookmark=off";
      document.cookie ="checkReport=on";
      }
    }

    function onclickreportTopic(report) {
      clearReport();
      if (report === 'Spam'){
        document.getElementById("reportTopic").value = report;
        document.getElementById("report-sub-title").innerHTML = report;
      }
      else if (report === 'อนาจาร'){
        document.getElementById("reportTopic").value = report;
        document.getElementById("report-sub-title").innerHTML = report;
      }
      else if (report === 'ความรุนแรง'){
        document.getElementById("reportTopic").value = report;
        document.getElementById("report-sub-title").innerHTML = report;
      }
      else if (report === 'การล่วงละเมิด'){
        document.getElementById("reportTopic").value = report;
        document.getElementById("report-sub-title").innerHTML = report;
      }
      else if (report === 'การก่อการร้าย'){
        document.getElementById("reportTopic").value = report;
        document.getElementById("report-sub-title").innerHTML = report;
      }
      else if (report === 'คำพูดแสดงความเกลียดชัง'){
        document.getElementById("reportTopic").value = report;
        document.getElementById("report-sub-title").innerHTML = report;
      }
      else if (report === 'เกี่ยวกับเด็ก'){
        document.getElementById("reportTopic").value = report;
        document.getElementById("report-sub-title").innerHTML = report;
      }
      else if (report === 'ทำร้ายตัวเอง'){
        document.getElementById("reportTopic").value = report;
        document.getElementById("report-sub-title").innerHTML = report;
      }
      else if (report === 'ข้อมูลเท็จ'){
        document.getElementById("reportTopic").value = report;
        document.getElementById("report-sub-title").innerHTML = report;
      }
      else if (report === 'อื่น ๆ'){
        document.getElementById("reportTopic").value = report;
        document.getElementById("report-sub-title").innerHTML = report;
      }
      reportTopic = report;
      tpopup_close_H();
      tpopupReport_close_hobby();
      reportpopup_open_h();
      overlay_check = 2;
    }

    function onclickreportText(check){
      var reportText = document.getElementById("reportText").value;
      var reportDetail = document.getElementById("reportDetail").value;
      if(check === 'ตกลง'){
      reportDetail = reportText;
      }
      else if(check = 'ยกเลิก'){
      }
      clearReport();
      document.cookie ="reportTopic="+reportTopic;
      document.cookie ="reportDetail="+reportDetail;
      tpopupReport_close_hobby()
      reportpopup_close_h();
      tpopup_close_H();
    }

    function alertconfirm(check){
      var reportText = document.getElementById("reportText").value;
      var reportDetail = document.getElementById("reportDetail").value;
      if(check === 'ยืนยัน'){
      reportDetail = reportText;
      openAlertreport_hobby();
      console.log(reportTopic+" : "+reportDetail);
      }
      tpopupReport_close_hobby()
      reportpopup_close_h();
      tpopup_close_H();
      createOverlay_hobby_report();
    }

    // createOverlay
    const createOverlay_hobby_report= () => {
      const overlay_hobbyreport = document.createElement('div');
      overlay_hobbyreport.classList.add('overlay-hobby');
      overlay_hobbyreport.id = 'OverlayOn';
      document.body.appendChild(overlay_hobbyreport);
      console.log('Created -hobbyreport');
      

      overlay_hobbyreport.addEventListener('click', function () {
        if (overlay_check === 1) {
            console.log('case1');
            tpopupH.classList.add("on");
            tpopupReport_close_hobby();
            reportpopup_close_h();
            overlay_check = 0;
        } else if (overlay_check === 2) {
            console.log('case2');
            tpopupReport_open_hobby();
            reportpopup_close_h();
            overlay_check = 1;
        } else {
           console.log('case3');
           removeOverlay_hobby_report();
           tpopup_close_H();
           reportpopup_close_h();
           tpopupReport_close_hobby();
         }
      });
      return overlay_hobbyreport;
    }

    const removeOverlay_hobby_report = () => {
      const overlay_hobbyreport = document.getElementById('OverlayOn');
      if (overlay_hobbyreport) {
        document.body.removeChild(overlay_hobbyreport);
      }
    }
    // end Popup script


    // Alert script
    const notifications = document.querySelector(".notifications"),
    buttons = document.querySelectorAll(".buttons .btn");

    const toastDetails = {
        timer: 1000,
        success: {
            icon: "fa-circle-check",
            text: "Success"
        },
        error: {
            icon: "fa-circle-xmark",
            text: "Error"
        },
        warning: {
            icon: "fa-circle-exclamation",
            text: "Warning"
        },
        info: {
            icon: "fa-circle-info",
            text: "Info"
        },
        accent_report: {
            text: "การรายงานเสร็จสิ้น",
        },
        accent_join: {
            text: "ส่งคำขอเข้ากลุ่มแล้ว",
        },
        neutrals: {
            text: ""
        }
    }
    const removeToastreport = (toast) => {
        toast.classList.add("hide");
        if (toast.timeoutId) clearTimeout(toast.timeoutId);
        setTimeout(() => {toast.remove(),removeOverlay_hobby(),closeAlertreport_hobby(), 500});
        
    }

    //กดได้ครั้งเดียว
    const createToast = (id) => {

        const activeToasts = document.querySelectorAll('.toast:not(.hide)');
        if (activeToasts.length === 0) {
            const { icon, text } = toastDetails[id];
            // createOverlay_hobby()
            const toast = document.createElement("li");
            toast.className = `toast ${id}`;
                                //<i class="fa-solid ${icon}"></i>
            toast.innerHTML = `<div class="column">
                                    <span>${text}</span> 
                                </div>
                                `; //<i class="fa-solid fa-xmark" onclick="removeToast(this.parentElement)"></i>
            notifications.appendChild(toast);
            toast.timeoutId = setTimeout(() => removeToastreport(toast), toastDetails.timer);
        }
    }

    //กดได้ครั้งเดียว + มีพื้นหลัง

    const createOverlay_hobby = () => {
        const overlay_hobby = document.createElement('div');
        overlay_hobby.classList.add('overlay-hobby');
        document.body.appendChild(overlay_hobby);
        return overlay_hobby;
    }
    const removeOverlay_hobby = () => {
        const overlay_hobby = document.querySelector('.overlay-hobby');
        if (overlay_hobby) {
            document.body.removeChild(overlay_hobby);
        }
    }

    buttons.forEach(btn => {
        btn.addEventListener("click", () => createToast(btn.id));
    });

    var Alert_hobby_report = document.getElementById("alert-report-hobby-box");
    const openAlertreport_hobby = () => {
        Alert_hobby_report.classList.add('on');
    }

    const closeAlertreport_hobby = () => {
        Alert_hobby_report.classList.remove('on');
    }
  // end alert script
  
</script>

</html>