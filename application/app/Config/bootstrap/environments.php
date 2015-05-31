<?php
CakePlugin::load('Environments');
App::uses('Environment', 'Environments.Lib');

$env = env('CAKE_ENV');

switch($env){
    case 'production':
        include dirname(__FILE__) . DS . 'environments' . DS . 'production.php';
    default:
        include dirname(__FILE__) . DS . 'environments' . DS . 'development.php';
        include dirname(__FILE__) . DS . 'environments' . DS . 'test.php';
        include dirname(__FILE__) . DS . 'environments' . DS . 'ci.php';
}

Environment::start();
?>
