<?php

include 'include/db.php';

session_start();
$_SESSION["user_id"] = "";
session_destroy();
header("Location: login.php"); // Or wherever you want to redirect
exit();

?>
