<?php

class Router{
    
 private $ctrl;
 //Url => index.php?url=security/index
 //Reecrire URL =>security/index
    function route(){

        try{
            spl_autoload_register(function($class){
                $pathModel="./model/".$class.".php";
                $pathDao="./dao/".$class.".php";
                $pathLibs="./libs/".$class.".php";
                if(file_exists($pathModel)){
                    require_once( $pathModel);
                }elseif(file_exists($pathDao)){
                    require_once($pathDao); 
                }elseif(file_exists( $pathLibs)){
                 require_once( $pathLibs); 
             }     
             });
             
        }catch(Exception $ex){

        }
       
    }
}