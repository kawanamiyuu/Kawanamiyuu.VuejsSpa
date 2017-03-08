<?php

if (php_sapi_name() === 'cli-server' && strpos($_SERVER['REQUEST_URI'], '/dist/') === 0) {
    // static files
    return false;
}

$context = 'html-app';
require dirname(dirname(__DIR__)) . '/bootstrap/bootstrap.php';
