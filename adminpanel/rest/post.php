<?php
    $body = json_decode(file_get_contents('php://input'));

    switch ($rest_path) {
        case 'poule_create':
            $statement = $link->prepare('SELECT * FROM poules WHERE naam=?');
            $statement->bind_param('s',$body->naam);
            $statement->execute();
            if(!empty($statement->get_result()->fetch_assoc()))
                die(json_encode(array('error' => 'name already taken')));

            $statement = $link->prepare('INSERT INTO poules (naam) VALUES (?)');
            $statement->bind_param('s', $body->naam);
            
            if($statement->execute())
                echo json_encode($link->query('SELECT * FROM poules')->fetch_all(MYSQLI_ASSOC));
            else echo json_encode(array('error' => 'unable to create poule'));

            return;
        case 'poule_update':
            $statement = $link->prepare('UPDATE poules SET members=? WHERE id=?');
            $statement->bind_param('si', $body->members, $body->id);
            if($statement->execute())
                echo json_encode($link->query('SELECT * FROM poules')->fetch_all(MYSQLI_ASSOC));
            else echo json_encode(array('error' => 'unable to edit poule'));
            return;
        default:
            echo json_encode(array('error' => 'path not defined'));
            return;
    }
