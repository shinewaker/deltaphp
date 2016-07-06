<?php
$get = $_GET;
var_dump($_SERVER['REQUEST_URI']);
$filter_param = array('<','>','"',"'",'%3C','%3E','%22','%27','%3c','%3e');
$uri = str_replace($filter_param, '', $_GET['user']);
var_dump($uri);
$get = filter_input(INPUT_GET,'user',FILTER_SANITIZE_SPECIAL_CHARS);
var_dump($get);

echo "<pre>";
var_dump($_SERVER);