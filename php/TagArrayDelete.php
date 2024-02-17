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
//  if(isset($_POST['Updatetag'])){
//   $Updatetag = json_decode($_POST['tag']);
//   $UpdatetagArray = explode(",",$Updatetag);
//   $UpdatetagString = implode(",",$UpdatetagArray);

//   echo $Updatetag;
//   $sql_update = "UPDATE hobby_db SET
//                   tag = '$UpdatetagString'
//                   WHERE hID = '$hID'";

//  }
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../css/hobbyEdit.css" />
  </head>
  <body>
  <form action="TagArrayDelete_db.php" method="post">
   <?php for($i = 0 ; $i < $tagArray_count ; $i++) {?>
      <div class="div17">          
          <?php echo $tagArray[$i] .'<img class = "DeleteTagIcon" src="../images/TagDeleteIcon.svg" onclick=delTag(this)>'?>
      </div>
    <?php } ?>
  <div class="addTag">
    <input type="text" id="tagInput">
    <input type="button" value="addTag" onclick="addButton()">
    <input type="button" value="merge" onclick="merge()">
  </div>
  
    <input type="submit" name="Updatetag" value="submit">
    <input type="text" id="submitTag" name="tag" >
    

   </form>
  </body>
</html>

<script>
  
  let new_tag = [];
  let current_tag = <?php echo json_encode($tagArray); ?>;
  let submitTag = [];

function delTag(deleteButton) {
  let parentDiv = deleteButton.parentNode;
  let tagToDelete = parentDiv.textContent.trim(); 
  parentDiv.parentNode.removeChild(parentDiv);

  let index = current_tag.indexOf(tagToDelete);

  if (index > -1) {
    current_tag.splice(index, 1);
  }

  console.log("Current Tag array:", current_tag);
}

function addButton() {
  let newTag = document.getElementById("tagInput").value;

  if (newTag !== "" && !new_tag.includes(newTag)) {
    new_tag.push(newTag);
    console.log("New Tag array:", new_tag);
  } else {
    console.log("Tag already exists or is empty.");
  }
}

  function merge() {
  let tag = document.getElementById("submitTag");
    for (let i = 0; i < new_tag.length; i++) {
      let Combind_new_tag = new_tag[i];
      submitTag.push(Combind_new_tag);
      console.log("Combind_new_tag:", Combind_new_tag);
    }

    for (let i = 0; i < current_tag.length; i++) {
      let Combind_current_tag = current_tag[i];
      submitTag.push(Combind_current_tag);
      console.log("Combind_current_tag:", Combind_current_tag);
    }

    tag.value = submitTag.join(',');
    console.log("Combind_submit_tag:", document.getElementById("submitTag").value);

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