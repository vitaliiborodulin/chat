<a href="index.php?c=home&view=base">Отобразить нормально</a>
<div>
    <?php
    foreach ($messages as $message) { ?>
        <div>
            <strong><?= $message['dt'] ?></strong>
            <em><?= $message['title'] ?></em>
            <span><?= $message['content'] ?></span>
            <a href="index.php?c=message&id=<?=$message['id_post']?>"><?= $message['content'] ?></a>
        </div>
        <hr>
    <?php } ?>
</div>

<a href="add.php">Добавить</a>
