<?php
ini_set('display_error',1);
ini_set('display_startup_error',1);
error_reporting(E_ALL);
include_once '../config.php';
$route=$_GET['route'] ??'/';

switch ($route) {
    case '/':
        require '../index.php';
        break;
    case '/admin':
        require '../admin/index.php';
        break;
    case '/admin/posts':
        require '../admin/posts.php';
        break;    
    
}

?>