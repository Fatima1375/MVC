<?php
namespace libs\system;

use Doctrine\DBAL\Logging\EchoSQLLogger;

class BootStrap
{
    //creation d'un constructeur
    public function __construct()
    {
        
        //Demarrage de l'application
        if(isset($_GET["url"]))
        {
            //explode permet de changer des chaines de caracteres sous forme
            //de tableau
            $url = explode("/", $_GET["url"]);
            
            $controller_file = "src/controller/".$url[0]."Controller.php";
            if(file_exists($controller_file))
            {
                require_once $controller_file;
                $file = $url[0]."Controller";
                $controller_object = new $file();

                //SI l'objet la methode et un parametre sont saisis 
                if(isset($url[2]))
                {
                    $method = $url[1];
                    //method_exist prend en parametres l'objet et la methode qu'on cherche
                    //SI LA METHODE EXISTE
                    if(method_exists($controller_object, $method))
                    {
                        $controller_object->$method($url[2]);
                    }else {
                        die($method." n 'existe pas dans le controller ".$file);
                    }
                    

                }
                //si l'objet et le nom de la methode sont saisis c
                else if(isset($url[1]))
                {
                    $method = $url[1];
                    //method_exist prend en parametres l'objet et la methode qu'on cherche
                    //SI LA METHODE EXISTE
                    if(method_exists($controller_object, $method))
                    {
                        $controller_object->$method();
                    }else {
                        die($method." n 'existe pas dans le controller ".$file);
                    }
                    
                }

            }else {
                die($controller_file."n'existe pas");
            }
        }else {
            echo "MVC";
        }
    }
}


?>