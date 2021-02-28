<?php
namespace libs\system;

class View
{
    //creation d'un constructeur
    public function __construct(){

    }

    //cette fonction permet d'effectuer le chargement du view
    public function load()
    {
        //func_num_args est une fonction qui retourne le nombre d'arguments(de parametres)
        //func_get_args permet de recuperer les valeurs des parametres
        $num = func_num_args();
        $args = func_get_args();
        //on veut stocker les donnees stockees dans data dans index
        //load("index", $data);
        switch ($num) {
            case 1:
                $file = "src/view/".$args[0].".php";
                //verifier si le fichier existe dans le dossier view avant d'effectuer l'inclusion

                if(file_exists($file))
                {
                   
                    require_once $file;
                }else {
                    //echo et print permet d'afficher des messages simples 
                    //die permet d'afficher des messages et d'arreter completement l'execution du code 
                    die($file."n'existe pas comme vue");
                }
             break;
            case 2:
                $file = "src/view/".$args[0].".php";
                //verifier si le fichier existe dans le dossier view avant d'effectuer l'inclusion
                if(file_exists($file))
                {
                    // 1 parceque en utilisant load on a fait appel a deux parametres: LE NOM DU FICHIER ET UNE VARIABLE(donnees)
                    //or on a besoin de  recuperer les donnees dans $data
                    $data = $args[1];
                    require_once $file;
                }else {
                    //echo et print permet d'afficher des messages simples 
                    //die permet d'afficher des messages et d'arreter completement l'execution du code 
                    die($file."n'existe pas comme vue");
                }
             break;
            
            
        }

    }
}


?>