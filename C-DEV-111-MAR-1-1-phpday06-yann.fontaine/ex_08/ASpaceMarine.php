<?php
    include_once("IUnit.php");
    abstract class SpaceMarine implements IUnit{

        private $name;
        private $hp;
        private $ap;
        private $weapon=0;
        private $close=false;
        private $dead=false;

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

        function getWeapon(){
            return $this->weapon;
        }

        function equip($weapo){
            $this->dead();
            if (getclass($weapo)=="AWeapon\PlasmaRifle"){
                if (PlasmaRifle::$count>0){
                    $this->weapon=$weapo;
                    PlasmaRifle::$count--;
                    echo "$this->name has been equipped with a $this->weapon.\n";
                }
                else{
                    echo "There are no Plasma Rifles left.\n";
                }
            }
            elseif (getclass($weapo)=="AWeapon\PowerFist"){
                if (PowerFist::$count>0){
                    $this->weapon=$weapo;
                    PowerFist::$count--;
                    echo "$this->name has been equipped with a $this->weapon.\n";
                }
                else{
                    echo "There are no PowerFists left.\n";
                }
            }
            else{
                throw new Exception("Error in ASpaceMarine. Parameter is not an AWeapon.");
            }
        }

        function attack($target){
            $this->dead();
            if ($target instanceof IUnit) {
                if (gettype($this->weapon)=="string"){
                    if (AWeapon::$melee==true){
                        if ($this->close==false){
                            echo "$this->name: I'm too far away from $target->name.\n";
                        }
                        elseif ($this->close==true && $this->ap>=PowerFist::$apcost){
                            echo "$this->name attacks $target->name with a Power Fist.\n";
                            $this->ap-=PowerFist::apcost;
                            $target->receiveDamage(PowerFist::$damage);
                        }
                        else{
                            echo "I'm too tired to attack.\n";
                        }
                    }
                    else{
                        if($this->ap>=PlasmaRifle::$apcost){
                            echo "$this->name attacks $target->name with a Plasma Rifle.\n";
                            $this->ap-=PlasmaRifle::$apcost;
                            $target->receiveDamage(PlasmaRifle::$damage);
                        }
                        else{
                            echo "I'm too tired to attack.\n";
                        }
                    }
                }
                else{
                    echo "$this->name: Hey, this is crazy. I'm not going to fight this empty handed.\n";
                }
            }
            else{
                throw new Exception("Error in AMonster. Parameter is not an IUnit.");
            }
        }

        function receiveDamage($hurt){
            if (gettype($hurt)=="integer"){
                $this->hp-=$hurt;
                if ($this->hp<=0){
                    $this->dead=true;
                }
            }
        }

        function dead(){
            if ($this->dead==true)
                exit();
        }

        function moveCloseTo($target){
            $this->dead();
            if ($target instanceof IUnit) {
                if($this->close==false){
                    $this->close=true;
                    echo "$this->name is moving closer to $target->name";
                }
            }
            else{
                throw new Exception("Error in AMonster. Parameter is not an IUnit.");
            }
        }
        
        function recoverAP(){
            $this->dead();
            $this->ap+=9;
            if ($this->ap >=50){
                $this->ap=50;
            }
        }

    }