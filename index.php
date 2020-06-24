<?php
//chargement dynamique des classes => Autoloading
// spl_autoload_register(function ($class) {
//     $pathModel="./model/".$class.".php";
//     require_once($pathModel);
// });
define("BASE_URL","http://localhost/Dev2S/");
require_once("./libs/Router.php");
$router=new Router();
$router->route();

//instanciation
// $admin = new Admin();
// var_dump($admin);
// ?>