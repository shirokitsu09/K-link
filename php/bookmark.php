<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="../css/globalTEST.css" />
  <link rel="stylesheet" href="../css/bookmark.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
</head>

<body>
  <div class="hobby">
    <div class="part-header">
      <div class="noti-button-icon">
        <a href="#noti">
          <ion-icon name="notifications"></ion-icon>
        </a>
      </div>
      <div class="group-child"></div>
      <b class="header-text">ที่บันทึกไว้</b>
      <img class="back-button" alt="" src="../images/backbutton.svg" onclick="goBack()" />
      <!-- <img class="noti-button-icon" alt="" src="../images/noti.svg" /> -->
    </div>
    <div class="part-body">
    </div>
  </div>
</body>
<script>

  function redirectToSettingSection() {
    window.location.href = 'index.php#setting';
  }
  function goBack() {
    window.history.back();
  }

</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>