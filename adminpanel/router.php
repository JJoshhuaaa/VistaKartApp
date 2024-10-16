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

$uri_split = explode('/', strtok($_SERVER['REQUEST_URI'], '?'));

$searching = true;
$depth = 0;
while($depth < 10)
{
    if($uri_split[$depth] == 'adminpanel')
    {
        array_shift($uri_split);
        break;
    } else array_shift($uri_split);
}

$rel_path = implode('/', $uri_split);
if(empty($rel_path))
    $rel_path = 'admin.html';

if(!file_exists($rel_path) || $rel_path === 'router.php' || str_starts_with($rel_path, 'rest/'))
{
    header('HTTP/1.0 404 Not found');
}
else {
    header('Content-Type: ' . resolve_content_type_ext($rel_path));
    include $rel_path;
}

function resolve_content_type_ext(string $path) : string {
    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $pre_def = [
        'css' => 'text/css',
        'js' => 'test/javascript'
    ];
    return $pre_def[$extension] ?? mime_content_type($path);
}