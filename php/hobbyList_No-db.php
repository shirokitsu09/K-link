
<?php 
include("../config/con_db.php");

  $sql_hobby_db = "SELECT * FROM hobby_db ORDER BY dateCreate";
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
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="../css/globalTEST.css" />
  <link rel="stylesheet" href="../css/grouplist.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
</head>

<body>

  <div class="list-frame-hobby">
    <!-- <div class="status-bar"></div> -->
    <div class="tpopup-hobby" id="tpopup-hobby">
      <div class="tpopup-drag-hobby" id="tpopupdragHobby"></div>
      <div class="tpopup-option-hobby" id="tpopup-option-1-h">
        <img class="tpopup-option-icon-hobby" src="../images/librarylist/tdotblock.svg">
        <div class="tpopup-option-text-hobby">บล็อก</div>
      </div>
      <div class="tpopup-option-hobby" id="tpopup-option-2-h">
        <img class="tpopup-option-icon-hobby" src="../images/librarylist/report.svg">
        <div class="tpopup-option-text-hobby">รายงาน</div>
      </div>
    </div>


    <?php include "HobbyReportList.php"; ?>
    <!-- -->

    <?php
  if ($result_hobby_db->num_rows > 0) {
    
    $id = 1;
    while ($id <= $rowCount && ($row = $result_hobby_db->fetch_assoc())) {

      $pic = $row['img'];
      if ($pic === NULL) {
        $pic = 'emptyPicture.svg';
      }
          ?>


    <div class="list-hobby" id="list-1-hobby?>">
      <div class="list-inner-hobby">
        <div class="list-inner-head-hobby">
          <img class="group-flag-banner-hobby" alt="" src="../images/grouplist/groupbanner.svg" />
          <img class="tdot-button-hobby" id="tdot-1-hobby" alt="" src="../images/tutoringlist/threedot.svg" />
          <div class="tag-group">
            <div class="tag" id="tag1-1">กีฬาและการออกกำลังกาย</div>
            <div class="tag" id="tag1-2">ชิลๆ</div>
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
          <b class="group-amount available">1/10</b>
        </div>
        <div class="list-inner-body-hobby" id="innerlist-1-hobby">
          <b class="group-name"><?php echo $id."-".$row['type']?></b>
          <div class="leader">AIJHONG</div>
          <img class="group-profile-picture" alt="" src="../images/grouplist/group-profilepic1.svg" />
          <div class="group-date">วัน : 15 มิ.ย. 2567</div>
          <div class="group-time">เวลา : 17:00 - 19:00 น.</div>
          <div class="group-location">สถานที่ : สนามกีฬา</div>
          <div class="group-description">รายละเอียด : ผู้เล่นจะได้รับบทบาทเป็น โกะโจ
            เพื่อช่วยเหล่าผู้เล่นให้ได้มากที่สุด ขณะเดียวกันผู้เล่นคนอื่น ๆ </div>
        </div>
      </div>

      <div class="hobbyjoin" id="hobbyjoin-1" style="display: none;">
        <div class="join-button-hobby" id="join-1-hobby" value="join-1">
          <div class="group">
            <div class="button-text">เข้าร่วมกลุ่ม</div>
            <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-join.svg" />
          </div>
        </div>

        <div class="member-button-hobby" id="member-1-hobby">
          <div class="group">
            <div class="button-text">สมาชิกกลุ่ม</div>
            <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-member.svg" />
          </div>
        </div>

        <div class="close-button-hobby" id="close-1-hobby">
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
      echo "0 results";
  }
  
  // Close the database connection
  $conn->close();
?>  

  </div>

</body>

<script>
  var display = 0;

  var list_1 = document.getElementById("list-1-hobby"); //list id for padding
  var Hobbyjoin1 = document.getElementById("hobbyjoin-1"); //join group id slide in
  var innerlist_1 = document.getElementById("innerlist-1-hobby"); //touch id for response

  var tpopupH = document.getElementById("tpopup-hobby"); // three dot pop up id

  var list_2 = document.getElementById("list-2-hobby");
  var Hobbyjoin2 = document.getElementById("hobbyjoin-2");
  var innerlist_2 = document.getElementById("innerlist-2-hobby");


  var list_3 = document.getElementById("list-3-hobby");
  var Hobbyjoin3 = document.getElementById("hobbyjoin-3");
  var innerlist_3 = document.getElementById("innerlist-3-hobby");

  // tag reponse go to tag link

  // var tagfaculty = document.getElementById("tag-faculty-1");
  // tagfaculty.addEventListener("click", function () {
  //   location.href = "";
  // });

  // var tagsubject = document.getElementById("tag-subject-1");
  // tagsubject.addEventListener("click", function () {
  //   location.href = "";
  // });

  // var tagmajor = document.getElementById("tag-major-1");
  // tagmajor.addEventListener("click", function () {
  //   location.href = "";
  // });


  // tutoring response button      
  function close_Hobbyjoin(e) {
    Hobbyjoin1.style.display = 'none';
    Hobbyjoin2.style.display = 'none';
    Hobbyjoin3.style.display = 'none';
    document.querySelector('.padding')?.classList.remove('padding')
  }

  var close_1 = document.getElementById("close-1-hobby");
  close_1.addEventListener("click", close_Hobbyjoin);
  var close_2 = document.getElementById("close-2-hobby");
  close_2.addEventListener("click", close_Hobbyjoin);
  var close_3 = document.getElementById("close-3-hobby");
  close_3.addEventListener("click", close_Hobbyjoin);

  var join_1 = document.getElementById("join-1-hobby");
  join_1.addEventListener("click", function (e) {
    console.log("join group1 requested");
    close_Hobbyjoin();
  });

  var join_2 = document.getElementById("join-2-hobby");
  join_2.addEventListener("click", function (e) {
    console.log("join group2 requested");
    close_Hobbyjoin();
  });

  var join_3 = document.getElementById("join-3-hobby");
  join_3.addEventListener("click", function (e) {
    console.log("join group3 requested");
    close_Hobbyjoin();
  });


  var member_1 = document.getElementById("member-1-hobby")
  member_1.addEventListener("click", function (e) {
    console.log("member group1 view requested")
    close_Hobbyjoin();
  });

  var member_2 = document.getElementById("member-2-hobby")
  member_2.addEventListener("click", function (e) {
    console.log("member group2 view requested")
    close_Hobbyjoin();
  });

  var member_3 = document.getElementById("member-3-hobby")
  member_3.addEventListener("click", function (e) {
    console.log("member group3 view requested")
    close_Hobbyjoin(); //////
  });


  // Three dot open
  function tpopup_open_H(e) {
    tpopupH.classList.add("on");
    createOverlay();
  }

  function tpopup_close_H(e) {
    tpopupH.classList.remove("on");
    removeOverlay();
  }

  tdot_1 = document.getElementById("tdot-1-hobby")
  tdot_1.addEventListener("click", function (e) {
    close_Hobbyjoin();
    tpopup_open_H();
  });

  tdot_2 = document.getElementById("tdot-2-hobby")
  tdot_2.addEventListener("click", function (e) {
    close_Hobbyjoin();
    tpopup_open_H();
  });

  tdot_3 = document.getElementById("tdot-3-hobby")
  tdot_3.addEventListener("click", function (e) {
    close_Hobbyjoin();
    tpopup_open_H();
  });


  var tpopupdragH = document.getElementById("tpopupdragHobby");
  tpopupdragH.addEventListener("click", function (e) {
    tpopup_close_H();
  });

  var tpopupoptionH1 = document.getElementById("tpopup-option-1-h");
  tpopupoptionH1.addEventListener("click", function (e) {
    console.log("blocked request");
    tpopup_close_H();
  });

  var tpopupoptionH2 = document.getElementById("tpopup-option-2-h");
  tpopupoptionH2.addEventListener("click", function (e) {
    console.log("reported request")
    tpopup_close_H();
  });

  // Open tutoring join 

  if (innerlist_1) {
    innerlist_1.addEventListener("click", function (e) {
      if (list_1 != "list-1-hobby.padding") {
        close_Hobbyjoin();
        Hobbyjoin1.style.display = 'block';
        list_1.classList.add('padding');
      }
    });
  }

  if (innerlist_2) {
    innerlist_2.addEventListener("click", function (e) {
      if (list_2 != 'list-2-hobby.padding') {
        close_Hobbyjoin();
        Hobbyjoin2.style.display = 'block';
        document.querySelector('.padding')?.classList.remove('padding')
        list_2.classList.add('padding');
      }
    });
  }

  if (innerlist_3) {
    innerlist_3.addEventListener("click", function (e) {
      if (list_3 != 'list-3-hobby.padding') {
        close_Hobbyjoin();
        Hobbyjoin3.style.display = 'block';
        document.querySelector('.padding')?.classList.remove('padding')
        list_3.classList.add('padding');
      }
    });
  }

</script>

</html>