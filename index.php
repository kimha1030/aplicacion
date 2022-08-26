<?php
session_start();
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'config/db.php';

if (empty($_SESSION['user'])) {
    $error = new UserController();
    $error->login();
    exit();
}else{
    if (isset($_GET['controller'])){
        $name_controller= $_GET['controller'].'Controller';
    } else if (!isset($_GET['controller']) && !isset($_GET['action']) ){
        $name_controller = controller_default;
    } else {
        $error = new errorController();
        $error->index();
        exit();
    }
}

if (class_exists($name_controller)) {
    $controller = new $name_controller();
    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])){
        $action = $_GET['action'];
        $controller->$action();
    } else if (!isset($_GET['controller']) && !isset($_GET['action']) ){
        $action = action_default;
        $controller->$action();
    } else {
        $error = new ErrorController();
        $error->index();
    }
} else {
    $error = new ErrorController();
    $error->index();
}

require_once 'view/template/footer.php';
