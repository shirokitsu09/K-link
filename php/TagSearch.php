<div class="background">
<?php
    session_start();

  include("../config/con_db.php");

  if(isset($_POST['search'])){
    $currentSearch = $_REQUEST['search'];
    $search = str_replace(' ', '', $_POST['search']);
    $search = mysqli_real_escape_string($conn,$search);

    $sql_search_db = "SELECT * FROM hobby_db 
                      WHERE activityName LIKE '%$search%' 
                      OR location LIKE '%$search%' 
                      OR FIND_IN_SET('$search', tag) 
                      ORDER BY CASE 
                      WHEN activityName LIKE '%$search%' THEN 0 
                      ELSE 1 
                      END, activityName";
    $result_search_db = $conn->query($sql_search_db);

    $sql_search_dbCount = "SELECT COUNT(*) as count FROM hobby_db WHERE activityName LIKE '%$search%' OR location LIKE '%$search%' OR FIND_IN_SET('$search',tag) ORDER BY activityName";
    $result_search_dbCount = $conn->query($sql_search_dbCount);

    if ($result_search_db !== false && $result_search_dbCount !== false && $result_search_dbCount->num_rows > 0) {
        $row =  $result_search_dbCount->fetch_assoc();
        $rowCount = $row['count'];
    } else {
        echo "No rows found";
    }
}  else {
    $currentSearch = '';
    $sql_search_db = "SELECT * FROM hobby_db";
    $result_search_db = $conn->query($sql_search_db);
    $sql_search_dbCount = "SELECT COUNT(*) as count FROM hobby_db";
    $result_search_dbCount = $conn->query($sql_search_dbCount);

    if ($result_search_db !== false && $result_search_dbCount !== false && $result_search_dbCount->num_rows > 0) {
        $row =  $result_search_dbCount->fetch_assoc();
        $rowCount = $row['count'];
    } else {
        echo "No rows found";
    }
}

?>

<?php include 'TagSearch-list.php';?>

</div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HoriSlideBar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/HorizontalSlideBar.js" defer></script>
    <title>search</title>
</head>
<style>
    body{
        background-color: white !important;
    }
    </style>
<body>
   
    <form action="" method="post">
        <input type='text' name='search' style='left: 50%; position: absolute;' value = "<?php echo $currentSearch ?>">
        <button type='submit' style='left: 58.1%; position: absolute;'>search</button>
    </form>
</body>
</html>

    