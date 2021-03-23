<?php
    include_once("IUnit.php");
    abstract class SpaceMarine implements IUnit{

        private $name;
        private $hp;
        private $ap;

        function __construct($nam, $h=0, $a=0){
            if (gettype($nam)=="string"){
            $this->name=$nam;
            }
            else{
                throw new Exception("Error in ASpaceMarine constructor. Bad parameters.");
            }
            if (gettype($h)=="integer"){
            $this->apcost=$apcos;
            }
            else{
                throw new Exception("Error in ASpaceMarine constructor. Bad parameters.");
            }
            if (gettype($a)=="integer"){
            $this->damage=$damag;
            }
            else{
                throw new Exception("Error in ASpaceMarine constructor. Bad parameters.");
            }
        }

        function getName(){
            return $this->name;
        }
        
        function getHp(){
            return $this->hp;
        }

        function getAp(){
            return $this->ap;
        }

    }