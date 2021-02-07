<?php

include 'include/db.php';

$res = "SELECT t.* FROM task t, notify_ao n WHERE n.task_id = t.task_id";
if (isset($con)) {
    $res_run = mysqli_query($con, $res);
}

while ($row_res = mysqli_fetch_assoc($res_run)) {

    $ticket_id_notify = $row_res['task_id'];
    $assigned_by_notify = $row_res['assigned_by'];
    $issue_notify = $row_res['issue'];
    $designation_notify = $row_res['designation'];
    $division_notify = $row_res['division'];

    echo $assigned_by_notify.'{|same_rec|}'.$issue_notify.'{|same_rec|}'.$designation_notify.'{|same_rec|}'.$division_notify.'{||next_rec||}';

    $res_delete = "DELETE FROM notify WHERE task_id = '$ticket_id_notify'";
    if (!empty($con)) {
        $res_delete_run = mysqli_query($con, $res_delete);
    }

}

mysqli_free_result($res_run);

?>
