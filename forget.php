<?php

include 'include/db.php';

session_start();

$logged_user_id = $_SESSION['logged_user_id'];

if ($logged_user_id != '') {

    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

}

$selector = '';
$validator = '';

$stmt = $con->prepare("SELECT * FROM account_recovery WHERE selector = ? AND expires >= NOW()");
$stmt->execute([$selector]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


if (!empty($results)) {
    $calc = hash('sha256', hex2bin($validator));
    if (hash_equals($calc, $results[0]['token'])) {
        // The reset token is valid. Authenticate the user.
        ?> <script> alert('verified'); </script> <?php
    }
    // Remove the token from the DB regardless of success or failure.
}



?>

<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>Ticket Management System</title>
    <meta name="description" content="Ticket Management System - Urban Development Authority">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages/login/login-5.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/plugins/select_plugin/style.css">
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

            <!--begin::Aside-->
            <div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside"
                 style="background-image: url(assets/media/bg/bg.jpg);">
                <div class="kt-grid__item">
                    <a href="login.php" class="kt-login__logo">
                        <img src="assets/media/logos/logo-4.png">
                    </a>
                </div>
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
                    <div class="kt-grid__item kt-grid__item--middle">
                        <h3 style="font-size: 50px; color: #595d6e;" class="kt-login__title">TICKET MANAGEMENT
                            SYSTEM</h3>
                        <h4 style="color: #595d6e;" class="kt-login__subtitle">Manage all the troubleshooting tickets
                            among divisions in<br>
                            Urban Development Authority</h4>
                    </div>
                </div>
                <div class="kt-grid__item">
                    <div class="kt-login__info">
                        <div style="color: #595d6e;" class="kt-login__copyright">
                            <?php echo date("Y"); ?> &copy URBAN DEVELOPMENT AUTHORITY
                        </div>
                        <div class="kt-login__menu">

                            <a style="color: #595d6e;" href="#" class="kt-link">Contact</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--begin::Aside-->

            <!--begin::Content-->
            <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

                <!--begin::Head-->
                <div class="kt-login__head">
                    <span class="kt-login__signup-label">Today : </span>&nbsp;&nbsp;
                    <a href="#" class="kt-link kt-login__signup-link"><?php
                        $string = date("Y-m-d");
                        $date = DateTime::createFromFormat("Y-m-d", $string);
                        echo $date->format("d ");
                        $date = DateTime::createFromFormat("Y-m-d", $string);
                        echo $date->format("M");
                        $date = DateTime::createFromFormat("Y-m-d", $string);
                        echo $date->format(" Y ");

                        ?></a>
                </div>

                <!--end::Head-->

                <!--begin::Body-->
                <div class="kt-login__body">
                    <!--begin::Signin-->
                    <div class="kt-login__form">

                        <div class="kt-login__title">

                            <img width="50%" src="assets/media/logos/security.gif">
                            <br> <br>


                        <div id="forget_form_reset" style="text-align: center;" class="kt-login__forgot">
                            <div class="kt-login__title">
                                <h3>Reset Your Password</h3>
                                <h5 style="font-weight: lighter; font-size: medium;">Enter your email to reset the
                                    password.
                                </h5>


                                <div class="kt-login__form">
                                    <form class="kt-form" action="" method="post">
                                        <div class="form-group">
                                            <input style="font-weight: 500; letter-spacing: 2px; font-size: 1.1rem;"
                                                   class="form-control bg-secondary" type="text" placeholder="Enter Your Email Address" name="email"
                                                   id="kt_email" autocomplete="off">
                                        </div>
                                        <div style="text-align: right;" >
                                            <br><br>
                                            <button style="width: 100px;" name="" id=""
                                                    class="btn btn-brand btn-pill btn-elevate">Request
                                            </button>
                                            <button id="" class="btn btn-outline-brand btn-pill">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--end::Signin-->


                </div>

                <!--end::Body-->
            </div>

            <!--end::Content-->


        </div>
    </div>
</div>

<!-- end:: Page -->


<!-- begin::Global Config(global config for global JS sciprts) -->
<script>

    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#2c77f4",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js" type="text/javascript"></script>
<script src="assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<script src="assets/plugins/select_plugin/script.js"></script>
<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
