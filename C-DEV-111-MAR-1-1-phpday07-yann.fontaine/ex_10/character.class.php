<?php
class Character{

    private $name;
    private $strength;
    private $magic;
    private $intelligence;
    private $life;
    static private $count=0;

    function __construct($nam=null){
        if ($nam==null){
            Character::$count++;
            $this->name="Character ".Character::$count;
        } 
        else{
            $this->name=$nam;
        }
        $this->strength=0;
        $this->magic=0;
        $this->intelligence=0;
        $this->life=100;
    }

    function __toString(){
        return "My name is ".$this->name.".\n";
    }

}