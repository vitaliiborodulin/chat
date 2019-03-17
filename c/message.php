<?php

$id = $_GET['id'] ?? null;
$err404 = false;

if ($id === null || $id == '' || !ctype_digit($id)) {
    $err404 = true;
} else {
    $message = messages_one($id);

    if ($message === false) {
        $err404 = true;
    }

}

$inner = template('v_message', [
    'err404' => $err404,
    'message' => $message ?? null
]);


$title = $err404 ? '404' : 'Просмотр сообщения';

