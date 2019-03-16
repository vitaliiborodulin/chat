<?php

include_once ('m/messages.php');
include_once ('m/system.php');

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

template($template,[
    'messages'=> $messages
]);





