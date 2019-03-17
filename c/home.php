<?php

$messages = messages_all();

switch ($_GET['view'] ?? null) {
    case 'base':
        $template = 'v_index';
        break;
    case 'inline':
        $template = 'v_index_inline';
        break;
    default:
        $template = 'v_index';
}


//генерим нужные переменные
$inner = template($template,[
    'messages'=> $messages
]);
$title = 'Главная';


