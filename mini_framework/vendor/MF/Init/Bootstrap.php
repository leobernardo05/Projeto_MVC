<?php
namespace MF\Init;

abstract class Bootstrap{
     private $routes;

    public function __construct(){
        $this->initRoutes();   
        $this->run($this->getUrl())
    }

            public function getRoutes(){
        return $this->routes;
    }

    public function setRoutes(array $routes){
        $this->routes = $routes;
    }

}

?>