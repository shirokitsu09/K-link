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
    <div class="tpopup-drag" id="tpopupdrag-1-t"></div>
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

  <div class="tpopup-report" id="tpopup-report-t">
    <div class="tpopup-drag" id="tpopupdrag-2-t"></div>
    <div class="tpopup-option" id="tpopup-report-option-1-t">
      <div class="tpopup-option-text">Spam</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-2-t">
      <div class="tpopup-option-text">อนาจาร</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-3-t">
      <div class="tpopup-option-text">ความรุนแรง</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-4-t">
      <div class="tpopup-option-text">การล่วงละเมิด</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-5-t">
      <div class="tpopup-option-text">การก่อการร้าย</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-6-t">
      <div class="tpopup-option-text">คำพูดแสดงความเกลียดชัง</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-7-t">
      <div class="tpopup-option-text">เกี่ยวกับเด็ก</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-8-t">
      <div class="tpopup-option-text">การฆ่าตัวตาย ทำร้ายตัวเอง</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-9-t">
      <div class="tpopup-option-text">ข้อมูลเท็จ</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-10-t">
      <div class="tpopup-option-text">อื่น ๆ</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>
  </div>

  <div class="report-popup" id="report-popup-t">
    <div class="tpopup-drag" id="reportpopupdrag-t"></div>
    <img class="back-button" id="backbutton" alt="" src="../images/report/backbutton.svg" />
    <b class="report-title">ยืนยันการรายงาน</b>
    <textarea placeholder="รายละเอียดเพิ่มเติม..." class="report-description" id="reportDescription_t" method=""
      action="">
      </textarea>
    <div class="confirm-report-button" id="confirmreport">ยืนยัน</div>
  </div>

  <script>
    // var tpopup = document.getElementById("tpopup");
    var tutor_tpopupReport = document.getElementById("tpopup-report-t");
    var backbutton = document.getElementById("backbutton");
    var reportpopup_t = document.getElementById("report-popup-t");

    // function tpopup_open(e) {
    //   tpopup.classList.add("on");
    // }

    // function tpopup_close(e) {
    //   tpopup.classList.remove("on");
    // }
    let TpopUpReport_Tutor = false; //
    function tpopupReport_open_tutor(e) {
      tutor_tpopupReport.classList.add("on");
      TpopUpReport_Tutor = true; //
    }

    function tpopupReport_close_tutor(e) {
      tutor_tpopupReport.classList.remove("on");
      TpopUpReport_Tutor = false; //
    }
    //===========================report popup================//
    let reportPoPUP_Tutor = false;
    function reportpopup_open_t(e) {
      reportpopup_t.classList.add("on");
      reportPoPUP_Tutor = true; //
    }

    function reportpopup_close_t(e) {
      reportpopup_t.classList.remove("on");
      reportPoPUP_Tutor = false; //
    }

    function clearReport(e) {
      var reportTopic = "";
      var reportDescription_t = document.getElementById("reportDescription_t").value = "";
    }

    //close popup
    var tpopupdrag1 = document.getElementById("tpopupdrag-1-t");
    tpopupdrag1.addEventListener("click", function (e) {
      tpopup_close_t();
    });

    var tpopupdrag2 = document.getElementById("tpopupdrag-2-t");
    tpopupdrag2.addEventListener("click", function (e) {
      tpopupReport_close_tutor();
      tpopup_open_t();
      removeOverlay_tutor();
    });

    var reportpopupdrag_t = document.getElementById("reportpopupdrag-t");
    reportpopupdrag_t.addEventListener("click", function (e) {
      reportpopup_close_t();
      tpopupReport_open_tutor();
    });
    // close

    // tpopup
    var tpopupimage1 = document.getElementById("tpopup-image-1")
    var tpopuptext1 = document.getElementById("tpopup-text-1")
    var check = 0;
    var tpopupoption1 = document.getElementById("tpopup-option-1-t")
    tpopupoption1.addEventListener("click", function (e) {
      if (check == 0) {
        console.log("bookmarked");
        tpopupimage1.src = "../images/report/bookmark.svg";
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

    var tpopupoption2 = document.getElementById("tpopup-option-2-t")
    tpopupoption2.addEventListener("click", function (e) {
      // tpopup_close();
      tpopupReport_open_tutor();
      createOverlay_tutor();
    });
    //
    backbutton.addEventListener("click", function (e) {
      reportpopup_close_t();
      tpopupReport_open_tutor();
    });

    var tpopupoption1 = document.getElementById("tpopup-report-option-1-t");
    tpopupoption1.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_tutor();
      reportpopup_open_t();
      reportTopic = "Spam";
    });

    var tpopupoption2 = document.getElementById("tpopup-report-option-2-t");
    tpopupoption2.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_tutor();
      reportpopup_open_t();
      reportTopic = "อนาจาร";
    });

    var tpopupoption3 = document.getElementById("tpopup-report-option-3-t");
    tpopupoption3.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_tutor();
      reportpopup_open_t();
      reportTopic = "ความรุนแรง";
    });

    var tpopupoption4 = document.getElementById("tpopup-report-option-4-t");
    tpopupoption4.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_tutor();
      reportpopup_open_t();
      reportTopic = "ล่วงละเมิด";
    });

    var tpopupoption5 = document.getElementById("tpopup-report-option-5-t");
    tpopupoption5.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_tutor();
      reportpopup_open_t();
      reportTopic = "ก่อการร้าย";
    });

    var tpopupoption6 = document.getElementById("tpopup-report-option-6-t");
    tpopupoption6.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_tutor();
      reportpopup_open_t();
      reportTopic = "ข้อความเกียจชัง";
    });

    var tpopupoption7 = document.getElementById("tpopup-report-option-7-t");
    tpopupoption7.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_tutor();
      reportpopup_open_t();
      reportTopic = "เกี่ยวกับเด็ก";
    });

    var tpopupoption8 = document.getElementById("tpopup-report-option-8-t");
    tpopupoption8.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_tutor();
      reportpopup_open_t();
      reportTopic = "ทำร้ายตัวเอง";
    });

    var tpopupoption9 = document.getElementById("tpopup-report-option-9-t");
    tpopupoption9.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_tutor();
      reportpopup_open_t();
      reportTopic = "ข้อมูลเท็จ";
    });

    var tpopupoption10 = document.getElementById("tpopup-report-option-10-t");
    tpopupoption10.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close_tutor();
      reportpopup_open_t();
      reportTopic = "อื่นๆ";
    });

    var confirmreport = document.getElementById("confirmreport");
    confirmreport.addEventListener("click", function (e) {
      reportDescription_t = document.getElementById("reportDescription_t").value;
      console.log("Report ", reportTopic, " : ", reportDescription_t);
      tpopupReport_close_tutor();
      reportpopup_close_t();
    });

    //=======================Overlay=====================================================

    const createOverlay_tutor = () => {
      const overlayT = document.createElement('div');
      overlayT.classList.add('overlay');
      overlayT.id = 'OverlayOn';
      document.body.appendChild(overlayT);
      console.log('Created overlay');

      overlayT.addEventListener('click', function () {
        if (TpopUpReport_Tutor) {
          console.log('case1');
          tpopup_open_t();
          removeOverlay_tutor();
          tpopupReport_close_tutor();
          reportpopup_close_t();
        } else if (reportPoPUP_Tutor) {
          // console.log('case2');
          tpopupReport_open_tutor();
          reportpopup_close_t();
        } else {
          console.log('case3');
          removeOverlay_tutor();
          tpopup_close_t();
          reportpopup_close_t();
          tpopupReport_close_tutor();
        }
      });

      return overlayT;
    }

    const removeOverlay_tutor = () => {
      const overlayT = document.getElementById('OverlayOn');
      if (overlayT) {
        document.body.removeChild(overlayT);
      }
    }
  </script>
</body>

</html>