<?php
require_once ("Application/Controller/AbstractController.php");
require_once ("Application/Model/DAO/UserDAO.php");

class UserController extends AbstractController {
    public function handler(){
        $users = $this->loadUsers();  //Get all users in the db
        require_once('Application/View/UserView.php');
    }

    private function loadUsers(){
        $dao = new UserDAO();
        $users = $dao->getAll();
        return $users;
    }
}
