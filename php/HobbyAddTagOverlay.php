<link rel="stylesheet" href="../css/HobbyAddTag.css" />

  <div class="FrameAddTag hidden" id = "FrameAddTag">
    <div class="thickWhite"></div>
      <div class="closeTag" onclick="closeTag()">
      <div class="cir"></div>
      <ion-icon name="close-circle" class="closePage"></ion-icon>
    </div>
      <div class="AddTagcontent" style="bottom: 0%">
        <p1>*</p1>
        <p2>คุณสามารถใส่แท็กได้อีกไม่เกิน 5 แท็ก และ 55 ตัวอักษร</p2>
        <div class="pin-container">
  <!-- +----------------------------------------+ -->


  <!-- +----------------------------------------+ -->
          <input
            type="text"
            spellcheck="false"
            class="pin-input"
            placeholder=" Add Tag"
            id="tagInput"
            maxlength = 55
          />
          <div class="btnaddtag" onclick="addButton()">
            <ion-icon class="plusAdd" name="add-outline"></ion-icon>
            เพิ่มแท็ก
          </div>
        </div>

        <p4>เลือกแล้ว</p4>
        <p3> <span id="tag-count">0/5 แท็ก</span> </p3>
        <p5> และ</p5>
        <p6> <span id="character-count">0/55 ตัวอักษร</span></p6>
        <div id="tagContainer">
        </div>
        <div id="tag"></div>
        <p7>แท็กแนะนำ</p7>
        <div class="savetag" onclick="saveTag()">บันทึก</div>
      </div>
    </div>

<script>
  let tagToPost = [];
  let new_tag = [];
  let maxTag = 5;
  let numberOfTag = 0;
  let textLength = 55;
  let lengthCurrent = 0;

  function colorCheck() {

    if (numberOfTag >= 5){
    let colorNumberOfTag = document.getElementById('tag-count');
    colorNumberOfTag.style.color = "red";
    } else {
    let colorNumberOfTag = document.getElementById('tag-count');
    colorNumberOfTag.style.color = "green";
    }

    if (lengthCurrent >= 55){
    let colorlengthCurrent = document.getElementById('character-count');
    colorlengthCurrent.style.color = "red";
    } else {
    let colorlengthCurrent = document.getElementById('character-count');
    colorlengthCurrent.style.color = "green";
    }
  }
  colorCheck()

  function delTag(deleteButton) {
  let parentDiv = deleteButton.parentNode;
  let tagToDelete = parentDiv.textContent.trim(); 
  parentDiv.parentNode.removeChild(parentDiv);

  let index_new = new_tag.indexOf(tagToDelete);
  // -------------------------------------------------
  let index_newLength = tagToDelete.length;
  console.log("Length of index_new:", index_newLength);
  // -------------------------------------------------

  if (index_new > -1) {
    new_tag.splice(index_new, 1);
    console.log("Current Tag array:", new_tag);
    numberOfTag--;

    let numberOfTagShow = numberOfTag+'/'+maxTag+' แท็ก';
    document.getElementById('tag-count').textContent = numberOfTagShow;

    // ----------------------------------------------------------------------
    // ----------------------------------------------------------------------
    // ----------------------------------------------------------------------
      let tagInput = document.getElementById("tagInput");
      let tagText = tagInput.value.trim();
      let totalLength = tagText.length;
      let characterCount = document.getElementById('character-count');
      lengthCurrent -= index_newLength;
      characterCount.textContent = lengthCurrent+'/'+textLength+' ตัวอักษร';
      tagInput.maxLength = textLength-lengthCurrent;
    // ----------------------------------------------------------------------
    // ----------------------------------------------------------------------
    // ----------------------------------------------------------------------

    colorCheck()
  }
}

  function addButton() {
    
    let newTag = document.getElementById("tagInput").value;

  if (newTag !== "" && !new_tag.includes(newTag) && newTag.indexOf(',') === -1 && numberOfTag < maxTag) {
    
    // ----------------------------------------------------------------------
    // ----------------------------------------------------------------------
    // ----------------------------------------------------------------------
    let tagInput = document.getElementById("tagInput");
      let tagText = tagInput.value.trim();
      let totalLength = tagText.length;
      console.log("totalLength:", totalLength);
      let characterCount = document.getElementById('character-count');
      lengthCurrent += totalLength;
      characterCount.textContent = lengthCurrent+'/'+textLength+' ตัวอักษร';
      tagInput.maxLength = textLength-lengthCurrent;
    // ----------------------------------------------------------------------
    // ----------------------------------------------------------------------
    // ----------------------------------------------------------------------

    new_tag.push(newTag);
    console.log("New Tag array:", new_tag);
    
    let parent = document.getElementById('tagContainer');

    if(parent){
    let newDiv = document.createElement("div");
    newDiv.className = "div17";
    newDiv.textContent = newTag;

    let deleteIcon = document.createElement("img");
    deleteIcon.className = "DeleteTagIcon";
    deleteIcon.src = "../images/TagDeleteIcon.svg";
    deleteIcon.onclick = function() { delTag(this); };
    newDiv.appendChild(deleteIcon);
    parent.appendChild(newDiv);

    TagIconPosition();
    numberOfTag++;

    let numberOfTagShow = numberOfTag+'/'+maxTag+' แท็ก';
    document.getElementById('tag-count').textContent = numberOfTagShow;
    console.log("Num Tag:", numberOfTag);
    colorCheck()
  }
  } else {
    console.log("Tag already exists , is empty or include ',' in your tag.");
  }
}

function saveTag() {
  let tagCount = new_tag.length; 
  console.log("tagCount : "+tagCount);

  let tagShow = document.getElementById('tagShow');
  let div18 = tagShow.querySelectorAll('.div18');

  for (let i = 0; i < div18.length; i++) {
    div18[i].remove();
  }

    if(new_tag.length > 0){
      for(let i = 0 ; i < tagCount ; i++){
        console.log("loop : "+i);
        let newDivShow = document.createElement("div");
        let parentShow = document.getElementById('tagShow');
        newDivShow.className = "div18";
        newDivShow.textContent = new_tag[i];
        parentShow.appendChild(newDivShow);
      }
    }
    closeTag();
  }

function TagIconPosition() {
    let leftPositions = document.querySelectorAll('.DeleteTagIcon');
    let div17s = document.querySelectorAll('.div17');

    div17s.forEach(function(div17, index) {
        let div17Width = div17.offsetWidth;

        let leftPosition = leftPositions[index];

        if (div17Width > 100) {
            leftPosition.style.left = "90%";
        } else if(div17Width > 150) {
            leftPosition.style.left = "95%";
        } else {
            leftPosition.style.left = "80%";
        }
        document.getElementById("tagInput").value = '';

    });
}

function submitTag() {
  let tag = document.getElementById("submitTag123");
    for (let i = 0; i < new_tag.length; i++) {
      let Combind_new_tag = new_tag[i];
      if(Combind_new_tag != ''){
        tagToPost.push(Combind_new_tag);
        console.log("Combind_new_tag:", Combind_new_tag);
        }
    }

    tag.value = tagToPost;
  
}
</script>  