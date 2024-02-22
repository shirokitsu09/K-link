<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/reportAccount.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
</head>
<body>
<div class="tpopup" id="tpopup">
  <div class="tpopup-drag" id="tpopupdrag-1"></div>
          <div class="tpopup-option" id="tpopup-option-1" >
            <img class="tpopup-option-icon" id="tpopup-image1" src="../images/report/report.svg">
            <div class="tpopup-option-text" id="tpopup-text1">รายงาน</div> 
            <div class="tpopup-option-line"></div>
          </div>
</div>

<div class="tpopup-report" id="tpopup-report">
        <div class="tpopup-drag" id="tpopupdrag-2"></div>
        <div class="tpopup-option" id="tpopup-report-option-1">
          <div class="tpopup-option-text">สวมรอยเป็นบุคคลอื่น</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>

        <div class="tpopup-option" id="tpopup-report-option-2">
          <div class="tpopup-option-text">บัญชีปลอม</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>

        <div class="tpopup-option" id="tpopup-report-option-3">
          <div class="tpopup-option-text">ชื่อปลอม</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>

        <div class="tpopup-option" id="tpopup-report-option-4">
          <div class="tpopup-option-text">การโพสต์สิ่งที่ไม่เหมาะสม</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>

        <div class="tpopup-option" id="tpopup-report-option-5">
          <div class="tpopup-option-text">การคุมคามและการกลั่นแกล้ง</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>

        <div class="tpopup-option" id="tpopup-report-option-6">
          <div class="tpopup-option-text">อื่น ๆ</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>
  </div>

  <div class="report-popup" id="report-popup">
      <div class="tpopup-drag" id="reportpopupdrag"></div>
      <img class="back-button" id="backbutton" alt="" src="../images/report/backbutton.svg" />
      <b class="report-title">ยืนยันการรายงาน</b>
      <textarea placeholder="รายละเอียดเพิ่มเติม..." class="report-description" id="reportDescription" method="" action="">
      </textarea>
      <div class="confirm-report-button" id="confirmreport">ยืนยัน</div>
  </div>


  <script>
      var tpopup = document.getElementById("tpopup");
      var tpopupReport = document.getElementById("tpopup-report");
      var backbutton = document.getElementById("backbutton");
      var reportpopup = document.getElementById("report-popup");

      function tpopup_open(e){
        tpopup.classList.add("on");
      }

      function tpopup_close(e){
        tpopup.classList.remove("on");
      }

      function tpopupReport_open(e){
        tpopupReport.classList.add("on");
      }

      function tpopupReport_close(e){
        tpopupReport.classList.remove("on");
      }

      function reportpopup_open(e){
        reportpopup.classList.add("on");
      }

      function reportpopup_close(e){
        reportpopup.classList.remove("on");
      }

      function clearReport(e){
        var reportTopic = "";
        var reportDescription = document.getElementById("reportDescription").value="";
      }

      backbutton.addEventListener("click", function(e){
        reportpopup_close();
        tpopupReport_open();
      });

      //close popup
      var tpopupdrag1 = document.getElementById("tpopupdrag-1");
      tpopupdrag1.addEventListener("click",function(e){
        tpopup_close();
      });

      var tpopupdrag2 = document.getElementById("tpopupdrag-2");
      tpopupdrag2.addEventListener("click",function(e){
        tpopupReport_close();
      });
      
      var reportpopupdrag = document.getElementById("reportpopupdrag");
      reportpopupdrag.addEventListener("click",function(e){
        reportpopup_close();
      });
      // close
      
      var tpopupoption1 = document.getElementById("tpopup-option-1");
      tpopupoption1.addEventListener("click", function(e){
        tpopup_close();
        tpopupReport_open();
      });

      var tpopupReportoption1 = document.getElementById("tpopup-report-option-1");
      tpopupReportoption1.addEventListener("click", function(e){
        clearReport();
        tpopupReport_close();
        reportpopup_open();
        reportTopic = "สวมรอย";
      });

      var tpopupReportoption2 =document.getElementById("tpopup-report-option-2");
      tpopupReportoption2.addEventListener("click", function(e){
        clearReport();
        tpopupReport_close();
        reportpopup_open();
        reportTopic = "บัญชีปลอม";
      });

      var tpopupReportoption3 = document.getElementById("tpopup-report-option-3");
      tpopupReportoption3.addEventListener("click", function(e){
        clearReport();
        tpopupReport_close();
        reportpopup_open();
        reportTopic = "ชื่อปลอม";
      });

      var tpopupReportoption4 =document.getElementById("tpopup-report-option-4");
      tpopupReportoption4.addEventListener("click", function(e){
        clearReport();
        tpopupReport_close();
        reportpopup_open();
        reportTopic = "การโพสต์ไม่เหมาะสม";
      });

      var tpopupReportoption5 = document.getElementById("tpopup-report-option-5");
      tpopupReportoption5.addEventListener("click", function(e){
        clearReport();
        tpopupReport_close();
        reportpopup_open();
        reportTopic = "การคุกคาม";
      });

      var tpopupReportoption6 =document.getElementById("tpopup-report-option-6");
      tpopupReportoption6.addEventListener("click", function(e){
        clearReport();
        tpopupReport_close();
        reportpopup_open();
        reportTopic = "อื่น ๆ";
      });

      var confirmreport =document.getElementById("confirmreport");
      confirmreport.addEventListener("click", function(e){
        reportDescription = document.getElementById("reportDescription").value;
        console.log("Report ", reportTopic, " : " , reportDescription);
        tpopupReport_close();
        reportpopup_close();
      });

  </script>
</body>
</html>