<?php

include_once('m/messages.php');
include_once('m/system.php');


if (count($_POST) > 0) {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if ($title == '' || $content == '') {
        $msg = 'Поля не должны быть пустыми';
    } else {

        $id = messages_add($title, $content);
        header("Location: message.php?id=$id");
        exit();
    }

} else {
    $title = '';
    $content = '';
    $msg = 'Для добавления сообщения отправьте форму';
}

template('v_add',[
    'title'=> $title,
    'content'=> $content,
    'msg'=> $msg,
]);