<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobby-Home</title>

    <link rel="stylesheet" href="../css/hobby-home.css" />
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/createGroupButton.css" />
    <!-- <link rel="stylesheet" href="../css/creategroup.css" /> -->
    
</head>

<body>
    <div class="background-hobbyHome">

        <div class="box">
            <div class="search-box">
                <input type="text" name="" placeholder="Search">

                <ion-icon name="search-outline" class="search-icon"></ion-icon>
            </div>
        </div>


        <?php include 'hobbyList_No-db.php'; ?>

        <div class="footerIndividual">
            <a href="hobbyCreatePost.php" class="createGroupButton">
                <img src="../images/WhitePlus.svg">
            </a>
        </div>   
    </div>
</body>
<!------------------------------ script ------------------------------>
<!-- <script>
        function changeText() {
        //   let text = document.querySelector('.name-header');
          let list = document.querySelector('.list-footer');
          let indicator = document.getElementById('indicator');
            // text.textContent = 'Hobby';
            list.classList.remove('active');
            indicator.classList.add('hidden');
          }
        changeText();
    </script> -->

<!------------------------------ script ------------------------------>
<!-- <script>
    const activeListItem = document.querySelector('.list-footer.active');
    if (activeListItem) {
        activeListItem.classList.remove('active');
    }
</script> -->


</html>