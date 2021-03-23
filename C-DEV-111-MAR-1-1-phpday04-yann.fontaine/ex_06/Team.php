<?php
require("Astronaut.php");
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

}