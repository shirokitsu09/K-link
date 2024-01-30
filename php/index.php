<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/section.css" />
    <link rel="stylesheet" href="../css/setting.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" />
    <title>Index</title>
</head>

<body>
    <div class="background">
        
        <div class="main-container">
            <div class="container">
                <section id="home" class="s">
                    <div class="c">
                        <?php include '../php/home.php'; ?>
                    </div>
                </section>

                <section id="mygroup" class="s">
                    <div class="c-1">
                        <?php include '../php/MyGroup.php';?>
                        <?php include '../php/tutoringlist.php';?>
                    </div>
                </section>

                <section id="setting" class="s">
                    <div class="c-2">
                        <?php include '../php/setting.php';?>
                    </div>
                </section>

                <section id="hobby-home" class="s">
                    <div class="c-3">
                        <?php include '../php/hobbyHome.php';?>
                    </div>
                </section>
            </div>
        </div>

        <?php include '../php/header.php'; ?>
        <?php include '../php/footer.php'; /*FOOTER*/?>

    </div>
</body>

</html>
