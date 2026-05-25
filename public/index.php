<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Infrastructure\Web\Controllers\UserController;

$controller = new UserController();

$action = $_GET['action'] ?? 'index';

switch ($action) {

    case 'store':
        $controller->store();
        break;

    default:
        $controller->index();
        break;
}