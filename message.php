<?php
include_once('m/messages.php');
include_once('m/system.php');
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

template('v_message',[
    'err404'=> $err404,
    'message'=> $message
]);

