<?php
namespace libs\system;

//inclusion de view
use libs\system\View;

class Controller
{
    protected $view;

    //creation d'un constructeur
    public function __construct()
    {
        $this->view = new View();
    }
}


?>