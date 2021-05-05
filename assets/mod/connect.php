<?php
    $host_db    = "localhost";
    $user_db    = "CarlosSimon";
    $pass_db    = "feRp7A6RS6Jm3am4";
    $db_name    = "id11631880_hypetech";
    $conexion   = new mysqli($host_db, $user_db, $pass_db, $db_name);
    $acentos    = $conexion->query("SET NAMES 'utf8'");
    if ($conexion->connect_error) {
        echo json_encode(array('success' => 0));
        die("La conexion falló: " . $conexion->connect_error);
    }
    ?>
