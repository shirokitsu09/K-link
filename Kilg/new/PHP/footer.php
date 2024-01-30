<link rel="stylesheet" href="../CSS/FOOTER.css" />

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
            <a href="#mygroup" onclick="changeText('MYGROUP')">
                <span class="icon">
                    <ion-icon name="people"></ion-icon>
                </span>
                <span class="text">MyGroup</span>
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
        <div class="indicator"></div>
    </ul>
</div>
<script>
    const list = document.querySelectorAll('.list-footer');


    function activeLink() {
        list.forEach((item) =>
            item.classList.remove('active'));
        this.classList.add('active');
    }


    list.forEach((item) =>
        item.addEventListener('click', activeLink));
</script>

<script>
  function changeText(text) {
    const textContainer = document.getElementById('name-header');
    textContainer.innerText = text;

    if (text === 'MYGROUP') {
        textContainer.style.left = '120px';
    }
    else if (text === 'SETTING') {
        textContainer.style.left = '130px';
    }   
    else{
        textContainer.style.left = '135px';
    }
  }
</script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- <script src="../js/script.js"></script> -->