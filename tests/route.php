<?php

require('../vendor/autoload.php');

$_ENV['APPROOT'] = '../';
$_ENV['NAMESPACE'] = 'Stilmark\Router';
$_ENV['CONTROLLER'] = '';

use Stilmark\Parse\Dump;
use Stilmark\Router\Request;
use Stilmark\Router\Route;

$_SERVER['SERVER_NAME'] = 'www.php.net';
$_SERVER['REQUEST_URI'] = '/api/user/66';
$_SERVER['REQUEST_METHOD'] = 'GET';

$output = Route::dispatch();

echo Dump::json([$output, Request::method(), Request::path()]);