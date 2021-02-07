<?php

include 'include/db.php';

$logged_divis = $_POST['logged_divi'];

$res = "SELECT * FROM notify_ao where division_ao_notify='$logged_divis'";

if (isset($con)) {
    $res_run = mysqli_query($con, $res);
}

while ($row_res = mysqli_fetch_assoc($res_run)) {

    $random_id_ao_notify = $row_res['random_id'];
    $assigned_by_notify = $row_res['assigned_by_ao_notify'];
    $issue_notify = $row_res['issue_ao_notify'];
    $designation_notify = $row_res['designation_ao_notify'];
    $division_notify = $row_res['division_ao_notify'];

    echo $assigned_by_notify.'{|same_rec|}'.$issue_notify.'{|same_rec|}'.$designation_notify.'{|same_rec|}'.$division_notify.'{||next_rec||}';

    $res_delete = "DELETE FROM notify_ao WHERE random_id = '$random_id_ao_notify'";

    if (!empty($con)) {
        $res_delete_run = mysqli_query($con, $res_delete);
    }

}

mysqli_free_result($res_run);

?>
