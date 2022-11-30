<?php

require('../vendor/autoload.php');

use Stilmark\Parse\Dump;
use Stilmark\Router\Request;

$_SERVER['REMOTE_ADDR'] = '1.1.1.1';
$_SERVER['SERVER_NAME'] = 'www.php.net';
$_SERVER['REQUEST_URI'] = '/api/user/66/?large=smile';
$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['QUERY_STRING'] = 'foo=bar';
$GLOBALS['URI_ARGUMENTS'] = ['id' => 66, 'norm' => 'out', 'person' => 'taken'];

$_POST = ['email' => 'bob@hund.com', 'password' => 'kincha', 'gender' => 'some'];

// echo Dump::json( Request::url());

echo Dump::json( Request::hasPost(['email', 'password', 'gender']) );

// echo Dump::json( Request::args(['id', 'person']));