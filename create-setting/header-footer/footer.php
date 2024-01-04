<link rel="stylesheet" href="./css/FOOTER.css" />

<div class="navigation">
    <ul>
        <li class="list active">
            <a href="#1">
                <span class="icon">
                    <ion-icon name="home"></ion-icon>
                </span>
                <span class="text">Home</span>
                <span class="circle"></span>
            </a>
        </li>
        <li class="list">
            <a href="#2">
                <span class="icon">
                    <ion-icon name="star-outline"></ion-icon>
                </span>
                <span class="text">Star</span>
                <span class="circle"></span>
            </a>
        </li>
        <li class="list">
            <a href="#3">
                <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <span class="text">Profile</span>
                <span class="circle"></span>
            </a>
        </li>
        <div class="indicator" id="indicator"></div>
    </ul>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- <script src="../js/FooterScript.js"></script> -->

<script>
    const list = document.querySelectorAll('.list');
    function activeLink(){
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
    indicator.classList.remove('hidden');
}
    list.forEach((item) => 
    item.addEventListener('click', activeLink));
</script>