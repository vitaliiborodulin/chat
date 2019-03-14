<a href="index.php">Отобразить нормально</a>
<div>
    <?php
    foreach ($messages as $message) { ?>
        <div>
            <strong><?= $message['dt'] ?></strong>
            <em><?= $message['title'] ?></em>
            <span><?= $message['content'] ?></span>
            <a href="message.php?id=<?=$message['id_post']?>"><?= $message['content'] ?></a>
        </div>
        <hr>
    <?php } ?>
</div>

<a href="add.php">Добавить</a>
