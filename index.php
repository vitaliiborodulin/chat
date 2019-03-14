<?php

include_once ('m/messages.php');

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

include "v/$template.php";





