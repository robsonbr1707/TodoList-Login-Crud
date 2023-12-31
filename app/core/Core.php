<?php

class Core
{
    public function __construct()
    {
        if ($_SERVER["SERVER_NAME"] == '127.0.0.1') {
            define('WEB_LOCATION','/meus-projetos/todolist-login-crud/');
        }else{
            //define('WEB_LOCATION','/');
        }

        define('VIEWS', WEB_LOCATION.'app/views/');

        //assets
        define('ASSETS', WEB_LOCATION.'app/assets/');
        define('JS', ASSETS.'js/');
        define('CSS', ASSETS.'css/');
    }

    public function run($routes) 
    {
        
        $url = '/';
        isset($_GET['url']) ? $url .= $_GET['url'] : '';
        ($url != '/') ? $url = rtrim($url, '/') : $url;
        $routerFound = false;

        foreach ($routes as $path => $controller) {
            //'(\w-)' Valores númericos
            $pattern = '#^'.preg_replace('/{id}/', '(\w+)', $path).'$#';
            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches);
                
                $routerFound = true;
                [$currentController, $action] = explode('@', $controller);
                require_once __DIR__."/../controllers/$currentController.php";
                $newController = new $currentController();
                $newController->$action($matches);
            }
        }

        if (!$routerFound) {
            require_once __DIR__."/../controllers/NotFoundController.php";
            $controller = new NotFoundController;
            $controller->index();
        }
    }
}