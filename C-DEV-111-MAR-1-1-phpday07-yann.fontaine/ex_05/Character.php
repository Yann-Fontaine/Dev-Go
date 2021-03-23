<?php
include_once("IMovable.php");
class Character implements IMovable{

    protected $name;
    protected $life=50;
    protected $agility=2;
    protected $strength=2;
    protected $wit=2;
    protected $unsheathe=false;
    const CLASSE="Character";

    function __construct($nam){
        $this->name=$nam;
    }

    function getName(){
        return $this->name;
    }

    function getLife(){
        return $this->life;
    }

    function getAgility(){
        return $this->agility;
    }

    function getStrength(){
        return $this->strength;
    }

    function getWit(){
        return $this->wit;
    }

    function getClasse(){
        return Character::CLASSE;
    }

    function moveRight(){
        echo "$this->name: moves right.\n";
    }

    function moveLeft(){
        echo "$this->name: moves left.\n";
    }

    function moveUp(){
        echo "$this->name: moves up.\n";
    }

    function moveDown(){
        echo "$this->name: moves down.\n";
    }

    function attack(){
        
    }

    final function unsheathe(){
        $this->unsheathe=true;
        echo "$this->name: unsheathes his weapon.\n";
    }

}