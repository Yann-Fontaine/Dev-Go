<?php
namespace Imperium{
    class Soldier{

        private $hp;
        private $attack;
        private $name;

        function __construct(string $nam, $h=50, $attac=12){
            $this->name=$nam;
            $this->hp=$h;
            $this->attack=$attac;
        }

        function getName(){
            return $this->name;
        }

        function getHp(){
            return $this->hp;
        }

        function getAttack(){
            return $this->attack;
        }

        function setName($nam){
            $this->name=$nam;
        }

        function setHp($h){
            $this->hp=$h;
        }

        function setAttack($attac){
            $this->attack=$attac;
        }

        function doDamage(object $target){
            if (get_class($target)=='Chaos\Soldier')
                $target->setHp(($target->getHp()-$this->attack));
        }

        function __toString(){
            return "$this->name the ".__NAMESPACE__."Space Marine : $this->hp HP.";
        }

    }
}



namespace Chaos{
    class Soldier{
      
        private $hp;
        private $attack;
        private $name;

        function __construct(string $nam, $h=70, $attac=12){
            $this->name=$nam;
            $this->hp=$h;
            $this->attack=$attac;
        }

        function getName(){
            return $this->name;
        }

        function getHp(){
            return $this->hp;
        }

        function getAttack(){
            return $this->attack;
        }

        function setName($nam){
            $this->name=$nam;
        }

        function setHp($h){
            $this->hp=$h;
        }

        function setAttack($attac){
            $this->attack=$attac;
        }

        function doDamage(object $target){
            if (get_class($target)=='Imperium\Soldier')
                $target->setHp(($target->getHp()-$this->attack));
        }

        function __toString(){
            return "$this->name the ".__NAMESPACE__."Space Marine : $this->hp HP.";
        }  
    }
}