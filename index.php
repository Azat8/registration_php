<?php

//settings
ini_set('display_errors',1);
error_reporting(E_ALL);
//settings site
define('ROOT',dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
Require_once (ROOT.'/components/Db.php');
$routes = new Route();
$routes->run();