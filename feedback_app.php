<?php

include 'include/db.php';

$name_help = $_POST['name_help'];
$ext_help = $_POST['ext_help'];
$message_help = $_POST['message_help'];

date_default_timezone_set('Asia/Colombo');
$string = date("Y-m-d");
$date = DateTime::createFromFormat("Y-m-d", $string);
$date = date_format($date, 'Y-m-d H:i:s');

$client_ip_add = $_SERVER['REMOTE_ADDR'];

if ($message_help != '') {

    $query_feedback = "INSERT INTO feedback(name_added, feedback, extension, date_feedback, client_ip) VALUES ('$name_help', '$message_help', '$ext_help', '$date', '$client_ip_add')";
    $create_query_feedback = mysqli_query($con, $query_feedback);

    echo 1;

}else{

    echo 0;

}


?>
