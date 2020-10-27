<?php

include 'include/db.php';

if (isset($_POST["staff2"])) {

    date_default_timezone_set('Asia/Colombo');

    $date = date_format($date, 'Y-m-d H:i:s');
    $user_ID_selected = $_POST['staff2'];
    $ticket_id = $_POST['ticket_id'];
    $logged_user_id = $_POST['logged_user_id'];


    $query_select = "SELECT task_id FROM assign WHERE task_id = '$ticket_id'";
    $run_query_select = mysqli_query($con, $query_select);

    $row1 = mysqli_fetch_array($run_query_select, MYSQLI_ASSOC);

    $count = mysqli_num_rows($run_query_select);

    if ($count == 1) {

        $query = "UPDATE assign SET userID_2_opt='$user_ID_selected', assigned_to_user_date='$date', assigned_by='$logged_user_id' where task_id='$ticket_id'";

        if ($user_ID_selected != '') {

            $query_status = "UPDATE task SET status='Assigned' where task_id='$ticket_id'";

        }

    } else {

        $query = "INSERT INTO assign(userID_2_opt, task_id, assigned_to_user_date, assigned_by) VALUES('$user_ID_selected', '$ticket_id','$date', '$logged_user_id')";

        if ($user_ID_selected != '') {

            $query_status = "UPDATE task SET status='Assigned' where task_id='$ticket_id'";

        }

    }

    $create_query = mysqli_query($con, $query);
    $create_query_status = mysqli_query($con, $query_status);
}

?>
