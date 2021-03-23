<?php
include_once("AMonster.php");
class SuperMutant extends Monster{
    
    static private $count=1;

    function __construct(){
        parent::__construct($this->name, $h=170, $a=20);
        $this->name="SuperMutant#".SuperMutant::$count;
        echo "$this->name: Roaarrr !\n";
        $this->damage=60;
        $this->apcost=20;
    }

    function receiveDamage($hurt){
        if (gettype($hurt)=="integer"){
            $this->hp-=$hurt;
            if ($this->hp<=0){
                $this->dead=true;
                echo "$this->name: Urgh !\n";
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

    function recoverAP(){
        $this->dead();
        $this->ap+=7;
        if ($this->ap >=50){
            $this->ap=50;
        }
        $this->hp+=10;
        if ($this->hp>=170){
            $this->hp=170;
        }

    }

}