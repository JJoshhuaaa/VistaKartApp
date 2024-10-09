<?php
    $submitted_username = $_SERVER['PHP_AUTH_USER'];
    $submitted_password = $_SERVER['PHP_AUTH_PW'];

    if(!isset($submitted_username) || !isset($submitted_password)
    || $submitted_username != 'admin' || $submitted_password != 'password') {
        header('HTTP/1.0 401 Unauthorized');
        header('WWW-Authenticate: Basic');
        include_once '401.html';
        exit;
    }

    $uri_split = explode('/', $_SERVER['REQUEST_URI']);

    $searching = true;
    $depth = 0;
    while($searching && $depth < 10)
    {
        try {
            if(strcmp(strtolower($uri_split[$depth]), 'adminpanel'))
            {
                $searching = false;
                array_shift($uri_split);
            }
        } finally {
            array_shift($uri_split);
            $depth++;
        }
    }

    $rel_path = implode('/', $uri_split);
    if(empty($rel_path))
        $rel_path = 'admin.html';

    if(!file_exists($rel_path))
    {
        header('HTTP/1.0 404 Not found');
        include_once '404.html';
    }
    else include $rel_path;