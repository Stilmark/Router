<?php

namespace Stilmark\Router;

class Controller
{

    function home()
    {
        return [
            'template' => 'home'
        ];
    }

    function about()
    {
        return [
            'template' => 'about'
        ];
    }

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