<?php
  if (!isset($_SESSION['uID'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: ../index.php"); // redirect ไปยังหน้า login.php
    exit;
  } else {
    $uID = $_SESSION['uID'];
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="../css/globalTEST.css" />
  <link rel="stylesheet" href="../css/mypostList.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
</head>

<body>
  <div class="list-frame-tutoring">

    <?php include '../php/TutoringReportList.php'; ?>

    <?php
  if ($result_mypost_db->num_rows > 0 && $blank === 'ValueExist') {
    
    $id = 1;
    while ($id <= $rowCount && ($row = $result_mypost_db->fetch_assoc())) {
      
      $pic = $row['img'];
      if ($pic === NULL) {
        $pic = 'emptyPicture.svg';
      }
          ?>

    <div class="list" id="list-<?php echo $id?>">
      <div class="list-inner-tutoring">
        <div class="list-inner-head">
          <img class="tutoring-flag-banner" alt="" src="../images/grouplist/groupbanner.svg" />
          <img class="tdot-button" id="tdot-<?php echo $id?>" alt="" src="../images/tutoringlist/threedot.svg" />
          <div class="tag-group">
            <?php
                 $dataArray = explode(",", $row["tag"]);
                 $count = count($dataArray);
                 if (count($dataArray) > 0) {
                  $AmountOfTag = 0;
                  while (($AmountOfTag < $count) && ($dataArray != '')) {
                    ?>
                      <div class="tag" id="tag-faculty-<?php echo $id?>"><?php echo $dataArray[$AmountOfTag]?></div>
            <?php $AmountOfTag++; }
                } else {
                    echo "Error: Insufficient data.<br>";
                }
              ?>

          <b class="group-amount available">
                <?php if($row['memberMax'] == NULL) { ?>
                    <?php echo COUNT(explode(',',$row['member'])) . "/" . "ไม่จำกัด";
                    } else { ?>
                        <?php echo COUNT(explode(',',$row['member'])) . "/" . $row['memberMax'];
                      } ?>
          </b>
        </div>
        <div class="list-inner-body" id="innerlist-<?php echo $id?>">
          <b class="subject"><?php echo $row['activityName']; ?></b>
          <div class="mentor"><?php echo $row['username']; ?></div>
        <div class="imgFrame">
          <img class="group-profile-picture" alt="" src="uploadedImg/<?php echo $pic?>" />
        </div>
          <div class="group-date">วัน : <?php echo $row['date[]']; ?></div>
        <div class="group-time">เวลา : <?php echo $row['time']; ?></div>
          <div class="group-description"><p class="textDetailBreak">รายละเอียด : <?php echo $row['detail']; ?></p></div>
          
          <div class="group-location">สถานที่ : <?php echo $row['location']; ?></div>
        </div>
      </div>

      <div class="tutoringjoin" id="tutoringjoin-<?php echo $id?>" style="display: none;">
        <div class="join-button" id="join-<?php echo $id?>" value="join-<?php echo $id?>">
        <a href="hobbyAboutGroup.php?hID=<?php echo $row['hID'];?>">  
          <div class="group">
              <div class="button-text">เข้าร่วมกลุ่ม</div>
              <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-join.svg" />
            </div>
          </div>
        </a>

        <div class="member-button" id="member-<?php echo $id?>">
          <div class="group">
            <div class="button-text">สมาชิกกลุ่ม</div>
            <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-member.svg" />
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
    </div>

    <?php
          $id++;
      }
  } else {
      // echo "0 results";
  }
  
  // Close the database connection
  $conn->close();
?>  
  </div>


  <!-- <script>
    var display = 0;
    var list1 = document.getElementById("list-1"); //list id for padding
    var tutoringjoin1 = document.getElementById("tutoringjoin-1"); //join group id slide in
    var innerlist1 = document.getElementById("innerlist-1"); //touch id for response
    var tpopup = document.getElementById("tpopup"); // three dot pop up id

    // var list2 = document.getElementById("list-2");
    // var tutoringjoin2 = document.getElementById("tutoringjoin-2");
    // var innerlist2 = document.getElementById("innerlist-2");


    // var list3 = document.getElementById("list-3");
    // var tutoringjoin3 = document.getElementById("tutoringjoin-3");
    // var innerlist3 = document.getElementById("innerlist-3");


    // var list4 = document.getElementById("list-4");
    // var tutoringjoin4 = document.getElementById("tutoringjoin-4");
    // var innerlist4 = document.getElementById("innerlist-4");


    // var list5 = document.getElementById("list-5");
    // var tutoringjoin5 = document.getElementById("tutoringjoin-5");
    // var innerlist5 = document.getElementById("innerlist-5");

    // tag reponse go to tag link

    var tagfaculty = document.getElementById("tag-faculty-1");
    tagfaculty.addEventListener("click", function () {
      location.href = "";
    });

    var tagsubject = document.getElementById("tag-subject-1");
    tagsubject.addEventListener("click", function () {
      location.href = "";
    });

    var tagmajor = document.getElementById("tag-major-1");
    tagmajor.addEventListener("click", function () {
      location.href = "";
    });


    // tutoring response button      
    function close_tutoringjoin(e) {
      tutoringjoin1.style.display = 'none';
      // tutoringjoin2.style.display = 'none';
      // tutoringjoin3.style.display = 'none';
      // tutoringjoin4.style.display = 'none';
      // tutoringjoin5.style.display = 'none';
      document.querySelector('.padding')?.classList.remove('padding')
    }

    var close1 = document.getElementById("close-1");
    close1.addEventListener("click", close_tutoringjoin);
    // var close2 = document.getElementById("close-2");
    // close2.addEventListener("click", close_tutoringjoin);
    // var close3 = document.getElementById("close-3");
    // close3.addEventListener("click", close_tutoringjoin);
    // var close4 = document.getElementById("close-4");
    // close4.addEventListener("click", close_tutoringjoin);
    // var close5 = document.getElementById("close-5");
    // close5.addEventListener("click", close_tutoringjoin);

    var join1 = document.getElementById("join-1");
    join1.addEventListener("click", function (e) {
      console.log("join group1 requested");
      close_tutoringjoin();
    });

    // var join2 = document.getElementById("join-2");
    // join2.addEventListener("click", function (e) {
    //   console.log("join group2 requested");
    //   close_tutoringjoin();
    // });

    // var join3 = document.getElementById("join-3");
    // join3.addEventListener("click", function (e) {
    //   console.log("join group3 requested");
    //   close_tutoringjoin();
    // });

    // var join4 = document.getElementById("join-4");
    // join4.addEventListener("click", function (e) {
    //   console.log("join group4 requested");
    //   close_tutoringjoin();
    // });

    // var join5 = document.getElementById("join-5");
    // join5.addEventListener("click", function (e) {
    //   console.log("join group5 requested");
    //   close_tutoringjoin();
    // });


    var member1 = document.getElementById("member-1")
    member1.addEventListener("click", function (e) {
      console.log("member group1 view requested")
      close_tutoringjoin();
    });

    // var member2 = document.getElementById("member-2")
    // member2.addEventListener("click", function (e) {
    //   console.log("member group2 view requested")
    //   close_tutoringjoin();
    // });

    // var member3 = document.getElementById("member-3")
    // member3.addEventListener("click", function (e) {
    //   console.log("member group3 view requested")
    //   close_tutoringjoin();
    // });

    // var member4 = document.getElementById("member-4")
    // member4.addEventListener("click", function (e) {
    //   console.log("member group4 view requested")
    //   close_tutoringjoin();
    // });

    // var member5 = document.getElementById("member-5")
    // member5.addEventListener("click", function (e) {
    //   console.log("member group5 view requested")
    //   close_tutoringjoin();
    // });

    // Three dot open
    function tpopup_open_t(e) {
      tpopup.classList.add("on");
      createOverlay_tutor();
    }

    function tpopup_close_t(e) {
      tpopup.classList.remove("on");
      removeOverlay_tutor();
    }

    tdot1 = document.getElementById("tdot-1")
    tdot1.addEventListener("click", function (e) {
      close_tutoringjoin();
      tpopup_open_t();
    });

    // tdot2 = document.getElementById("tdot-2")
    // tdot2.addEventListener("click", function (e) {
    //   close_tutoringjoin();
    //   tpopup_open_t();
    // });

    // tdot3 = document.getElementById("tdot-3")
    // tdot3.addEventListener("click", function (e) {
    //   close_tutoringjoin();
    //   tpopup_open_t();
    // });

    // tdot4 = document.getElementById("tdot-4")
    // tdot4.addEventListener("click", function (e) {
    //   close_tutoringjoin();
    //   tpopup_open_t();
    // });

    // tdot5 = document.getElementById("tdot-5")
    // tdot5.addEventListener("click", function (e) {
    //   close_tutoringjoin();
    //   tpopup_open_t();
    // });


    var tpopupdrag = document.getElementById("tpopupdrag-1-t");
    tpopupdrag.addEventListener("click", function (e) {
      tpopup_close_t();
    });

    var tpopupoption1 = document.getElementById("tpopup-option-1-t");
    tpopupoption1.addEventListener("click", function (e) {
      console.log("blocked request");
      tpopup_close_t();
    });

    var tpopupoption2 = document.getElementById("tpopup-option-2-t");
    tpopupoption2.addEventListener("click", function (e) {
      console.log("reported request")
      tpopup_close_t();
    });

    // Open tutoring join 

    if (innerlist1) {
      innerlist1.addEventListener("click", function (e) {
        if (list1 != "list-1 padding") {
          close_tutoringjoin();
          tutoringjoin1.style.display = 'block';
          list1.classList.add('padding');
        }
      });
    }

    // if (innerlist2) {
    //   innerlist2.addEventListener("click", function (e) {
    //     if (list2 != 'list-2.padding') {
    //       close_tutoringjoin();
    //       tutoringjoin2.style.display = 'block';
    //       document.querySelector('.padding')?.classList.remove('padding')
    //       list2.classList.add('padding');
    //     }
    //   });
    // }

    // if (innerlist3) {
    //   innerlist3.addEventListener("click", function (e) {
    //     if (list3 != 'list-3.padding') {
    //       close_tutoringjoin();
    //       tutoringjoin3.style.display = 'block';
    //       document.querySelector('.padding')?.classList.remove('padding')
    //       list3.classList.add('padding');
    //     }
    //   });
    // }

    // if (innerlist4) {
    //   innerlist4.addEventListener("click", function (e) {
    //     if (list4 != 'list-4.padding') {
    //       close_tutoringjoin();
    //       tutoringjoin4.style.display = 'block';
    //       document.querySelector('.padding')?.classList.remove('padding')
    //       list4.classList.add('padding');
    //     }
    //   });
    // }

    // if (innerlist5) {
    //   innerlist5.addEventListener("click", function (e) {
    //     if (list5 != 'list-5.padding') {
    //       close_tutoringjoin();
    //       tutoringjoin5.style.display = 'block';
    //       document.querySelector('.padding')?.classList.remove('padding')
    //       list5.classList.add('padding');
    //     }
    //   });
    // }

  </script> -->

</body>

</html>