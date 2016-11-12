<?php
class Help extends Controller {

    function __construct(){
        parent::__construct();
       // echo 'this is page help php<br />';
        $this->view->render('help/help_page');
    }

    public function other($arg = false) {
        echo 'this other <br />';
        echo 'optional: ' . $arg . '<br />';

        require 'models/help_model.php';
        $model = new Help_Model();
    }
}