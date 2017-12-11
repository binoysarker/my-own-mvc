<?php

require 'vendor/autoload.php';

require 'Core/bootstrap.php';

use App\Core\Request;
use App\Core\Router;
// dd($app);
// dd($_SERVER);
Router::load('app/routes.php')->direct(Request::uri(), Request::method());
