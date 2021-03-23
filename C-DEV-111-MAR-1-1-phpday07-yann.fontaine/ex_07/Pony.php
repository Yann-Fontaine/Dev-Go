<?php
class Pony{

    public $gender;
    public $name;
    public $color;

    function __construct($gende, $nam, $colo){
        $this->gender=$gende;
        $this->name=$nam;
        $this->color=$colo;
    }

    function __toString(){
        return "Don't worry, I'm a pony!\n";
    }

    function speak(){
        echo "Hiii hiii hiii\n";
    }

    function __call($function, $param){
        echo "I don't know what to do...\n";
    }

    function __destruct(){
        echo "I'm a dead pony.\n";
    }

}