<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobby-Home</title>
    
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/HEADER.css" />
    <link rel="stylesheet" href="../css/FOOTER.css" />
    <link rel="stylesheet" href="../css/creategroup.css" />
    <link rel="stylesheet" href="../css/createGroupButton.css" />

</head>
<body>
    <div class="background">

            

        <?php include 'header.php';?>
        <?php include 'Z-TESThobbylist.php';?>

        <div class="footerIndividual">
            <a href="hobbyCreatePost.php" class="createGroupButton">
                <img src="../images/WhitePlus.svg">
            </a>
        <?php include 'footer.php';?>
        </div>   
        
    </div>

</body>
</html>

<!------------------------------ script ------------------------------>
<script>
    function StartPage() {
        let text = document.querySelector('.name-header');
        let list = document.querySelector('.list-footer');
        let indicator = document.querySelector('.indicator'); 
        text.textContent = 'Hobby';
        list.classList.remove('active');
        indicator.classList.add('hidden');
    }
    StartPage();
</script>
<!------------------------------ script ------------------------------>
