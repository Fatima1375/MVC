<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\RolesDb;

class RolesController extends Controller
{
    public function add()
    {
        //avec l'heritage view sera accessible dans RolesController car instancier dans Controller
        // malgre le protected
        return $this->view->load("roles/add");
    }

    public function getAll()
    {
        $roles_dao = new RolesDb();
        $roles = $roles_dao->findAll(); //array("ROLE_USER", "ROLE_ADMIN");
        //avec l'heritage view sera accessible dans RolesController car instancier dans Controller
        // malgre le protected
        return $this->view->load("roles/getAll", $roles);
    }

    public function delete($id)
    {
        echo $id;
        //return $this->view->load("roles/add");
    }

}

?>