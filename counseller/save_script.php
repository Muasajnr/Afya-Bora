<?php
// Connect to the database
require('../database/config.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
    // Loop through each submitted counselling report
    foreach ($_POST['counselling_report'] as $id => $counselling_report) {
        // Sanitize the input
        $counselling_report = mysqli_real_escape_string($conn, $counselling_report);
        $id = intval($id); // Ensure ID is an integer

        // Check if the record already exists in the counseller table
        $check_sql = "SELECT * FROM counseller WHERE visitor_id = $id";
        $check_result = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($check_result) > 0) {
            // Update the existing record
            $update_sql = "UPDATE counseller SET counselling_report = '$counselling_report' WHERE visitor_id = $id";

            if (mysqli_query($conn, $update_sql)) {
                echo "Record updated successfully for visitor ID: $id<br>";
            } else {
                echo "Error updating record: " . mysqli_error($conn) . "<br>";
            }
        } else {
            // Insert a new record
            $insert_sql = "INSERT INTO counseller (visitor_id, counselling_report) VALUES ($id, '$counselling_report')";

            if (mysqli_query($conn, $insert_sql)) {
                echo "Record inserted successfully for visitor ID: $id<br>";
            } else {
                echo "Error inserting record: " . mysqli_error($conn) . "<br>";
            }
        }
    }
} else {
    // If the form was not submitted properly
    echo "Form submission error: Data not received.";
}

// Close the connection
mysqli_close($conn);
?>
