<? if($err404): ?>
    404
<? else : ?>

    <div>
        <em><?= $message['dt'] ?></em>
        <strong><?= $message['title'] ?></strong>
        <div><?= $message['content'] ?></div>
        <a href="index.php">Назад</a>
    </div>

<?php endif; ?>