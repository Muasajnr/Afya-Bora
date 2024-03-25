<?php
    // Include your database connection details (assuming config.php is in the database folder)
    require('../database/config.php');

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $fullName = $_POST['fullName'];
    $position = $_POST['position'];
    $contact = $_POST['contact'];
    $idNumber = $_POST['idNumber'];
    $attendPurpose = $_POST['attendPurpose'];
    $paymentMethod = $_POST['paymentMethod'];
    $age = $_POST['age'];
    $role = $_POST['role'];
    $visitPurpose = $_POST['visitPurpose'];
    $patientVisitedName = $_POST['patientVisitedName'];
    $relationship = $_POST['relationship'];
    $currentDate = date('Y-m-d');
    $timeIn = date('Y-m-d H:i:s', strtotime($currentDate . ' ' . $_POST['timeIn']));
    $timeOut = date('Y-m-d H:i:s', strtotime($currentDate . ' ' . $_POST['timeOut']));

                

    // Prepare SQL statement (prevents SQL injection)
    $sql = "INSERT INTO visitors (fullname, position, contact, idNumber, attendPurpose, paymentMethod, age, role, visitPurpose, patientVisitedName, relationship, timeIn, timeOut)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "sssssssssssss", $fullName, $position, $contact, $idNumber, $attendPurpose, $paymentMethod, $age, $role, $visitPurpose, $patientVisitedName, $relationship, $timeIn, $timeOut);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Visitor information added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close statement and connection
    mysqli_stmt_close($stmt);
   
}

// Check connection established earlier (optional, assuming connection details are correct)
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AFYA BORA || Reception</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-hospital"></i>
                </div>
                <div class="sidebar-brand-text mx-3">AFYA BOR <sup>A</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            

            <!-- Heading -->
            <div class="sidebar-heading">
                Reception
            </div>

            

            <!-- Nav Item -  -->
            <li class="nav-item">
                <a class="nav-link" href="addvisitor.php">
                    <i class="fas fa-edit fa-fw"></i>
                    <span>Add Visitor</span></a>
            </li>

            <!-- Nav Item -  -->
            <li class="nav-item">
                <a class="nav-link" href="allpatientsvisitors.php">
                    <i class="fas fa-edit fa-fw"></i>
                    <span>Manage Visitor</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="../img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>AFYA BORA</strong> <br>Precision, Care, Innovation: Shaping Tomorrow's Healthcare Today.</p>
                <a class="btn btn-success btn-sm" href="#">Our Website</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <?php
require_once('../database/config.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Fetch messages where receiver is "admin"
$sql = "SELECT * FROM messages WHERE receiver_name = 'reception'";
$result = mysqli_query($conn, $sql);

// Start dropdown list
echo '<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">';
echo '<h6 class="dropdown-header">Alerts Center</h6>';

// Check if there are any messages
if (mysqli_num_rows($result) > 0) {
    // Loop through each message
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<a class="dropdown-item d-flex align-items-center" href="#" id="openMessagePopupBtn">';
        echo '<div class="mr-3">';
        
        // Set default icon
        $iconClass = 'fas fa-envelope text-primary';
        
        echo '<div class="icon-circle bg-primary">';
        echo '<i class="' . $iconClass . ' text-white"></i>';
        echo '</div>';
        echo '</div>';
        echo '<div>';
        echo '<div class="small text-gray-500">' . $row['sender_name'] . ' from ' . $row['department'] . ' - ' . $row['time_sent'] . '</div>';
        echo '<span class="font-weight-bold">' . $row['message'] . '</span>';
        echo '</div>';
        echo '</a>';
    }
} else {
    // Display "No alerts found" as a dropdown item
    echo '<a class="dropdown-item d-flex align-items-center" href="#"><div class="mr-3"><div class="icon-circle bg-danger"><i class="fas fa-exclamation-circle text-white"></i></div></div><div>No alerts found</div></a>';
}

// Display "Show All Alerts" link
echo '<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>';

// Close dropdown list
echo '</div>';

// Close database connection
mysqli_close($conn);
?>



                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1" id="openMessagePopupBtn1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">1</span>
                            </a>
                            
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Reception</span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Vistor</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- New Patient/Visitor Form -->
                        <div class="col-xl-12 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add New Patient/Visitor</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Your form content goes here -->
                                    <form method="post" action="addvisitor.php">
        <!-- Full Name -->
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Enter Full Name">
        </div>

        <!-- Position (Patient, Non-Patient, Caregiver) -->
        <div class="form-group">
            <label for="position">Position</label>
            <select class="form-control" id="position" name="position" onchange="showFieldsBasedOnPosition()">
                <option value="patient" selected>Patient</option>
                <option value="nonPatient">Non-Patient(Others)</option>
                <option value="caregiver">Caregiver</option>
            </select>
        </div>

        <!-- Contact -->
        <div class="form-group" id="contactField">
            <label for="contact">Contact</label>
            <input type="tel" class="form-control" name="contact" id="contact" placeholder="Enter Contact Number">
        </div>

        <!-- ID Number -->
        <div class="form-group" id="idNumberField">
            <label for="idNumber">ID Number</label>
            <input type="text" class="form-control" name="idNumber" id="idNumber" placeholder="Enter ID Number">
        </div>

        <!-- Attend Purpose (for patients) -->
        <div class="form-group" id="attendPurposeField">
            <label for="attendPurpose">Attend Purpose</label>
            <select class="form-control" name="attendPurpose" id="attendPurpose">
                <option value="doctor">Doctor</option>
                <option value="imaging">Imaging</option>
                <option value="lab">Lab</option>
                <option value="pharmacist">Pharmacist</option>
                <option value="counseling">Counseling</option>
            </select>
        </div>

        <!-- Payment Method -->
        <div class="form-group" id="paymentMethodField">
            <label for="paymentMethod">Payment Method</label>
            <input type="text" class="form-control" name="paymentMethod" id="paymentMethod" placeholder="Enter Payment Method">
        </div>

        <!-- Age -->
        <div class="form-group" id="ageField">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="Enter Age">
        </div>

        <!-- Role (for non-patients) -->
        <div class="form-group" id="roleField" style="display: none;">
            <label for="role">Role/Title</label>
            <input type="text" class="form-control" name="role" id="role" placeholder="Enter Role">
        </div>

        <!-- Visit Purpose (for non-patients) -->
        <div class="form-group" id="visitPurposeField" style="display: none;">
            <label for="visitPurpose">Visit Purpose</label>
            <input type="text" class="form-control" name="visitPurpose" id="visitPurpose" placeholder="Enter Visit Purpose">
        </div>

        <!-- Patient Visited Name and Relationship (for caregivers) -->
        <div class="form-group" id="patientVisitedField" style="display: none;">
            <label for="patientVisitedName">Patient Visited Name</label>
            <input type="text" class="form-control" name="patientVisitedName" id="patientVisitedName"
                placeholder="Enter Patient Visited Name">
        </div>
        <div class="form-group" id="relationshipField" style="display: none;">
            <label for="relationship">Relationship</label>
            <input type="text" class="form-control" name="relationship" id="relationship" placeholder="Enter Relationship">
        </div>

        <!-- Time In and Time Out -->
        <div class="form-group" id="timeInField" >
            <label for="timeIn">Time In</label>
            <input type="time" class="form-control" name="timeIn" id="timeIn">
        </div>
        

        <div class="form-group" id="timeOutField">
            <label for="timeOut">Time Out</label>
            <input type="time" class="form-control" name="timeOut" id="timeOut">
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Add Patient/Visitor</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                        
                    
                    </div>
                    

                    <!-- Content Row -->

                   
                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2024 AFYA BORA</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../index.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showFieldsBasedOnPosition() {
            // Reset all fields
            resetFields();

            // Get the selected position
            var position = document.getElementById('position').value;

            // Show fields based on the selected position
            if (position === 'patient') {
                showField('idNumberField');
                showField('attendPurposeField');
                showField('paymentMethodField');
                showField('ageField');
            } else if (position === 'caregiver') {
                showField('idNumberField');
                showField('ageField');
                showField('patientVisitedField');
                showField('relationshipField');
                showField('timeInField');
                showField('timeOutField');
            } else if (position === 'nonPatient') {
                showField('idNumberField');
                showField('ageField');
                showField('roleField');
                showField('visitPurposeField');
                showField('timeInField');
                showField('timeOutField');
            }
        }

        function showField(fieldId) {
            document.getElementById(fieldId).style.display = 'block';
        }

        function resetFields() {
            // Define all field IDs
            var fieldIds = [
                'idNumberField',
                'attendPurposeField',
                'paymentMethodField',
                'ageField',
                'roleField',
                'visitPurposeField',
                'patientVisitedField',
                'relationshipField',
                'timeInField',
                'timeOutField'
            ];

            // Hide all fields
            for (var i = 0; i < fieldIds.length; i++) {
                document.getElementById(fieldIds[i]).style.display = 'none';
            }
        }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>




</body>
<style>  /* Styles for the popup form */
.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    width: 80%; /* Adjust width as needed */
    max-width: 400px; /* Set maximum width */
    padding: 20px;
    border-radius: 10px;
    z-index: 9999; /* Ensure it appears on top of other content */
}

.popup-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Drop shadow effect */
    text-align: center;
}

.close-btn {
    position: absolute;
    top: 15px;
    right: 25px;
    cursor: pointer;
    font-size: 24px;
    color: red;
}

/* Style for the form elements */
label {
    display: block;
    margin-bottom: 10px;
}

select,
input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    background-color: #007bff; /* Blue color for the button */
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3; /* Darker blue color on hover */
}
</style>


<!-- Popup form for composing a message -->
<div id="messagePopup" class="popup">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <h2>Compose Message</h2>
        <form action="../messages/insert_message.php" method="post" id="messageForm">
            <label for="senderDepartment">Sender Department:</label>
            <select id="senderDepartment" name="senderDepartment">
                <option value="reception">Reception</option>
            </select>
            <label for="senderName">Sender Name:</label>
            <input type="text" id="senderName" name="senderName" required>
            <label for="receiverName">Receiver Name:</label>
            <select id="receiverName" name="receiverName">
                <option value="admin">Admin</option>
                <option value="reception">Reception</option>
                <option value="doctor">Doctor</option>
                <option value="lab">Lab</option>
                <option value="imaging">Imaging</option>
                <option value="counselor">Counselor</option>
                <option value="pharmacy">Pharmacy</option>
                <option value="cashier">Cashier</option>
                <option value="ward">Ward</option>
            </select>
            <label for="messageContent">Message:</label>
            <textarea id="messageContent" name="messageContent" rows="4" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</div>






<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Get references to elements
    var messagePopup = document.getElementById("messagePopup");
    var openMessagePopupBtn = document.getElementById("openMessagePopupBtn");
    var openMessagePopupBtn1 = document.getElementById("openMessagePopupBtn1");
    var closeBtn = messagePopup.querySelector(".close-btn");
    var messageForm = document.getElementById("messageForm");

    // Function to open the popup form
    function openPopup() {
        // Reset form fields
        messageForm.reset();
        // Show the popup form
        messagePopup.style.display = "block";
    }

    // Function to close the popup form
    function closePopup() {
        // Hide the popup form
        messagePopup.style.display = "none";
    }

    // Event listener for the "Compose Message" button
    openMessagePopupBtn.addEventListener("click", openPopup);
    openMessagePopupBtn1.addEventListener("click", openPopup);

    // Event listener for the close button
    closeBtn.addEventListener("click", function() {
        closePopup(); // Close the popup form
        location.reload();
    });

    // Event listener to close the popup when user clicks outside the content
    window.addEventListener("click", function(event) {
        if (event.target === messagePopup) {
            closePopup(); // Close the popup form
            location.reload();
        }
    });

});

</script>

</html>
