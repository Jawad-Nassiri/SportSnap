<?php

function d_die($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die;
}

function redirection($url) {
    header("Location: $url");
    exit;
}
