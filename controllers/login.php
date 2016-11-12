<?php
class Login extends Controller {

    function __construct(){
        parent::__construct();
       $this->view->render('login/login_page');
    }
}