<?php
include_once("IUnit.php");
    abstract class Monster implements IUnit{

        private $name;
        private $hp;
        private $ap;
        private $close=false;
        private $damage=0;
        private $apcost=0;
        private $dead=false;

        function __construct($nam, $h=0, $a=0){
            if (gettype($nam)=="string"){
            $this->name=$nam;
            }
            else{
                throw new Exception("Error in AMonster constructor. Bad parameters.");
            }
            if (gettype($h)=="integer"){
            $this->apcost=$apcos;
            }
            else{
                throw new Exception("Error in AMonster constructor. Bad parameters.");
            }
            if (gettype($a)=="integer"){
            $this->damage=$damag;
            }
            else{
                throw new Exception("Error in AMonster constructor. Bad parameters.");
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

        function getDamage(){
            return $this->damage;
        }

        function equip($weapo){
            $this->dead();
            echo "Monsters are proud and fight with their own bodies.\n";
        }

        function attack($target){
            $this->dead();
            if ($target instanceof IUnit) {
                if ($this->close==false){
                    echo "$this->name: I'm too far away from $target->name.\n";
                }
                elseif ($this->close==true && $this->ap>=$this->apcost){
                    echo "$this->name attacks $target->name.\n";
                    $this->ap-=$this->apcost;
                    $target->receiveDamage($this->damage);
                }
                else {
                    echo "I'm too tired to attack.\n";
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
            $this->ap+=7;
            if ($this->ap >=50){
                $this->ap=50;
            }
        }

    }