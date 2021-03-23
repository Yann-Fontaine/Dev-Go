<?php
include_once("Character.php");
class Warrior extends Character{

    const CLASSE="Warrior";

    function __construct($nam){
        parent::__construct($nam);
        $this->life=100;
        $this->agility=10;
        $this->strength=8;
        $this->wit=3;
        echo "$this->name: I'll engrave my name in history!\n";
    }

    function attack(){
        echo "$this->name: I'll crush you with my hammer!\n";
    }

    function __destruct(){
        echo "$this->name: Aarrg I can't believe I'm dead...\n";
    }

}