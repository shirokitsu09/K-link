<?php

  session_start();
  include '../config/con_db.php';
  // $user_uID = $_SESSION['uID'];
      $user_uID = '65010004';
  // if(isset($_GET['hID'])) {
      $mID = 'h022410-002';
      $feature = 'hobby_db';
      $featureID = 'hID';
  // }

  $sql_member = "SELECT 
                      a.header,
                      a.member,
                      b.username,
                      b.uID
                      FROM $feature AS a
                      LEFT JOIN users AS b
                      ON FIND_IN_SET(b.uID, a.member)
                      WHERE a.$featureID = '$mID'
                ";

  $result_member = $conn->query($sql_member);
  $i = 0;
  while ($row = $result_member->fetch_assoc()) {
      $members = explode(',', $row['member']);
      $members_count = COUNT($members);

        if ($row['header'] == $members[$i]) {
          // echo "Header: " . $members[$i] . "<br>";
          echo "Header: " . $row['username'] . "<br>";

            for ($j = 0 ; $j < $members_count ; $j++) {
              if ($row['header'] != $members[$j]) {
                // echo "Member: " . $members[$j] . "<br>";

                  $sql_username = "SELECT 
                      username,
                      uID
                      FROM users
                      WHERE uID = '$members[$j]'
                      ";
                  $result_username = $conn->query($sql_username);
                  $row_username = $result_username->fetch_assoc();

                echo "Member: " . $row_username['username'] . "<br>";
              }
            }
        }
      $i++;
  }
?>
