
<?php
  include("../config/con_db.php");
// Start
// $_SESSION['uID'] = '65010001';
if (!isset($_SESSION['uID'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: ../index.php"); // redirect ไปยังหน้า login.php
    exit;
  } else {
    $uID = $_SESSION['uID'];
  }
  
$sql_mypost_db = "SELECT * FROM hobby_db JOIN users ON hobby_db.header = users.uID ORDER BY dateCreate";
$result_mypost_db = $conn->query($sql_mypost_db);
$sql_mypost_dbCount = "SELECT COUNT(*) AS count FROM (SELECT * FROM hobby_db) AS combined ORDER BY dateCreate";
$result_mypost_dbCount = $conn->query($sql_mypost_dbCount);

if ($result_mypost_db !== false && $result_mypost_dbCount !== false && $result_mypost_dbCount->num_rows > 0) {
    $row =  $result_mypost_dbCount->fetch_assoc();
    $rowCount = $row['count'];
    $blank = 'ValueExist';
} else {
    // echo "No rows found";
    $blank = 'None';
}
$_SESSION['filter'] = array();
// Start

  if (!isset($_POST['filterPublish'])) {
    $_SESSION['filter'] = array();
  };

  function toggleSelect($option) {
    $check = array_search($option, $_SESSION['filter']);
    if ($check !== false) {
        unset($_SESSION['filter'][$check]);
    } else {
        $_SESSION['filter'][] = $option;
    }
  }

  if (isset($_POST['filterPublish'])) {
    toggleSelect($_POST['filterPublish']);
}

if (!empty($_SESSION['filter'])) {
    $filter = $_SESSION['filter'];
    // ----------------------------------------------------------------------------------------------
                if(in_array('request', $_SESSION['filter'])){
                    $requestState  = 'active';
                    $requestCheck = in_array('request', $_SESSION['filter']);

                    $hobbyCheck = in_array('hobby', $_SESSION['filter']);
                    $myPostCheck = in_array('header', $_SESSION['filter']);

                    $libraryCheck = in_array('library',$_SESSION['filter']);
                    $tutoringCheck = in_array('tutoring',$_SESSION['filter']);

                        if(!$hobbyCheck && !$myPostCheck){
                            $sql_mypost_db = "SELECT * 
                                              FROM hobby_db
                                              JOIN users ON hobby_db.header = users.uID 
                                              WHERE FIND_IN_SET($uID,request)
                                              ORDER BY dateCreate";
                            $result_mypost_db = $conn->query($sql_mypost_db);
                            $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                                   FROM (SELECT * FROM hobby_db 
                                                   WHERE FIND_IN_SET($uID,request)) AS combined
                                                   ORDER BY dateCreate";
                            $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);

                        } else if($hobbyCheck && !$myPostCheck){
                            $sql_mypost_db = "SELECT * 
                                              FROM hobby_db
                                              JOIN users ON hobby_db.header = users.uID 
                                              WHERE FIND_IN_SET($uID,request) 
                                              OR FIND_IN_SET($uID,member)
                                              ORDER BY dateCreate";
                            $result_mypost_db = $conn->query($sql_mypost_db);
                            $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                                   FROM (SELECT * FROM hobby_db 
                                                   WHERE FIND_IN_SET($uID,request) 
                                                   OR FIND_IN_SET($uID,member)) AS combined
                                                   ORDER BY dateCreate";
                            $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);

                        } else if(!$hobbyCheck && $myPostCheck){
                            $sql_mypost_db = "SELECT * 
                                              FROM hobby_db
                                              JOIN users ON hobby_db.header = users.uID 
                                              WHERE FIND_IN_SET($uID,request) 
                                              OR $uID = header
                                              ORDER BY dateCreate";
                            $result_mypost_db = $conn->query($sql_mypost_db);
                            $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                                   FROM (SELECT * FROM hobby_db 
                                                   WHERE FIND_IN_SET($uID,request) 
                                                   OR $uID = header) AS combined
                                                   ORDER BY dateCreate";
                            $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);

                        } else if($hobbyCheck && $myPostCheck){
                            $sql_mypost_db = "SELECT * 
                                              FROM hobby_db
                                              JOIN users ON hobby_db.header = users.uID 
                                              WHERE FIND_IN_SET($uID,request) 
                                              OR $uID = header 
                                              OR FIND_IN_SET($uID,member)
                                              ORDER BY dateCreate";
                            $result_mypost_db = $conn->query($sql_mypost_db);
                            $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                                   FROM (SELECT * FROM hobby_db 
                                                   WHERE FIND_IN_SET($uID,request) 
                                                   OR $uID = header OR FIND_IN_SET($uID,member)) AS combined
                                                   ORDER BY dateCreate";
                            $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);
                        }
                }
    // ----------------------------------------------------------------------------------------------
        if(in_array('hobby', $_SESSION['filter'])){
            $hobbyState  = 'active';
            $hobbyCheck = in_array('hobby', $_SESSION['filter']);

            $requestCheck = in_array('request', $_SESSION['filter']);
            $myPostCheck = in_array('header', $_SESSION['filter']);

            $libraryCheck = in_array('library',$_SESSION['filter']);
            $tutoringCheck = in_array('tutoring',$_SESSION['filter']);

            if(!$requestCheck && !$myPostCheck){
                $sql_mypost_db = "SELECT * 
                                  FROM hobby_db
                                  JOIN users ON hobby_db.header = users.uID 
                                  WHERE FIND_IN_SET($uID,member)
                                  ORDER BY dateCreate";
                $result_mypost_db = $conn->query($sql_mypost_db);
                $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                       FROM (SELECT * FROM hobby_db 
                                       WHERE FIND_IN_SET($uID,member)) AS combined
                                       ORDER BY dateCreate";
                $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);

            } else if($requestCheck && !$myPostCheck){
                $sql_mypost_db = "SELECT * 
                                  FROM hobby_db
                                  JOIN users ON hobby_db.header = users.uID 
                                  WHERE FIND_IN_SET($uID,member) 
                                  OR FIND_IN_SET($uID,request)
                                  ORDER BY dateCreate";
                $result_mypost_db = $conn->query($sql_mypost_db);
                $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                       FROM (SELECT * FROM hobby_db 
                                       WHERE FIND_IN_SET($uID,member) 
                                       OR FIND_IN_SET($uID,request)) AS combined
                                       ORDER BY dateCreate";
                $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);

            } else if(!$requestCheck && $myPostCheck){
                $sql_mypost_db = "SELECT * 
                                  FROM hobby_db
                                  JOIN users ON hobby_db.header = users.uID 
                                  WHERE FIND_IN_SET($uID,member) 
                                  OR $uID = header
                                  ORDER BY dateCreate";
                $result_mypost_db = $conn->query($sql_mypost_db);
                $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                       FROM (SELECT * FROM hobby_db 
                                       WHERE FIND_IN_SET($uID,member) 
                                       OR $uID = header) AS combined
                                       ORDER BY dateCreate";
                $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);

            } else if($requestCheck && $myPostCheck){
                $sql_mypost_db = "SELECT * 
                                  FROM hobby_db
                                  JOIN users ON hobby_db.header = users.uID 
                                  WHERE FIND_IN_SET($uID,member) 
                                  OR $uID = header OR FIND_IN_SET($uID,request)
                                  ORDER BY dateCreate";
                $result_mypost_db = $conn->query($sql_mypost_db);
                $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                       FROM (SELECT * 
                                       FROM hobby_db
                                       WHERE FIND_IN_SET($uID,member) 
                                       OR $uID = header 
                                       OR FIND_IN_SET($uID,request)) AS combined
                                       ORDER BY dateCreate";
                $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);
            }
        }    
    // ----------------------------------------------------------------------------------------------
            if(in_array('library', $_SESSION['filter'])){
                $libraryState  = 'active';
                $myPostCheck = in_array('header', $_SESSION['filter']);
                $hobbyCheck = in_array('hobby', $_SESSION['filter']);
                $requestCheck = in_array('request', $_SESSION['filter']);

                $libraryCheck = in_array('library',$_SESSION['filter']);
                $tutoringCheck = in_array('tutoring',$_SESSION['filter']);
            }
    // ----------------------------------------------------------------------------------------------
                    if(in_array('tutoring', $_SESSION['filter'])){
                        $tutoringState  = 'active';
                        $myPostCheck = in_array('header', $_SESSION['filter']);
                        $hobbyCheck = in_array('hobby', $_SESSION['filter']);
                        $requestCheck = in_array('request', $_SESSION['filter']);

                        $libraryCheck = in_array('library',$_SESSION['filter']);
                        $tutoringCheck = in_array('tutoring',$_SESSION['filter']);
                    }
    // ----------------------------------------------------------------------------------------------
                                if(in_array('header', $_SESSION['filter'])){
                                    $headerState  = 'active';
                                    $myPostCheck = in_array('header', $_SESSION['filter']);

                                    $hobbyCheck = in_array('hobby', $_SESSION['filter']);
                                    $requestCheck = in_array('request', $_SESSION['filter']);

                                    $libraryCheck = in_array('library',$_SESSION['filter']);
                                    $tutoringCheck = in_array('tutoring',$_SESSION['filter']);      

                                    if(!$requestCheck && !$hobbyCheck){
                                        $sql_mypost_db = "SELECT * 
                                                          FROM hobby_db
                                                          JOIN users ON hobby_db.header = users.uID 
                                                          WHERE $uID = header
                                                          ORDER BY dateCreate";
                                        $result_mypost_db = $conn->query($sql_mypost_db);
                                        $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                                               FROM (SELECT * 
                                                               FROM hobby_db
                                                               WHERE $uID = header) AS combined
                                                               ORDER BY dateCreate";
                                        $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);

                                    } else if($requestCheck && !$hobbyCheck){
                                        $sql_mypost_db = "SELECT * 
                                                          FROM hobby_db
                                                          JOIN users ON hobby_db.header = users.uID 
                                                          WHERE $uID = header 
                                                          OR FIND_IN_SET($uID,request)
                                                          ORDER BY dateCreate";
                                        $result_mypost_db = $conn->query($sql_mypost_db);
                                        $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                                               FROM (SELECT * 
                                                               FROM hobby_db
                                                               WHERE $uID = header 
                                                               OR FIND_IN_SET($uID,request)) AS combined
                                                               ORDER BY dateCreate";
                                        $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);

                                    } else if(!$requestCheck && $hobbyCheck){
                                        $sql_mypost_db = "SELECT * 
                                                          FROM hobby_db
                                                          JOIN users ON hobby_db.header = users.uID 
                                                          WHERE $uID = header 
                                                          OR FIND_IN_SET($uID,member)
                                                          ORDER BY dateCreate";
                                        $result_mypost_db = $conn->query($sql_mypost_db);
                                        $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                                               FROM (SELECT * 
                                                               FROM hobby_db
                                                               WHERE $uID = header 
                                                               OR FIND_IN_SET($uID,member)) AS combined
                                                               ORDER BY dateCreate";
                                        $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);

                                    } else if($requestCheck && $hobbyCheck){
                                        $sql_mypost_db = "SELECT * 
                                                          FROM hobby_db
                                                          JOIN users ON hobby_db.header = users.uID 
                                                          WHERE $uID = header 
                                                          OR FIND_IN_SET($uID,request) 
                                                          OR FIND_IN_SET($uID,member)
                                                          ORDER BY dateCreate";
                                        $result_mypost_db = $conn->query($sql_mypost_db);
                                        $sql_mypost_dbCount = "SELECT COUNT(*) AS count 
                                                               FROM (SELECT * 
                                                               FROM hobby_db
                                                               WHERE $uID = header 
                                                               OR FIND_IN_SET($uID,request) 
                                                               OR FIND_IN_SET($uID,member)) AS combined
                                                               ORDER BY dateCreate";
                                        $result_mypost_dbCount = $conn->query($sql_mypost_dbCount);
                                    }
                                }
    // ----------------------------------------------------------------------------------------------

    if ($result_mypost_db !== false && $result_mypost_dbCount !== false && $result_mypost_dbCount->num_rows > 0 
        && ($hobbyCheck || $requestCheck || $myPostCheck) && (!$libraryCheck && !$tutoringCheck)) {
        $row =  $result_mypost_dbCount->fetch_assoc();
        $rowCount = $row['count'];
        $blank = 'ValueExist';
    } else {
        // echo "No rows found";
        $blank = 'None';
    }


} else {
    // echo "No options selected yet.";
}

  
// ------------------------------------------------------------------------------------------------------------------

?>

<?php include 'mypostlist.php';?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HoriSlideBar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>scroll</title>
</head>
<body>
<style>
    body{
        background-color: white !important;
    }
    </style>
    <?php include 'HorizontalSlideBar.php';?>
</body>

