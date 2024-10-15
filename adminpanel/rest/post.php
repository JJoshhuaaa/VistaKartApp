<?php
    $body = json_decode(file_get_contents('php://input'));

    switch ($rest_path) {
        case 'poule_add':
            $statement = $link->prepare('SELECT * FROM poules WHERE naam=?');
            $statement->bind_param('s', $body->naam);
            $statement->execute();

            echo json_encode($statement->get_result());
            return;
        default:
            echo json_encode(array('error' => 'path not defined'));
            return;
    }
