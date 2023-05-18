<?php
declare(strict_types = 1);

namespace app\home\controller;

use BusyPHP\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return $this->display();
    }
}
