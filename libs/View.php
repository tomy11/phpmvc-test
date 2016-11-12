<?php
class View extends Controller {

    function __construct(){
     
        //echo 'this is VIEW Page Header<br/>';
      
    }

    public function render($name, $noInclude = false) {
        if ($noInclude == true)
        {
            require 'views/' . $name . '.php';
        } else {
        require 'views/header.php'; 
        require 'views/' . $name . '.php';
        require 'views/footer.php'; 
        }

    }
}