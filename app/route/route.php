<?php

namespace App\route;

class Route
{
    /**
     * @method for control the url
     */
    public function add()
    {
        $request = $_SERVER['REQUEST_URI'];
        $request = explode("/", $request);
        $viewDIR = './app/view/';
        switch ($request[2]) {

            case '':
                require __DIR__ . '/index.php';
                break;
            case '/':
                require __DIR__ . '/index.php';
                break;

            case 'inicio':
                require $viewDIR . 'home.php';
                break;

            case 'produtos':
                var_dump($viewDIR);
                require $viewDIR . 'products.php';

                break;
            default:
                http_response_code(404);
                require __DIR__ . $viewDIR . '404.php';
                break;
        }
    }
}
