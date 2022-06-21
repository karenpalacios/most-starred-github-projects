<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Leaf\Router;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/autoload.php";

Router::get("/", "DisplayController@index");

Router::run();

/*useDisplayController;

require __DIR__ . "/vendor/autoload.php";
//require __DIR__ . "/routes.php";

// GET example
Router::get("/", "DisplayController@index");

Router::get("/sync", function () {
  echo json_encode([
    "message" => "Test!"
  ]);
});

Router::run();*/