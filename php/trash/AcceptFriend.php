<?php 
    include "../config/con_db.php";
    session_start();
    if (!isset($_SESSION['uID'])) {
        header("location: ../index.php"); // redirect ไปยังหน้า login.php
        exit;
    } else {
        $uID = $_SESSION['uID'];
    }    

    if(isset($_GET['hID'])){
    $hID = $_GET['hID'];
    }

    $sql_hobbyrequest = "SELECT * FROM hobby_db WHERE hobby_db.header = '$uID' AND hobby_db.hID = '$hID' ORDER BY dateUpdate";
    $result_hobbyrequest = $conn->query($sql_hobbyrequest);
    $rowhobby = $result_hobbyrequest->fetch_assoc();

    // Fetch the result
    if ($uID != $rowhobby['header']) {
        header("location: ../index.php"); // redirect ไปยังหน้า login.php
        exit;
    } 

    $hobbyHeader = $rowhobby['header'];

    if($_SESSION['uID']==$hobbyHeader){
    $hobbyrequest = $rowhobby['request'];
    $hobbyrequestarray = explode(',',$hobbyrequest);
    $countHobbyrequest = count($hobbyrequestarray);
    $hobbyname = $rowhobby['activityName'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/HEADER.css" />
    <link rel="stylesheet" href="../css/AcceptFriend.css" />
    <title>คำขอเข้าร่วมกลุ่ม</title>
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

    <?php include 'header.php' ?>

    <?php if($countHobbyrequest> 0){ ?>

        <div class="groupname">
            <p1>คำขอเข้าร่วมกลุ่ม :</p1>
            <a href="hobbyAboutGroup.php?hID=<?php echo $hID ?>" style="color:black;">
                <p2 style="font-weight: bold; font-size: 20px;"><?php echo $hobbyname;?></p2>
            </a>
        </div>

    <?php   for($icount=0;$icount<$countHobbyrequest;$icount++){
        if($hobbyrequestarray[$icount] != '') {
            $sql_request = "SELECT * FROM users WHERE users.uID = $hobbyrequestarray[$icount]";
            $result_request = $conn->query($sql_request);

            $row_request = $result_request->fetch_assoc();

            $fullname = $row_request['fullname'];
            if ($row_request['profileImage'] == ''){
                $pic = "emptyAccount.svg";
            } else {
                $pic = $row_request['profileImage'];
            }    
     ?>
        
        <div class="AcceptList">
            <div class="request">
                <img src="./uploadProfile/<?php echo $pic;?>" />
                <p3 style="font-weight: bold;"><?php echo $fullname;?></p3>
                <form method="post" action="./AcceptFriend_db.php" >
                <button class="accept" onclick="buttonClick(this)">ยอมรับคำขอ</button>
                <input type="hidden" name="hID" value="<?php echo $hID;?>"/>
                <input type="hidden" name="accept" value="<?php echo $hobbyrequestarray[$icount];?>"/>
                </form>
                <button class="deny" onclick="buttonClick(this)">ปฏิเสธคำขอ</button>
            </div>
        </div>

    <?php
        } 
    }// end for icount
    } //end if icount
        else { ?>
        <div class="groupname" style="padding: 0px 50px;"><p1 >ไม่มีคำขอเข้าร่วมกลุ่ม</p1></div>

    <?php }

        }
        ?>
    </div>
</body>
<script>
function changeText() {
    let text = document.querySelector('.name-header');
    let list = document.querySelector('.list');
    let indicator = document.getElementById('indicator');
    let icon = document.querySelector('.app-icon');
    icon.addEventListener("click", function() {
        goBack_accept();
    });
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
    text.textContent = 'คำขอเข้าร่วมกลุ่ม';
    list.classList.remove('active');
    indicator.classList.add('hidden');

}
changeText();

function buttonClick(button) {
    // หา element ของบล็อกที่มีปุ่มถูกคลิก
    let block = button.parentElement;
    
    // ตรวจสอบว่าปุ่มที่ถูกคลิกคือปุ่ม accept หรือ deny
    if (button.classList.contains('accept')) {
        // ปิดปุ่ม accept และ deny ในบล็อกนี้
        let acceptButton = block.querySelector('.accept');
        let denyButton = block.querySelector('.deny');
        acceptButton.style.display = 'none';
        denyButton.style.display = 'none';

        // เพิ่มข้อความแทนที่ปุ่ม accept และ deny
        let message = document.createElement('p');
        message.textContent = 'ยอมรับคำขอแล้ว';
        message.style.backgroundColor = "var(--success)";
        block.appendChild(message);
    } else if (button.classList.contains('deny')) {
        // ปิดปุ่ม accept และ deny ในบล็อกนี้
        let acceptButton = block.querySelector('.accept');
        let denyButton = block.querySelector('.deny');
        acceptButton.style.display = 'none';
        denyButton.style.display = 'none';

        // เพิ่มข้อความแทนที่ปุ่ม accept และ deny
        let message = document.createElement('p');
        message.textContent = 'ปฏิเสธคำขอแล้ว';
        message.style.backgroundColor = "var(--error)";
        block.appendChild(message);
    }
}


</script>

</html>