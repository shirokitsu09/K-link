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
    <div class="tpopup-drag" id="tpopupdrag-1"></div>
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

  <div class="tpopup-report" id="tpopup-report">
    <div class="tpopup-drag" id="tpopupdrag-2"></div>
    <div class="tpopup-option" id="tpopup-report-option-1">
      <div class="tpopup-option-text">Spam</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-2">
      <div class="tpopup-option-text">อนาจาร</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-3">
      <div class="tpopup-option-text">ความรุนแรง</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-4">
      <div class="tpopup-option-text">การล่วงละเมิด</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-5">
      <div class="tpopup-option-text">การก่อการร้าย</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-6">
      <div class="tpopup-option-text">คำพูดแสดงความเกลียดชัง</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-7">
      <div class="tpopup-option-text">เกี่ยวกับเด็ก</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-8">
      <div class="tpopup-option-text">การฆ่าตัวตาย ทำร้ายตัวเอง</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-9">
      <div class="tpopup-option-text">ข้อมูลเท็จ</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>

    <div class="tpopup-option" id="tpopup-report-option-10">
      <div class="tpopup-option-text">อื่น ๆ</div>
      <img class="tpopup-option-next" src="../images/report/next.svg">
      <div class="tpopup-option-line"></div>
    </div>
  </div>

  <div class="report-popup" id="report-popup">
    <div class="tpopup-drag" id="reportpopupdrag"></div>
    <img class="back-button" id="backbutton" alt="" src="../images/report/backbutton.svg" />
    <b class="report-title">ยืนยันการรายงาน</b>
    <textarea placeholder="รายละเอียดเพิ่มเติม..." class="report-description" id="reportDescription" method=""
      action="">
      </textarea>
    <div class="confirm-report-button" id="confirmreport">ยืนยัน</div>
  </div>

  <script>
    var tpopup = document.getElementById("tpopup");
    var tpopupReport = document.getElementById("tpopup-report");
    var backbutton = document.getElementById("backbutton");
    var reportpopup = document.getElementById("report-popup");

    function tpopup_open(e) {
      tpopup.classList.add("on");
    }

    function tpopup_close(e) {
      tpopup.classList.remove("on");
    }

    function tpopupReport_open(e) {
      tpopupReport.classList.add("on");
    }

    function tpopupReport_close(e) {
      tpopupReport.classList.remove("on");
    }

    function reportpopup_open(e) {
      reportpopup.classList.add("on");
    }

    function reportpopup_close(e) {
      reportpopup.classList.remove("on");
    }

    function clearReport(e) {
      var reportTopic = "";
      var reportDescription = document.getElementById("reportDescription").value = "";
    }

    //close popup
    var tpopupdrag1 = document.getElementById("tpopupdrag-1");
    tpopupdrag1.addEventListener("click", function (e) {
      tpopup_close();
    });

    var tpopupdrag2 = document.getElementById("tpopupdrag-2");
    tpopupdrag2.addEventListener("click", function (e) {
      tpopupReport_close();
    });

    var reportpopupdrag = document.getElementById("reportpopupdrag");
    reportpopupdrag.addEventListener("click", function (e) {
      reportpopup_close();
    });
    // close

    // tpopup
    var tpopupimage1 = document.getElementById("tpopup-image-1")
    var tpopuptext1 = document.getElementById("tpopup-text-1")
    var check = 0;
    var tpopupoption1 = document.getElementById("tpopup-option-1")
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

    var tpopupoption2 = document.getElementById("tpopup-option-2")
    tpopupoption2.addEventListener("click", function (e) {
      tpopup_close();
      tpopupReport_open();
    });
    //
    backbutton.addEventListener("click", function (e) {
      reportpopup_close();
      tpopupReport_open();
    });

    var tpopupoption1 = document.getElementById("tpopup-report-option-1");
    tpopupoption1.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close();
      reportpopup_open();
      reportTopic = "Spam";
    });

    var tpopupoption2 = document.getElementById("tpopup-report-option-2");
    tpopupoption2.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close();
      reportpopup_open();
      reportTopic = "อนาจาร";
    });

    var tpopupoption3 = document.getElementById("tpopup-report-option-3");
    tpopupoption3.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close();
      reportpopup_open();
      reportTopic = "ความรุนแรง";
    });

    var tpopupoption4 = document.getElementById("tpopup-report-option-4");
    tpopupoption4.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close();
      reportpopup_open();
      reportTopic = "ล่วงละเมิด";
    });

    var tpopupoption5 = document.getElementById("tpopup-report-option-5");
    tpopupoption5.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close();
      reportpopup_open();
      reportTopic = "ก่อการร้าย";
    });

    var tpopupoption6 = document.getElementById("tpopup-report-option-6");
    tpopupoption6.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close();
      reportpopup_open();
      reportTopic = "ข้อความเกียจชัง";
    });

    var tpopupoption7 = document.getElementById("tpopup-report-option-7");
    tpopupoption7.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close();
      reportpopup_open();
      reportTopic = "เกี่ยวกับเด็ก";
    });

    var tpopupoption8 = document.getElementById("tpopup-report-option-8");
    tpopupoption8.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close();
      reportpopup_open();
      reportTopic = "ทำร้ายตัวเอง";
    });

    var tpopupoption9 = document.getElementById("tpopup-report-option-9");
    tpopupoption9.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close();
      reportpopup_open();
      reportTopic = "ข้อมูลเท็จ";
    });

    var tpopupoption10 = document.getElementById("tpopup-report-option-10");
    tpopupoption10.addEventListener("click", function (e) {
      clearReport();
      tpopupReport_close();
      reportpopup_open();
      reportTopic = "อื่นๆ";
    });

    var confirmreport = document.getElementById("confirmreport");
    confirmreport.addEventListener("click", function (e) {
      reportDescription = document.getElementById("reportDescription").value;
      console.log("Report ", reportTopic, " : ", reportDescription);
      tpopupReport_close();
      reportpopup_close();
    });
  </script>
</body>

</html>