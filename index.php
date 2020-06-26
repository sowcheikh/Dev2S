<?php
//chargement dynamique des classes => Autoloading
define("BASE_URL","http://localhost/Dev2S");
require_once("./libs/Router.php");
$router=new Router();
$router->route();
