<?php
require("Astronaut.php");
require("Mars.php");
Class Team{

   private $name;
   private $astronauts=array();

   function __construct($nam){
      $this->name=$nam;
   }

   function getAstronauts(){
      return $this->astronauts;
   }

   function getName(){
      return $this->name;
   }

   function add($astro){
      if (get_class($astro)=="Astronauts"){
      array_push($this->astronauts, $astro);
      $this->astronauts[$astro]="on standby";
      }
      else{
      echo "$this->name: Sorry, you are not part of the team.\n";
      }
   }

   function remove($astro=NULL){
	       unset($this->astronauts[array_search($astro, $this->astronauts)]);
   }

   function countMembers(){
      return count($this->astronauts);
   }

   function showMembers(){
   if (countMembers()==0){
   exit();
   }
   else{
      echo "$this->name: ";
         foreach($this->astronauts as $astro){
            if ($astro==$this->astronauts[-1]){
               echo "$astro $astro[0].\n";
            }
            else{
               echo "$astro $astro[0], ";
            }
	  }
	  }
}


function doActions($param=NULL){
   if ($param==NULL){
      echo "$this->name: Nothing to do.\n";
   }
   else{
      if (get_class($param)=="planet\Mars"){
         echo "$this->name:started a mission !\n";
            foreach ($this->astronauts as $member){
               Astronaut::$member->destination=$param;
               $this->astronauts[$param]="on mission";
         }
      }
      elseif (get_class($param)=="planet\moon\Phobos"){
         echo "$this->name:started a mission !\n";
            foreach ($this->astronauts as $member){
               Astronaut::$member->destination=$param;
               $this->astronauts[$param]="on mission";
            }  
      }
      elseif (get_class($param)=="chocolate\Mars"){
      echo "$this->name is eating mars number chocolate::Mars::$id.\n";
         foreach ($this->astronauts as $member){
         Astronaut::$member->snacks++;
         }
      }
   }
}

}