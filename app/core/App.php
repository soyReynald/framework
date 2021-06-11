<?php

class App {
    protected $controller = 'default';
    protected $method = 'default';
    protected $params = array();

    public function __construct(){
        $url = $this->filterUrl();

        if(file_exists('app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once 'app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                
                $this->method = $url[1];
                unset($url[1]);
        
            }
        }

        $this->params = $url ? array_values($url) : [];

        if(isset($url)){
            
            $this->params = array_values($url);

        } else {
            
            $this->params = array();

        }

        call_user_func_array(array($this->controller, $this->methods), $this->params);
    }

    private function filterUrl(){
        if(isset($_GET['url'])){
            $noSlash = rtrim($_GET['url'], '/');
            $filteredUrl = filter_var($noSlash, FILTER_SANITIZE_URL);
            $finalUrl = explode('/', $filteredUrl);
        }

    }
}

?>