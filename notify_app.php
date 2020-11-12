<?php

include 'include/db.php';

$res = "SELECT * FROM notify";
$res_run = mysqli_query($con, $res);

while ($row_res = mysqli_fetch_assoc($res_run)) {

    echo $ticket_id_notify = $row_res['task_id'].' ';

}

mysqli_free_result($res_run);

?>
