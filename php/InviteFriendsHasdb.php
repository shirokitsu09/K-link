<?php
session_start();
ob_start();
include '../config/con_db.php"';

$hID = $_GET['hID'];
$uID_Sender = $_SESSION['uID'];
// $searchName = $_COOKIE['search'];
// $searchFaculty = $_COOKIE['faculty'];
// $searchMajor = $_COOKIE['major'];

// echo "<br>$searchName<br>$searchFaculty<br>$searchMajor<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/invitefriendsHasdb.css">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Invite Friends</title>
</head>
<script>
    


    var Faculty_ID_Array = [];
    console.log(Faculty_ID_Array);

    var Major_ID_Array = [];
    console.log(Major_ID_Array);
</script>

<body>
    <div class="header-invitefriends">
        <div class="name-header-invitefriends" id="name-header">ชวนเพื่อน</div>
        <div class="LINE"></div>
        <div class="noti-button-icon">
            <a href="#noti">
                <ion-icon name="notifications"></ion-icon>
            </a>
        </div>
        <img class="backBtnInviteF" alt="" src="../images/backbutton.svg" id="backbuttonInviteFriends"
            onclick="goBack()" />
    </div>

    <div class="InviteFriend-Frame">

        <!-- ===================================================={ faculty }========================================== -->

        <div class="select-menu-facultys">
            <div class="select-btn-faculty">
                <span class="sBtn-text-facultys">คณะ</span>
                <i class="bx bx-chevron-down"></i>
            </div>

            <ul class="options-facultys">
                <!-- <li class="options-faculty">
                    <span class="options-faculty-text">วิศวกรรมศาสตร์</span>
                </li> -->
                <?php

                $queryfac = $conn->query("SELECT * FROM faculty ORDER BY fID");

                if ($queryfac->num_rows > 0) {
                    while ($row = $queryfac->fetch_assoc()) {
                        $facultyName = $row['fName'];
                        $facultyId = $row['fID'];
                        ?>
                        <li class="options-faculty">
                            <span class="options-faculty-text" id="<?php echo $facultyId ?>">
                                <?php echo $facultyName ?>
                            </span>

                        </li>
                        <?php
                    }
                } else { ?>
                <?php } ?>

            </ul>
        </div>

        <!-- ===================================================={ department/ไม่ใช้แล้ว }========================================== -->

        <!-- <div class="select-menu-departments">
            <div class="select-btn-department">
                <span class="sBtn-text-departments">ภาควิชา</span>
                <i class="bx bx-chevron-down"></i>
            </div>

            <ul class="options-departments">
                <li class="options-department">
                    <span class="options-department-text">ภาควิชา1</span>
                </li>

            </ul>
        </div> -->
        <!-- =============================================={ major }======================================================== -->
        <div class="select-menu-majors">
            <div class="select-btn-major">
                <span class="sBtn-text-majors">สาขาวิชา</span>
                <i class="bx bx-chevron-down"></i>
            </div>

            <ul class="options-majors">
                <li class="options-major">
                    <span class="options-major-text">-- โปรดเลือกคณะก่อน --</span>
                </li>
            </ul>
        </div>

        <!-- ============================================{ search-box }===========================================  -->
        <div class="SearchInviteFriend">
            <form method="post" action="../php/InviteFriendsHasdb.php" id="formsearch">
                <div class="SearchInviteFriend-box">
                    <input type="text" name="searchAccount" placeholder="ชื่อ หรือ รหัสนักศึกษา "
                        id="SearchInviteFriend-box" value="<?php //echo $searchName ?>">
   
                    <button class="SearchInviteFriend-icon-box" name="submit" type="submit" onclick="saveCookie();">
                        <ion-icon name="search" class="SearchInviteFriend-icon"></ion-icon>
                    </button>
                </div>
            </form>
        </div>
        <!-- ============================================{ Name List }============================================= -->
        <div class="Name-List">
            <ul class="Name-List-ul" id="name-list-ul">


                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                    $searchText = $_POST['searchAccount'];

                    $queryUser = $conn->query("SELECT * FROM users WHERE 
                            (fullname LIKE '%$searchText%' AND fullname REGEXP BINARY '[A-Z]') OR 
                            (username LIKE '%$searchText%' AND username REGEXP BINARY '[A-Z]') OR 
                            (uID LIKE '%$searchText%' AND uID REGEXP BINARY '[0-9]') ORDER BY uID");


                    if ($queryUser->num_rows > 0) {
                        while ($row = $queryUser->fetch_assoc()) {
                            $userfullName = $row['fullname'];
                            $userId = $row['uID'];
                            ?>
                            <li class="Name-List-li">
                                <div class="ListInfo-container">
                                    <h3 class="st-Name">
                                        <?php echo $userfullName ?>
                                    </h3>
                                    <p class="st-Id">
                                        <?php echo $userId ?>
                                    </p>
                                </div>
                                <form action="invite_db.php" method="POST">
                                    <button class="Invite-btn" name="invite"><img class="invitePeople_icon" alt=""
                                            src="../images/invitePeople_icon.svg" />ชวน
                                    </button>
                                    <input type="hidden" name="invitedID" value="<?php echo $userId ?>">
                                    <input type="hidden" name="invitedGroup" value="<?php echo $hID ?>">
                                    <input type="hidden" name="invitePerson" value="<?php echo $uID_Sender ?>">
                                </form>
                            </li>
                            <?php
                        }
                    } else {
                        ?>
                        <li class="Name-List-li">
                            <div class="ListInfo-container">
                                <h3 class="st-Name">
                                    ไม่พบบัญชีผู้ใช้ที่ตรงกัน
                                </h3>
                                <!-- <p class="st-Id"></p> -->
                            </div>
                        </li>
                        <?php
                    }
                } else {
                    $queryUser = $conn->query("SELECT * FROM users ORDER BY uID");

                    if ($queryUser->num_rows > 0) {
                        while ($row = $queryUser->fetch_assoc()) {
                            $userfullName = $row['fullname'];
                            $userId = $row['uID'];
                            ?>
                            <li class="Name-List-li">
                                <div class="ListInfo-container">
                                    <h3 class="st-Name">
                                        <?php echo $userfullName ?>
                                    </h3>
                                    <p class="st-Id">
                                        <?php echo $userId ?>
                                    </p>
                                </div>
                                <form action="invite_db.php" method="POST">
                                    <button class="Invite-btn" name="invite"><img class="invitePeople_icon" alt=""
                                            src="../images/invitePeople_icon.svg" />ชวน
                                    </button>
                                    <input type="hidden" name="invitedID" value="<?php echo $userId ?>">
                                    <input type="hidden" name="invitedGroup" value="<?php echo $hID ?>">
                                    <input type="hidden" name="invitePerson" value="<?php echo $uID_Sender ?>">
                                </form>
                            </li>
                            <?php
                        }
                    } else { ?>
                    <?php } ?>
                <?php } ?>

            </ul>
        </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->


<!-- ============================================{ faculty/department/major }=========================================== -->
<script>
    var facultyID = "";
    var majorID = "";
    
    // ============================================{ faculty }===========================================

    const selectmenufacultys = document.querySelector(".select-menu-facultys"),
        selectbtnfaculty = selectmenufacultys.querySelector(".select-btn-faculty"),
        optionsfaculty = selectmenufacultys.querySelectorAll(".options-faculty"),
        sBtntextfacultys = selectmenufacultys.querySelector(".sBtn-text-facultys");//,
    // selectmenumajors = document.querySelector(".select-menu-majors");


    selectbtnfaculty.addEventListener("click", () => {
        selectmenufacultys.classList.toggle("active");
        // selectmenudepartments.classList.remove("active");
        selectmenumajors.classList.remove("active");
        Faculty_ID_Array = [];
        Major_ID_Array = [];
    });


    optionsfaculty.forEach(optionF => {
        optionF.addEventListener("click", () => {
            let selectorOptionFaculty = optionF.querySelector(".options-faculty-text").innerText;
            sBtntextfacultys.innerText = selectorOptionFaculty;
            sBtntextmajors.innerText = "สาขาวิชา";
            console.log(selectorOptionFaculty);
            document.cookie = "faculty="+selectorOptionFaculty;

            

            // const listContainer = document.querySelector('.Name-List-ul'); // ลบ Namelist ตอนที่ยังไมเลือกสาขาออกก่อน
            // if (listContainer !== null && listContainer.hasChildNodes()) {
            //     while (listContainer.firstChild) {
            //         listContainer.removeChild(listContainer.firstChild);
            //     }
            // }


            let departMentAttribute = optionF.querySelector(".options-faculty-text");
            let departMentID = departMentAttribute.getAttribute('id');
            Faculty_ID_Array.push(departMentID);
            facultyID = Faculty_ID_Array[0];
            console.log(Faculty_ID_Array[0]);

            const optionsMajorList = document.querySelector('.options-majors');
            optionsMajorList.innerHTML = ''; // เคลียร์ค่าเก่าที่อาจมีอยู่ใน options-majors
            const listContainer = document.querySelector('.Name-List-ul');
            listContainer.innerHTML = ''; // เคลียร์ค่าเก่าที่อาจมีอยู่ใน options-majors



            fetch('../config/conChorn_db.php')
                .then(response => response.json())
                .then(data => {
                    data.data1.forEach(item => {
                        processData_Major(item);
                    });
                    data.data2.forEach(item => {
                        processData_UID2(item);
                    });

                })
                .catch(error => {
                    console.error('Error:', error);
                });



            optionsfaculty.forEach(optionFacColor => {
                optionFacColor.style.backgroundColor = '';

            });
            optionF.style.backgroundColor = 'var(--accent)';

            selectmenufacultys.classList.remove("active");
            // window.location.reload();
        });
    });

    // // ============================================{ department }===========================================
    // const ,
    //     selectbtndepartment = selectmenudepartments.querySelector(".select-btn-department"),
    //     optionsdepartment = selectmenudepartments.querySelectorAll(".options-department"),
    //     sBtntextdepartments = selectmenudepartments.querySelector(".sBtn-text-departments");




    // selectbtndepartment.addEventListener("click", () => {
    //     selectmenudepartments.classList.toggle("active");
    //     selectmenufacultys.classList.remove("active");
    //     selectmenumajors.classList.remove("active");


    // });


    // optionsdepartment.forEach(optionF => {
    //     optionF.addEventListener("click", () => {
    //         let selectorOptiondepartment = optionF.querySelector(".options-department-text").innerText;
    //         sBtntextdepartments.innerText = selectorOptiondepartment;
    //         // console.log(selectorOptiondepartment);
    //         optionsdepartment.forEach(optionFacColor => {
    //             optionFacColor.style.backgroundColor = '';
    //         });
    //         optionF.style.backgroundColor = 'var(--accent)';

    //         selectmenudepartments.classList.remove("active");
    //     });
    // });

    // ============================================{ major }=========================================== // 
    const selectmenumajors = document.querySelector(".select-menu-majors"),
        selectbtnmajor = selectmenumajors.querySelector(".select-btn-major"),
        optionsmajor = selectmenumajors.querySelectorAll(".options-major"),
        sBtntextmajors = selectmenumajors.querySelector(".sBtn-text-majors");

    selectbtnmajor.addEventListener("click", () => {
        selectmenumajors.classList.toggle("active");
        selectmenufacultys.classList.remove("active");
        // selectmenudepartments.classList.remove("active");
        Major_ID_Array = [];
    });


    optionsmajor.forEach(optionM => {
        optionM.addEventListener("click", () => {
            let selectorOptionmajor = optionM.querySelector(".options-major-text").innerText;
            sBtntextmajors.innerText = selectorOptionmajor;
            // console.log(selectorOptionmajor);

            // const listContainer = document.querySelector('.Name-List-ul'); // ลบ Namelist ตอนที่ยังไมเลือกสาขาออกก่อน
            // if (listContainer !== null && listContainer.hasChildNodes()) {
            //     while (listContainer.firstChild) {
            //         listContainer.removeChild(listContainer.firstChild);
            //     }
            // }
            const listContainer = document.querySelector('.Name-List-ul');
            listContainer.innerHTML = ''; // เคลียร์ค่าเก่าที่อาจมีอยู่ใน options-majors


            optionsmajor.forEach(optionFacColor => {
                optionFacColor.style.backgroundColor = '';
            });
            optionM.style.backgroundColor = 'var(--accent)';

            selectmenumajors.classList.remove("active");
        });
    });

</script>
<!-- ============================================={ Major Filter List }============================================================== -->
<script>
    function processData_Major(Major) {
        const optionsMajorList = document.querySelector('.options-majors'),
            optionsmajor = selectmenumajors.querySelectorAll(".options-major");
        // optionsMajorList.innerHTML = ''; // เคลียร์ค่าเก่าที่อาจมีอยู่ใน options-majors

        const fID = Major.fID;
        const mID = Major.mID;
        const mName = Major.mName;
        const status = Major.status;

        const dataItem = {
            fID: fID,
            mID: mID,
            mName: mName,
            status: status
        };

        if (fID === facultyID && facultyID !== null) {
            const optionMajor = document.createElement('li');
            optionMajor.classList.add('options-major');

            const optionMajorText = document.createElement('span');
            optionMajorText.classList.add('options-major-text');
            optionMajorText.setAttribute('id', mID);
            optionMajorText.textContent = mName;

            optionMajor.appendChild(optionMajorText);
            optionsMajorList.appendChild(optionMajor);
        }
        optionsmajor.forEach(optionM => {
            optionM.addEventListener("click", () => {
                let selectorOptionmajor = optionM.querySelector(".options-major-text").innerText;
                sBtntextmajors.innerText = selectorOptionmajor;
                console.log(selectorOptionmajor);
                document.cookie = "major="+selectorOptionmajor;


                let MajorAttribute = optionM.querySelector(".options-major-text");
                let MajorID = MajorAttribute.getAttribute('id');


                // const listContainer = document.querySelector('.Name-List-ul'); // ลบ Namelist ตอนที่ยังไมเลือกสาขาออกก่อน
                // if (listContainer !== null && listContainer.hasChildNodes()) {
                //     while (listContainer.firstChild) {
                //         listContainer.removeChild(listContainer.firstChild);
                //     }
                // }



                if (!Major_ID_Array.includes(MajorID)) {
                    Major_ID_Array = [];
                    Major_ID_Array.push(MajorID);
                    majorID = Major_ID_Array[0];
                    console.log(majorID); //ทำให้ majorID มีค่าเดียว

                    const listContainer = document.querySelector('.Name-List-ul');
                    listContainer.innerHTML = ''; // เคลียร์ค่าเก่าที่อาจมีอยู่ใน options-majors

                    fetch('../config/conChorn_db.php')
                        .then(response => response.json())
                        .then(data => {
                            // data.data1.forEach(item => {
                            //     processData1_Major(item);
                            // });
                            data.data2.forEach(item => {
                                processData_UID1(item);
                            });

                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }
                optionsmajor.forEach(optionMajColor => {
                    optionMajColor.style.backgroundColor = '';
                });
                optionM.style.backgroundColor = 'var(--accent)';

                selectmenumajors.classList.remove("active");
            });
        });
    }
</script>
<!-- ============================================={ UFL1 : User Filter List 1 }============================================================== -->
<script>
    // ============================================={ UFL : User Filter List 1 }==============================================================
    function processData_UID1(USER) {

        const listContainer = document.querySelector('.Name-List-ul');


        if (listContainer !== null) {
            const uID = USER.uID;
            const fID = USER.fID;
            const mID = USER.mID;
            const fullname = USER.fullname;
            const username = USER.username;
            const status = USER.status;

            const dataItem = {
                uID: uID,
                fID: fID,
                mID: mID,
                fullname: fullname,
                username: username,
                status: status
            };



            if ((fID === facultyID && facultyID !== null) && (mID === majorID && majorID !== null)) { // กรองตอนเลือกคณะและสาขา

                // if (listContainer !== null && listContainer.hasChildNodes()) { // ลบ Namelist ตอนที่ยังไมเลือกสาขาออกก่อน
                //     while (listContainer.firstChild) {
                //         listContainer.removeChild(listContainer.firstChild);
                //     }
                // }
                const listItemHTML = `
                    <li class="Name-List-li">
                        <div class="ListInfo-container">
                            <h3 class="st-Name">${username}</h3>
                            <p class="st-Id">${uID}</p>
                        </div>
                        <form action="invite_db.php" method="POST">
                                    <button class="Invite-btn" name="invite"><img class="invitePeople_icon" alt=""
                                            src="../images/invitePeople_icon.svg" />ชวน
                                    </button>
                                    <input type="hidden" name="invitedID" value="<?php echo $userId ?>">
                                    <input type="hidden" name="invitedGroup" value="<?php echo $hID ?>">
                                    <input type="hidden" name="invitePerson" value="<?php echo $uID_Sender ?>">
                                </form>
                    </li>
                `;
                listContainer.innerHTML += listItemHTML;
                console.log("สร้าง list สำเร็จ mID");
                const newButtons = document.querySelectorAll('.Invite-btn');


                newButtons.forEach(button => { //ผูกฟังก์ชันการเปลี่ยนสีปุ่มหลังจาก li ถูกสร้างใหม่
                    button.addEventListener('click', function () {
                        changeColor(this);
                    });
                });
            } else {
                // listItemHTML = "";
                // listContainer.innerHTML += listItemHTML;
                console.log("ยังไม่ได้กรอง mid");

            }
        } else {
            console.log("ไม่พบอ็อบเจ็กต์ที่มี id เป็น 'Name-List-ul' ในเอกสาร HTML");
        }
    }

</script>
<!-- ============================================={ UFL2 : User Filter List 2 }============================================================== -->
<script>
    // ============================================={ UFL : User Filter List 2 }==============================================================
    function processData_UID2(USER) {

        const listContainer = document.querySelector('.Name-List-ul');


        if (listContainer !== null) {
            const uID = USER.uID;
            const fID = USER.fID;
            const mID = USER.mID;
            const fullname = USER.fullname;
            const username = USER.username;
            const status = USER.status;

            const dataItem = {
                uID: uID,
                fID: fID,
                mID: mID,
                fullname: fullname,
                username: username,
                status: status
            };



            if (fID === facultyID && facultyID !== null) { // กรองตอนเลือกคณะและสาขา

                // if (listContainer !== null && listContainer.hasChildNodes()) { // ลบ Namelist ตอนที่ยังไมเลือกสาขาออกก่อน
                //     while (listContainer.firstChild) {
                //         listContainer.removeChild(listContainer.firstChild);
                //     }
                // }
                const listItemHTML = `
    <li class="Name-List-li">
        <div class="ListInfo-container">
            <h3 class="st-Name">${username}</h3>
            <p class="st-Id">${uID}</p>
        </div>
        <form action="invite_db.php" method="POST">
                                    <button class="Invite-btn" name="invite"><img class="invitePeople_icon" alt=""
                                            src="../images/invitePeople_icon.svg" />ชวน
                                    </button>
                                    <input type="hidden" name="invitedID" value="<?php echo $userId ?>">
                                    <input type="hidden" name="invitedGroup" value="<?php echo $hID ?>">
                                    <input type="hidden" name="invitePerson" value="<?php echo $uID_Sender ?>">
                                </form>
    </li>
`;
                listContainer.innerHTML += listItemHTML;
                console.log("สร้าง list สำเร็จ fID");
                const newButtons = document.querySelectorAll('.Invite-btn');


                newButtons.forEach(button => { //ผูกฟังก์ชันการเปลี่ยนสีปุ่มหลังจาก li ถูกสร้างใหม่
                    button.addEventListener('click', function () {
                        changeColor(this);
                    });
                });
            } else {
                // listItemHTML = "";
                // listContainer.innerHTML += listItemHTML;
                console.log("ยังไม่ได้กรอง fid");

            }
        } else {
            console.log("ไม่พบอ็อบเจ็กต์ที่มี id เป็น 'Name-List-ul' ในเอกสาร HTML");
        }
    }

</script>
<!-- ============================================={ สีปุ่มเชิญเพื่อน }============================================================== -->
<script>
    const buttons = document.querySelectorAll('.Invite-btn');
    var IconInvite = '';
    let timers = new Map();
    // Major_ID_Array = [];
    buttons.forEach(button => {
        const backgroundColor = button.style.backgroundColor;
        button.addEventListener('click', function () {
            changeColor(button);
        });
    });

    function changeColor(button) {
        const backgroundColor = button.style.backgroundColor;
        const borderColor = button.style.borderColor;
        if (backgroundColor === 'var(--success)') {
            return;
        }
        else if (borderColor === 'var(--accent)') {
            IconInvite = '<img class="invitePeople_icon"src="../images/invitePeople_icon.svg" />';
            cancelTimer(button);
        }
        else {
            button.style.backgroundColor = '#fff';
            button.style.borderColor = 'var(--accent)';
            button.style.color = 'var(--accent)';
            button.innerHTML = 'เลิกทำ';

            const timer = setTimeout(function () {
                IconInvite = '<i class="fa fa-check"></i>';
                button.style.backgroundColor = 'var(--success)';
                button.style.borderColor = '';
                button.style.color = 'var(--neutrals2)';
                button.style.width = '100px';
                button.innerHTML = IconInvite + 'ชวนแล้ว';
                timers.delete(button);
            }, 3000);
            timers.set(button, timer);
        }
    }

    function cancelTimer(button) {
        clearTimeout(timers.get(button));
        button.style.backgroundColor = '';
        button.style.borderColor = '';
        button.style.color = 'var(--neutrals2)';
        timers.delete(button);
        button.innerHTML = IconInvite + 'ชวน';
    }

    let SearchInviteFriend = document.querySelector('.SearchInviteFriend-icon-box');
    function saveCookie() {
        let searchName = document.getElementById('SearchInviteFriend-box');
        document.cookie = "search="+searchName.value;
        selectorOptionFaculty.innerText = getCookie(faculty);
        selectorOptionmajor.innerText = getCookie(major);
        searchName.innerText = getCookie(search);

    }

    function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
        c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
        }
    }
    return "";
    }

</script>
<!-- ============================================={ ปุ่มกลับ }============================================================== -->
<script>

    function goBack() {
        window.history.back();
    }    
</script>

</html>
<?php ob_end_flush(); ?>