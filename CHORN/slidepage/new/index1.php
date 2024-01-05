<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="globalTEST.css" />
    <link rel="stylesheet" href="section.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" />
</head>

<body>
    <div class="background">
        <div class="main-container">
            <div class="container">
                <section id="home" class="s">
                    <div class="c-1">
                        <?php
                        include 'home.php';
                        ?>
                    </div>
                </section>

                <section id="2" class="s">
                    <div class="c-2">
                    
                    </div>
                </section>

                <section id="3" class="s">
                    <div class="c-3">

                    </div>
                </section>
            </div>
        </div>
        <?php
            include 'header.php';
        ?>
        <?php
            include 'footer.php'; /*FOOTER*/
        ?>

    </div>
</body>

</html>