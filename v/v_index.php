<a href="index.php?view=inline">Отобразить в линию</a>
<div>
    <? foreach ($messages as $message) : ?>
        <div>
            <em><?= $message['dt'] ?></em>
            <strong><?= $message['title'] ?></strong>
            <div><?= $message['content'] ?></div>
            <a href="message.php?id=<?= $message['id_post'] ?>"><?= $message['content'] ?></a>
        </div>
        <hr>
    <? endforeach; ?>
</div>

<a href="add.php">Добавить</a>
