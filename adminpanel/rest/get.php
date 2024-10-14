<?php
    switch ($rest_path) {
        case 'inschrijvingen':
            echo json_encode($link->query('SELECT * FROM leerlingen')->fetch_all(MYSQLI_ASSOC));
            return;
        case 'poules':
            echo json_encode($link->query('SELECT * FROM poules')->fetch_all(MYSQLI_ASSOC));
            return;
        case 'berichten':
            echo json_encode($link->query('SELECT * FROM berichten')->fetch_all(MYSQLI_ASSOC));
            return;
        // case 'meldingen':
        //      $query = "
        //         SELECT 
        //         meldingen.id AS melding_id,
        //         meldingen.melding,
        //         meldingen.created_at,
        //         berichten.name,
        //         berichten.email,
        //         berichten.message,
        //         berichten.created_at AS bericht_created_at
        //         FROM meldingen
        //         INNER JOIN berichten ON meldingen.bericht_id = berichten.id
        //         ORDER BY meldingen.created_at DESC
        //     ";
        //     echo json_encode($link->query('SELECT * FROM meldingen')->fetch_all(MYSQLI_ASSOC));
        //     return;
    echo json_encode($link->query($query)->fetch_all(MYSQLI_ASSOC));
    return;      
        default:
            echo json_encode(array('error' => 'path not defined'));
            return;
    }