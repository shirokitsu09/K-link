<?php
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
</head>

<body>
  <div class="hobby">
    <div class="background">
      <?php include 'header.php' ?>
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

<script>
   function changeText() {
        let text = document.querySelector('.name-header');
        let box = document.querySelector('.HEADER');
        let icon = document.querySelector('.app-icon');
        let line = document.querySelector('.LINE');
        let noti = document.querySelector('.noti-button-icon a');

        text.textContent = 'ที่บันทึกไว้';
        text.style.fontSize = 'var(--h4-size)';
        text.style.width = '200px';
        text.style.left = '90px';
        text.style.top = '30px';

        noti.style.fontSize = '27.2px';
        
        box.style.width = '360px';
        box.style.borderRadius = '0';

        icon.src = '../images/backbutton.svg';
        icon.style.width = '30px';
        icon.style.height = '30px';
        icon.style.top = '37px';
        icon.style.left = '25px';

        line.style.left = '80px';
        line.style.top = '38px';
        line.style.display = 'none';
    }
    changeText();

    </script>