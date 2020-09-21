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

    $Row2 = "SELECT userID, acc_type FROM user where userID='$user_id_enter'";
    $run_query2 = mysqli_query($con, $Row2);

    while ($rw2 = mysqli_fetch_assoc($run_query2)) {

        $userID = $rw2['userID'];
        $acc_type = $rw2['acc_type'];

        if ($acc_type == 'Administrative Officer' || $acc_type =='IT Staff'){

            $_SESSION['logged_user_id'] = $user_id_enter;
            header("location: task_list.php");

        }else{

            $_SESSION['logged_user_id'] = $user_id_enter;
            header("location: index.php");

        }


    }



} else {

    header("location: login.php?error=verify");

}

?>
