<?php

function db_connect()
{
    static $db;

    if ($db === null) {
        $db = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
        $db->exec('SET NAMES UTF8');
    }

    return $db;
}

function db_query($sql, $params = [])
{
    $db = db_connect();
    $query = $db->prepare($sql);
    $query->execute($params);

    db_check_error($query);
    return $query;
}

function db_check_error($query)
{
    $info = $query->errorInfo();

    if ($info[0] != PDO::ERR_NONE) {
        exit($info[2]);
    }
}