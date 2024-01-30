<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="../CSS/globalTEST.css" />
    <link rel="stylesheet" href="../CSS/section.css" />
    <link rel="stylesheet" href="../CSS/setting.css" />
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
                        <?php include '../PHP/MyGroup.php';?>
                        <?php include '../PHP/tutoringlist.php';?>
                    </div>
                </section>

                <section id="setting" class="s">
                    <div class="c-2">
                        <?php include '../PHP/setting.php';?>
                    </div>
                </section>

                <section id="hobby-home" class="s">
                    <div class="c-3">
                        <?php include '../PHP/hobby-home.php';?>
                    </div>
                </section>
            </div>
        </div>

        <?php include '../PHP/header.php'; ?>
        <?php include '../PHP/footer.php'; /*FOOTER*/?>

    </div>
</body>

</html>
