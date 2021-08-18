<?php

    //database configuration
    $host       = "localhost";
    $user       = "radio";
    $pass       = "12345";
    $database   = "uradio";

    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }

    $ENABLE_RTL_MODE = 'false';

?>