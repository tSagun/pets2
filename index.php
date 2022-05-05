<?php
session_start();

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
//    echo '<h1>Hello world!</h1>';

    $view = new Template();
    echo $view->render('view/pet-order1.html');
});

$f3->route('POST /order2', function ($f3) {
    //echo '<h1>Hello world!</h1>';
//    var_dump($_POST);
    $_SESSION['petType'] = $_POST['petType'];
    $_SESSION['petColor'] = $_POST['petColor'];
    $view = new Template();
    echo $view->render('view/pet-order2.html');
});

$f3->route('POST /summary', function ($f3) {
    //echo '<h1>Hello world!</h1>';
    $_SESSION['petName'] = $_POST['petName'];
    $view = new Template();
    echo $view->render('view/pet-summary.html');
});

$f3->run();