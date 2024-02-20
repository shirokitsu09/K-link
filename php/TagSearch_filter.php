
<?php
    session_start();

  include("../config/con_db.php");
// Start
$sql_search_db = "SELECT * FROM hobby_db UNION SELECT * FROM library_db";
$result_search_db = $conn->query($sql_search_db);
$sql_search_dbCount = "SELECT COUNT(*) AS count FROM (SELECT * FROM hobby_db UNION SELECT * FROM library_db) AS combined";
$result_search_dbCount = $conn->query($sql_search_dbCount);

if ($result_search_db !== false && $result_search_dbCount !== false && $result_search_dbCount->num_rows > 0) {
    $row =  $result_search_dbCount->fetch_assoc();
    $rowCount = $row['count'];
} else {
    echo "No rows found";
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
        if(in_array('createBy', $_SESSION['filter'])){
            $createByState  = 'active';
            $createBy = $_SESSION['uID'];
        } else {
            $createByState  = '';
            $createBy = '';
        }
    // ----------------------------------------------------------------------------------------------
            if(in_array('member', $_SESSION['filter'])){
                $memberState  = 'active';
                $member = $_SESSION['uID'];
            } else {
                $memberState  = '';
                $member = '';
            }
    // ----------------------------------------------------------------------------------------------
                if(in_array('request', $_SESSION['filter'])){
                    $requestState  = 'active';
                    $request = $_SESSION['uID'];
                } else {
                    $requestState  = '';
                    $request = '';
                }
    // ----------------------------------------------------------------------------------------------
                    if(in_array('hobby', $_SESSION['filter'])){
                        
                    } else {
                        $hobbyState  = '';
                        $hobby = '';
                    }
    // ----------------------------------------------------------------------------------------------
                        if(in_array('library', $_SESSION['filter'])){
                            $libraryState  = 'active';
                            $myPostLibrary = $_SESSION['uID'];
                            $hobbyCheck = in_array('hobby', $_SESSION['filter']);

                            if ($hobbyCheck) {
                                $first = 'SELECT * FROM hobby_db';
                                $second = 'UNION SELECT * FROM library_db';  
                            }

                        } else {
                            $libraryState  = '';
                            $library = '';
                        }
    // ----------------------------------------------------------------------------------------------
                                if(in_array('header', $_SESSION['filter'])){
                                    $headerState  = 'active';
                                    $myPostHeader = $_SESSION['uID'];
                                } else {
                                    $headerState  = '';
                                    $header = '';
                                }

    $sql_search_db = "$first $second";
    
    $result_search_db = $conn->query($sql_search_db);
    $sql_search_dbCount = "SELECT COUNT(*) AS count FROM ($first $second $last) AS combined";
    $result_search_dbCount = $conn->query($sql_search_dbCount);
                                                                   
if ($result_search_db !== false && $result_search_dbCount !== false && $result_search_dbCount->num_rows > 0) {
        $row =  $result_search_dbCount->fetch_assoc();
        $rowCount = $row['count'];
    } else {
        echo "No rows found";
    }

} else {
    echo "No options selected yet.";
}

  
// ------------------------------------------------------------------------------------------------------------------

?>
<div class="background">

<?php include 'TagSearch-list.php';?>

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
            <form action="TagSearch_db.php" method="post" id="filterForm">
            <ul class="tab-menu">
                <li class="tab-btn <?php echo $createByState; ?>" onclick="filter('createBy')" id="createBy"><div class="tab-btn-circle"></div>กลุ่มที่สร้าง</li>
                <li class="tab-btn <?php echo $memberState; ?>" onclick="filter('member')" id="member"><div class="tab-btn-circle"></div>กลุ่มที่เข้าร่วมแล้ว</li>
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
        if (filter === 'createBy') {
            // if(!active){
                // tabBtn.classList.add("active");
                filterPublish.push('createBy');
                console.log(filterPublish);
            // }else {
            //     tabBtn.classList.remove("active");
            // }
        }

        if (filter === 'member') {
            // if(!active) {
                // tabBtn.classList.add("active");
                filterPublish.push('member');
                console.log(filterPublish);
            // }else {
                // let index = filterPublish.indexOf('member')
                // tabBtn.classList.remove("active");
                // if (index > -1) {
                //     filterPublish.splice(index, 1);
                //     console.log(filterPublish);
                // }
            // }
        }

        if (filter === 'request') {
            // if(!active){
            //     tabBtn.classList.add("active");
                filterPublish.push('request');
                console.log(filterPublish);
            // }else {
            //     let index = filterPublish.indexOf('request')
            //     tabBtn.classList.remove("active");
            //     if (index > -1) {
            //         filterPublish.splice(index, 1);
            //         console.log(filterPublish);
            //     }
            // }
        }

        if (filter === 'hobby') {
            // if(!active){
            //     tabBtn.classList.add("active");
                filterPublish.push('hobby');
                console.log(filterPublish);
            // }else {
            //     let index = filterPublish.indexOf('hobby')
            //     tabBtn.classList.remove("active");
            //     if (index > -1) {
            //         filterPublish.splice(index, 1);
            //         console.log(filterPublish);
            //     }
            // }
        }

        if (filter === 'library') {
            // if(!active){
            //     tabBtn.classList.add("active");
                filterPublish.push('library');
                console.log(filterPublish);
            // }else {
            //     let index = filterPublish.indexOf('library')
            //     tabBtn.classList.remove("active");
            //     if (index > -1) {
            //         filterPublish.splice(index, 1);
            //         console.log(filterPublish);
            //     }
            // }
        }

        if (filter === 'tutoring') {
            // if(!active){
            //     tabBtn.classList.add("active");
                filterPublish.push('tutoring');
                console.log(filterPublish);
            // }else {
            //     let index = filterPublish.indexOf('tutoring')
            //     tabBtn.classList.remove("active");
            //     if (index > -1) {
            //         filterPublish.splice(index, 1);
            //         console.log(filterPublish);
            //     }
            // }
        }

        if (filter === 'header') {
            // if(!active){
            //     tabBtn.classList.add("active");
                filterPublish.push('header');
                console.log(filterPublish);
            // }else {
            //     let index = filterPublish.indexOf('header')
            //     tabBtn.classList.remove("active");
            //     if (index > -1) {
            //         filterPublish.splice(index, 1);
            //         console.log(filterPublish);
            //     }
            // }
        }
        document.getElementById("filterPublishInput").value = filterPublish.join(',');
        document.getElementById("filterForm").submit();

    }
</script>