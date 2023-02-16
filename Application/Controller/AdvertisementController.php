<?php
require_once ("Application/Controller/AbstractController.php");
require_once ("Application/Model/DAO/AdvertisementDAO.php");

class AdvertisementController extends AbstractController {
    public function handler(){
        $advertisements = $this->loadAdvertisements();  //Get all advertisements in the db
        require_once('Application/View/AdvertisementView.php');
    }

    private function loadAdvertisements(){
        $dao = new AdvertisementDAO();
        $advertisements = $dao->getAll();
        return $advertisements;
    }
}
