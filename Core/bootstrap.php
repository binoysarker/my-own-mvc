<?php

use App\Core\App;

App::bind('config', require 'config.php');
// dd(App::get('config'));
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
require 'functions.php';
