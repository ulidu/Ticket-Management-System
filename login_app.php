<?php

session_start();
include 'include/db.php';

$emp_code_enter = mysqli_real_escape_string($con, $_POST['name']);

$sql_code_enter = "SELECT userID, employeeCode FROM user where employeeCode='$emp_code_enter'";
$run_query_code_enter = mysqli_query($con, $sql_code_enter);

while ($uID_code_enter = mysqli_fetch_assoc($run_query_code_enter)) {

    $uID_code_enter = $uID_code_enter['userID'];
    $_SESSION['uID_code_enter'] = $uID_code_enter;
}

$uID_code_enter = $_SESSION['uID_code_enter'];


// username and password sent from form
$user_id_enter = $uID_code_enter;
$password_enter = mysqli_real_escape_string($con, $_POST['password']);

$_SESSION["uID_code_enter"] = "";


$sql = "SELECT userID, password FROM user where userID='$user_id_enter'";
$run_query = mysqli_query($con, $sql);

while ($pw = mysqli_fetch_assoc($run_query)) {

    $userID = $pw['userID'];
    $password = $pw['password'];



    // Verify the hash against the password entered
    $verify = password_verify($password_enter, $password);

    // Print the result depending if they match
    if ($verify) {

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




}









?>
