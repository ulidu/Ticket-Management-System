<?php

include 'include/db.php';

if (isset($_POST["email"])) {

    date_default_timezone_set('Asia/Colombo');

    $string = date("Y-m-d");
    $date = DateTime::createFromFormat("Y-m-d", $string);

    $date = date_format($date, 'Y-m-d H:i:s');

    $email = $_POST['email'];

    $to = $email;
    $subject = "Reset Your Password. Ticket Management System - UDA";
    $txt = "Hello world!";

    mail($to,$subject,$txt);

}



?>
