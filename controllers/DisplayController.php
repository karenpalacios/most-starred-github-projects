<?php
include_once('controllers/BaseController.php');

class DisplayController extends BaseController{

    function index() {

        $repositories = new Repositories();
        $repositories->getAll(); 
        
        
        $this->render('main');
    }

}