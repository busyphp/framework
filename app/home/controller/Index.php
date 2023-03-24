<?php

namespace app\home\controller;

use BusyPHP\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->display();
    }
}
