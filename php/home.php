<?php
    if (!isset($_SESSION['uID'])) { // ถ้าไม่ได้เข้าระบบอยู่
        header("location: ../index.php"); // redirect ไปยังหน้า login.php
        exit;
      }
?>
<link rel="stylesheet" href="../css/globalTEST.css"/>
<link rel="stylesheet" href="../css/home1.css"/>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div class="crop">

    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="ads1">
            <input type="radio" name="radio-btn" id="ads2">
            <input type="radio" name="radio-btn" id="ads3">

            <div class="slide first">
                <img src="../images/advertise1.svg" alt="">
            </div>
            <div class="slide">
                <img src="../images/advertise2.svg" alt="">
            </div>
            <div class="slide">
                <img src="../images/advertise3.svg" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-bnt1"></div>
                <div class="auto-bnt2"></div>
                <div class="auto-bnt3"></div>
            </div>

            <div class="navigation-manual">
                <label for="ads1" class="manual-btn"></label>
                <label for="ads2" class="manual-btn"></label>
                <label for="ads3" class="manual-btn"></label>
            </div>

        </div>

    </div>
</div>

<div id="leftArrowAds" class="LeftArrowAds">
    <div class="rectangle-left">
        <img class="vector-icon" alt="" src="../images/LeftArrowAds.svg" />
    </div>
</div>

<div id="rightArrowAds" class="RightArrowAds">
    <div class="rectangle-right">
        <img class="vector-icon" alt="" src="../images/RightArrowAds.svg" />
    </div>
</div>

<script type="text/javascript">
        var counter = 1;
        setInterval(function () {
            document.getElementById('ads' + counter).checked = true;
            counter++;
            if (counter > 3) {
                counter = 1;
            }
        }, 10000);
    </script>

    <script>
        document.getElementById('leftArrowAds').addEventListener('click', function () {
            if (document.getElementById('ads2').checked) {
                document.getElementById('ads1').checked = true;
            } else if (document.getElementById('ads1').checked) {
                document.getElementById('ads3').checked = true;
            } else if (document.getElementById('ads3').checked) {
                document.getElementById('ads2').checked = true;
            }
        });

        document.getElementById('rightArrowAds').addEventListener('click', function () {
            if (document.getElementById('ads2').checked) {
                document.getElementById('ads3').checked = true;
            } else if (document.getElementById('ads1').checked) {
                document.getElementById('ads2').checked = true;
            } else if (document.getElementById('ads3').checked) {
                document.getElementById('ads1').checked = true;
            }
        });
    </script>


<div class="contentselect">
    <div class="Arrow">
        <div id="Hobby" onclick="changeImg()" class="LeftArrow">
            <img src="../images/LeftArrow.svg" alt="">
        </div>

        <div id="Library" onclick="changeImg()" class="RightArrow">
            <img src="../images/RightArrow.svg" alt="">
        </div>

        <div class="group-parent">
            <div class="ellipse-parent">
                <div class="group-child"></div>
                <a id="link" href="#hobby-home" onclick="changeText('HOBBY')"> <!-- href #hobby-home -->
                    <img class="MainIcon" alt="" src="../images/Hobby-LOGO.svg" />
                </a>
            </div>

            <div id="content" class="Hobbycontent">Hobby</div>
        </div>
    </div>
</div>
<!-- Tutoring-LOGO.svg -->
<script>
    function changeImg() {
        let mainIcon = document.querySelector('.MainIcon');
        let content = document.getElementById('content');
        let header = document.getElementById('name-header');
        if (mainIcon.src.includes('Hobby-LOGO')) {
            mainIcon.src = '../images/Library-LOGO.svg';
            content.textContent = 'Library';
            if (header.textContent === 'TUTORING') {
                header.style.left = '120px';
            }
            content.className = 'Librarycontent';
            link.href = '#Library';
            link.setAttribute('onclick', "changeText('LIBRARY')");
        } else if (mainIcon.src.includes("Library-LOGO")) {
            mainIcon.src = '../images/Tutoring-LOGO.svg';
            content.textContent = 'Tutoring';
            if (header.textContent === 'TUTORING') {
                header.style.left = '120px';
            }
            content.className = 'Tutoringcontent';
            link.href = '#Tutoring';
            link.setAttribute('onclick', "changeText('TUTORING')");
        } else if(mainIcon.src.includes('Tutoring-LOGO')) {
            mainIcon.src = '../images/Hobby-LOGO.svg';
            content.textContent = 'Hobby';
            if (header.textContent === 'TUTORING') {
                header.style.left = '120px';
            }
            content.className = 'Hobbycontent';
            link.href = '../php/index.php#hobby-home';
            link.setAttribute('onclick', "changeText('HOBBY')");
        }
    }
</script>