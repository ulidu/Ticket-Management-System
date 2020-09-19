<?php include 'include/db.php'; ?>
<?php session_start();


?>

<!DOCTYPE html>


<html lang="en">

<!-- begin::Head -->
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>Ticket Management System</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>

    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>

    <!--end::Page Vendors Styles -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css"/>

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>

    <style>

        @import url('https://fonts.googleapis.com/css?family=Fira+Code&display=swap');


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

        }

    </style>
</head>
<?php

$logged_user_id = $_SESSION['logged_user_id'];

$link3 = $_SERVER['PHP_SELF'];
$link_array4 = explode('/', $link3);
$page4 = end($link_array4);

if ($logged_user_id == '' && $page4 !='task_add.php' && $page4 !='ticket_success.php') {

    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";

}

echo $logged_user_id;
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
