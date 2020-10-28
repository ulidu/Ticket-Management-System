<?php

include 'include/db.php';

if (isset($_POST["status"])) {

    date_default_timezone_set('Asia/Colombo');

    $string = date("Y-m-d");
    $date = DateTime::createFromFormat("Y-m-d", $string);

    $date = date_format($date, 'Y-m-d H:i:s');

    $status_selected = $_POST['status'];
    $ticket_id = $_POST['ticket_id'];
    $logged_user_id = $_POST['logged_user_id'];

    if ($status_selected == 'In Progress'){

        $queryxy = "UPDATE task SET status='$status_selected', task_completed_date='' where task_id='$ticket_id'";

    }else{

        $queryxy = "UPDATE task SET status='$status_selected', task_completed_date='$date' where task_id='$ticket_id'";

    }

    $create_queryxy = mysqli_query($con, $queryxy);

}

?>
