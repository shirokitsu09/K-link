<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library-Home</title>

    <link rel="stylesheet" href="./resources/css/hobby-home.css" />
    <link rel="stylesheet" href="./resources/css/globalTEST.css" />
    <link rel="stylesheet" href="./resources/css/HEADER.css" />
    <link rel="stylesheet" href="./resources/css/FOOTER.css" />
    <link rel="stylesheet" href="./resources/css/hamburger.css" />

</head>
<body>
    <div class="background">
        <?php include 'HEADER.php';?>
        <?php include 'FOOTER.php';?>
        <?php include 'hamburger.php';?>
    </div>
    
</body>
<!------------------------------ script ------------------------------>
    <script>
        function changeText() {
          let text = document.querySelector('.name-header');
          let list = document.querySelector('.list');
          let indicator = document.getElementById('indicator');
            text.textContent = 'Library';
            list.classList.remove('active');
            indicator.classList.add('hidden');
          }
          changeText();
    </script>
<!------------------------------ script ------------------------------>
</html>