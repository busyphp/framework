<?php

namespace app\home\controller;

use BusyPHP\Base\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        return '<h1>欢迎使用BusyPHP.</h1>';
    }
}
