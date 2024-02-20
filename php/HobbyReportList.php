<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="../css/globalTEST.css" />
  <link rel="stylesheet" href="../css/reportList.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
</head>

<body>

  <!-- <div class="tpopup" id="tpopup">
    <div class="tpopup-drag" id="-h"></div>
    <div class="tpopup-option" id="tpopup-option-1">
      <img class="tpopup-option-icon" id="tpopup-image-1" src="../images/report/bookmark.svg">
      <div class="tpopup-option-text" id="tpopup-text-1">บันทึก</div>
      <div class="tpopup-option-line"></div>
    </div>
    <div class="tpopup-option" id="tpopup-option-2">
      <img class="tpopup-option-icon" src="../images/report/report.svg">
      <div class="tpopup-option-text">รายงาน</div>
      <div class="tpopup-option-line"></div>
    </div>
  </div> -->

  <div class="tpopup-report" id="tpopup-report-h">
    <div class="tpopup-drag" id="tpopupdrag-2-h"></div>
    <div class="tpopup-option" id="tpopup-report-option-1-h">
      <div class="tpopup-option-text">Spam</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-2-h">
      <div class="tpopup-option-text">อนาจาร</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-3-h">
      <div class="tpopup-option-text">ความรุนแรง</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-4-h">
      <div class="tpopup-option-text">การล่วงละเมิด</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-5-h">
      <div class="tpopup-option-text">การก่อการร้าย</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-6-h">
      <div class="tpopup-option-text">คำพูดแสดงความเกลียดชัง</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-7-h">
      <div class="tpopup-option-text">เกี่ยวกับเด็ก</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-8-h">
      <div class="tpopup-option-text">การฆ่าตัวตาย ทำร้ายตัวเอง</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-9-h">
      <div class="tpopup-option-text">ข้อมูลเท็จ</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-10-h">
      <div class="tpopup-option-text">อื่น ๆ</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>
  </div>

  <div class="report-popup" id="report-popup-h">
    <div class="tpopup-drag" id="reportpopupdrag-h"></div>
    <img class="back-button" id="backbutton-h" alt="" src="../images/report/backbutton.svg" />
    <b class="report-title">ยืนยันการรายงาน</b>
    <textarea placeholder="รายละเอียดเพิ่มเติม..." class="report-description" id="reportDescriptionHobby" method=""
      action="">
      </textarea>
    <div class="confirm-report-button" id="confirmreport_hobby">ยืนยัน</div>
  </div>

  <script>
    // var tpopupH = document.getElementById("tpopup-hobby");
    var tpopupReport = document.getElementById("tpopup-report-h");
    var backbutton = document.getElementById("backbutton-h");
    var reportpopup = document.getElementById("report-popup-h");

    // function tpopup_open(e) {
    //   tpopupH.classList.add("on");

    // }

    // function tpopup_close(e) {
    //   tpopupH.classList.remove("on");

    // }
    let TpopUpReport_Hobby = false;
    function tpopupReport_open_hobby(e) {
      tpopupReport.classList.add("on");
      TpopUpReport_Hobby = true;
    }

    function tpopupReport_close_hobby(e) {
      tpopupReport.classList.remove("on");
      TpopUpReport_Hobby = false;
    }
    //===========================report popup================//
    let reportPoPUP_Hobby = false;
    function reportpopup_open_h(e) {
      reportpopup.classList.add("on");
      reportPoPUP_Hobby = true;
    }

    function reportpopup_close_h(e) {
      reportpopup.classList.remove("on");
      reportPoPUP_Hobby = false;
    }

    function clearReport(e) {
      var reportTopic = "";
      var reportDescriptionHobby = document.getElementById("reportDescriptionHobby").value = "";
    }

    //close popup
    var tpopupdrag1_h = document.getElementById("tpopupdragHobby");
    tpopupdrag1_h.addEventListener("click", function (e) {
      tpopup_close_H();
    });

    var tpopupdrag2 = document.getElementById("tpopupdrag-2-h");
    tpopupdrag2.addEventListener("click", function (e) {
      tpopupReport_close_hobby();
      tpopup_open_H();
      removeOverlay();
    });

    var reportpopupdrag_h = document.getElementById("reportpopupdrag-h");
    reportpopupdrag_h.addEventListener("click", function (e) {
      reportpopup_close_h();
      tpopupReport_open_hobby();
    });
    // close

    // tpopup
    var tpopupimage1 = document.getElementById("tpopup-image-1")
    var tpopuptext1 = document.getElementById("tpopup-text-1")
    var check = 0;
    var tpopupoption1 = document.getElementById("tpopup-option-1-h")
    tpopupoption1.addEventListener("click", function (e) {
      if (check == 0) {
        console.log("bookmarked");
        tpopupimage1.src = "../images/report/bookmarked.svg";
        tpopuptext1.innerText = "บันทึกแล้ว";
        check = 1;
      }
      else {
        console.log("undo bookmark");
        tpopupimage1.src = "../images/report/bookmark.svg";
        tpopuptext1.innerText = "บันทึก";
        check = 0;
      }
    });

    var tpopupoption2 = document.getElementById("tpopup-option-2-h")
    tpopupoption2.addEventListener("click", function (e) {
      // tpopup_close();
      tpopupReport_open_hobby();
      createOverlay();
    });
    //
    backbutton.addEventListener("click", function (e) {
      reportpopup_close_h();
      tpopupReport_open_hobby();
    });

    var tpopupoption1 = document.getElementById("tpopup-report-option-1-h");
    tpopupoption1.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_hobby();
      reportpopup_open_h();
      reportTopic = "Spam";
    });

    var tpopupoption2 = document.getElementById("tpopup-report-option-2-h");
    tpopupoption2.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_hobby();
      reportpopup_open_h();
      reportTopic = "อนาจาร";
    });

    var tpopupoption3 = document.getElementById("tpopup-report-option-3-h");
    tpopupoption3.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_hobby();
      reportpopup_open_h();
      reportTopic = "ความรุนแรง";
    });

    var tpopupoption4 = document.getElementById("tpopup-report-option-4-h");
    tpopupoption4.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_hobby();
      reportpopup_open_h();
      reportTopic = "ล่วงละเมิด";
    });

    var tpopupoption5 = document.getElementById("tpopup-report-option-5-h");
    tpopupoption5.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_hobby();
      reportpopup_open_h();
      reportTopic = "ก่อการร้าย";
    });

    var tpopupoption6 = document.getElementById("tpopup-report-option-6-h");
    tpopupoption6.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_hobby();
      reportpopup_open_h();
      reportTopic = "ข้อความเกียจชัง";
    });

    var tpopupoption7 = document.getElementById("tpopup-report-option-7-h");
    tpopupoption7.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_hobby();
      reportpopup_open_h();
      reportTopic = "เกี่ยวกับเด็ก";
    });

    var tpopupoption8 = document.getElementById("tpopup-report-option-8-h");
    tpopupoption8.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_hobby();
      reportpopup_open_h();
      reportTopic = "ทำร้ายตัวเอง";
    });

    var tpopupoption9 = document.getElementById("tpopup-report-option-9-h");
    tpopupoption9.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_hobby();
      reportpopup_open_h();
      reportTopic = "ข้อมูลเท็จ";
    });

    var tpopupoption10 = document.getElementById("tpopup-report-option-10-h");
    tpopupoption10.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_hobby();
      reportpopup_open_h();
      reportTopic = "อื่นๆ";
    });

    var confirmreport_hobby = document.getElementById("confirmreport_hobby");
    confirmreport_hobby.addEventListener("click", function (e) {
      reportDescriptionHobby = document.getElementById("reportDescriptionHobby").value;
      console.log("Report ", reportTopic, " : ", reportDescriptionHobby);
      tpopupReport_close_hobby();
      reportpopup_close_h();
    });




    /*====================Create Overlay Background=====================*/
    // const createOverlay = () => {
    //   const overlay = document.createElement('div');
    //   overlay.classList.add('overlay');
    //   overlay.id = 'OvelayOn';
    //   document.body.appendChild(overlay);
    //   return overlay;
    // }
    // const removeOverlay = () => {
    //   const overlay = document.querySelector('.overlay');
    //   if (overlay) {
    //     document.body.removeChild(overlay);
    //   }
    // }
    // const overlay = document.getElementById('OvelayOn');
    // overlay.addEventListener('click', function () {
    //   removeOverlay();
    //   console.log('Overlay is clicked!');
    // });

    // let overlayCreated = false;

    // const createOverlay = () => {
    //   if (!overlayCreated) {
    //     const overlay = document.createElement('div');
    //     overlay.classList.add('overlay');
    //     overlay.id = 'OverlayOn';
    //     document.body.appendChild(overlay);
    //     console.log('Created overlay');

    //     overlay.addEventListener('click', function () {
    //       if (TpopUpReport) {
    //         console.log('case1');
    //         tpopup_open_H();
    //         tpopupReport_close_hobby(); //
    //         reportpopup_close_h();
    //       }
    //       else if (reportPoPUP) {
    //         // console.log('case2');
    //         tpopupReport_open_hobby();
    //         reportpopup_close_h();

    //       } else {
    //         console.log('case3');
    //         removeOverlay();
    //         tpopup_close_H();
    //         reportpopup_close_h();
    //         tpopupReport_close_hobby();
    //       }
    //     });

    //     overlayCreated = true;
    //     return overlay;
    //   } else {
    //     console.log('Overlay already created!');
    //     return null;
    //   }
    // }

    // const removeOverlay = () => {
    //   const overlay = document.getElementById('OverlayOn');
    //   if (overlay) {
    //     document.body.removeChild(overlay);
    //     overlayCreated = false; // reset overlayCreated flag
    //   }
    // }

    const createOverlay = () => {
      const overlay = document.createElement('div');
      overlay.classList.add('overlay');
      overlay.id = 'OverlayOn';
      document.body.appendChild(overlay);
      console.log('Created overlay');

      overlay.addEventListener('click', function () {
        if (TpopUpReport_Hobby) {
          console.log('case1');
          tpopup_open_H();
          removeOverlay();
          tpopupReport_close_hobby();
          reportpopup_close_h();
        } else if (reportPoPUP_Hobby) {
          // console.log('case2');
          tpopupReport_open_hobby();
          reportpopup_close_h();
        } else {
          console.log('case3');
          removeOverlay();
          tpopup_close_H();
          reportpopup_close_h();
          tpopupReport_close_hobby();
        }
      });

      return overlay;
    }

    const removeOverlay = () => {
      const overlay = document.getElementById('OverlayOn');
      if (overlay) {
        document.body.removeChild(overlay);
      }
    }
  </script>
</body>

</html>