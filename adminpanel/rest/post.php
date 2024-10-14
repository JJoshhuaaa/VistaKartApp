<?php
    switch ($rest_path) {
        case 'poule_add':
            echo json_encode($link->query('SELECT * FROM leerlingen')->fetch_all(MYSQLI_ASSOC));
            return;
        default:
            echo json_encode(array('error' => 'path not defined'));
            return;
    }
