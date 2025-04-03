<?php
define('ROOT', __DIR__);
define('BASE_URL', '/gotouchgrass');

require_once('controller/ValorantController.php');

$controller = new ValorantController(new ValorantData());

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'agents':
        $controller->showAgents();
        break;

    default:
        $controller->showHome();
        break;
}
?>