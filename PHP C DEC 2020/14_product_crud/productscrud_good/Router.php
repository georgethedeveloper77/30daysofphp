<?php

namespace app;

/**Class Router...
 * 3 functions get, post, resolve
 */
class Router
{
    //
    public array $getRoutes = [];
    public array $postRoutes = [];

    public ?Database $database = null;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    //1.
    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    //2.
    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    //this detects the current route
    public function resolve()
    {
        /*
        echo '<pre>';
        var_dump($_SERVER);
        echo '</pre>';
         */

        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $url = $_SERVER['PATH_INFO'] ?? '/';

        //if statement
        if ($method === 'get') {
            $fn = $this->getRoutes[$url] ?? null;
        } else {
            $fn = $this->postRoutes[$url] ?? null;
        }
        if (!$fn) {
            echo 'Page not found';
            exit;
        }

        //execute fn ,$this(router)
        echo '<pre>';
       // var_dump($fn);
       // var_dump($this);
        echo '</pre>';
        //
        echo call_user_func($fn, $this);
    }

    /*render view 
    products/index
    */
    public function renderView($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include __DIR__ . "/views/$view.php";
        $content = ob_get_clean();
        include __DIR__ . "/views/_layout.php";
    }
}