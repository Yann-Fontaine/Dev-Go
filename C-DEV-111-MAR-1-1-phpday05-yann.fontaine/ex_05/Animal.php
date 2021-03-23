<?php
class Animal{

    static $count=0;
    static $mcount=0;
    static $fcount=0;
    static $bcount=0;
    protected $name;
    protected $legs;
    protected $type;
    const MAMMAL=0;
    const FISH=1;
    const BIRD=2;


    function __construct($nam=null, $leg=null, $typ=null){
        if (gettype($nam)=="string"){
            $this->name=$nam;
            if (gettype($leg)=="integer"){
                $this->legs=$leg;
                switch ($typ){
                    case 0:
                        $this->type="mammal";
                        Animal::$mcount++;
                        Animal::$count++;
                        echo "My name is $this->name and I am a $this->type!\n";
                    break;
                    case 1:
                        $this->type="fish";
                        Animal::$fcount++;
                        Animal::$count++;
                        echo "My name is $this->name and I am a $this->type!\n";
                    break;
                    case 2:
                        $this->type="bird";
                        Animal::$bcount++;
                        Animal::$count++;
                        echo "My name is $this->name and I am a $this->type!\n";
                    break;
                    default:
                        echo "This type doesn't exist.\n";
                }
            }
        }
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

    static function getNumberOfAnimalsAlive(){

        if (Animal::$count==1){
            echo "There is currently 1 animal alive in our world.\n";
        }
        else{
            echo "There are currently ".Animal::$count." animals alive in our world.\n";
        }
        return Animal::$count;
    }

    static function getNumberOfMammals(){
        if (Animal::$mcount==1){
            echo "There is currently 1 mammal alive in our world.\n";
        }
        else{
            echo "There are currently ".Animal::$mcount." mammals alive in our world.\n";
        }
        return Animal::$mcount;
    }

    static function getNumberOfFishes(){
        if (Animal::$fcount==1){
            echo "There is currently 1 fish alive in our world.\n";
        }
        elseif(Animal::$fcount==0){
            echo "There are currently 0 fish alive in our world.\n";
        }
        else{
            echo "There are currently ".Animal::$fcount." fishes alive in our world.\n";
        }
        return Animal::$fcount;
    }

    static function getNumberOfBirds(){
        if (Animal::$bcount==1){
            echo "There is currently 1 bird alive in our world.\n";
        }
        else{
            echo "There are currently ".Animal::$bcount." birds alive in our world.\n";
        }
        return Animal::$bcount;
    }

    function __destruct(){
        if ($this->type=="mammal"){
            Animal::$mcount--;
            Animal::$count--;
        }
        elseif ($this->type=="fish"){
                Animal::$fcount--;
                Animal::$count--;
        }
        elseif ($this->type=="bird"){
            Animal::$bcount--;
            Animal::$count--;
        }
    }

}