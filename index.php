<?php
//подключаем общие вещи для контроллеров
include_once('m/messages.php');
include_once('m/system.php');

session_start();
/*
 * Проверки - что контроллер есть в папке
 *             - что состоит из [a-zA-Z0-9_]
 * иначе выкинуть ошибка 404
 * */

//выбираем контроллер
$controller = $_GET['c'] ?? 'home';
include_once "c/$controller.php";


//выводим общий шаблон
echo template('v_main', [
    'title' => $title,
    'content' => $inner
]);




