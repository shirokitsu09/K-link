<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/report.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
</head>
<body>
<div class="list-frame">
<div class="tpopup" id="tpopup">
        <div class="tpopup-drag" id="tpopupdrag"></div>
        <div class="tpopup-option" id="tpopup-option-1">
          <img class="tpopup-option-icon" src="">
          <div class="tpopup-option-text">สวมรอยเป็นบุคคลอื่น</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>
        <div class="tpopup-option" id="tpopup-option-2">
        <img class="tpopup-option-icon" src="">
          <div class="tpopup-option-text">บัญชีปลอม</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>
        <div class="tpopup-option" id="tpopup-option-3">
        <img class="tpopup-option-icon" src="">
          <div class="tpopup-option-text">ชื่อปลอม</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>
        <div class="tpopup-option" id="tpopup-option-4">
        <img class="tpopup-option-icon" src="">
          <div class="tpopup-option-text">การโพสต์สิ่งที่ไม่เหมาะสม</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>
        <div class="tpopup-option" id="tpopup-option-5">
        <img class="tpopup-option-icon" src="">
          <div class="tpopup-option-text">การคุมคามและการกลั่นแกล้ง</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>
        <div class="tpopup-option" id="tpopup-option-6">
        <img class="tpopup-option-icon" src="">
          <div class="tpopup-option-text">อื่น ๆ</div>
          <img class="tpopup-option-next" src="../images/report/next.svg">
          <div class="tpopup-option-line"></div>
        </div>
      </div>

      <div class="report-popup" id="reportpopup">
      <div class="tpopup-drag" id="reportpopupdrag"></div>
      <img class="back-button" id="backbutton" alt="" src="../images/report/backbutton.svg" />
      <b class="report-title">ยืนยันการรายงาน</b>
      <textarea placeholder="รายละเอียดเพิ่มเติม..." class="box-report" id="boxreport" method="" action="">
      </textarea>
      <div class="confirm-report-button">ยืนยัน</div>
      </div>
      </div>

  <script>
      var tpopup = document.getElementById("tpopup");
      var backbutton = document.getElementById("backbutton");

      function tpopup_open(e){
        tpopup.classList.add("on");
      }

      function tpopup_close(e){
        tpopup.classList.remove("on");
      }

      function reportpopup_open(e){
        reportpopup.classList.add("on");
      }

      function reportpopup_close(e){
        reportpopup.classList.remove("on");
      }

      function backbutton_open(e){
        var boxreport = document.getElementById("boxreport").value="";
      }

      backbutton.addEventListener("click", function(e){
        reportpopup_close();
        tpopup_open();
      });

      var tpopupdrag = document.getElementById("tpopupdrag");
      tpopupdrag.addEventListener("click",function(e){
        tpopup_close();
      });
      
      var reportpopupdrag = document.getElementById("reportpopupdrag");
      reportpopupdrag.addEventListener("click",function(e){
        reportpopup_close();
      });

      var tpopupoption1 = document.getElementById("tpopup-option-1");
      tpopupoption1.addEventListener("click", function(e){
        console.log("report สวมรอย");
        backbutton_open();
        tpopup_close();
        reportpopup_open();
      });

      var tpopupoption2 =document.getElementById("tpopup-option-2");
      tpopupoption2.addEventListener("click", function(e){
        console.log("report บัญชีปลอม")
        backbutton_open();
        tpopup_close();
        reportpopup_open();
      });

      var tpopupoption3 = document.getElementById("tpopup-option-3");
      tpopupoption3.addEventListener("click", function(e){
        console.log("report ชื่อปลอม");
        backbutton_open();
        tpopup_close();
        reportpopup_open();
      });

      var tpopupoption4 =document.getElementById("tpopup-option-4");
      tpopupoption4.addEventListener("click", function(e){
        console.log("report การโพสต์ไม่เหมาะสม")
        backbutton_open();
        tpopup_close();
        reportpopup_open();
      });

      var tpopupoption5 = document.getElementById("tpopup-option-5");
      tpopupoption5.addEventListener("click", function(e){
        console.log("report การคุกคาม");
        backbutton_open();
        tpopup_close();
        reportpopup_open();
      });

      var tpopupoption6 =document.getElementById("tpopup-option-6");
      tpopupoption6.addEventListener("click", function(e){
        console.log("report อื่น ๆ")
        backbutton_open();
        tpopup_close();
        reportpopup_open();
      });

  </script>
</body>
</html>