<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/15/2018
 * Time: 11:09 AM
 */


chdir(dirname(__DIR__));
require 'app/controllers/IndexController.php';

require 'app/controllers/CalculatorController.php';

if (!isset($_GET['controller']))
{
    $controllerName = 'controllers\\IndexController';
    $action         = 'indexAction';
}
else
{
    $controllerName     = 'controllers\\' . ucfirst($_GET['controller']) . 'Controller';
    $action             = $_GET['action'] . 'Action';
}
$controller = new $controllerName();
return $controller->$action();

