<?php
    header('Content-Type: application/json');

    if(!isset($_GET['path'])) {
        echo json_encode(array('error' => 'missing "path" query parameter'));
        return;
    }

    include_once './../config.php';

    $rest_path = $_GET['path'];

    switch($rest_path) {
        case 'inschrijvingen':
            echo json_encode($link->query('SELECT * FROM leerlingen')->fetch_all(MYSQLI_ASSOC));
        return;
        default:
        echo json_encode(array('error' => 'path not defined'));
        return;
    }