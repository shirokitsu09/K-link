<?php
  session_start();
  include("../config/con_db.php");
  $uID = $_SESSION['uID'];

  if (!isset($_SESSION['uID'])) {
    header("location: ../index.php"); // redirect ไปยังหน้า login.php
    exit;  }
    else {
      $uID = $_SESSION['uID'];

      $sql_users = "SELECT * FROM users WHERE uID = '$uID'";
    $result_users = $conn->query($sql_users);
    $row = $result_users->fetch_assoc();
  
    $username = $row['username'];
    $fullname = $row['fullname'];
    $phoneNumber = $row['phoneNumber'];
    $aboutme = $row['aboutme'];
    }
 
    
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/HEADER.css" />
    <link rel="stylesheet" href="../css/UserEdit.css" />
    <title>แก้ไขบัญชี</title>
</head>
<style>
  .name-header {
    top: 25px;
    left: 135px;
    display: inline-block;
    width: fit-content !important; 
    height: 40px;
  }        
 
</style>

<body>
    <div class="background">
        <?php include 'HEADER.php';?>
        <form action="aboutEditMyAccount_db.php" method="post">
          <div class="whitebox">
              <div class="nickname">
                  <label for="nickname">ชื่อเล่น</label><br>
                  <input type="hidden" name="uID" value="<?php echo $uID ?>">
                  <input type="text" name="username" value="<?php echo $username ?>" style="border: none; border-bottom: 1px solid black;" /><br>
              </div>

              <div class="username">
                  <label for="username">ชื่อ-สกุล</label><br>
                  <input type="text" name="fullname" value="<?php echo $fullname ?>" style="border: none; border-bottom: 1px solid black;" /><br>
              </div>

              <div class="phonenumber">
                  <label for="nickname">เบอร์โทรศัพท์</label><br>
                  <input type="text" name="phoneNumber" value="<?php echo $phoneNumber ?>" style="border: none; border-bottom: 1px solid black;" /><br>
              </div>

              <div class="aboutme">
                  <label for="nickname">เกี่ยวกับฉัน</label><br>
                  <input type="text" name="aboutme" value="<?php echo $aboutme ?>" style="border: none; border-bottom: 1px solid black;" /><br>
              </div>

              <button type="submit" name="update"  class="savetag">บันทึก</button>
        </form>
      </div>

</body>
    <script>
        function changeText() {
          let text = document.querySelector('.name-header');
          let list = document.querySelector('.list');
          let indicator = document.getElementById('indicator');
          let icon = document.querySelector('.app-icon');
          let notify_icon = document.querySelector('.noti-button-icon');
          let line = document.querySelector('.LINE');
            icon.style.width = '30px';
            icon.style.height = '30px';
            icon.style.top = '37px';
            icon.style.left = '18px';
            text.style.top = '30px';
            text.style.left = '72px';
            text.style.display = 'relative';
            notify_icon.style.display = 'none';
            line.style.display = 'none';
            icon.src = '../images/backbutton.svg'
            text.textContent = 'แก้ไขบัญชี';
            list.classList.remove('active');
            indicator.classList.add('hidden');
          }
        changeText();

      
    </script>
</html>