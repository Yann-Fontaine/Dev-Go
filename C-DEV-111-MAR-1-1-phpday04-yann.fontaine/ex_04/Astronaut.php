<?php
require("Mars.php");
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
	      }   
	      elseif (get_class($param)=="chocolate\Mars"){
	        echo "$this->name is eating mars number chocolate::Mars::$param->id.\n";
	        $this->snacks++;
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