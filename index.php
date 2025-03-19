<?php
session_start();

// Định nghĩa hằng số cho đường dẫn gốc
define('BASE_PATH', __DIR__);

// Yêu cầu các file cần thiết từ app/
require_once BASE_PATH . '/app/config/database.php';
require_once 'app/controllers/StudentController.php';
require_once 'app/controllers/HocPhanController.php';
require_once 'app/controllers/LoginController.php';

$request = $_SERVER['REQUEST_URI'];
$baseUrl = '/php/websinhvien';

if (strpos($request, $baseUrl) === 0) {
    $uri = substr($request, strlen($baseUrl));
    $uri = trim($uri, '/');
    $segments = explode('/', $uri);

    $controllerName = ucfirst($segments[0]) . 'Controller';
    $action = $segments[1] ?? 'index';
    $param = $segments[2] ?? null;

    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $action)) {
            if ($param) {
                $controller->$action($param);
            } else {
                $controller->$action();
            }
        } else {
            echo "Action không tồn tại.";
        }
    } else {
        echo "Controller không tồn tại.";
    }
} else {
    echo "Không tìm thấy trang.";
}
?>