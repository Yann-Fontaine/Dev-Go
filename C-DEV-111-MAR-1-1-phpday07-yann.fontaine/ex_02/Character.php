<?php
include_once("Mage.php");
include_once("Warrior.php");
class Character{

    protected $name;
    protected $life=50;
    protected $agility=2;
    protected $strength=2;
    protected $wit=2;
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

    function attack(){
        
    }

}