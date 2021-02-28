<?php

class Autoloader
{
    static function register(){
        spl_autoload_register(array(__CLASS__,"autoload"));
    }

    static function autoload($class){
        //autoload
        //str_replace recoit en parametres ce qu'on recherche, ce par quoi on le remplace et l'objet correspmdant
        //echo str_replace("\\",  "/",$class);
        if(file_exists("src/model/".$class.".php"))
        {
            require_once "src/model/".$class.".php";
        }
        else if(file_exists("src/controller/".$class.".php"))
        {
            require_once "src/controller/".$class.".php";
        }
        
        //Dans le cas ou on definit des namespace
        if(file_exists(str_replace("\\",  "/",$class.".php")))
        {
            require_once str_replace("\\",  "/",$class.".php");
        }else {
            die("Merci d'utiliser le mot cle use suivi de ".$class);
        }
    }
}
Autoloader::register();

?>