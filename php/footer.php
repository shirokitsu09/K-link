<link rel="stylesheet" href="../css/FOOTER.css" />

<div class="navigation">
    <ul>
        <li class="list-footer active">
            <a href="#home" onclick="changeText('HOME')">
                <span class="icon">
                    <ion-icon name="home"></ion-icon>
                </span>
                <span class="text">Home</span>
                <span class="circle"></span>
            </a>
        </li>
        <li class="list-footer">
            <a href="#mygroup" onclick="changeText('MYPOST')">
                <span class="icon">
                    <ion-icon name="people"></ion-icon>
                    <!-- <img alt="" src="../images/Group-Icon.svg" /> -->
                </span>
                <span class="text">MyPost</span>
                <span class="circle"></span>
            </a>
        </li>
        <li class="list-footer">
            <a href="#setting" onclick="changeText('SETTING')">
                <span class="icon">
                    <ion-icon name="settings"></ion-icon>
                </span>
                <span class="text">Setting</span>
                <span class="circle"></span>
            </a>
        </li>
        <div class="indicator" id="indicator"></div>
    </ul>
</div>

<script>

    const listF = document.querySelectorAll('.list-footer');


    function activeLink() {
        listF.forEach((item) =>
            item.classList.remove('active'));
        this.classList.add('active');
    }

    function removeActiveFromClass() {
        listF.forEach((item) => {
            item.classList.remove('active');
        });
    }

    // --------------------------
    listF.forEach((item) => {
        item.addEventListener('click', activeLink);
    });



    function changeText(text) {
        const textContainer = document.getElementById('name-header');

        const headerElement = document.querySelector('.HEADER');

        textContainer.innerText = text;

        if (text === 'SETTING') {
            headerElement.style.display = 'none';
        } else {
            headerElement.style.display = '';
        }
    }


</script>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- <script src="../js/script.js"></script> -->