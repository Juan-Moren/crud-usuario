<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Infrastructure\Web\Controllers\UserController;

$controller = new UserController();

$action = $_GET['action'] ?? 'index';

switch ($action) {

    case 'store':
        $controller->store();
        break;

    case 'edit':
        $controller->edit(
            (int) $_GET['id']
        );
        break;

    case 'update':
        $controller->update();
        break;

    case 'delete':
        $controller->delete(
            (int) $_GET['id']
        );
        break;

    default:
        $controller->index();
        break;
}