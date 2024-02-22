
  
  <div class="list-frame">
  
  <?php include 'reportList.php' ?>
  <!-- <div class="tpopup" id="tpopup">
  
        <div class="tpopup-drag" id="tpopupdrag"><div class="OutFrame"></div></div>
        <div class="tpopup-option" id="tpopup-option-1">
          <img class="tpopup-option-icon" src="../images/librarylist/tdotblock.svg">
          <div class="tpopup-option-text">บล็อก</div> 
        </div>
        <div class="tpopup-option" id="tpopup-option-2">
        <img class="tpopup-option-icon" src="../images/librarylist/report.svg">
          <div class="tpopup-option-text">รายงาน</div> 
        </div>
      </div> -->
<?php
  if ($result_search_db->num_rows > 0 && $blank === 'ValueExist') {
    echo $blank;
    $id = 1;
    while ($id <= $rowCount && ($row = $result_search_db->fetch_assoc())) {
      
    // Session
    $_SESSION['activityName'] = $row['activityName'];
    $_SESSION['location'] = $row['location'];
    $_SESSION['time'] = $row['time'];
    $_SESSION['memberCount'] = $row['memberCount'];
    $_SESSION['memberMax'] = $row['memberMax'];
    $_SESSION['detail'] = $row['detail'];
    $_SESSION['uID'] = '65010001';

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
        <img class="tdot-button" id="tdot-<?php echo $id?>" alt="" src="../images/tutoringlist/threedot.svg" />
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

          <div class="member-button" id="member-<?php echo $id?>">
            <div class="group">
              <a href='#memberPage'>
              <div class="button-text">สมาชิกกลุ่ม</div>
              <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-member.svg" />
              </a>
            </div>
          </div>

          <div class="close-button" id="close-<?php echo $id?>">
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
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/grouplist.css" />
    <link rel="stylesheet" href="../css/time.css" />
    <link rel="stylesheet" href="../css/reportList.css" />

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
    }
    document.querySelector('.padding')?.classList.remove('padding');
  }

  function handleInnerListClick(list, tutoringjoin) {
    return function (e) {
      if (list && !list.classList.contains('padding')) {
        close_tutoringjoin();
        tutoringjoin.style.display = 'block';
        document.querySelector('.padding')?.classList.remove('padding')
        list.classList.add('padding');
      }
    };
  }

  function createJoinClickHandler(index) {
    return function (e) {
      console.log("join group" + index + " requested");
      close_tutoringjoin();
    };
  }

  function createMemberClickHandler(index) {
    return function (e) {
      console.log("member group" + index + " view requested");
      close_tutoringjoin();
    };
  }

  function createTdotClickHandler() {
    return function (e) {
      close_tutoringjoin();
      tpopup_open();
    };
  }

  for (var i = 1; i <= numberOfLists; i++) {
    var list = document.getElementById("list-" + i);
    var tutoringjoin = document.getElementById("tutoringjoin-" + i);
    var innerlist = document.getElementById("innerlist-" + i);

    var close = document.getElementById("close-" + i);
    var join = document.getElementById("join-" + i);
    var member = document.getElementById("member-" + i);
    var tdot = document.getElementById("tdot-" + i);

    if (innerlist) {
      innerlist.addEventListener("click", handleInnerListClick(list, tutoringjoin));
    }

    if (close) {
      close.addEventListener("click", close_tutoringjoin);
    }

    if (join) {
      join.addEventListener("click", createJoinClickHandler(i));
    }

    if (member) {
      member.addEventListener("click", createMemberClickHandler(i));
    }

    if (tdot) {
      tdot.addEventListener("click", createTdotClickHandler(i));
    }

    document.addEventListener('click', e => {
    if (tpopup_close && !tpopup.contains(e.target) && !tpopupReport.contains(e.target) && !reportpopup.contains(e.target) && e.target !== tdot) {
        tpopupReport_close();
        reportpopup_close();
    } else if (tpopup_open && !tpopup.contains(e.target) && !tpopupReport.contains(e.target) && !reportpopup.contains(e.target) && e.target !== tdot) {
        tpopup_close();
    }
});
  }

});

    </script>

  </body>
</html>
