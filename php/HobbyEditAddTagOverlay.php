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

        <?php if ($row['tag'] != '') { for ($i = 0 ; $i<$eachTag_count ; $i++) {?>
        <div class="div17">          
          <?php echo $eachTag[$i] .'<img class = "DeleteTagIcon" src="../images/TagDeleteIcon.svg" onclick=delTag(this)>'?>
        </div>
      <?php } 
          }?>

        </div>
        <div id="tag"></div>
        <p7>แท็กแนะนำ</p7>
        <div class="savetag" onclick="saveTag()">บันทึก</div>
      </div>
    </div>

<script>
 
  // -----------------------------------------------------------------
    let maxTag = 5;
    let numberOfTag = 0;
    let textLength = 55;
    let lengthCurrent = 0;
  // -----------------------------------------------------------------

  let new_tag = [];
  let current_tag = <?php echo json_encode($eachTag); ?>;
  let submitTag = [];

  function delTag(deleteButton) {
  let parentDiv = deleteButton.parentNode;
  let tagToDelete = parentDiv.textContent.trim(); 
  parentDiv.parentNode.removeChild(parentDiv);

  let index = current_tag.indexOf(tagToDelete);
  let index_new = new_tag.indexOf(tagToDelete);

  if (index > -1) {
    current_tag.splice(index, 1);
    colorCheck()

  }
  if (index_new > -1) {
    new_tag.splice(index, 1);
    colorCheck()

  }
  console.log("Current Tag array:", current_tag);
}

function addButton() {

  if (numberOfTag >= maxTag) {
        console.log("Maximum number of tags exceeded. Cannot add more tags.");
        let CharLeft = document.getElementById('tagInput');
        CharLeft.maxLength = 0;
        return;
    }

  let newTag = document.getElementById("tagInput").value;

  if (newTag !== "" && !new_tag.includes(newTag) && newTag.indexOf(',') === -1 && !current_tag.includes(newTag)  && !submitTag.includes(newTag)) {
    new_tag.push(newTag);
    console.log("New Tag array:", new_tag);

    colorCheck()

    let newDivContain = document.createElement("div");
    

    let newDiv = document.createElement("div");
    newDiv.className = "div17";
    newDiv.textContent = newTag;
    let parentShow = document.getElementById('tagContainer');

    let deleteIcon = document.createElement("img");
    deleteIcon.className = "DeleteTagIcon";
    deleteIcon.src = "../images/TagDeleteIcon.svg";
    deleteIcon.onclick = function() { delTag(this); };
    newDiv.appendChild(deleteIcon);
    parentShow.appendChild(newDiv); 
    TagIconPosition();

    document.getElementById("tagInput").value = '';

  } else {
    console.log("Tag already exists , is empty or include ',' in your tag.");
  }
}

  function merge() {
  let tag = document.getElementById("submitTag");
    for (let i = 0; i < new_tag.length; i++) {
      let Combind_new_tag = new_tag[i];
      if(Combind_new_tag != ''){
        submitTag.push(Combind_new_tag);
        console.log("Combind_new_tag:", Combind_new_tag);
        }
    }

    for (let j = 0; j < current_tag.length; j++) {
      let Combind_current_tag = current_tag[j];
      if(Combind_current_tag != ''){
        submitTag.push(Combind_current_tag);
        console.log("Combind_current_tag:", Combind_current_tag);
      }
    }

    colorCheck()
    if(submitTag != ''){
      tag.value = submitTag.join(',');
      console.log("Combind_submit_tag:", document.getElementById("submitTag").value);
    }
}

//-------------------------------------------------------------------------------

    document.addEventListener('DOMContentLoaded', function() {
    TagIconPosition();
});

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
    });
}

function saveTag() {
  closeTag();

  let tagCount = current_tag.length; 
  let NewtagCount = new_tag.length; 

  console.log("tagCount : "+tagCount);

  let tagShow = document.getElementById('tag-container');
  let div17 = tagShow.querySelectorAll('.div17');

  for (let i = 0; i < div17.length; i++) {  
    div17[i].remove();
  }

    if(current_tag.length > 0 && current_tag != ''){
      for(let i = 0 ; i < tagCount ; i++){
        console.log("loop : "+i);
        let newDivShow = document.createElement("div");
        let parentShow = document.getElementById('tag-container');
        newDivShow.className = "div17";
        newDivShow.textContent = current_tag[i];
        parentShow.appendChild(newDivShow);
      }
    }
    if(new_tag.length > 0 && new_tag != ''){
    for(let i = 0 ; i < NewtagCount ; i++){
        console.log("loop : "+i);
        let newDivShow = document.createElement("div");
        let parentShow = document.getElementById('tag-container');
        newDivShow.className = "div17";
        newDivShow.textContent = new_tag[i];
        parentShow.appendChild(newDivShow);
      }
    }  
  }

  // -----------------------------------------------------------------

  function colorCheck() {
    let numberOfTag = 0;

    numberOfTag = current_tag.length + new_tag.length + submitTag.length;

    let totalLength = 0;

    current_tag.forEach(tag => totalLength += tag.length);
    new_tag.forEach(tag => totalLength += tag.length);
    submitTag.forEach(tag => totalLength += tag.length);

    let tagCountText = document.getElementById('tag-count');
    let characterCountText = document.getElementById('character-count');
    let CharLeft = document.getElementById('tagInput');

    if (numberOfTag >= 5) {
        tagCountText.textContent = numberOfTag + "/" + maxTag + " แท็ก";
        tagCountText.style.color = "red";
    } else {
        tagCountText.textContent = numberOfTag + "/" + maxTag + " แท็ก";
        tagCountText.style.color = "green";
    }

    if (totalLength >= 55) {
        characterCountText.textContent = totalLength + "/" + textLength + " ตัวอักษร";
        characterCountText.style.color = "red";
    } else {
        characterCountText.textContent = totalLength + "/" + textLength + " ตัวอักษร";
        characterCountText.style.color = "green";
    }   
        let remainingCharacters = textLength - totalLength;
        CharLeft.maxLength = remainingCharacters;
}

colorCheck();

  // -----------------------------------------------------------------

</script>  