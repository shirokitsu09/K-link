<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobby-Home</title>

    <link rel="stylesheet" href="../css/hobby-home.css" />
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/HEADER.css" />
    <link rel="stylesheet" href="../css/FOOTER.css" />
    <link rel="stylesheet" href="../css/creategroup.css" />

</head>
<body>
    <div class="background">
        <?php include 'header.php';?>
        <?php include 'hobbylist.php';?>
        <?php include 'footer.php';?>
    </div>

</body>
<!------------------------------ script ------------------------------>
    <script>
        function changeText() {
          let text = document.querySelector('.name-header');
          let list = document.querySelector('.list');
          let indicator = document.getElementById('indicator');
            text.textContent = 'Hobby';
            list.classList.remove('active');
            indicator.classList.add('hidden');
          }
        changeText();
    </script>
<!------------------------------ script ------------------------------>

</html>