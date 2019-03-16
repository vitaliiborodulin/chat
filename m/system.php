<?php

function template($filename, $vars = []){
    extract($vars);
    include "v/$filename.php";
}