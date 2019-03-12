<?php
/**
 * Created by PhpStorm.
 * User: Xaaser2006
 * Date: 09.03.2019
 * Time: 9:35
 */
include_once('function.php');

$query = db_query("SELECT * FROM post ORDER BY dt DESC");

$messages = $query->fetchAll();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Чат</title>
</head>
<body>

<?php foreach ($messages as $message) { ?>
    <div>
        <em><?= $message['dt'] ?></em>
        <strong><?= $message['title'] ?></strong>
        <div><?= $message['content'] ?></div>
        <a href="message.php?id=<?=$message['id_post']?>"><?= $message['content'] ?></a>
    </div>
    <hr>
<?php } ?>
<a href="add.php">Добавить</a>
</body>
</html>
