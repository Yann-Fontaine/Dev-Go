<?php
require_once("Animal.php");
class Cat extends Animal{
    private $color;

    function __construct($nam, $colo="grey"){
        parent::__construct($nam,$leg=4, $typ=Animal::MAMMAL);
        $this->name=$nam;
        $this->legs=4;
        $this->type="mammal";
        $this->color=$colo;
        echo "$this->name: MEEEOOWWWW\n";
    }

    function getColor(){
        return $this->color;
    }
    
    function setColor($colo="grey"){
    $this->color=$colo;
    }

    function meow(){
        echo "$this->name the $this->color kitty is meowing.\n";
    }

}