<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/notify.css" />
    <link rel="stylesheet" href="../css/HEADER.css" />
    <link rel="stylesheet" href="../css/FOOTER.css" />
    <title>Notify</title>
</head>
<body>
    <div class="background">
        <?php include 'HEADER.php';?>
        <?php include 'FOOTER.php';?>

        <!--  -->
        <!-- <div class="notification">
        <div class="notiline"></div>
      
      <div class="day-frame">
          <div class="day-background"></div>
          <img class="day-dropicon" alt="" src="../images/notify-drop.svg" />
          <div class="textday">Day</div>
      </div>

      <div class="status-frame">
          <div class="status-background"></div>
          <div class="textstatus">Is unread</div>
      </div>

      <div class="feature-frame">
        <div class="feature-background"></div>
        <img class="feature-dropicon" alt="" src="../images/notify-drop.svg" />
        <div class="textfeature">Feature</div>
      </div>
        </div> -->
        <!--  -->
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
            icon.src = './public/backbutton.svg'
            text.textContent = 'NOTIFICATION';
            list.classList.remove('active');
            indicator.classList.add('hidden');
          }
        changeText();
    </script>
</html>