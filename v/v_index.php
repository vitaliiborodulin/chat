<a href="index.php?c=home&view=inline">Отобразить в линию</a>
<div>
    <?php foreach ($messages as $message) : ?>
        <div>
            <em><?= $message['dt'] ?></em>
            <strong><?= $message['title'] ?></strong>
            <div><?= $message['content'] ?></div>
            <a href="index.php?c=message&id=<?= $message['id_post'] ?>"><?= $message['content'] ?></a>
        </div>
        <hr>
    <?php endforeach; ?>
</div>

<a href="index.php?c=add">Добавить</a>
