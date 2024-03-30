<?php
session_start();
include("../config/con_db.php");
$uID = $_SESSION['uID'];

if (!isset($_SESSION['uID'])) {
  header("location: ../index.php"); // redirect ไปยังหน้า login.php
  exit;
} else {
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

<body>
  <div class="background">
    <div class="HEADER">
      <a href="aboutMyAccount.php"><img class="app-icon" id="backButton" alt="" src="../images/backbutton.svg" />
      </a>

      <div class="name-header" id="name-header">แก้ไขบัญชี</div>
    </div>
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

        <button type="submit" name="update" class="savetag">บันทึก</button>
    </form>
  </div>

</body>

</html>