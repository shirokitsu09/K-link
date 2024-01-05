<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobby-Home</title>

    <link rel="stylesheet" href="hobby-home.css" />
    <link rel="stylesheet" href="globalTEST.css" />
    <!-- <link rel="stylesheet" href="../css/HEADER.css" /> -->
    <!-- <link rel="stylesheet" href="../css/FOOTER.css" /> -->
    <link rel="stylesheet" href="creategroup.css" />

</head>
<body>
    <div class="background">
        <?php include 'HEADER.php';?>
        <?php include 'FOOTER.php';?>
        <?php include 'creategroup.php';?>
    </div>

</body>
<!------------------------------ script ------------------------------>
    <script>
        function changeText() {
          let text = document.querySelector('.name-header');
          let list = document.querySelector('.list');
          let indicator = document.getElementById('indicator');
            text.textContent = 'MyGroup';
            list.classList.remove('active');
            indicator.classList.add('hidden');
          }
        changeText();
    </script>
<!------------------------------ script ------------------------------>

</html>