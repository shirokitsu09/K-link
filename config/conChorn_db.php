<?php
include '../config/con_db.php';

$sql1 = "SELECT * FROM (
    SELECT *, 'dentistry' AS source FROM dentistry
    UNION ALL
    SELECT *, 'medicine' AS source FROM medicine
    UNION ALL
    SELECT *, 'agriculturaltechnology' AS source FROM agriculturaltechnology
    UNION ALL
    SELECT *, 'architecture' AS source FROM architecture
    UNION ALL
    SELECT *, 'businessadmin' AS source FROM businessadmin
    UNION ALL
    SELECT *, 'educationindustialtech' AS source FROM educationindustialtech
    UNION ALL
    SELECT *, 'engineer' AS source FROM engineer
    UNION ALL
    SELECT *, 'foodindustial' AS source FROM foodindustial
    UNION ALL
    SELECT *, 'informationtechnology' AS source FROM informationtechnology
    UNION ALL
    SELECT *, 'internationalcollege' AS source FROM internationalcollege
    UNION ALL
    SELECT *, 'liberalart' AS source FROM liberalart
    UNION ALL
    SELECT *, 'musicengineering' AS source FROM musicengineering
    UNION ALL
    SELECT *, 'science' AS source FROM science
) AS all_tables ORDER BY fID";

$result1 = $conn->query($sql1);

$data1 = array();
if ($result1->num_rows > 0) {
    while ($row1 = $result1->fetch_assoc()) {
        $data1[] = $row1;
    }
} else {
    echo "0 results";
}

// Fetch data from 'science' table
$sql2 = "SELECT * FROM users ORDER BY uID";
$result2 = $conn->query($sql2);

$data2 = array();
if ($result2->num_rows > 0) {
    while ($row2 = $result2->fetch_assoc()) {
        $data2[] = $row2;
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();

// Combine data from both queries
$response = array(
    "data1" => $data1,
    "data2" => $data2
);

// Send JSON response
echo json_encode($response);
?>