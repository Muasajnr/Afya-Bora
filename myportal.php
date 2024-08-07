<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal - Afyabora</title>

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
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php
                                    // Connect to the database
                                    require('database/config.php');

                                    // Check if the form was submitted
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        // Retrieve the form data
                                        $contact = $_POST['contact'];
                                        $idNumber = $_POST['id'];

                                        // Query to check if the visitor exists in the database
                                        $sql = "SELECT * FROM visitors WHERE contact = '$contact' AND idNumber = '$idNumber'";
                                        $result = mysqli_query($conn, $sql);

                                        // Check if a row was returned
                                        if ($result && mysqli_num_rows($result) > 0) {
                                            // Fetch the visitor data
                                            $visitor = mysqli_fetch_assoc($result);
                                            // Redirect to visitor_info.php with the visitor data
                                            session_start();
                                            $_SESSION['visitor'] = $visitor;
                                            header("Location: visitor_info.php");
                                            exit();
                                        } else {
                                            // Visitor not found
                                            $error_message = "Visitor not found.";
                                        }
                                    }
                                    ?>
                                    <div>
                                        <h2>Check My Portal with AfyaBora</h2>
                                        <?php if (isset($error_message)) : ?>
                                            <p style="color:red;"><?php echo $error_message; ?></p>
                                        <?php endif; ?>
                                        <form class="user" method="post" action="">
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-user" id="exampleInputEmail"
                                                    aria-describedby="emailHelp" placeholder="Enter Phone Number..." name="contact">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-user" id="exampleInputPassword"
                                                    placeholder="Enter Your ID Number..." name="id">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="remember_me">
                                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                        </form>
                                    </div>

                                    <?php
                                    // Close the connection
                                    mysqli_close($conn);
                                    ?>
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
