<?php

include 'include/db.php';

session_start();

$_SESSION["logged_user_id"] = "";

$_SESSION['userID'] = "";
$_SESSION['employeeCode'] = "";
$_SESSION['firstName'] = "";
$_SESSION['lastName'] = "";
$_SESSION['email'] = "";
$_SESSION['password'] = "";
$_SESSION['date_created'] = "";
$_SESSION['status'] = "";
$_SESSION['acc_type'] = "";
$_SESSION['title'] = "";

session_destroy();
header("Location: login.php"); // Or wherever you want to redirect
exit();

?>
