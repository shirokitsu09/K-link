<?php
session_start();
include("../config/con_db.php");

if (!isset($_SESSION['uID'])) { // ถ้าไม่ได้เข้าระบบอยู่
  header("location: ../index.php"); // redirect ไปยังหน้า login.php
  exit;
} else {
  $uID = $_SESSION['uID'];
}

if(isset($_GET['hID'])){
$hID = $_GET['hID'];

$sql_hobby_db = "SELECT * FROM hobby_db WHERE hID = '$hID'";
$result_hobby_db = $conn->query($sql_hobby_db);
$row = $result_hobby_db->fetch_assoc();

$activityName = $row['activityName'];
$location = $row['location'];
$time = $row['time'];
$memberCount = COUNT(explode(',',$row['member']));
$memberMax = $row['memberMax'];
$detail = $row['detail'];
$image = $row['img'];
$day = $row['date[]'];
$header = $row['header'];

$dayArray = explode(",", $day);

$formattedTime = date("H:i", strtotime($time));
  if($image === NULL) {
    $image = 'emptyPicture.svg';
  }

$tag = $row['tag'];
$eachTag = explode("," , $tag);
$eachTag_count = count($eachTag);

}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/hobbyaboutgroup.css" />
    <link rel="stylesheet" href="../css/editGroupButton.css" />
    <link rel="stylesheet" href="../css/HEADER.css" />
    


    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
  </head>

  <body>
    <div class="hobby">
    <div class="HEADER-HAG"><a href="./index.php#hobby-home">
    <img class="app-icon-hobby-about" id="backButton" alt="" src="../images/backbutton.svg" />
    </a>
    <div class="name-header-hobby-about" id="name-header">About Group</div>
    <div class="noti-button-icon-hobby-about">
        <a href="notify.php?uID=<?php echo $uID ?>">
            <ion-icon name="notifications" style="width: 27.2px; height: 27.2px;"></ion-icon>
        </a>
    </div>
  </div>
      

      <div class="about-group-body">
        <div class="body-background">
        <img class="tdot-button" alt="" src="../images/ThreeDots.svg" />
        <div class="groupNameFrame">
          <b class="group-name"><?php echo "$activityName" ?></b>
        </div>  
        <div class="FrameImage">
            <img class="group-picture" alt="" src="./uploadedImg/<?php echo $image?>" />
        </div>
          <div class="group-date">
            <div class="group-date-title">วันทำกิจกกรม</div>
            <div class="group-date-container">
              <div class="ellipse-date">
                <div class="date">จ.</div>
              </div>
              <div class="ellipse-date">
                <div class="date">อ.</div>
              </div>
              <div class="ellipse-date">
                <div class="date">พ.</div>
              </div>
              <div class="ellipse-date">
                <div class="date">พฤ.</div>
              </div>
              <div class="ellipse-date">
                <div class="date">ศ.</div>
              </div>
              <div class="ellipse-date">
                <div class="date">ส.</div>
              </div>
              <div class="ellipse-date">
                <div class="date">อา.</div>
              </div>
            </div>
          </div>
          
          <div class="group-location">
          <div class="group-location-title">สถานที่ :</div>
            <div class="group-location-container">
              <div class="group-location-text"><?php echo $location; ?></div>
            </div>
          </div>

          <div class="group-time-container">
            <div class="group-time-title">เวลา :</div>
            <div class="group-time-time"><?php echo $formattedTime; ?></div>
            </div>

          <div class="group-member-container">
              <div class="group-member-text">สมาชิก :</div>
              <div class="group-member-amount availible"><?php echo $memberCount; ?>/<?php 
              if ($memberMax == NULL) { 
                echo "ไม่จำกัด"; 
                } else { 
                  echo $memberMax; 
                  } ?>
              </div>
              
              <a href = 'member.php?hID=<?php echo $hID?>'>
              <?php if (explode(',',$row['request'])[0] != '') { ?>
              <?php if (COUNT(explode(',',$row['request'])) >= 1) { ?>
                <div class="requestNoti"><?php echo COUNT(explode(',',$row['request'])); ?></div>
              <?php } }?>  
                <img class="vector-icon1" alt="" src="../images/aboutgroup/magnifyglass.svg" />
              </a>
            </div>

          <div class="group-parent1">
            <div class="rectangle-parent4">
              <div class="group-description-container">
                <p class="textDetailBreak">
              <?php echo $detail; ?>
                </p>
              </div>     
            </div>
            <div class="div14">รายละเอียด</div>
          </div>
          <div class="rectangle-parent5">
            <div class="tag-container">
              <div class="tag-flex">

    <?php for ($i = 0 ; $i<$eachTag_count ; $i++) {
        if($eachTag[$i] != '') {?>
          <div class="div17"><?php echo $eachTag[$i] ?></div>
    <?php } 
        } ?>
    
              </div>
            </div>
            <div class="tag">Tag</div>
          </div>
          <div class="rectangle-parent10">
          <a href="InviteFriendsHasdb.php?hID=<?php echo $row['hID'];?>">
          <div class="button-invite"></div>
          <div class="div20" style="color:black;">ชวนเพื่อนเข้ากลุ่ม</div>
          </a>
          <img class="vector-icon2" alt="" src="../images/aboutgroup/addfriendtogroup.svg" />
        </div>
        <?php if($uID == $header) { ?>
      <div class="footerIndividual">
            <a  href="hobbyEditAboutGroup.php?hID=<?php echo $row['hID'];?>" class="createGroupButton">
                <img src="../images/wrench.svg">
            </a>
      </div>
    <?php
      }
    ?>
        </div>
      </div>
      <div class="invisible"></div>
      
    </div>
    
    
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
      var groupContainer11 = document.getElementById("groupContainer11");
      if (groupContainer11) {
        groupContainer11.addEventListener("click", function (e) {
          // Please sync "tutoring  group 12" to the project
        });
      }
      
      var groupContainer22 = document.getElementById("groupContainer22");
      if (groupContainer22) {
        groupContainer22.addEventListener("click", function (e) {
          // Please sync "user edit" to the project
        });
      }
      
      var frameIcon = document.getElementById("frameIcon");
      if (frameIcon) {
        frameIcon.addEventListener("click", function (e) {
          // Please sync "ThreeDotsOption" to the project
        });
      }

  // checkDate
    document.addEventListener("DOMContentLoaded", function() {
    var ellipseDates = document.querySelectorAll(".ellipse-date");

        ellipseDates.forEach(function(ellipseDate) {
          var date = ellipseDate.querySelector(".date").textContent.trim();

        <?php
           if(isset($dayArray)) {
                echo "var dayArray = " . json_encode($dayArray) . ";";

                echo "if (dayArray.includes(date)) {";
                echo "ellipseDate.classList.add('active');";
                echo "}";
            }
        ?>

      });
    });
  // 
    changeText();

      </script>
  
</html>
