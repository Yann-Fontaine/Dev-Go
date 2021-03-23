<?php
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


      function getDestination(){
      	return $this->destination;
      }
}