<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET /', function ($f3) {
    //echo '<h1>Hello world!</h1>';

    $view = new Template();
    echo "My Pets";
});

$f3->run();