<?php
include_once('function.php');
$id = $_GET['id'] ?? null;
$err404 = false;

if ($id === null || $id == '' || !ctype_digit($id)) {
    $err404 = true;
} else {
    $query = db_query("SELECT * FROM post WHERE id_post=:id", ['id' => $id]);
    $message = $query->fetch();

    if ($message === false) {
        $err404 = true;
    }

}
?>

<?php if($err404) {?>
    404
<?php } else { ?>

<div>
    <em><?= $message['dt'] ?></em>
    <strong><?= $message['title'] ?></strong>
    <div><?= $message['content'] ?></div>
    <a href="message.php?id=<?=$message['id_post']?>"><?= $message['content'] ?></a>
</div>

<?php } ?>