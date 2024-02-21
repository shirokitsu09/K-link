<?php
session_start();
include("../config/con_db.php");

if(isset($_GET['uID']) && !empty($_GET['uID'])) {
  $uID = $_GET['uID'];
  $sql_users = "SELECT * FROM users WHERE uID = '$uID'";
  $result_users = $conn->query($sql_users);
  $row = $result_users->fetch_assoc();

  $username = $row['username'];
  $fullname = $row['fullname'];
  $email = $row['email'];
  $phoneNumber = $row['phoneNumber'];
  $faculty = 'Computer Engineering';
  $aboutme = $row['aboutme'];
  $profileImage = $row['profileImage'];
  if ($profileImage === NULL) {
    $profileImage = 'emptyProfile.svg';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />   

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/abouteditaccount.css" />
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
        <img class="profile-picture" alt="" src="./uploadedImg/<?php echo $profileImage ?>" />
        <img class="change-profile-picture" alt="" src="../images/editacc/changepfp.svg" />
        <input type="text" class="profile-name" placeholder="<?php echo $username ?>"></input>
        <div class="profile-fn">ชื่อ : </div>
        <input type="text" class="profile-fullname" placeholder="<?php echo $fullname ?>"></input>
        <div class="profile-em">Email : </div>
        <input type="text" class="profile-email" placeholder="<?php echo $email ?>"></input>
        <div class="profile-tel">เบอร์โทร : </div>
        <input type="text" class="profile-telephone" placeholder="<?php echo $phoneNumber ?>"></input>
        <div class="profile-fac">Faculty : </div>
        <input type="text" class="profile-faculty" placeholder="<?php echo $faculty ?>"></input>
        <div class="label-aboutme">About me</div>
        <div class="box-aboutme">
        <textarea class="profile-aboutme"><?php echo $aboutme ?></textarea>
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