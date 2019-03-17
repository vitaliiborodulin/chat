<?php

if (count($_POST) > 0) {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if ($title == '' || $content == '') {
        $msg = 'Поля не должны быть пустыми';
    } else {

        $id = messages_add($title, $content);
        header("Location: index.php?c=message&id=$id");
        exit();
    }

} else {
    $title = '';
    $content = '';
    $msg = 'Для добавления сообщения отправьте форму';
}

$inner = template('v_add', [
    'title' => $title,
    'content' => $content,
    'msg' => $msg,
]);

$title = 'Новое сообщение';
