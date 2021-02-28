<?php
namespace libs\system;

class Model
{
    protected $entityManager;
    //creation d'un constructeur
    public function __construct()
    {
        require_once "./bootstrap.php";
        $this->entityManager = $entityManager;
    }
}


?>