<?php
if (isset($_POST['visitor_id'])) {
    $visitorId = $_POST['visitor_id'];

    // Connect to the database (replace with your database credentials)
    require('../database/config.php');

    if (!$conn) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    // Fetch visitor data based on ID
    $sql = "SELECT * FROM visitors WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $visitorId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($result)) {
        // Format visitor data
        $fullname = $row['fullname'];
        $filename = preg_replace("/[^a-zA-Z0-9\s]/", "", $fullname); // Sanitize filename
        $receiptData = "Full Names: " . $fullname . "\n";
        $receiptData .= "Contact: " . $row['contact'] . "\n";
        $receiptData .= "ID Number: " . $row['idNumber'] . "\n";
        $receiptData .= "Payment Method: " . $row['paymentMethod'] . "\n";
        $receiptData .= "Age: " . $row['age'] . "\n";
        $receiptData .= "Time In: " . $row['timeIn'] . "\n";
        $receiptData .= "Time Out: " . $row['timeOut'] . "\n";
        $receiptData .= "Consultation Report: " . $row['doctor_report'] . "\n";
        $receiptData .= "Scan/xray: " . $row['imaging_report'] . "\n";
        $receiptData .= "Lab: " . $row['lab_report'] . "\n";
        $receiptData .= "Counseller: " . $row['counselling_report'] . "\n";
        $receiptData .= "Pharmacy: " . $row['pharmacy_report'] . "\n";
        $receiptData .= "Cashier: " . $row['cashier_report'] . "\n";
        $receiptData .= "Status: " . ($row['admit'] == 1 ? 'Inpatient' : 'Outpatient') . "\n"; // Displaying status as Inpatient or Outpatient

        // Set headers for file download
        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename="' . $filename . '.txt"');

        // Output receipt data to the browser
        echo $receiptData;
    } else {
        echo "Visitor not found.";
    }

    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
