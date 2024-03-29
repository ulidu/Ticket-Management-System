<?php include 'include/db.php'; ?>
<?php session_start();

//Expire the session if user is inactive for 4 hours or more.
$expireAfter = 240;

//Check to see if our "last action" session
//variable has been set.
if (isset($_SESSION['last_action'])) {

    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];

    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;

    //Check to see if they have been inactive for too long.
    if ($secondsInactive >= $expireAfterSeconds) {
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        session_destroy();
        header("location: logout.php?timeout=true");
    }

}

//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();

?>

<?php

$download_path = 'database/tms_db_export.sql.gz';

if (file_exists($download_path) && filectime($download_path) < (time()-10)){
    unlink($download_path);
}

?>

<?php date_default_timezone_set('Asia/Colombo'); ?>

<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>Ticket Management System</title>
    <meta name="description" content="Urban Development Authority">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>
    <!--end::Fonts -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages/support-center/faq-3.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages/support-center/feedback.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/jstree/jstree.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/kanban/kanban.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/jquery-nice-select-1.1.0/css/nice-select.css" rel="stylesheet">
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages/support-center/home-1.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles -->

    <?php
    $link_for_wizard = $_SERVER['PHP_SELF'];
    $link_array_wizard = explode('/', $link_for_wizard);
    $link_wizard = end($link_array_wizard);

    if ($link_wizard == 'task_add.php') { ?>

        <link href="assets/css/pages/wizard/wizard-5.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/wizard/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/wizard/prismjs.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/wizard/style.bundle.css" rel="stylesheet" type="text/css" />

    <?php } ?>

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>

        @import url('https://fonts.googleapis.com/css?family=Fira+Code&display=swap');

        @-moz-keyframes spin { 100% { -moz-transform: rotate(-360deg); } }
        @-webkit-keyframes spin { 100% { -webkit-transform: rotate(-360deg); } }
        @keyframes spin { 100% { -webkit-transform: rotate(-360deg); transform:rotate(-360deg); } }

        .ui-select {
            width: 100%;

        /* This is to remove the arrow of select element in IE */
        select::-ms-expand {
            display: none;
        }

        select {
            font-family: 'FontAwesome';
        }

        select {
            -webkit-appearance: none;
            appearance: none;
        }

        @-moz-document url-prefix() {
            .ui-select {
                border: 1px solid #CCC;
                border-radius: 4px;
                box-sizing: border-box;
                position: relative;
                overflow: hidden;
            }
            .ui-select select {
                width: 110%;
                background-position: right 30px center !important;
                border: none !important;
            }
        }

    </style>
</head>

<?php

$logged_user_id = $_SESSION['logged_user_id'];

$link3 = $_SERVER['PHP_SELF'];
$link_array4 = explode('/', $link3);
$page4 = end($link_array4);

if ($logged_user_id == '' && $page4 != 'task_add.php' && $page4 != 'ticket_success.php' && $page4 != 'feedback.php') {

    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";

}


$Row = "SELECT * FROM user where userID='$logged_user_id'";
$run_query = mysqli_query($con, $Row);

while ($rw = mysqli_fetch_assoc($run_query)) {

    $userID = $rw['userID'];
    $user_id_logged = $rw['userID'];
    $employeeCode = $rw['employeeCode'];
    $firstName = $rw['firstName'];
    $lastName = $rw['lastName'];
    $email = $rw['email'];
    $password = $rw['password'];
    $date_created = $rw['date_created'];
    $status = $rw['status'];
    $acc_type = $rw['acc_type'];
    $acc_type_logged = $rw['acc_type'];
    $title = $rw['title'];
    $division = $rw['division'];
    $division_logged_in = $rw['division'];

    $_SESSION['userID'] = $userID;
    $_SESSION['user_id_logged'] = $user_id_logged;
    $_SESSION['employeeCode'] = $employeeCode;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['date_created'] = $date_created;
    $_SESSION['status'] = $status;
    $_SESSION['acc_type'] = $acc_type;
    $_SESSION['acc_type_logged'] = $acc_type_logged;
    $_SESSION['title'] = $title;
    $_SESSION['division'] = $division;
    $_SESSION['division_logged_in'] = $division_logged_in;


}

if ($acc_type == 'Administrative Officer' && $page4 != 'task_add.php' && $page4 != 'ticket_success.php' && $page4 != 'feedback.php' && $page4 != 'task_list.php' && $page4 != 'profile.php' && $page4 != 'profile_pw.php' || $acc_type == 'IT Staff' && $page4 != 'task_add.php' && $page4 != 'ticket_success.php' && $page4 != 'feedback.php' && $page4 != 'task_list.php' && $page4 != 'profile.php' && $page4 != 'profile_pw.php' && $page4 != 'reports.php') {

    echo "<script type='text/javascript'> document.location = 'task_list.php'; </script>";

}


?>

<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">


<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="index.php">
            <img alt="Logo" src="assets/media/logos/logo-2-sm.png"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></button>
    </div>
</div>

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
