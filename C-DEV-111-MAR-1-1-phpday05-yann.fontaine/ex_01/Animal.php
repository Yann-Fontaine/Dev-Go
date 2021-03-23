<?php
class Animal{

    private $name;
    private $legs;
    private $type;
    const MAMMAL=0;
    const FISH=1;
    const BIRD=2;


    function __construct($nam=null, $leg=null, $typ=null){
        if (gettype($nam)=="string"){
            $this->name=$nam;
        }
        if (gettype($leg)=="integer"){
            $this->legs=$leg;
        }
        switch ($typ){
            case 0:
                $this->type="mammal";
            break;
            case 1:
                $this->type="fish";
            break;
            case 2:
                $this->type="bird";
            break;
            default:
                echo "This type doesn't exist.\n";
        }
        echo "My name is $this->name and I am a $this->type!\n";
    }

    function getName(){
        return $this->name;
    }

    function getLegs(){
        return $this->legs;
    }

    function getType(){
        return $this->type;
        echo "$this->name has $this->legs legs and is a $this->type.\n";
    }
}