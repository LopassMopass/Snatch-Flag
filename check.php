<?php
session_start();
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/':
        $redirect = '/index.php';
        break;
    case '/login':
        $redirect = '/index.php';
        break;
}