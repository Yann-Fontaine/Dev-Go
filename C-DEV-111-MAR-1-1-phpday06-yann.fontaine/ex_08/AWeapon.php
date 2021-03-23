<?php
    abstract class AWeapon{
        
        protected $name;
        protected $apcost;
        protected $damage;
        protected $melee;

        function __construct($nam, $apcos, $damag){
            if (gettype($nam)=="string"){
            $this->name=$nam;
            }
            else{
                throw new Exception("Error in AWeapon constructor. Bad parameters.");
            }
            if (gettype($apcos)=="integer"){
            $this->apcost=$apcos;
            }
            else{
                throw new Exception("Error in AWeapon constructor. Bad parameters.");
            }
            if (gettype($damag)=="integer"){
            $this->damage=$damag;
            }
            else{
                throw new Exception("Error in AWeapon constructor. Bad parameters.");
            }
            $this->melee=false;
        }

        function getName(){
            return $this->name;
        }

        function getApcost(){
            return $this->apcost;
        }

        function getDamage(){
            return $this->damage;
        }

        function isMelee(){
            return $this->melee;
        }

        abstract function attack();

    }