<?php

/**
 * A model representing advertisements
 */
class Advertisement{
    private $id;
    private $userid;
    private $title;

    public function __construct($id, $username, $title){
        $this->id = $id;
        $this->username = $username;
        $this->title = $title;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setUsername($username){
        $this->username = $username;
    }
    public function getUsername(){
        return $this->username;
    }

    public function setTitle($title){
        $this->title = $title;
    }
    public function getTitle(){
        return $this->title;
    }
}
