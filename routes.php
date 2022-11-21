<?php

return [
    '/' => 	['GET', 'Controller@home'],
    '/about' =>  ['GET', 'Controller@about'],

    '/api' => [
        '/users' =>         ['GET', 'Date@current'],
        '/user' => [
            '/{id:\d+}' =>  ['GET', 'Controller@show'],
        ]
    ]
];
