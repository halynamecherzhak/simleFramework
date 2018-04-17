<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/17/2018
 * Time: 8:26 AM
 */
namespace controllers;
use models\CalculatorModel;
require'app/models/CalculatorModel.php';

class CalculatorController
{
    public function sumAction()
    {
        $action = 'doSum';
        return require 'app/views/form.phtml';
    }
    public function doSumAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->sum();
        $result = $model->getResult();
        return require 'app/views/result.phtml';
    }
    public function subtractAction()
    {
        $action = 'doSubtract';
        return require 'app/views/form.phtml';
    }
    public function doSubtractAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->subtract();
        $result = $model->getResult();
        return require 'app/views/result.phtml';
    }
    public function multiplyAction()
    {
        $action = 'doMultiply';
        return require 'app/views/form.phtml';
    }
    public function doMultiplyAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->multiply();
        $result = $model->getResult();
        return require 'app/views/result.phtml';
    }
}