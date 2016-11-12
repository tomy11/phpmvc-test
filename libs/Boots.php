<?php
class Boots {

    function __construct(){
    $url = isset($_GET['url']) ? $_GET['url'] : null;
    $url = rtrim($url, '/');
    $url = explode('/', $url);

    //print_r($url);
    
    if (empty($url[0])){
        require 'controllers/home.php';
        $controller = new Home();
        return false;
    }

    $partfile = 'controllers/' . $url[0] . '.php';

    if (file_exists($partfile)){
        require $partfile;
    } else{
        require 'controllers/error.php';
        $controller = new Error();
        return false;
    }


    $controller = new $url[0];

    if (isset($url[2])){
        $controller->{$url[1]}($url[2]);

    }
    else{
        if(isset($url[1])){
         $controller->{$url[1]}();
        }
    }

    }
    
}

