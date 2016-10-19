<?php
function libs_api_get_libs() {
    $list_libs = scandir(__DIR__ . '/libs');
    $list_libs = array_diff($list_libs, array("..", "."));
    return $list_libs;
}