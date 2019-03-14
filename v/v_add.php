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

    <?php echo $msg; ?>

