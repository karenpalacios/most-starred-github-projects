<?php
require 'config/config.php';
define('APPNAME', 'git2');
define('BASEPATH',  @realpath( dirname (__FILE__).'/../').'/'.APPNAME);

$path = [
    'controller' => 'controllers',
    'model' => 'models',
    'view' => 'views',
];

function class_loader($className) {
    global $path;
    foreach ($path as $directory) {
        $fileName = BASEPATH . '/' . $directory . '/' . str_replace('_', DIRECTORY_SEPARATOR, $className).'.php';
        if (file_exists($fileName)) {
            require_once($fileName);
        }
    }
}
spl_autoload_register('class_loader');
