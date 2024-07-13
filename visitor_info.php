<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Visitor Information - Afyabora</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Visitor Information</h1>
                                    </div>
                                    <?php
                                    session_start();

                                    if (isset($_SESSION['visitor'])) {
                                        $visitor = $_SESSION['visitor'];
                                        echo "<h2>My Data:</h2>";
                                        echo "<p>Full Name: " . $visitor['fullname'] . "</p>";
                                        echo "<p>Position: " . $visitor['position'] . "</p>";
                                        echo "<p>Contact: " . $visitor['contact'] . "</p>";
                                        echo "<p>ID Number: " . $visitor['idNumber'] . "</p>";
                                        echo "<p>Attendance Purpose: " . $visitor['attendPurpose'] . "</p>";
                                        echo "<p>Payment Method: " . $visitor['paymentMethod'] . "</p>";
                                        echo "<p>Age: " . $visitor['age'] . "</p>";
                                        echo "<p>Role: " . $visitor['role'] . "</p>";
                                        echo "<p>Visit Purpose: " . $visitor['visitPurpose'] . "</p>";
                                        echo "<p>Patient Visited Name: " . $visitor['patientVisitedName'] . "</p>";
                                        echo "<p>Relationship: " . $visitor['relationship'] . "</p>";
                                        echo "<p>Time In: " . $visitor['timeIn'] . "</p>";
                                        echo "<p>Time Out: " . $visitor['timeOut'] . "</p>";
                                        echo "<p>Doctor: " . $visitor['doctor'] . "</p>";
                                        echo "<p>Lab: " . $visitor['lab'] . "</p>";
                                        echo "<p>Imaging: " . $visitor['imaging'] . "</p>";
                                        echo "<p>Counsellor: " . $visitor['counseller'] . "</p>";
                                        echo "<p>Admit: " . $visitor['admit'] . "</p>";
                                        echo "<p>Doctor Report: " . $visitor['doctor_report'] . "</p>";
                                        echo "<p>Lab Report: " . $visitor['lab_report'] . "</p>";
                                        echo "<p>Imaging Report: " . $visitor['imaging_report'] . "</p>";
                                        echo "<p>Counselling Report: " . $visitor['counselling_report'] . "</p>";
                                        echo "<p>Pharmacy Report: " . $visitor['pharmacy_report'] . "</p>";
                                        echo "<p>Cashier Report: " . $visitor['cashier_report'] . "</p>";
                                        echo "<p>Ward Report: " . $visitor['ward_report'] . "</p>";
                                    } else {
                                        echo "<p>No visitor data found.</p>";
                                    }

                                    // Clear the session data
                                    session_unset();
                                    session_destroy();
                                    ?>
                                    <div>
                                        <a href="myportal.php" class="btn btn-primary btn-user btn-block">Back to Login</a>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
</body>

</html>
