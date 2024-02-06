<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/aboutaccount.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
</head>
<body>
<div class="hobby">
      <?php include'../php/report.php'
      ?>
      <div class="part-header">
      <div class="group-child"></div>
        <b class="header-text">เกี่ยวกับบัญชี</b>
        <img class="back-button" alt="" src="../images/backbutton.svg" />

        <img class="noti-button-icon" alt="" src="../images/noti.svg" />
      </div>
      <div class="part-body">
      <div class="body-background">
      <img class="tdot-button" id="tdot" alt="" src="../images/threedot.svg" />
      <img class="profile-picture" alt="" src="../images/aboutacc/p1profile.svg" />
      <div class="profile-name">JustiNa_Xie</div>
      <div class="profile-fn">ชื่อ : </div>
      <div class="profile-fullname">Aijong Jomkan</div>
      <div class="profile-em">Email : </div>
      <div class="profile-email">65010xxx@kmitl.ac.th</div>
      <div class="profile-tel">เบอร์โทร : </div>
      <div class="profile-telephone">087-999-9999</div>
      <div class="profile-fac">Faculty : </div>
      <div class="profile-faculty">Computer Engineering</div>
      <div class="label-aboutme">About me</div>
      <div class="box-aboutme">
      <div class="profile-aboutme"> I Love JustiNa_Xie </div>
      </div>
      </div>
    </div>
</div>
<script>

      function tpopup_open(e){
        tpopup.classList.add("on");
      }

      function tpopup_close(e){
        tpopup.classList.remove("on");
      }

  tdot = document.getElementById("tdot")
      tdot.addEventListener("click",function (e) {
      tpopup_open();
      });

</script>
</body>
</html>