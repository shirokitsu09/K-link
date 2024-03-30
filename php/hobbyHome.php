<div class="background">
<?php
  include("../config/con_db.php");
  $currentSearch = '';

  if(isset($_POST['activitySearch'])){
    $currentSearch = $_REQUEST['activitySearch'];
    $search = str_replace(' ', '', $_POST['activitySearch']);
    $search = mysqli_real_escape_string($conn,$search);
  }else if(isset($_POST['search'])){
    $currentSearch = $_REQUEST['search'];
    $search = str_replace(' ', '', $_POST['search']);
    $search = mysqli_real_escape_string($conn,$search);
  }

  if (!isset($_SESSION['uID'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: ../index.php"); // redirect ไปยังหน้า login.php
    exit;
  } else if(isset($_POST['search']) || isset($_POST['activitySearch'])){


    $sql_hobby_db = "SELECT * FROM hobby_db 
                      JOIN users ON hobby_db.header = users.uID
                      WHERE activityName LIKE '%$search%' 
                      OR location LIKE '%$search%' 
                      OR FIND_IN_SET('$search', tag) 
                      ORDER BY CASE 
                      WHEN activityName LIKE '%$search%' THEN 0 
                      ELSE 1 
                      END, activityName";
    $result_hobby_db = $conn->query($sql_hobby_db);

    $sql_hobby_dbCount = "SELECT COUNT(*) as count FROM hobby_db  WHERE activityName LIKE '%$search%' OR location LIKE '%$search%' OR FIND_IN_SET('$search',tag) ORDER BY activityName";
    $result_hobby_dbCount = $conn->query($sql_hobby_dbCount);

    if ($result_hobby_db !== false && $result_hobby_dbCount !== false && $result_hobby_dbCount->num_rows > 0) {
        $row =  $result_hobby_dbCount->fetch_assoc();
        $rowCount = $row['count'];
    } else {
        echo "No rows found";
    }
}  else {
    $currenthobby = '';
    $sql_hobby_db = "SELECT * FROM hobby_db";
    $result_hobby_db = $conn->query($sql_hobby_db);
    $sql_hobby_dbCount = "SELECT COUNT(*) as count FROM hobby_db";
    $result_hobby_dbCount = $conn->query($sql_hobby_dbCount);

    if ($result_hobby_db !== false && $result_hobby_dbCount !== false && $result_hobby_dbCount->num_rows > 0) {
        $row =  $result_hobby_dbCount->fetch_assoc();
        $rowCount = $row['count'];
    } else {
        // echo "No rows found";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobby-Home</title>

    <link rel="stylesheet" href="../css/hobby-home.css" />
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/createGroupButton.css" />
    <!-- <link rel="stylesheet" href="../css/creategroup.css" /> -->
    
</head>

<body>
    
    <div class="background-hobbyHome">

        <div class="box">
            <div class="search-box">
            <form action="" method="post">
                <input type="search" name="search" placeholder="Search" id="search-box" value = "<?php echo $currentSearch ?>">
                <button type="submit" style ="z-index:10000; position:absolute; width:40px; height:40px; left:262px; background: transparent; border: none; cursor:pointer;">
                    <img class="search-icon" src="../images/searchButton.svg">
                </button>
            </form>
            </div>
        </div>

        

        
        
        <?php include 'hobbyList.php'; ?>

    </div>

    <div class="footerIndividual">
        <a href="hobbyCreatePost.php" class="createGroupButton">
            <img src="../images/WhitePlus.svg">
        </a>
    </div>

</body>



</html>