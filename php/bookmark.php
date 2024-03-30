<?php
  include('../config/con_db.php');
  session_start();
  if (!isset($_SESSION['uID'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: ../index.php"); // redirect ไปยังหน้า login.php
    exit;
  } else {
      $uID = $_SESSION['uID'];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="../css/globalTEST.css" />
  <link rel="stylesheet" href="../css/bookmark.css" />
  <link rel="stylesheet" href="../css/grouplist.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
</head>

<body>
<div class="hobby">
  <?php 

    $sql_bookmarked = "SELECT a.*,b.* FROM users as a JOIN hobby_db as b ON a.uID = $uID";
    $result_bookmarked = $conn->query($sql_bookmarked);

    if($result_bookmarked){
      $row = $result_bookmarked->fetch_assoc();
      $bookmarked = $row['bookmark'];
      $bookmarkedarray = explode(',',$bookmarked);
      $countbookmarked = count($bookmarkedarray);

    }

    ?>
  
    <div class="HEADER-bookmark">
    <a href="index.php#setting">
    <img class="app-icon-bookmark" id="backButton" alt="" src="../images/backbutton.svg" />
    </a>
    <div class="name-header-bookmark" id="name-header">ที่บันทึกไว้</div>
    <div class="noti-button-icon-bookmark">
        <a href="notify.php?uID=<?php echo $uID ?>">
            <ion-icon name="notifications" style="width: 27.2px; height: 27.2px;"></ion-icon>
        </a>
    </div>
</div>

<div class="list-frame-bookmark">
<?php
if ($result_bookmarked->num_rows > 0) {

    $id = 1;
    while ($id <= $countbookmarked && ($row = $result_bookmarked->fetch_assoc())) {

        $hID = $row['hID'];
      //check bookmark table where user uID
      // echo $uID;
      $sql_bookmark = "SELECT bookmark FROM users WHERE uID = '$uID'";
      $result_bookmark = mysqli_query($conn, $sql_bookmark);
      $row_bookmark = $result_bookmark->fetch_assoc();
      $bookmarked = $row_bookmark['bookmark'];
      //

        $pic = $row['img'];
        
        ?>

        <div class="list-hobby" id="list-<?php echo $id ?>-hobby">
          <div class="list-inner-hobby">
            <div class="list-inner-head-hobby">
              <img class="group-flag-banner-hobby" alt="" src="../images/grouplist/groupbanner.svg" />
              <input type="hidden" value="<?php echo $bookmarked;?>" id="bookmarked"/>
              <input  type="hidden" name="hID" value ="<?php echo $row['hID'] ?>" id="gethID-<?php echo $id;?>">
              <img class="tdot-button-hobby" id="tdot-<?php echo $id ?>-hobby" alt="" src="../images/tutoringlist/threedot.svg" />
              <div class="tag-group">


                <?php 
$dataArray = explode(",", $row["tag"]);
        $count = count($dataArray);
        if (count($dataArray) > 1) {
            $AmountOfTag = 0;
            while (($AmountOfTag < $count) && ($dataArray != '')) {
                ?>
                    <div class="tag" id="tag<?php echo $id ?>-1">
                      <?php echo $dataArray[$AmountOfTag] ?>
                    </div>
                    <?php $AmountOfTag++;
            }
        } else {
        }
        ?>
        </div>
           
          <?php if( $row['memberCount'] == $row['memberMax'] && $row['memberMax'] != NULL) { ?>
              <b class="group-amount available" style= "color : #ff0101;">
                   <?php echo $row['memberCount'] . "/" . $row['memberMax'];?>
              </b>
              <?php } else if($row['memberCount'] < $row['memberMax'] || $row['memberMax'] == NULL){ ?>
                <b class="group-amount available" >
                  <?php if($row['memberMax'] == NULL) { ?>
                    <?php echo $row['memberCount'] . "/" . "ไม่จำกัด";
                    } else { ?>
                        <?php echo $row['memberCount'] . "/" . $row['memberMax'];
                        } ?>
              </b>
          <?php } ?>
          <!-- --------------------------------------------------------------- -->
            </div>
            <div class="list-inner-body-hobby" id="innerlist-<?php echo $id ?>-hobby">
              <b class="group-name">
                <?php echo $row['activityName'] ?>
              </b>
              <div class="leader">
                <?php echo $row['username'] ?>
              </div> <!-- จางไป -->
                <div class="imgFrame">
                  <img class="group-profile-picture" alt="" src="../php/uploadedImg/<?php 
                  if ($pic === null) {
                    $pic = 'emptyPicture.svg';
                    echo $pic;
                  } else {
                    echo $pic; 
                    } ?>" 
                    />
                </div>
              <div class="group-date">วัน :
                <?php echo $row['date[]'] ?>
              </div>
              <div class="group-time">เวลา :
                <?php echo $row['time'] ?> น.
              </div>
              <div class="group-location">สถานที่ :
                <?php echo $row['location'] ?>
              </div>
              <div class="group-description"><p class="textDetailBreak"><?php echo 'รายละเอียด : '.$row['detail']; ?></p>
              </div>
            </div>
          </div>
          
          <!-- ------------------------------------------------------------------------------ -->

        <?php
$id++;
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>


</div>
</div>
</div>

</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
  // set zero 
  let display = 0;
  let id;
  let loop_count = <?php echo $countbookmark ?>;
  console.log("loop : " + loop_count);
  document.cookie = "hID="; // reset cookie
  
  for (id = 1 ; id <= loop_count ; id++) {
  let list_1 = document.getElementById("list-"+ id +"-hobby"); //list id for padding
  // let Hobbyjoin1 = document.getElementById("hobbyjoin-"+ id); //join group id slide in
  // let innerlist_1 = document.getElementById("innerlist-"+ id +"-hobby"); //touch id for response

  // let tpopupH = document.getElementById("tpopup-hobby-"+ id); // three dot pop up id
  // bookmarked display
  // let bookmarked = document.getElementById("bookmarked").value;
  let gethID = document.getElementById("gethID-"+id).value;
  // let bookmarkresult = bookmarked.includes(gethID);

  // tutoring response button
  // function close_Hobbyjoin() {
  // const rem = id;
  //   for (id = 1 ; id <= loop_count ; id++) {
  //     if(id !== rem){
  //       let Hobbyjoin1 = document.getElementById("hobbyjoin-"+ id);
  //       Hobbyjoin1.classList.remove('active');
  //       document.querySelector('.padding')?.classList.remove('padding');
  //     }
  //   } 
  // }

  // let close_1 = document.getElementById("close-"+ id +"-hobby");
  // close_1.addEventListener("click", close_Hobbyjoin);

  // let join_1 = document.getElementById("join-"+ id +"-hobby");
  // join_1.addEventListener("click", function () {
  //   console.log("join group"+ id +" requested");
  //   close_Hobbyjoin();
  // });

  // let member_1 = document.getElementById("member-"+ id +"-hobby")
  // member_1.addEventListener("click", function () {
  //   console.log("member group"+ id +" view requested")
  //   close_Hobbyjoin();
  // });

  // tdot_1 = document.getElementById("tdot-"+ id +"-hobby")
  // tdot_1.addEventListener("click", function () {
  //   close_Hobbyjoin();
  //   tpopup_open_H();
  // });
  
  // Open tutoring join

  if (list_1){
    list_1.addEventListener("click", function () {
      const rem = id;
      console.log(gethID);
      document.cookie = "hID="+gethID;
      location.href = "hobbyAboutGroup.php?hID="+gethID.replace(/,/g,'');;
    });
  }

  // if (innerlist_1) {
  //   innerlist_1.addEventListener("click", function () {
  //     if (list_1 != "list-"+ id +"-hobby.padding") {
  //       close_Hobbyjoin();
  //       Hobbyjoin1.classList.add('active');
  //       list_1.classList.add('padding');
  //     }
  //   });
  // }
  
  } // end list script

</script>
</html>
