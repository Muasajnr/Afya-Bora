
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

            

            <!-- Nav Item - -->
            <li class="nav-item">
                <a class="nav-link" href="addvisitor.php">
                    <i class="fas fa-edit fa-fw"></i>
                    <span>Add Visitor</span></a>
            </li>


            <!-- Nav Item  -->
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
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
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
                        <h1 class="h3 mb-2 text-gray-800">All Visitors</h1>
                        
                        <!-- DataTales  -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">All Patients & Visitors</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <tr style="background-color:whitesmoke;border:2px;">
                                            <th></th> 
                                            <th>Full Name</th>
                                            <th>Position</th>
                                            <th>Contact</th>
                                            <th>ID Number</th>
                                            <th>Attend Purpose</th>
                                            <th>Payment Method</th>
                                            <th>Age</th>
                                            <th>Role</th>
                                            <th>Visit Purpose</th>
                                            <th>Patient Visited Name</th>
                                            <th>Relationship</th>
                                            <th>TimeIn</th>
                                            <th>TimeOut</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
// Include your database connection details
require('../database/config.php');

// Check connection established earlier 
if (!$conn) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST['id']) && isset($_POST['editTimeOut'])) {
        $id = $_POST['id'];
        $editTimeOut = $_POST['editTimeOut'];

        // Format the time properly before inserting into the database
        $formattedTimeOut = date("Y-m-d") . " " . $editTimeOut;

        // Prepare and execute SQL statement to update timeOut for the specified ID
        $updateSql = "UPDATE visitors SET timeOut = '$formattedTimeOut' WHERE id = $id";
        if (mysqli_query($conn, $updateSql)) {
            echo "Time Out updated successfully";
        } else {
            echo "Error updating time Out: " . mysqli_error($conn);
        }
    } else {
        echo "ID and Time Out are required";
    }
}

// Fetch visitor data from the database
$sql = "SELECT * FROM visitors";
$result = mysqli_query($conn, $sql);

// Check if any results found
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // Loop through results and display data in table rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<form method='post' action=''>";
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['position'] . "</td>";
            echo "<td><a href='tel:" . $row['contact'] . "'>" . $row['contact'] . "</a></td>";
            echo "<td>" . $row['idNumber'] . "</td>";
            echo "<td>" . $row['attendPurpose'] . "</td>";
            echo "<td>" . $row['paymentMethod'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['role'] . "</td>";
            echo "<td>" . $row['visitPurpose'] . "</td>";
            echo "<td>" . $row['patientVisitedName'] . "</td>";
            echo "<td>" . $row['relationship'] . "</td>";
            echo "<td>" . $row['timeIn'] . "</td>";
            echo "<td> <input type='time' name='editTimeOut' value='" . $row['timeOut'] . "' required> " . $row['timeOut'] . "</td>"; 

            echo "<td><input type='hidden' name='id' value='" . $row['id'] . "'><button class='btn-primary'type='submit'>Save</button></td>";
            echo "</tr>";
            echo "</form>";
        }
    } else {
        echo "<tr><td colspan='14'>No visitors found!</td></tr>";
    }
} else {
    die("Error: " . mysqli_error($conn));
}

// Close connection
mysqli_close($conn);
?>





                                        </tbody>
                                    </table>
                                
            

                                </div>
                            </div>
                        </div>
    
                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Afya Bora 2024</span>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        /* Overlay */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        label{
            text-align:left;
        }

        /* Popup Form */
        .popup {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 80%; 
            max-width: 600px; 
            height: 80vh;
            overflow-y: auto; /* Enable vertical scrolling */
        }

        /* Close Button */
        .close-btn {
            /* position: absolute; */
            top: 10px;
            right: 10px;
            cursor: pointer;
            color:red;
            margin-left: auto;
        }

        /* Form Styling */
        form {
            display: grid;
            gap: 10px;
            margin-top: 15px;
        }

        /* Button Styling */
        .submit-btn {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>


<!-- Popup Form -->
<div class="overlay" id="editOverlay">
    <div class="popup">
        <span class="close-btn" onclick="closePopup()">&times;Close</span>
        <h2>Edit Record</h2>
        <form id="editForm" method="post" action="updateVisitor.php">
          
            <?php
            // Include your database connection details
            require('../database/config.php');
            
            // Check connection established earlier 
            if (!$conn) {
                die("Failed to connect to MySQL: " . mysqli_connect_error());
            }
            
            // Fetch visitor data from the database
            $sql = "SELECT * FROM visitors";
            $result = mysqli_query($conn, $sql);
            
            // Check if any results found
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    // Fetch only the first row since we are editing one record at a time
                    $row = mysqli_fetch_assoc($result);
                    
                    // Output form input fields with fetched data
                    echo '<input type="hidden" id="editId" name="id" value="' . $row['id'] . '">';
                    echo '<label for="editFullName">Full Name:</label>';
                    echo '<input type="text" id="editFullName" name="editFullName" value="' . $row['fullname'] . '">';
                    echo '<label for="editPosition">Position:</label>';
                    echo '<input type="text" id="editPosition" name="editPosition" value="' . $row['position'] . '">';
                    echo '<label for="editContact">Contact:</label>';
                    echo '<input type="tel" id="editContact" name="editContact" value="' . $row['contact'] . '">';
                    echo '<label for="editIdNumber">ID Number:</label>';
                    echo '<input type="text" id="editIdNumber" name="editIdNumber" value="' . $row['idNumber'] . '">';
                    echo '<label for="editAttendPurpose">Attend Purpose:</label>';
                    echo '<input type="text" id="editAttendPurpose" name="editAttendPurpose" value="' . $row['attendPurpose'] . '">';
                    echo '<label for="editPaymentMethod">Payment Method:</label>';
                    echo '<input type="text" id="editPaymentMethod" name="editPaymentMethod" value="' . $row['paymentMethod'] . '">';
                    echo '<label for="editAge">Age:</label>';
                    echo '<input type="text" id="editAge" name="editAge" value="' . $row['age'] . '">';
                    echo '<label for="editRole">Role:</label>';
                    echo '<input type="text" id="editRole" name="editRole" value="' . $row['role'] . '">';
                    echo '<label for="editVisitPurpose">Visit Purpose:</label>';
                    echo '<input type="text" id="editVisitPurpose" name="editVisitPurpose" value="' . $row['visitPurpose'] . '">';
                    echo '<label for="editPatientVisitedName">Patient Visited Name:</label>';
                    echo '<input type="text" id="editPatientVisitedName" name="editPatientVisitedName" value="' . $row['patientVisitedName'] . '">';
                    echo '<label for="editRelationship">Relationship:</label>';
                    echo '<input type="text" id="editRelationship" name="editRelationship" value="' . $row['relationship'] . '">';
                    echo '<label for="editTimeIn">Time In:</label>';
                    echo '<input type="text" id="editTimeIn" name="editTimeIn" value="' . $row['timeIn'] . '">';
                    echo '<label for="editTimeOut">Time Out:</label>';
                    echo '<input type="time" id="editTimeOut" name="editTimeOut" value="' . $row['timeOut'] . '" required>';
                    
                } else {
                    echo "<p>No visitors found!</p>";
                }
            } else {
                die("Error: " . mysqli_error($conn));
            }
            
            // Close connection
            mysqli_close($conn);
            ?>
            
            <!-- Button to save changes -->
            <button class="submit-btn" onclick="saveChanges(<?php echo $row['id']; ?>)">Save Changes</button>
        </form> <!-- End of form -->
    </div>
</div>

<script>
    function openPopup(id, fullName, position, contact, idNumber, attendPurpose, paymentMethod, age, role, visitPurpose, patientVisitedName, relationship, timeIn, timeOut) {
        document.getElementById('editFullName').value = fullName;
        document.getElementById('editPosition').value = position;
        document.getElementById('editContact').value = contact;
        document.getElementById('editIdNumber').value = idNumber;
        document.getElementById('editAttendPurpose').value = attendPurpose;
        document.getElementById('editPaymentMethod').value = paymentMethod;
        document.getElementById('editAge').value = age;
        document.getElementById('editRole').value = role;
        document.getElementById('editVisitPurpose').value = visitPurpose;
        document.getElementById('editPatientVisitedName').value = patientVisitedName;
        document.getElementById('editRelationship').value = relationship;
        document.getElementById('editTimeIn').value = timeIn;
        document.getElementById('editTimeOut').value = timeOut;

        document.getElementById('editOverlay').style.display = 'flex';
    }

    function closePopup() {
        document.getElementById('editOverlay').style.display = 'none';
    }

    function saveChanges(id) {
        // Get form data
        var fullName = document.getElementById('editFullName').value;
        var position = document.getElementById('editPosition').value;
        var contact = document.getElementById('editContact').value;
        var idNumber = document.getElementById('editIdNumber').value;
        var attendPurpose = document.getElementById('editAttendPurpose').value;
        var paymentMethod = document.getElementById('editPaymentMethod').value;
        var age = document.getElementById('editAge').value;
        var role = document.getElementById('editRole').value;
        var visitPurpose = document.getElementById('editVisitPurpose').value;
        var patientVisitedName = document.getElementById('editPatientVisitedName').value;
        var relationship = document.getElementById('editRelationship').value;
        var timeIn = document.getElementById('editTimeIn').value; // This line should be removed if 'timeIn' is automatically generated
        var timeOut = document.getElementById('editTimeOut').value;
        timeOut = timeOut + ':00';
        // Prepare data for submission
        var formData = new FormData();
        formData.append('id', id); // Include the 'id' parameter
        formData.append('editFullName', fullName);
        formData.append('editPosition', position);
        formData.append('editContact', contact);
        formData.append('editIdNumber', idNumber);
        formData.append('editAttendPurpose', attendPurpose);
        formData.append('editPaymentMethod', paymentMethod);
        formData.append('editAge', age);
        formData.append('editRole', role);
        formData.append('editVisitPurpose', visitPurpose);
        formData.append('editPatientVisitedName', patientVisitedName);
        formData.append('editRelationship', relationship);
        formData.append('editTimeOut', timeOut); // Make sure 'timeOut' is included

        // Send asynchronous POST request
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'updateVisitor.php', true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
            } else {
                console.error('Error updating record: ' + xhr.statusText);
            }
        };

        var urlEncodedData = new URLSearchParams(formData).toString();
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(urlEncodedData);

        closePopup();
    }
</script>
</body>
</html>
