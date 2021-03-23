<?php
require("Mars.php");
require("Phobos.php");
require("Team.php");
Class Astronaut{
      static $astroCount=0;
      private $name;
      private $snacks=0;
      private $destination=NULL;
      private $id;
      


      function __construct($nam=NULL, $sna=0,$des=NULL){
        $this->name=$nam;
        $this->snacks=$sna;
        $this->destination=$des;
        $this->id=Astronaut::$astroCount;
        Astronaut::$astroCount++;
        echo "$this->name ready for launch !\n";
      }


      function getId(){
        return $this->id;
      }
      
      function getSnacks(){
        return $this->snacks;
      }

	function getDestination(){
      	return $this->destination;
      }


      function doActions($param=NULL){
        if (get_class($param)=="planet\Mars"){
	         echo "$this->name:started a mission !\n";
           $this->destination=$param;
           Team::$astronauts[$param]="on mission";
           }
	      elseif (get_class($param)=="chocolate\Mars"){
	        echo "$this->name is eating mars number chocolate::Mars::$param->id.\n";
	        $this->snacks++;
        }
        else{
          exit();
        }
      }
        

	function __destruct(){
	  if ($this->destination==NULL){
	    echo "$this->name: mission aborted !\n";
	  }
	  else{
	    echo "$this->name: I may have done nothing, but I have $this->snacks Mars to eat at least !\n";
	  }
	}


}

include_once("Team.php");
include_once("Mars.php");
$mutta = new Astronaut("Mutta");
$hibito = new Astronaut("Hibito");
$serika = new Astronaut("Serika");
$spaceBro = new Team ("SpaceBrothers");
$spaceBro->add($mutta);
$spaceBro->add($hibito);
$spaceBro->add($serika);
$spaceBro->add(3);
echo $spaceBro->countMembers() . "\n";
$titi = new planet\Mars();
$mutta->doActions($titi);
$spaceBro->showMembers();
$spaceBro->remove($hibito);
echo $spaceBro->countMembers() . "\n";