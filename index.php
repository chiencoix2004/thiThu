<?php
session_start();
require_once './vendor/autoload.php';

require_once './helper.php';

require_once './env.php';

use Bramus\Router\Router;
use Coongchjen\ThiThu\Controllers\GiangVienController;

// Create Router instance
$router = new Router();

// Define routes
$router->mount('/giangvien', function() use ($router) {

    // CRUD - DANH SÁCH , THÊM , SỬA ,XÓA, XEM
    $router->get('/', GiangVienController::class.'@index'); // Danh sách
    $router->get('/{id}/delete', GiangVienController::class.'@delete'); // Xóa
    $router->match('GET|POST', '/add', GiangVienController::class.'@add'); //Thêm
    $router->match('GET|POST', '/{id}/update', GiangVienController::class.'@update'); //Sửa
    



});

// Run it!
$router->run();