<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
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
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
                <a href="logout.html" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-sign-out-alt"></i>
                    </span>
                    Logout
                </a>
                <h6 class="sidebar-title mt-20">Application</h6>
                
            </div>
        </div>
        <!-- End sidebar -->
                        
    </div>
    <!-- End page wrapper -->
    <script src="node_modules/halfmoon/js/halfmoon.min.js"></script>
    <script src="js/srv1.js" type="text/javascript" ></script>
</body>
</html>
