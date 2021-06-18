<?php

spl_autoload_register(function($className){
    require_once 'core/' . $className . '.php';
});
/*
// Just learning purposes:
// The following lines are done very easily by spl_autoload_register()
require 'core/App.php';
require 'core/Controller.php';
require 'core/Model.php';
*/
$app = new App;

?>