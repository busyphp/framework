<?php
declare(strict_types = 1);

namespace app\admin\controller;

use BusyPHP\app\admin\annotation\MenuNode;
use BusyPHP\app\admin\controller\AdminController;

/**
 * 演示页面
 * @author busy^life <busy.life@qq.com>
 * @copyright (c) 2015--2023 ShanXi Han Tuo Technology Co.,Ltd. All rights reserved.
 * @version $Id: 2023/3/24 11:57 DemoController.php $
 */
class DemoController extends AdminController
{
    #[MenuNode(menu: true, name: '演示页面', parent: '#system', icon: 'fa fa-bandcamp')]
    public function index()
    {
        return $this->display();
    }
}