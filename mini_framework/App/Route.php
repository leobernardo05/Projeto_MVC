<?php
    namespace App;  

    class Route {
        public function initRoutes(){
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index'
            );

            $routes['sobre_nos'] = array(
                'route' => '/sobre_nos',
                'controller' => 'indexController',
                'action' => 'sobreNos'
            );

            $this->setRoutes($routes);
        }

        public function run($url){
            echo $url;
            foreach($this->getRoutes() as $key => $value){
                // code
                print_r($route);
                echo '<br><br><br>';

                if($url == $route['route']){
                    $class = "App\\Controllers\\".ucfirst(route['controller']);

                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }

        public function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            return parse_url('www.google.com/gmail?x10');
        }    
    }
?>