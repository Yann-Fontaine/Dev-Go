<?php
include_once("Character.php");
class Mage extends Character{

    const CLASSE="Mage";

    function __construct($nam){
        parent::__construct($nam);
        $this->life=70;
        $this->agility=10;
        $this->strength=3;
        $this->wit=10;
        echo "$this->name: May the gods be with me.\n";
    }

    function attack(){
        echo "$this->name: Feel the power of my magic!\n";
    }

    function moveRight(){
        echo "$this->name: moves right furtively.\n";
    }

    function moveLeft(){
        echo "$this->name: moves left furtively.\n";
    }

    function moveUp(){
        echo "$this->name: moves up furtively.\n";
    }

    function moveDown(){
        echo "$this->name: moves down furtively.\n";
    }

    function __destruct(){
        echo "$this->name: By the four gods, I passed away...\n";
    }
        

}