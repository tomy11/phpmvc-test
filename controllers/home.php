<?php
class Home extends Controller {

    function __construct(){
        parent::__construct();
        
        $this->view->render('index/index_page');
    }
}