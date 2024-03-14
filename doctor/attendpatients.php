<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AFYA BORA || Doctor</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-zjBQR0WbOG6N9xJ06uJCviMRC9CgjxWGd9xfExkMJndd6aA+WiPMW+JQGJqQ9zMXT9RXQ9nBc7Kn06uA6qFPi3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
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
                Doctor
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="attendpatients.php">
                    <i class="fas fa-edit fa-fw"></i>
                    <span>Attend Patients</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="mypatients.php">
                    <i class="fas fa-list fa-fw"></i>
                    <span>My Patients</span></a>
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
                        <h1 class="h3 mb-2 text-gray-800">Attend Patients</h1>
                        
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">All Patients </h6>
                            </div>
                            

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Full Names</th>
                                                <th>Contact</th>
                                                <th>ID Number</th>
                                                <th>Payment Method</th>
                                                <th>Age</th>
                                                <th>Time In</th>
                                                <th>Time Out</th>
                                                <th>Attend Purpose</th>
                                                <th>Consultation Report</th>
                                                <th>Lab</th>
                                                <th>Scan/xray</th>
                                                <th>Counseller</th>
                                            </tr>
                                        </thead>
<?php
// Include database connection details
require('../database/config.php');

// Function to handle visitor data
function handleVisitorData($conn)
{
    // Fetch visitor data
    $sql = "SELECT * FROM visitors WHERE attendPurpose = 'doctor'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<tbody>";
            echo '<form method="post" action="attendpatients.php">';
            while ($row = mysqli_fetch_assoc($result)) {
                $cellId = 'statusCell_' . $row['id'];
                $cellStatus = isset($_SESSION[$cellId]) ? $_SESSION[$cellId] : 'red';

                // Check if record exists
                $checkSql = "SELECT * FROM doctor WHERE idNumber = '{$row['idNumber']}'";
                $checkResult = mysqli_query($conn, $checkSql);
                $recordExists = mysqli_num_rows($checkResult) > 0;

                // Initialize variables for current data
                $details = '';
                $labChecked = '';
                $imagingChecked = '';
                $counsellerChecked = '';

                // Fetch current data if the record exists
                if ($recordExists) {
                    $fetchRow = mysqli_fetch_assoc($checkResult);

                    // Set current data to variables
                    $details = $fetchRow['details'];
                    $labChecked = $fetchRow['lab'] == 1 ? 'checked' : '';
                    $imagingChecked = $fetchRow['imaging'] == 1 ? 'checked' : '';
                    $counsellerChecked = $fetchRow['counseller'] == 1 ? 'checked' : '';
                }

                // Display the table row with current data
                echo "<tr>";
                echo "<td id='statusCell' style='background-color: $cellStatus;'>";
                echo '<i class="fas fa-check-circle text-success"></i>';
                echo "</td>";
                echo "<td>" . $row['fullname'] . "</td>";
                echo "<td><a href='tel:" . $row['contact'] . "'>" . $row['contact'] . "</a></td>";
                echo "<td>" . $row['idNumber'] . "</td>";
                echo "<td>" . $row['paymentMethod'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['timeIn'] . "</td>";
                echo "<td>" . $row['timeOut'] . "</td>";
                echo "<td>" . $row['attendPurpose'] . "</td>";
                echo "<td>
                    <style>
                        #editor-container_" . $row['id'] . " {
                            width: 350px; 
                            max-height: 400px; 
                            margin: auto;
                        }
                    </style>
                    <div id='editor-container_" . $row['id'] . "' name='details'>$details</div>
                    <input type='hidden' id='details_" . $row['id'] . "' name='details" . $row['id'] . "' value='$details'>
                    <script src='https://cdn.quilljs.com/1.3.6/quill.js'></script>
                    <script>
                        var quill_" . $row['id'] . " = new Quill('#editor-container_" . $row['id'] . "', {
                            theme: 'snow',
                            modules: {
                                toolbar: [
                                    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                                    ['blockquote', 'code-block'],
                                    [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                                    [{ 'script': 'sub' }, { 'script': 'super' }],    // superscript/subscript
                                    [{ 'indent': '-1' }, { 'indent': '+1' }],        // outdent/indent
                                    [{ 'direction': 'rtl' }],                         // text direction
                                    [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                                    [{ 'color': [] }, { 'background': [] }],        // dropdown with defaults from theme
                                    [{ 'font': [] }],
                                    [{ 'align': [] }],
                                    ['clean']                                         // remove formatting button
                                ]
                            },
                            name: 'details_" . $row['id'] . "',
                            placeholder: 'write your report here...',
                            autofocus: true,
                        });
                        quill_" . $row['id'] . ".on('text-change', function () {
                            document.getElementById('details_" . $row['id'] . "').value = quill_" . $row['id'] . ".root.innerHTML;
                        });
                    </script>
                </td>";

                echo '<td><input type="checkbox" id="lab' . $row['id'] . '" name="lab' . $row['id'] . '" ' . $labChecked . '></td>';
                echo '<td><input type="checkbox" id="imaging' . $row['id'] . '" name="imaging' . $row['id'] . '" ' . $imagingChecked . '></td>';
                echo '<td><input type="checkbox" id="counseller' . $row['id'] . '" name="counseller' . $row['id'] . '" ' . $counsellerChecked . '></td>';
                echo '<td>
                    <button class="btn btn-primary" type="submit" name="save' . $row['id'] . '">Save</button><br><br>
                    <button class="btn btn-danger" type="button" onclick="modifyPatient(' . $row['id'] . ')">Modify</button><br><br>
                    <button class="btn btn-success" type="button" onclick="updateStatus(' . $row['id'] . ')">Done</button>
                </td>';
                echo "</tr>";

                if (isset($_POST['save' . $row['id']])) {
                    // Escape input for security
                    $details = mysqli_real_escape_string($conn, $_POST['details' . $row['id']]);
                    $lab = isset($_POST['lab' . $row['id']]) ? 1 : 0;
                    $imaging = isset($_POST['imaging' . $row['id']]) ? 1 : 0;
                    $counseller = isset($_POST['counseller' . $row['id']]) ? 1 : 0;

                    if ($recordExists) {
                        // Update existing record
                        $updateSql = "UPDATE doctor SET details = '$details', lab = $lab, imaging = $imaging, counseller = $counseller, status = '$cellStatus' WHERE idNumber = '{$row['idNumber']}'";
                        mysqli_query($conn, $updateSql);
                    } else {
                        // Insert new record
                        $insertSql = "INSERT INTO doctor (fullname, contact, idNumber, paymentMethod, age, timeIn, timeOut, details, lab, imaging, counseller, status)
                                           VALUES ('{$row['fullname']}', '{$row['contact']}', '{$row['idNumber']}', '{$row['paymentMethod']}', '{$row['age']}', '{$row['timeIn']}', '{$row['timeOut']}', '$details', $lab, $imaging, $counseller, '$cellStatus')";
                        mysqli_query($conn, $insertSql);
                    }
                }
            }
            echo '</form>';
            echo "</tbody>";
        } else {
            echo "<tr><td colspan='4'>No visitors found!</td></tr>";
        }
    } else {
        die("Error: " . mysqli_error($conn));
    }
}

// Call the function to handle visitor data
handleVisitorData($conn);

mysqli_close($conn);
?>










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
    
    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Assuming the button with class 'btn-success' triggers the 'Done' action
    var doneButton = document.querySelector('.btn-success');
    if (doneButton) {
        doneButton.addEventListener('click', function() {
            // Assuming $row['id'] is the unique identifier for each row
            var cellId = 'statusCell_' + <?php echo $row['id']; ?>;
            var statusCell = document.getElementById(cellId);

            if (statusCell) {
                // Change background color to green
                statusCell.style.backgroundColor = 'green';
                
                // Store the status in local storage
                localStorage.setItem(cellId, 'green');
            }
        });
    }

    // Restore cell status from local storage on page load
    <?php
    // Assuming $row['id'] is the unique identifier for each row
    $cellId = 'statusCell_' . $row['id'];
    $cellStatus = isset($_SESSION[$cellId]) ? $_SESSION[$cellId] : 'red';
    ?>
    var statusCell = document.getElementById('<?php echo $cellId; ?>');
    if (statusCell) {
        var storedStatus = localStorage.getItem('<?php echo $cellId; ?>');
        if (storedStatus) {
            statusCell.style.backgroundColor = storedStatus;
        }
    }
});
</script>

    <!-- Bootstrap core JavaScript-->
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

</body>

</html>