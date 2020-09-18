<?php

session_start();
include 'include/db.php';

// username and password sent from form
$user_id_enter = mysqli_real_escape_string($con, $_POST['name']);
$password_enter = mysqli_real_escape_string($con, $_POST['password']);

$sql = "SELECT userID FROM user WHERE userID = '$user_id_enter' and password = '$password_enter'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

if ($count == 1) {

    $_SESSION['logged_user_id'] = $user_id_enter;
    header("location: index.php");

} else {

    header("location: login.php?error=verify");

}

?>
