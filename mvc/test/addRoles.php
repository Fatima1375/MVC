<?php

require_once '../bootstrap.php';

//creer un role dans la base
$role  = new Roles();
//$role->setId(1);
$role->setNom("ROLE_USER");


$entityManager->persist($role);
$entityManager->flush();

//Afficher l'identifiant cree
echo $role->getId();

?>