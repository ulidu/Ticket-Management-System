<?php

include 'include/db.php';

$fname_up = $_POST['fname_up'];
$lname_up = $_POST['lname_up'];
$email_up = $_POST['email_up'];
$c_pass_up = $_POST['c_pass_up'];
$n_pass_up = $_POST['n_pass_up'];
$logged_user_id = $_POST['logged_user_id'];

if ($c_pass_up == '') {

    $query_details = "UPDATE user SET firstName = '$fname_up', lastName = '$lname_up', email = '$email_up' WHERE userID = '$logged_user_id'";
    $create_query_details = mysqli_query($con, $query_details);


} else if ($c_pass_up !== '') {

    $sql1 = "SELECT userID, password FROM user where userID='$logged_user_id'";
    $run_query1 = mysqli_query($con, $sql1);

    while ($pw = mysqli_fetch_assoc($run_query1)) {

        $userID1 = $pw['userID'];
        $password1 = $pw['password'];

        // Verify the hash against the password entered
        $verify = password_verify($c_pass_up, $password1);

        // Print the result depending if they match
        if ($verify) {

            $hash_pw = password_hash($n_pass_up, PASSWORD_DEFAULT);

            $query = "UPDATE user SET firstName = '$fname_up', lastName = '$lname_up', email = '$email_up', password = '$hash_pw' WHERE userID = '$logged_user_id'";

            $create_query = mysqli_query($con, $query);

            echo 1;



        } else {

            echo 0;


        }
    }
}


?>
