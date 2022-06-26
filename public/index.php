<?php
define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'posts.index';
}

$page = explode('.', $page);
if($page[0] == 'admin'){
    $controller = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
    $action = $page[2];
} else{
    $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
    $action = $page[1];
}

// Test page 404
// if(!class_exists($controller)){
//     $controller = '\App\Controller\\DefautController';
//     require __DIR__ . '/../app/Controller/AppController.php';
//     require __DIR__ . '/../app/Controller/DefautController.php';
// }

// if(!method_exists($controller,$action)){
//     $action = 'page404';
// }

$controller = new $controller();
$controller->$action();
