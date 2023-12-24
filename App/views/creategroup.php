<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/creategroup.css" />
  </head>
  <body>
<!-- ----------------------------------------creategroup-buttom------------------------------------------- -->
      <div class="creategroup" id="create" onclick="openpopup()">
        <img class="creategroup-button" alt="" src="../public/creategroup.svg">
      </div>
<!-- ----------------------------------------creategroup-buttom------------------------------------------- -->
<!-- -----------------------------------------popup-select-type------------------------------------------- -->
      <div class="main-frame hidden">
      <div class="text-type">ประเภท :</div>

        <div class="dropdown">
          <div class="dropdown-toggle" type="button" aria-haspopup = "true" id="dropdown" onclick="opendropdown()">
            <div class ="select">เลือกหมวด</div>
            <img class="dropdown-button" alt="" src="../public/dropdownbutton.svg">
          </div>
          <ul class="dropdown-menu hidden" role="list" aria-expanded = "false">
            <li role="option" tabindex="0" class="option1">Option 1</li>
            <li role="option" tabindex="0" class="option2">Option 2</li>
            <li role="option" tabindex="0" class="option3">Option 3</li>
            <li role="option" tabindex="0" class="option4">Option 4</li>
            <li role="option" tabindex="0" class="option5">Option 5</li>
            <li role="option" tabindex="0" class="option6">Option 6</li>
          </ul>  
        </div>

        <div class="create">
          <div class="create-text">สร้าง</div>
        </div>

        <div class="cancel" id="close" onclick="closepopup()">
          <div class="cancel-text">ยกเลิก</div>
        </div>

      </div>
<!-- ----------------------------------------popup-select-type------------------------------------------- -->

<!-- ---------------------------------------------script------------------------------------------------- -->

<script>
  
    function openpopup() {
      let  create = document.getElementById('create');
      document.querySelector('.main-frame').classList.remove('hidden');
    }

    function closepopup() {
      let  close = document.getElementById('close');
      document.querySelector('.main-frame').classList.add('hidden');
    }

    function opendropdown() {
      const dropdownMenu = document.querySelector('.dropdown-menu');
    const dropdownButton = document.querySelector('.dropdown-button');

    // Toggle the visibility of the dropdown menu based on its current state
    dropdownMenu.classList.toggle('hidden');
    dropdownButton.classList.toggle('active');
    }

  </script>

<!-- ---------------------------------------------script------------------------------------------------- -->

  </body>
</html>
