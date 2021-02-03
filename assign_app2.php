<?php

include 'include/db.php';

if (isset($_POST["staff2"])) {

    date_default_timezone_set('Asia/Colombo');

    $string = date("Y-m-d");
    $date = DateTime::createFromFormat("Y-m-d", $string);

    $date = date_format($date, 'Y-m-d H:i:s');
    $user_ID_selected = $_POST['staff2'];
    $ticket_id = $_POST['ticket_id'];
    $logged_user_id = $_POST['logged_user_id'];


    $query_select = "SELECT task_id FROM assign WHERE task_id = '$ticket_id'";
    if (!empty($con)) {
        $run_query_select = mysqli_query($con, $query_select);
    }


    $row1 = mysqli_fetch_array($run_query_select, MYSQLI_ASSOC);

    $count = mysqli_num_rows($run_query_select);

    if ($count == 1) {

        $query = "UPDATE assign SET userID_2_opt='$user_ID_selected', assigned_to_user_date='$date', assigned_by='$logged_user_id' where task_id='$ticket_id'";


        $query_select_log = "SELECT * FROM assign WHERE task_id = '$ticket_id'";
        $run_query_select_log = mysqli_query($con, $query_select_log);

        while ($row_log = mysqli_fetch_assoc($run_query_select_log)) {

            $userID_2_opt_log = $row_log['userID_2_opt'];

        }

        if ($userID_2_opt_log == ''){

            $query_log_assign = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$logged_user_id', '$date', 'User ID: $logged_user_id assigned the ticket ID: $ticket_id for User ID : $user_ID_selected as person No. 2')";


        }else{

            $query_log_assign = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$logged_user_id', '$date', 'User ID: $logged_user_id re-assigned the previously assigned ticket with ID: $ticket_id for User ID: $user_ID_selected as person No. 2')";

        }

        if ($user_ID_selected != '') {

            $query_status = "UPDATE task SET status='Assigned' where task_id='$ticket_id'";

        }

    } else {

        $query = "INSERT INTO assign(userID_2_opt, task_id, assigned_to_user_date, assigned_by) VALUES('$user_ID_selected', '$ticket_id','$date', '$logged_user_id')";
        $query_log_assign = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$logged_user_id', '$date', 'User ID: $logged_user_id assigned the ticket ID: $ticket_id for User ID : $user_ID_selected as person No. 2')";

        if ($user_ID_selected != '') {

            $query_status = "UPDATE task SET status='Assigned' where task_id='$ticket_id'";

        }

    }

    $create_query = mysqli_query($con, $query);
    $create_query_status = mysqli_query($con, $query_status);

    $create_query_log_assign = mysqli_query($con, $query_log_assign);

}

?>
