<?php 
    include("../config/con_db.php"); 
    // $uID = $_SESSION['uID'];
?>

<link rel="stylesheet" href="../css/HEADER.css" />

<div class="HEADER">
    <img class="app-icon" id="backButton" alt="" src="../images/LOGO_V 2.svg" />

    <div class="name-header" id="name-header">HOME</div>
    <div class="LINE"></div>
    <div class="noti-button-icon">
        <a href="notify.php">
            <ion-icon name="notifications"></ion-icon>
        </a>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
document.getElementById("backButton").addEventListener("click", function() {
    if(document.getElementById("backButton").src.includes("backbutton.svg")) {
        if (history.length > 1) {
            history.back();
        }
    } else {
        window.location.href = "index.php"; 
    }
});
</script>


