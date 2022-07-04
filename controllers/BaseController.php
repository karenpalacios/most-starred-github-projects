<?php

class BaseController{

    function render($view,$data) {
        include_once('views/' . $view . '.php');
    }

}