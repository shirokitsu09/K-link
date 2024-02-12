<?php

  session_start();
  include("../config/con_db.php");

  $uID = $_SESSION["uID"];

  // $sql_users = "SELECT * FROM users WHERE uID = '$uID'";

  $sql_users = "SELECT 
                    a.*,
                    b.fName
                    FROM users AS a
                    LEFT JOIN faculty AS b
                    ON a.fID = b.fID
                    WHERE a.uId = '$uID'
            ";

  $result_users = $conn->query($sql_users);
  $row = $result_users->fetch_assoc();

  $username = $row['username'];
  $fullname = $row['fullname'];
  $email = $row['email'];
  $phoneNumber = $row['phoneNumber'];
  $faculty = 'Computer Engineering';
  $aboutme = $row['aboutme'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/aboutaccount.css" />
    <link rel="stylesheet" href="../css/editGroupButton.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
</head>

<body>      
  <div class="hobby">
    <?php include '../php/header.php'?>
      <?php include '../php/report.php'?>
      <div class="part-body">
        <div class="body-background">
        <img class="tdot-button" id="tdot" alt="" src="../images/Threedots.svg" />
        <img class="profile-picture" alt="" src="../images/aboutacc/p1profile.svg" />
        <div class="profile-name"><?php echo $username ?></div>
        <div class="profile-fn">ชื่อ : </div>
        <div class="profile-fullname"><?php echo $fullname ?></div>
        <div class="profile-em">Email : </div>
        <div class="profile-email"><?php echo $email ?></div>
        <div class="profile-tel">เบอร์โทร : </div>
        <div class="profile-telephone"><?php echo $phoneNumber ?></div>
        <div class="profile-fac">Faculty : </div>
        <div class="profile-faculty"><?php echo $row['fName']; ?></div>
        <div class="label-aboutme">About me</div>
        <div class="box-aboutme">
        <div class="profile-aboutme"><?php echo $aboutme ?></div>
        </div>
        </div>
      </div>
  </div>

        <div class="footerIndividual">
        <a href="aboutEditAccount.php?uID=<?php echo $row['uID'];?>" class="createGroupButton">
          <img src="../images/wrench.svg">
        </a>
        </div>
<script>

  var tdot = document.getElementById("tdot")
      tdot.addEventListener("click",function (e) {
      tpopup_open();
      });
  
  document.addEventListener('click', e => {
    if(!tpopup.contains(e.target) && !tpopupReport.contains(e.target) && !reportpopup.contains(e.target) && e.target !== tdot){
        tpopup_close();
        tpopupReport_close();
        reportpopup_close();
      }
    });

      function changeText() {
        let text = document.querySelector('.name-header');
        let box = document.querySelector('.HEADER');
        let icon = document.querySelector('.app-icon');
        let line = document.querySelector('.LINE');
        let noti = document.querySelector('.noti-button-icon a');

        text.textContent = 'เกี่ยวกับบัญชี';
        text.style.fontSize = 'var(--h4-size)';
        text.style.width = '200px';
        text.style.left = '90px';
        text.style.top = '30px';

        noti.style.fontSize = '27.2px';
        
        box.style.height = '140px';
        box.style.borderRadius = '0';

        icon.src = '../images/backbutton.svg';
        icon.style.width = '30px';
        icon.style.height = '30px';
        icon.style.top = '37px';
        icon.style.left = '25px';

        line.style.left = '80px';
        line.style.top = '38px';
    }
    changeText();

</script>
</body>
</html>