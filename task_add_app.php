<?php

include 'include/db.php';

$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
socket_connect($sock, "8.8.8.8", 53);
socket_getsockname($sock, $name); // $name passed by reference

$localAddr = $name;

date_default_timezone_set('Asia/Colombo');
$string = date("Y-m-d");
$date = DateTime::createFromFormat("Y-m-d", $string);
$date = date_format($date, 'Y-m-d H:i:s');

$name = $_POST['name'];
$emp_code = $_POST['emp_code'];
$designation = $_POST['designation'];
$division = $_POST['division'];
$ext = $_POST['ext'];
$issue = $_POST['issue'];
$cat_issue = $_POST['cat_issue'];
$asst_code = $_POST['asst_code'];
$priority = $_POST['priority'];
$status = "Approval Required";

$query = "INSERT INTO task(assigned_by, emp_code, assigned_date, issue, category, status, designation, division, extension_no, priority, asset_code, ip_address) VALUES('$name','$emp_code','$date','$issue','$cat_issue','$status','$designation','$division','$ext','$priority','$asst_code','$localAddr')";
$querylog_taskadd = "INSERT INTO log(log_emp_code, log_date_time, log_action) VALUES('$emp_code', '$date', 'New ticket added by $name in $division')";

$create_query = mysqli_query($con, $query);
$create_querylog_taskadd = mysqli_query($con, $querylog_taskadd);

if ($create_query) {

    echo '<meta http-equiv=Refresh content="0;url=ticket_success.php">';

} else {
    echo " <div class='alert alert-solid-danger alert-bold'>";
    echo("Error : " . mysqli_error($con));
    echo " </div>";
}


?>
