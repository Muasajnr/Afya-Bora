<?php
// Function to connect to the database and fetch visitor data
function getVisitorData() {
    // Connect to the database (replace with your database credentials)
    require('../database/config.php');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM visitors";
    $result = $conn->query($sql);
    
    if ($result === false) {
        die("Error fetching data: " . $conn->error);
    }

    $data = '';

    // Fetch column names
    $fields = array_keys(mysqli_fetch_assoc($result));
    $data .= implode("\t", $fields) . "\n"; // Concatenate column titles

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            // Concatenate visitor data into a string
            $data .= implode("\t", $row) . "\n";
        }
    }

    $conn->close();
    return $data;
}

// Get visitor data
$visitorData = getVisitorData();

// Set headers for file download
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="visitor_report.txt"');

// Output visitor data to the browser
echo $visitorData;
?>