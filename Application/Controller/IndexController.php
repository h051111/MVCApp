<?php
require_once ("Application/Controller/AbstractController.php");

class IndexController extends AbstractController {
    public function handler(){
        require_once('Application/View/IndexView.php');
    }
}
