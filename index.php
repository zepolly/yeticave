<?php
require_once('helpers.php');
require_once('function.php');
require_once('data.php');

$page_content = include_template('main.php', [
    'ads' => $ads,
    'categories' => $categories,
]);

$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'categories' => $categories,
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'title' => $title
]);

print($layout_content);

