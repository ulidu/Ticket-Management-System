<?php

include 'include/db.php';
include('include/dumper.php');

$su = $_GET['su'];
if ($su == 'tmsproject') {
    try {
        $world_dumper = Shuttle_Dumper::create(array(
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'db_name' => 'uda_task',
            'port' => '3308'
        ));

        $download_path = 'database/tms_db_export.sql.gz';

        // dump the database to gzipped file
        $world_dumper->dump($download_path);

        if (file_exists($download_path)) {
            echo "<script> window.open('$download_path'); </script>";

        }



    } catch (Shuttle_Exception $e) {

        echo "Couldn't dump database: " . $e->getMessage();

    }
}

?>
