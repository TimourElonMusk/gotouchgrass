<?php
define('ROOT', __DIR__);
define('BASE_URL', '/gotouchgrass');

require_once('controller/ValorantController.php');

$controller = new ValorantController();
$controller->showAgents();
?>