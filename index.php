<?php
// TurnpageCMS - Main Entry Point
require __DIR__ . '/config/config.php';
require __DIR__ . '/src/Router.php';

$router = new Router();
$router->route();
?>