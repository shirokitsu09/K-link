<?php
  session_start();
  include("../config/con_db.php");

  if(isset($_GET['hID'])){
    $hID = $_GET['hID'];

    $_SESSION['hID'] = $hID;

    $sql = "SELECT * FROM hobby_db WHERE hID = '$hID'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    $tag = $row['tag'];
   
    
    $tagArray = explode(",", $tag);
    $tagArray_count = count($tagArray);

    }

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../css/hobbyEdit.css" />
  </head>
  <body>
   <?php for($i = 0 ; $i < $tagArray_count ; $i++) {?>
      <div class="div17">          
          <?php echo $tagArray[$i] .'<img class = "DeleteTagIcon" src="../images/TagDeleteIcon.svg" onclick=delTag(this)>'?>
      </div>
    <?php } ?>
  <div class="addTag">
    <input type="text" id="tagInput">
    <input type="button" value="addTag" onclick=addButton()>
  </div>

    <input type="button" value="submit" onclick=submit()>
    <input type="text" id="submitTag" name="tag">
  </body>
</html>

<script>
  
  let new_tag = []; // Declare new_tag array outside the function
  let current_tag = <?php echo json_encode($tagArray); ?>;

function delTag(deleteButton) {
  let parentDiv = deleteButton.parentNode;
  let tagToDelete = parentDiv.textContent.trim(); // Extract the tag text
  parentDiv.parentNode.removeChild(parentDiv);

   // Parse the PHP array into JavaScript array
  let index = current_tag.indexOf(tagToDelete);

  if (index > -1) {
    current_tag.splice(index, 1);
  }

  console.log("Current Tag array:", current_tag);
}

function addButton() {
  let newTag = document.getElementById("tagInput").value;
  new_tag.push(newTag);
  console.log("New Tag array:", new_tag);

}

  function submit() {
    let submitTag = [];

    for (let i = 0; i < new_tag.length; i++) {
      let Combind_new_tag = new_tag[i].split(',');
      submitTag.push(Combind_new_tag);
    }

    for (let i = 0; i < current_tag.length; i++) {
      let Combind_current_tag = current_tag[i].split(',');
      submitTag.push(Combind_current_tag);
    }
    document.getElementById("submitTag").value = submitTag;
    console.log("Submit Tags:", document.getElementById("submitTag").value);
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

</script>