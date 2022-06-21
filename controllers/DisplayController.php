<?php
include_once('controllers/BaseController.php');

class DisplayController extends BaseController{

    function index() {
     
        $this->render('main');
    }

}