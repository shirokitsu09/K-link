<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/HOBBY-HOME.css">

    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --> <!--USE jquery-->

    <!-- <link rel="stylesheet" href="globalTEST.css"> -->
    <title>Hobby Home</title>
</head>
<body>
    <div class="background">
        <div class="box">
            <div class="search-box">
                <input type="text" name="" placeholder="Search">
                
                <ion-icon name="search-outline" class="search-icon"></ion-icon>
            </div>
            
        </div>

        <div class="content-hobby-home">
            <div class="text">แท็กแนะนำ</div>
            <!-- <div class="tag-box">
                <ul class="tag-list">
                    <li id="listItem1">1111111<ion-icon name="close-outline" id="closeIcon1"></ion-icon></li>
                    <li id="listItem2">2222<ion-icon name="close-outline" id="closeIcon2"></ion-icon></li>
                    <li id="listItem3">33333<ion-icon name="close-outline" id="closeIcon3"></ion-icon></li>
                    <li id="listItem4">44444444<ion-icon name="close-outline" id="closeIcon4"></ion-icon></li>
                    <li id="listItem5">5<ion-icon name="close-outline" id="closeIcon5"></ion-icon></li>
                    <li id="listItem6">6<ion-icon name="close-outline" id="closeIcon6"></ion-icon></li>
                </ul>
            </div> --> <!-- USE jquery -->
            <div class="tag-box">
                <ul class="tag-list">
                    <li id="listItem1" onclick="toggleIcon('listItem1')">1111111</li>
                    <li id="listItem2" onclick="toggleIcon('listItem2')">2222222</li>
                    <li id="listItem3" onclick="toggleIcon('listItem3')">33333</li>
                    <li id="listItem4" onclick="toggleIcon('listItem4')">44444444</li>
                    <li id="listItem5" onclick="toggleIcon('listItem5')">57576</li>
                    <li id="listItem6" onclick="toggleIcon('listItem6')">634535</li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- <script>
        $(document).ready(function() {
            $('.content-hobby-home .tag-list li').click(function() {
                var icon = $(this).find('ion-icon');
                icon.toggle();
            });
        });
    </script> --> <!-- USE jquery -->

    <script>
        function toggleIcon(listItemId) {
            var listItem = document.getElementById(listItemId);
            var ionIcon = listItem.querySelector('ion-icon');

            if (!listItem.querySelector('ion-icon')) {
                var ionIcon = document.createElement('ion-icon');
                ionIcon.setAttribute('name', 'close-outline');
                listItem.appendChild(ionIcon);
                // ionIcon.style.color = 'blue';
            } else {
                listItem.removeChild(ionIcon);
            }
        }
    </script>
    
</body>
</html>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>