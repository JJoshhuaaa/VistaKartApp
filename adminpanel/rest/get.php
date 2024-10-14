<?php
    switch ($rest_path) {
        case 'inschrijvingen':
            echo json_encode($link->query('SELECT * FROM leerlingen')->fetch_all(MYSQLI_ASSOC));
            return;
        case 'poules':
            echo json_encode($link->query('SELECT * FROM poules')->fetch_all(MYSQLI_ASSOC));
            return;
        default:
            echo json_encode(array('error' => 'path not defined'));
            return;
    }