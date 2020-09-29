<?php

include 'include/db.php';

if(isset($_POST["staff1"])) {

    date_default_timezone_set('Asia/Colombo');

    $date = date("l jS \of F Y h:i:s A");
    $user_ID_selected = $_POST['staff1'];
    $ticket_id = $_POST['ticket_id'];
    $logged_user_id = $_POST['logged_user_id'];

    $query = "INSERT INTO assign(userID,task_id,assigned_to_user_date, assigned_by) VALUES('$user_ID_selected', '$ticket_id','$date', '$logged_user_id')";

    $create_query = mysqli_query($con, $query);

}

?>
