
<?php
    session_start();

  include("../config/con_db.php");
// Start
$_SESSION['uID'] = '65010001';
$uID = $_SESSION['uID'];

$sql_search_db = "SELECT * FROM hobby_db ORDER BY dateCreate";
$result_search_db = $conn->query($sql_search_db);
$sql_search_dbCount = "SELECT COUNT(*) AS count FROM (SELECT * FROM hobby_db) AS combined ORDER BY dateCreate";
$result_search_dbCount = $conn->query($sql_search_dbCount);

if ($result_search_db !== false && $result_search_dbCount !== false && $result_search_dbCount->num_rows > 0) {
    $row =  $result_search_dbCount->fetch_assoc();
    $rowCount = $row['count'];
    $blank = 'ValueExist';
} else {
    echo "No rows found";
    $blank = 'None';
}
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

echo "<h2>Selected Options:</h2>";
if (!empty($_SESSION['filter'])) {
    $filter = $_SESSION['filter'];
    print_r($filter);
    // ----------------------------------------------------------------------------------------------
                if(in_array('request', $_SESSION['filter'])){
                    $requestState  = 'active';
                    $requestCheck = in_array('request', $_SESSION['filter']);

                    $hobbyCheck = in_array('hobby', $_SESSION['filter']);
                    $myPostCheck = in_array('header', $_SESSION['filter']);

                    $libraryCheck = in_array('library',$_SESSION['filter']);
                    $tutoringCheck = in_array('tutoring',$_SESSION['filter']);

                        if(!$hobbyCheck && !$myPostCheck){
                            $sql_search_db = "SELECT * 
                                              FROM hobby_db 
                                              WHERE FIND_IN_SET($uID,request)
                                              ORDER BY dateCreate";
                            $result_search_db = $conn->query($sql_search_db);
                            $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                                   FROM (SELECT * FROM hobby_db 
                                                   WHERE FIND_IN_SET($uID,request)) AS combined
                                                   ORDER BY dateCreate";
                            $result_search_dbCount = $conn->query($sql_search_dbCount);

                        } else if($hobbyCheck && !$myPostCheck){
                            $sql_search_db = "SELECT * 
                                              FROM hobby_db 
                                              WHERE FIND_IN_SET($uID,request) 
                                              OR FIND_IN_SET($uID,member)
                                              ORDER BY dateCreate";
                            $result_search_db = $conn->query($sql_search_db);
                            $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                                   FROM (SELECT * FROM hobby_db 
                                                   WHERE FIND_IN_SET($uID,request) 
                                                   OR FIND_IN_SET($uID,member)) AS combined
                                                   ORDER BY dateCreate";
                            $result_search_dbCount = $conn->query($sql_search_dbCount);

                        } else if(!$hobbyCheck && $myPostCheck){
                            $sql_search_db = "SELECT * 
                                              FROM hobby_db 
                                              WHERE FIND_IN_SET($uID,request) 
                                              OR $uID = header
                                              ORDER BY dateCreate";
                            $result_search_db = $conn->query($sql_search_db);
                            $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                                   FROM (SELECT * FROM hobby_db 
                                                   WHERE FIND_IN_SET($uID,request) 
                                                   OR $uID = header) AS combined
                                                   ORDER BY dateCreate";
                            $result_search_dbCount = $conn->query($sql_search_dbCount);

                        } else if($hobbyCheck && $myPostCheck){
                            $sql_search_db = "SELECT * 
                                              FROM hobby_db 
                                              WHERE FIND_IN_SET($uID,request) 
                                              OR $uID = header 
                                              OR FIND_IN_SET($uID,member)
                                              ORDER BY dateCreate";
                            $result_search_db = $conn->query($sql_search_db);
                            $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                                   FROM (SELECT * FROM hobby_db 
                                                   WHERE FIND_IN_SET($uID,request) 
                                                   OR $uID = header OR FIND_IN_SET($uID,member)) AS combined
                                                   ORDER BY dateCreate";
                            $result_search_dbCount = $conn->query($sql_search_dbCount);
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
                $sql_search_db = "SELECT * 
                                  FROM hobby_db 
                                  WHERE FIND_IN_SET($uID,member)
                                  ORDER BY dateCreate";
                $result_search_db = $conn->query($sql_search_db);
                $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                       FROM (SELECT * FROM hobby_db 
                                       WHERE FIND_IN_SET($uID,member)) AS combined
                                       ORDER BY dateCreate";
                $result_search_dbCount = $conn->query($sql_search_dbCount);

            } else if($requestCheck && !$myPostCheck){
                $sql_search_db = "SELECT * 
                                  FROM hobby_db 
                                  WHERE FIND_IN_SET($uID,member) 
                                  OR FIND_IN_SET($uID,request)
                                  ORDER BY dateCreate";
                $result_search_db = $conn->query($sql_search_db);
                $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                       FROM (SELECT * FROM hobby_db 
                                       WHERE FIND_IN_SET($uID,member) 
                                       OR FIND_IN_SET($uID,request)) AS combined
                                       ORDER BY dateCreate";
                $result_search_dbCount = $conn->query($sql_search_dbCount);

            } else if(!$requestCheck && $myPostCheck){
                $sql_search_db = "SELECT * 
                                  FROM hobby_db 
                                  WHERE FIND_IN_SET($uID,member) 
                                  OR $uID = header
                                  ORDER BY dateCreate";
                $result_search_db = $conn->query($sql_search_db);
                $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                       FROM (SELECT * FROM hobby_db 
                                       WHERE FIND_IN_SET($uID,member) 
                                       OR $uID = header) AS combined
                                       ORDER BY dateCreate";
                $result_search_dbCount = $conn->query($sql_search_dbCount);

            } else if($requestCheck && $myPostCheck){
                $sql_search_db = "SELECT * 
                                  FROM hobby_db 
                                  WHERE FIND_IN_SET($uID,member) 
                                  OR $uID = header OR FIND_IN_SET($uID,request)
                                  ORDER BY dateCreate";
                $result_search_db = $conn->query($sql_search_db);
                $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                       FROM (SELECT * 
                                       FROM hobby_db 
                                       WHERE FIND_IN_SET($uID,member) 
                                       OR $uID = header 
                                       OR FIND_IN_SET($uID,request)) AS combined
                                       ORDER BY dateCreate";
                $result_search_dbCount = $conn->query($sql_search_dbCount);
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
                                        $sql_search_db = "SELECT * 
                                                          FROM hobby_db 
                                                          WHERE $uID = header
                                                          ORDER BY dateCreate";
                                        $result_search_db = $conn->query($sql_search_db);
                                        $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                                               FROM (SELECT * 
                                                               FROM hobby_db 
                                                               WHERE $uID = header) AS combined
                                                               ORDER BY dateCreate";
                                        $result_search_dbCount = $conn->query($sql_search_dbCount);

                                    } else if($requestCheck && !$hobbyCheck){
                                        $sql_search_db = "SELECT * 
                                                          FROM hobby_db 
                                                          WHERE $uID = header 
                                                          OR FIND_IN_SET($uID,request)
                                                          ORDER BY dateCreate";
                                        $result_search_db = $conn->query($sql_search_db);
                                        $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                                               FROM (SELECT * 
                                                               FROM hobby_db 
                                                               WHERE $uID = header 
                                                               OR FIND_IN_SET($uID,request)) AS combined
                                                               ORDER BY dateCreate";
                                        $result_search_dbCount = $conn->query($sql_search_dbCount);

                                    } else if(!$requestCheck && $hobbyCheck){
                                        $sql_search_db = "SELECT * 
                                                          FROM hobby_db 
                                                          WHERE $uID = header 
                                                          OR FIND_IN_SET($uID,member)
                                                          ORDER BY dateCreate";
                                        $result_search_db = $conn->query($sql_search_db);
                                        $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                                               FROM (SELECT * 
                                                               FROM hobby_db 
                                                               WHERE $uID = header 
                                                               OR FIND_IN_SET($uID,member)) AS combined
                                                               ORDER BY dateCreate";
                                        $result_search_dbCount = $conn->query($sql_search_dbCount);

                                    } else if($requestCheck && $hobbyCheck){
                                        $sql_search_db = "SELECT * 
                                                          FROM hobby_db 
                                                          WHERE $uID = header 
                                                          OR FIND_IN_SET($uID,request) 
                                                          OR FIND_IN_SET($uID,member)
                                                          ORDER BY dateCreate";
                                        $result_search_db = $conn->query($sql_search_db);
                                        $sql_search_dbCount = "SELECT COUNT(*) AS count 
                                                               FROM (SELECT * 
                                                               FROM hobby_db 
                                                               WHERE $uID = header 
                                                               OR FIND_IN_SET($uID,request) 
                                                               OR FIND_IN_SET($uID,member)) AS combined
                                                               ORDER BY dateCreate";
                                        $result_search_dbCount = $conn->query($sql_search_dbCount);
                                    }
                                }
    // ----------------------------------------------------------------------------------------------

    if ($result_search_db !== false && $result_search_dbCount !== false && $result_search_dbCount->num_rows > 0 
        && ($hobbyCheck || $requestCheck || $myPostCheck) && (!$libraryCheck && !$tutoringCheck)) {
        $row =  $result_search_dbCount->fetch_assoc();
        $rowCount = $row['count'];
        $blank = 'ValueExist';
    } else {
        echo "No rows found";
        $blank = 'None';
    }


} else {
    echo "No options selected yet.";
}

  
// ------------------------------------------------------------------------------------------------------------------

?>
<div class="background">

<?php include 'TagSearch-listFilter.php';?>

</div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HoriSlideBar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/HorizontalSlideBar.js" defer></script>
    <title>scroll</title>
</head>
<style>
    body{
        background-color: white !important;
    }
    </style>
<section class="main-container-scrollBar">
        <div class="tab-nav-bar">
            <div class="tab-navigation">
                <ion-icon class="left" name="chevron-back-outline"></ion-icon>
                <ion-icon class="right" name="chevron-forward-outline"></ion-icon>
            <form action="" method="post" id="filterForm">
            <ul class="tab-menu">
                <li class="tab-btn <?php echo $requestState; ?>" onclick="filter('request')" id="request"><div class="tab-btn-circle"></div>กลุ่มที่รอการตอบรับ</li>
                <li class="tab-btn <?php echo $hobbyState; ?>" onclick="filter('hobby')" id="hobby"><div class="tab-btn-circle"></div>Hobby</li>
                <li class="tab-btn <?php echo $libraryState; ?>" onclick="filter('library')" id="library"><div class="tab-btn-circle"></div>Library</li>
                <li class="tab-btn <?php echo $tutoringState; ?>" onclick="filter('tutoring')" id="tutoring"><div class="tab-btn-circle"></div>Tutoring</li>
                <li class="tab-btn <?php echo $headerState; ?>" onclick="filter('header')" id="header"><div class="tab-btn-circle"></div>โพสต์ของฉัน</li>
            </ul>
                <input type="hidden" name="filterPublish" id="filterPublishInput" value="">
                <input type="hidden" name="filterSave" value="">

            </form>

            </div>
        </div>
    </section>
    <script>

    let filterPublish = [];
    function filter(filter) {
        let tabBtn = document.getElementById(filter);
        let active = tabBtn.classList.contains("active");
        
        if (filter === 'request') {
                filterPublish.push('request');
                console.log(filterPublish);
        }

        if (filter === 'hobby') {
                filterPublish.push('hobby');
                console.log(filterPublish);
        }

        if (filter === 'library') {
                filterPublish.push('library');
                console.log(filterPublish);
        }

        
        if (filter === 'tutoring') {
                filterPublish.push('tutoring');
                console.log(filterPublish);
        }

        if (filter === 'header') {
                filterPublish.push('header');
                console.log(filterPublish);
        }
        document.getElementById("filterPublishInput").value = filterPublish.join(',');
        document.getElementById("filterForm").submit();

    }
</script>