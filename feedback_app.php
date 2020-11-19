<?php

include 'include/db.php';

$name_help = $_POST['name_help'];
$ext_help = $_POST['ext_help'];
$message_help = $_POST['message_help'];

if ($message_help != '') {

    $query_feedback = "INSERT INTO feedback(name_added, feedback, extension) VALUES ('$name_help', '$message_help', '$ext_help')";
    $create_query_feedback = mysqli_query($con, $query_feedback);

    echo 1;

}else{

    echo 0;

}


?>
