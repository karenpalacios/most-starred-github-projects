<?php

class BaseController{

    function render($view) {
        include_once('views/' . $view . '.php');
    }

}