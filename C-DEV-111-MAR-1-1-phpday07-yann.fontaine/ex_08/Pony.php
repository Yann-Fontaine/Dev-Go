<?php
class Pony{

    private $gender;
    private $name;
    private $color;

    function __construct($gende, $nam, $colo){
        $this->gender=$gende;
        $this->name=$nam;
        $this->color=$colo;
    }

    function getGender(){
        return $this->gender;
    }

    function getName(){
        return $this->name;
    }

    function getColor(){
        return $this->color;
    }

    function setGender($gende){
        $this->gender=$gende;
    }

    function setName($nam){
        $this->name=$nam;
    }

    function setColor($colo){
        $this->color=$colo;
    }

    function __set($attrib, $param){
        if ($attrib=="gender"){
            echo "It's not right to set a private attribute!\n";
            $this->gender=$param;
        }
        elseif($attrib=="name"){
            echo "It's not right to set a private attribute!\n";
            $this->name=$param;
        }
        elseif($attrib=="color"){
            echo "It's not right to set a private attribute!\n";
            $this->color=$param;
        }
        else{
            echo "There is no attribute: $attrib.\n";
        }
    }

    function __get($attrib){
        if ($attrib=="gender"){
            echo "It's not right to get a private attribute!\n";
            return $this->gender;
        }
        elseif($attrib=="name"){
            echo "It's not right to get a private attribute!\n";
            return $this->name;
        }
        elseif($attrib=="color"){
            echo "It's not right to get a private attribute!\n";
            return $this->color;
        }
        else{
            echo "There is no attribute $attrib.\n";
        }
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