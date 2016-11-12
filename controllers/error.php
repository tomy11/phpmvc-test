<?php
class Error extends Controller {

    function __construct(){
        parent::__construct();
        echo 'this is page ERROR php<br />';
        $this->view->msg = 'This page dont exist';
        $this->view->render('error/error');
    }
}