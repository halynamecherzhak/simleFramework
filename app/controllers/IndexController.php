<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/17/2018
 * Time: 8:25 AM
 */
namespace controllers;

class IndexController
{
    public function indexAction()
    {
        return require 'app/views/index.phtml';
    }
}