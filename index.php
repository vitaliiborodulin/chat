<?php
//подключаем общие вещи для контроллеров
include_once('m/messages.php');
include_once('m/system.php');

session_start();

//echo '<pre>';
//print_r($_GET);
//echo '</pre>';

$title = '';
$inner = '';
$err404 = false;

$controller = trim($_GET['c'] ?? 'home');

if ($controller === '' || !file_exists("c/$controller.php") || !preg_match("/^[a-zA-Z0-9_]+$/", $controller)){
    $err404 = true;
} else {
    include_once "c/$controller.php";
}

if ($err404) {
    header("HTTP/1.1 404 Not Found");
    $title = 'Страница не найдена 404';
    $inner = template('v_404');
}

    echo template('v_main', [
        'title' => $title,
        'content' => $inner
    ]);








