<?php
   // $mysqli= new mysqli("sql113.infinityfree.com","if0_38797761","","if0_38797761_foodcave");
     $mysqli= new mysqli("localhost","root","","foodcave");
    if($mysqli->connect_errno){
        header("location:db_error.php");
        exit(1);
    }

    define('SITE_ROOT',realpath(dirname(__FILE__)));
    date_default_timezone_set('Asia/Kolkata');
?>    