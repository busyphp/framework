BusyPHP使用说明
===============

`BusyPHP` 框架基于 `ThinkPHP6.0` 进行的开发，所以 `ThinkPHP6.0` 中的所有内置方都可以继续使用，具体请参考 [官方手册](https://www.kancloud.cn/manual/thinkphp6_0/1037479) 

除了使用 `ThinkPHP6.0` 内置规则外除了特殊情况，必须遵守本使用说明文档中的条例

## 模型

> 定义模型需要继承 `BusyPHP\Base\BaseModel` 
> 模型名称就是数据表名称，请使用驼峰命名方式创建到 `core/Model` 目录下

##### 内置方法
~~~php
<?php
namespace BusyPHP\Model\Test;
use BusyPHP\Base\BaseModel;

// Test就是数据表名称，如数据表命名为 busy_test
class Test extends BaseModel {
    
}
~~~


