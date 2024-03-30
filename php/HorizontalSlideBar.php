<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HoriSlideBar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/HorizontalSlideBar.js" defer></script>
    <title>HORI</title>
</head>
<body>
    <section class="main-container-scrollBar">
        <div class="tab-nav-bar">
            <div class="tab-navigation">
                <ion-icon class="left" name="chevron-back-outline"></ion-icon>
                <ion-icon class="right" name="chevron-forward-outline"></ion-icon>
            <ul class="tab-menu">
            <form action="" method="post" id="filterForm">
                <li class="tab-btn <?php echo $requestState; ?>" onclick="filter('request')" id="request"><div class="tab-btn-circle"></div>กลุ่มที่รอการตอบรับ</li>
                <li class="tab-btn <?php echo $hobbyState; ?>" onclick="filter('hobby')" id="hobby"><div class="tab-btn-circle"></div>Hobby</li>
                <li class="tab-btn <?php echo $libraryState; ?>" onclick="filter('library')" id="library"><div class="tab-btn-circle"></div>Library</li>
                <li class="tab-btn <?php echo $tutoringState; ?>" onclick="filter('tutoring')" id="tutoring"><div class="tab-btn-circle"></div>Tutoring</li>
                <li class="tab-btn <?php echo $headerState; ?>" onclick="filter('header')" id="header"><div class="tab-btn-circle"></div>โพสต์ของฉัน</li>
                <input type="hidden" name="filterPublish" id="filterPublishInput" value="">
                <input type="hidden" name="filterSave" value="">
            </form>
            </ul>
            </div>
        </div>
    </section>
</body>
</html>

<script>

    let filterPublish = [];
    function filter(filter) {
        let tabBtn = document.getElementById(filter);
        let active = tabBtn.classList.contains("active");
        
        if (filter === 'request') {
                filterPublish.push('request');
                console.log(filterPublish);
        }

        if (filter === 'hobby') {
                filterPublish.push('hobby');
                console.log(filterPublish);
        }

        if (filter === 'library') {
                filterPublish.push('library');
                console.log(filterPublish);
        }

        
        if (filter === 'tutoring') {
                filterPublish.push('tutoring');
                console.log(filterPublish);
        }

        if (filter === 'header') {
                filterPublish.push('header');
                console.log(filterPublish);
        }
        document.getElementById("filterPublishInput").value = filterPublish.join(',');
        document.getElementById("filterForm").submit();

    }
</script>