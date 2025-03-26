<?php
require_once 'C:/xampp/htdocs/KT/app/controllers/svController.php';
// Lấy URL request
$url = isset($_GET['url']) ? $_GET['url'] : '/';
$url = trim($url, '/');



$urlParts = explode('/', $url);

$controllerName = !empty($urlParts[0]) ? ucfirst($urlParts[0]) . 'Controller' : 'HomeController';
$action = !empty($urlParts[1]) ? $urlParts[1] : 'index';

// Kiểm tra class controller có tồn tại không?
if (file_exists("C:/xampp/htdocs/KT/app/controllers/$controllerName.php")) {
    require_once "C:/xampp/htdocs/KT/app/controllers/$controllerName.php";
    $controller = new $controllerName();

    // Kiểm tra method action có tồn tại không?
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        die("");
    }
} else {
    die("");
}
?>