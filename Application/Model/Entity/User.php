<?php

/**
 * A model representing users
 */
class User{
    private $id;
    private $name;

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
}
