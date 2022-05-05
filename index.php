<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET /', function ($f3) {
    //echo '<h1>Hello world!</h1>';

    $view = new Template();
    echo $view->render('view/pet-home.html');
});

$f3->route('GET /order', function ($f3) {
    //echo '<h1>Hello world!</h1>';

    $view = new Template();
    echo $view->render('view/pet-order1.html');
});

$f3->route('GET /order2', function ($f3) {
    //echo '<h1>Hello world!</h1>';

    $view = new Template();
    echo $view->render('view/pet-order2.html');
});

$f3->route('GET /summary', function ($f3) {
    //echo '<h1>Hello world!</h1>';

    $view = new Template();
    echo $view->render('view/pet-summary.html');
});

$f3->run();