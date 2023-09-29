
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Panel</title>
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/halfmoon/css/halfmoon.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .post-image {
            /* margin-top: 10px;
        width: 345px;
        height: 216px;
        padding-top: 10px;
        width: 150px; */
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
        }

        #fpdiv,
        #bpdiv {
            display: none;
        }
    </style>
    <script>
        function showDiv(clID, el) {
            document.getElementById(clID).style.display = el.value == "" ? 'none' : 'block';
        }
    </script>
</head>
<body class="dark-mode with-custom-css-scrollbars with-custom-webkit-scrollbars">
    <!-- Page wrapper -->
    <div class="page-wrapper with-navbar with-sidebar">
        <!-- Navigation bar -->
        <div class="navbar">
            <div class="navbar-content">
                <button id="sidebar" class="btn btn-square">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <a href="#" class="navbar-brand">
                <img src="images/icon.svg" alt="icon" width="30" height="30"> EMBLEM SMS
            </a>
            <span class="navbar-text">
                <span class="version"></span>
            </span>
        </div>
        <!-- End navigation bar -->
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-menu">
                <h6 class="sidebar-title">Dashboard</h6>
                <div class="sidebar-divider"></div>
                <a href="login.php" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-sign-in-alt"></i>
                    </span>
                    Login
                </a>
                <a href="logout.php" class="sidebar-link sidebar-link-with-icon ">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-sign-out-alt"></i>
                    </span>
                    Logout
                </a>
                <a href="reset-password.php" class="sidebar-link sidebar-link-with-icon active">
                    <span class="sidebar-icon bg-primary text-white">
                        <i class="fa-solid fa-sign-out-alt"></i>
                    </span>
                    Reset password
                </a>
                <h6 class="sidebar-title mt-20">Application</h6>
                <div class="sidebar-divider bg-primary text-white"></div>
                <a href="index.php" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon ">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    SMS 1
                </a>
            </div>
        </div>
        <!-- End sidebar -->
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <div class="container h-full">
                <div class="row justify-content-center align-items-center h-full">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                        <div class="card p-15">
                            <h1 class="card-title">
                                <i class="fa-solid fa-sign-out-alt mr-5"></i> RESET PASSWORD
                            </h1>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                                <div class="form-group text-center">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                                        <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Comfirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn">
                                            <i class="fa-solid fa-sign-in-alt mr-5" href="logout.php"></i>Login</a>
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End content wrapper -->
    </div>
    <!-- End page wrapper -->
    <script src="node_modules/halfmoon/js/halfmoon.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
