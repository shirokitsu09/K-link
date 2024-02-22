<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="../css/globalTEST.css" />
  <link rel="stylesheet" href="../css/aboutapp.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
</head>

<body>
  <div class="hobby">
    <div class="part-header">
      <div class="group-child"></div>
      <b class="header-text">เกี่ยวกับแอพ</b>
      <img class="back-button" alt="" src="../images/backbutton.svg" onclick="goBack()" />
      <!-- <img class="noti-button-icon" alt="" src="../images/noti.svg" /> -->
      <div class="noti-button-icon">
        <a href="#noti">
          <ion-icon name="notifications"></ion-icon>
        </a>
      </div>
    </div>
    <div class="part-body">
      <div class="body-background">
        <div class="app-name">KLINK</div>
        <div class="version-label">V.1.0.0</div>
        <div class="version-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id accumsan
          tortor. Sed euismod magna non erat pulvinar, faucibus iaculis ante laoreet. In vehicula neque vitae velit
          vehicula, laoreet efficitur diam pellentesque. Ut porta

          vestibulum fermentum. Sed vel elementum odio, suscipit aliquam nisl. Vestibulum ultricies, eros sit amet
          elementum rhoncus, lorem urna fringilla risus, quis hendrerit neque magna non nunc. Integer ipsum

          purus, pretium vitae ultrices vel, sagittis at leo. Duis feugiat odio quis ante pharetra interdum. Ut commodo
          in lacus blandit malesuada.
        </div>
      </div>
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