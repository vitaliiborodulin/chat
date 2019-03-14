<?php

include_once('db.php');

function messages_all()
{
    $query = db_query("SELECT * FROM post ORDER BY dt DESC");
    return $query->fetchAll();
}

function messages_one($id)
{
    $query = db_query("SELECT * FROM post WHERE id_post=:id", ['id' => $id]);
    return $query->fetch();
}

function messages_add($title, $content)
{
    $query = db_query("INSERT INTO post (title, content) VALUES (:t,:c)", [
        't' => $title,
        'c' => $content
    ]);
    $db = db_connect();
    return $db->lastInsertId();
}