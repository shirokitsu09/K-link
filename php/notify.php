<?php
session_start();

include '../config/con_db.php';
if (!isset($_SESSION['uID'])) {
    header("location: ../index.php"); // redirect ไปยังหน้า login.php
    exit;
} else {
    $uID = $_SESSION['uID'];

    $sql = "SELECT notiType,`uID(Send)`,`uID(Recieve)`,Notitime,activityName,fullname,hID,profileImage
              FROM notify
              JOIN hobby_db ON notify.detail = hobby_db.hID
              JOIN users ON notify.`uID(Send)` = users.uID
              WHERE FIND_IN_SET($uID,`uID(Recieve)`) > 0";
    $result = $conn->query($sql);
    $rowCount = mysqli_num_rows($result);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/notify.css" />
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <title>Notify</title>
</head>

<body>

    <div class="NotifyFrame">
      <div class="header-notify">
      <a href="index.php">
        <img class="backBtnNotify" alt="" src="../images/backbutton.svg" id="backbuttonSetting" />
      </a>
        <div class="name-header-notify">การแจ้งเตือน</div>
    </div>

  <div class="NotifyFrame">

    <div class="NotifyListFrame">
    <?php $j = 0;?>
      <?php for ($i = 0; $i < $rowCount; $i++) {
    $row = $result->fetch_assoc();
    if ($row['profileImage'] == '') {
    } else {
        $pic = $row['profileImage'];
    }

    if ($j % 2 == 0) {
        $bgColor = 'style="background: #ff8500;"';
    } else {
        $bgColor = 'style="background: var(--primary);"';
    }

    if ($row['notiType'] === "01") {
        $detail = " เชิญคุณเข้าเข้าร่วมกลุ่ม ";
        $pic = "AcceptOrRequest.svg";
        ?>
        <form action="index.php#hobby-home" method="POST">
          <button type="submit" name="invited" href='index.php#hobby-home?invited=<?php echo $row['activityName']; ?>' style="padding: 0; border: none; background: none; cursor:pointer; width: 100%;">
          <div class="NotifyList" <?php echo $bgColor ?> onclick="changePage('#Invite')">
            <div class="imgNotify">
              <img src="../images/notify/<?php echo $pic; ?> " class="iNot"/> <!-- style="z-index: 1;position: relative;"  -->
              <img class="profileImage" src="./uploadProfile/emptyAccount.svg" alt="" style="left: 15px;">
            </div>
            <div class="NotifyLable">
              <span class="spancontent">
                <b><?php echo $row['fullname']; ?></b><?php echo $detail; ?><b><?php echo $row['activityName']; ?></b>
              </span>
              <span class="spanNotiTime"><?php echo $row['Notitime']; ?></span>
            </div>
          </div>
          </button>
          <input type="hidden" name="activitySearch" value="<?php echo $row['activityName']; ?>">
        </form>
        <?php $j++;
    }?>

        <?php
if ($row['notiType'] === "02") {
        $detail = " ส่งคำขอเข้าร่วมกลุ่ม ";
        $pic = "AcceptOrRequest.svg";
        ?>
          <a href='AcceptFriend.php?hID=<?php echo $row['hID'] ?>'>
          <div class="NotifyList" <?php echo $bgColor ?> onclick="changePage('#Invite')">
            <div class="imgNotify">
              <img src="../images/notify/<?php echo $pic; ?>"  class="iNot"/> <!-- style="z-index: 1;position: relative;"  -->
              <img class="profileImage" src="./uploadProfile/emptyAccount.svg" alt="">
            </div>
            <div class="NotifyLable">
              <span class="spancontent">
                <b><?php echo $row['fullname']; ?></b><?php echo $detail; ?><b><?php echo $row['activityName']; ?></b>
              </span>
              <span class="spanNotiTime"><?php echo $row['Notitime']; ?></span>
            </div>
          </div>
        </a>
        <?php $j++;
    }?>

        <?php
if ($row['notiType'] === "03") {
        $detail = " ตอบรับคำขอเข้าร่วมกลุ่ม ";
        $pic = "AlreadyAccept.svg";
        ?>
          <a href='hobbyAboutGroup.php?hID=<?php echo $row['hID'] ?>'>
          <div class="NotifyList" <?php echo $bgColor ?> onclick="changePage('#Invite')">
            <div class="imgNotify">
              <img src="../images/notify/<?php echo $pic; ?>" class="iNot"/> <!-- style="z-index: 1;position: relative;"  -->
              <img class="profileImage" src="./uploadProfile/emptyAccount.svg" alt="">
            </div>
            <div class="NotifyLable">
              <span class="spancontent">
                <b><?php echo $row['fullname']; ?></b><?php echo $detail; ?><b><?php echo $row['activityName']; ?></b> แล้ว
              </span>
              <span class="spanNotiTime"><?php echo $row['Notitime']; ?></span>
            </div>
          </div>
          </a>
        <?php $j++;
    }?>

      <?php }?>

    </div>
  </div>
</body>

<script>


  function changePage(href) {
    window.location.href = href;
  }
  
</script>

</html>