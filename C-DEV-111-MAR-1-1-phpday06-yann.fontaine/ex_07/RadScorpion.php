<?php
include_once("AMonster.php");
class RadScorpion extends Monster{
    
    static private $count=1;

    function __construct(){
        parent::__construct($this->name, $h=80, $a=50);
        $this->name="RadScorpion#".RadScorpion::$count;
        echo "$this->name: Crrr !\n";
        $this->damage=25;
        $this->apcost=8;
    }

    function receiveDamage($hurt){
        if (gettype($hurt)=="integer"){
            $this->hp-=$hurt;
            if ($this->hp<=0){
                $this->dead=true;
                echo "$this->name: SPROTCH !\n";
            }
        }
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
                if (get_class($target)=='SpaceMarine\TacticalMarine'){
                $target->receiveDamage(($this->damage*2));
                }
                else{
                    $target->receiveDamage($this->damage);    
                }
            }
            else {
                echo "I'm too tired to attack.\n";
            }
        }
        else{
            throw new Exception("Error in AMonster. Parameter is not an IUnit.");
        }
    }

}