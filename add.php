<?php

include_once('function.php');


if (count($_POST) > 0) {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if ($title == '' || $content == '') {
        $msg = 'Поля не должны быть пустыми';
    } else {

        db_query("INSERT INTO post (title, content) VALUES (:t,:c)", [
            't' => $title,
            'c' => $content
        ]);

        header('Location: index.php');
        exit();
    }

} else {
    $title = '';
    $content = '';
    $msg = 'Для добавления сообщения отправьте форму';
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление сообщения</title>
</head>
<body>
<form method="post">
    <p><label>
            Заголовок <br>
            <input type="text" name="title" value="<?php echo $title; ?>">
        </label>
    </p>
    <p><label>
            Сообщение <br>
            <textarea name="content" cols="30" rows="10"><?php echo $content; ?></textarea>
        </label>
    </p>
    <p>
        <input type="submit" value="Отправить">
    </p>
</form>
<div class="message">
    <?php echo $msg; ?>
</div>
</body>
</html>
