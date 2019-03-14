<?php
include_once('m/messages.php');
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

include 'v/v_message.php';

