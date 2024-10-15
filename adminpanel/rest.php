<?php
    header('Content-Type: application/json');

    if(!isset($_GET['path'])) {
        echo json_encode(array('error' => 'missing "path" query parameter'));
        return;
    }

    include_once './../config.php';

    $rest_path = $_GET['path'];
    $method = $_SERVER['REQUEST_METHOD'];
    
    switch($method) {
        case 'GET':
            include_once './rest/get.php';
            return;
        case 'POST':
            include_once './rest/post.php';
        return;
    }