<?php

namespace Stilmark\Router;

class Controller
{

	function show()
	{
        return [
            'template' => 'hello',
            'data' => [
                'user' => ['firstName' => 'John']
            ]
        ];
	}

}