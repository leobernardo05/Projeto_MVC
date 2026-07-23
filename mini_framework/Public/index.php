<?php

    require_once "../vendor/autoload.php";
    $route = new \App\Route;
    echo 'funcionando';
    echo '<hr>';
    print_r($route->getUrl());
    echo '<hr>';
    print_r($route->getRoutes());
?>