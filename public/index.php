<?php

use think\App;

require __DIR__ . '/../vendor/autoload.php';

$http     = (new App())->http;
$response = $http->run();
$response->send();
$http->end($response);