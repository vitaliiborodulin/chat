<?php if($err404): ?>
    404
<?php else : ?>

    <div>
        <em><?= $message['dt'] ?></em>
        <strong><?= $message['title'] ?></strong>
        <div><?= $message['content'] ?></div>
        <a href="index.php?c=home">Назад</a>
    </div>

<?php endif; ?>