
<?php

  session_start();
  include '../config/con_db.php';
  // $user_uID = $_SESSION['uID'];
      $user_uID = '65010005';
      $_SESSION["uID"] = $user_uID;
  // if(isset($_GET['hID'])) {
      $mID = 'h022410-002';
      $feature = 'hobby_db';
      $featureID = 'hID';
  // }

  $sql_member = "SELECT 
                      a.header,
                      a.member,
                      a.activityName,
                      b.username,
                      b.uID
                      FROM $feature AS a
                      LEFT JOIN users AS b
                      ON FIND_IN_SET(b.uID, a.member)
                      WHERE a.$featureID = '$mID'
                ";

  $result_member = $conn->query($sql_member);
  $row = $result_member->fetch_assoc();
  $activityName = $row['activityName'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/member.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
  </head>
  <body>
  
  <div class="list-frame">
    <div class="about-group-header">
      <b class="header-text">สมาชิก</b>
      <img class="back-button" alt="" src="../images/backbutton.svg" />
    </div>

    <div class="list-inner">
      <div class="list-inner-head">
          <div class="title-group">
            <b class="title" id="title"><?php echo $activityName;?></b>
          </div>
      </div>

      <div class="list-inner-body">

          <div class="list-header">
<!-- ----------------------------------------------------------------------------------------------- -->

<?php     
    $i = 0;
    while ($row = $result_member->fetch_assoc()) {
      $members = explode(',', $row['member']);
      $members_count = COUNT($members);

        if ($row['header'] == $members[$i]) {
          if ($user_uID == $members[$i]){
            $image = "me.svg";
          } else {
            $image = "moreInfo.svg";
          }
            $sql_header = "SELECT 
                      username,
                      uID
                      FROM users
                      WHERE uID = '$members[$i]'
                      ";
                  $result_header = $conn->query($sql_header);
                  $row_header = $result_header->fetch_assoc();
?>          

        <div class="leader-icon"><img alt="" src="../images/member/leader.svg" /></div>
          <div class="leader"><?php echo $row_header['username'] ?></div>

            <?php if($image == "me.svg") { ?>
              <div class="me-icon"><img alt="" src="../images/member/<?php echo $image; ?>" /></div>
            <?php } else { ?>
              <a href = "aboutAccount.php?uID=<?php echo $members[$i];?>">
                <div class="info-icon"><img alt="" src="../images/member/<?php echo $image; ?>" /></div>
              </a>
            <?php } ?>

        </div>

<?php          
            for ($j = 0 ; $j < $members_count ; $j++) {
              if ($row['header'] != $members[$j]) {
                if ($user_uID == $members[$j]){
                  $image = "me.svg";
                } else {
                  $image = "moreInfo.svg";
                }
                  $sql_username = "SELECT 
                      username,
                      uID
                      FROM users
                      WHERE uID = '$members[$j]'
                      ";
                  $result_username = $conn->query($sql_username);
                  $row_username = $result_username->fetch_assoc();
?>
              <div class="list-member">
                <div class="leader-icon"></div>
                <div class="member"><?php echo $row_username['username']; ?></div>

                <?php if($image == "me.svg") { ?>
                  <div class="me-icon"><img alt="" src="../images/member/<?php echo $image; ?>" /></div>
                <?php } else { ?>
                  <a href = "aboutAccount.php?uID=<?php echo $members[$j];?>">
                    <div class="info-icon"><img alt="" src="../images/member/<?php echo $image; ?>" /></div>
                  </a>
                <?php } ?>

              </div>
<?php              
              }
            }
        }
      $i++;
  }
?>  

<!-- ----------------------------------------------------------------------------------------------- -->

      </div>
    </div>
  </div>
  

  </body>
</html>

