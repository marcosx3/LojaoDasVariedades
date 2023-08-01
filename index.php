<?php

use App\route\Route;

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/route/route.php';

include_once "./app/view/components/header.php";
$route = new Route();
include_once "./app/view/components/footer.php";
$route->add();
