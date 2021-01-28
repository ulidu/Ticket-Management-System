<?php

include 'include/db.php';

session_start();

$logged_user_id = $_SESSION['logged_user_id'];

if ($logged_user_id != '') {

    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

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
<script type="text/javascript">

    function checkForm(form) {

        if (form.password.value != "" && form.password.value == form.password_confirm.value) {
            if (form.password.value.length < 6) {
                swal.fire("Weak Password !", "Your password must contain at least six characters.", "warning");
                form.password.focus();
                return false;
            }
        } else {
            swal.fire("Confirm Password !", "Passwords do not match !", "warning");
            form.password.focus();
            return false;
        }
        return true;

    }

</script>
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


                            <?php

                            // Check for tokens
                            $selector = filter_input(INPUT_GET, 'selector');
                            $validator = filter_input(INPUT_GET, 'validator');

                            if (false !== ctype_xdigit($selector) && false !== ctype_xdigit($validator)) :
                            ?>

                            <br> <br>


                            <div id="forget_form_reset" style="text-align: center;" class="kt-login__forgot">
                                <div class="kt-login__title">
                                    <h3>Reset Your Password</h3>


                                    <h5 style="font-weight: lighter; font-size: medium;">Enter a super memorable
                                        password.
                                    </h5>
                                    <div class="kt-login__form">
                                        <form onsubmit="return checkForm(this);" class="kt-form" action=""
                                              name="reset_process" method="post">

                                            <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                                            <input type="hidden" name="validator" value="<?php echo $validator; ?>">


                                            <div class="form-group">
                                                <input style="font-weight: 500; letter-spacing: 1px; font-size: 1.1rem;"
                                                       class="form-control bg-secondary" type="password"
                                                       placeholder="Enter a new password" id="password" name="password"
                                                       autocomplete="off" required>
                                            </div>

                                            <div class="form-group">
                                                <input style="font-weight: 500; letter-spacing: 1px; font-size: 1.1rem;"
                                                       class="form-control bg-secondary" type="password"
                                                       placeholder="Confirm new password" id="password_confirm"
                                                       name="password_confirm"
                                                       autocomplete="off" required>
                                            </div>

                                            <div style="text-align: right;">
                                                <br><br>

                                                <input style="width: 180px;" value="Change Password" type="submit"
                                                       name="submit_new_password" id=""
                                                       class="btn btn-brand btn-pill btn-elevate">
                                                &nbsp;
                                                <button onclick="location.href='login.php'" id=""
                                                        class="btn btn-outline-brand btn-pill">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>


                                    <?php endif; ?>


                                </div>
                            </div>

                        </div>
                        <!--end::Signin-->


                        <?php

                        if (isset($_POST["submit_new_password"])) {

                            $selector = $_POST['selector'];
                            $validator = $_POST['validator'];
                            $password = $_POST['password'];
                            $hash_new = password_hash($password, PASSWORD_DEFAULT);

                            date_default_timezone_set('Asia/Colombo');
                            $date_e_check = date('Y-m-d H:i:s');

                            $query_for = "SELECT * FROM account_recovery WHERE selector = '$selector' AND expires >= '$date_e_check'";
                            if (!empty($con)) {
                                $run_query_for = mysqli_query($con, $query_for);
                            }

                            while ($row_query_for = mysqli_fetch_assoc($run_query_for)) {

                                $userID = $row_query_for['userID'];
                                $selector = $row_query_for['selector'];
                                $token = $row_query_for['token'];
                                $expires = $row_query_for['expires'];
                                $email_reset = $row_query_for['email_reset'];

                                $calc = hash('sha256', hex2bin($validator));


                                    if (is_null($row_query_for["email_reset"])){

                                        echo "<script> location.replace('login.php?reset=failed') </script>";

                                    }else{

                                        if (hash_equals($calc, $token)) {

                                            // Update password
                                            $query_update_password = "UPDATE user SET password='$hash_new' where userID='$userID'";
                                            $create_query_update_password = mysqli_query($con, $query_update_password);

                                            // Delete any existing password reset
                                            $query_del_a_rec = "DELETE FROM account_recovery WHERE userID = '$userID'";
                                            $create_query_del_a_rec = mysqli_query($con, $query_del_a_rec);

                                            // Add the record to log
                                            date_default_timezone_set('Asia/Colombo');
                                            $date = date('Y-m-d H:i:s');
                                            $query_log_acc_rec = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$userID', '$date', 'UserID : $userID has reset the account password.')";
                                            $create_query_log_acc_rec = mysqli_query($con, $query_log_acc_rec);


                                            if ($create_query_update_password) {

                                                // New password. New session.
                                                session_destroy();
                                                echo "<script> location.replace('login.php?reset=success') </script>";

                                            } else {

                                                echo "<script> location.replace('login.php?reset=failed') </script>";

                                            }

                                        }else {

                                            echo "<script> location.replace('login.php?reset=failed') </script>";

                                        }

                                    }

                            }

                        }
                        ?>

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
