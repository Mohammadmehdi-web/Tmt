<?php

    $servername = 'sql302.infinityfree.com';
    $username = 'if0_36934103';
    $password = 'D8RBWs';
    $database = "if0_36934103_tmt";

    $con = new mysqli($servername, $username, $password, $database);

    if($con->connect_error){
        die("connection failed : " .$con->connect_error);
    }
?>