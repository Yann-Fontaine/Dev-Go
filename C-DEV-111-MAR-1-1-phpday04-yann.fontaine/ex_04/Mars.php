<?php
namespace chocolate;
   class Mars{

     static $nbid=0;
     private $id=0;
     
      function __construct(){     
      $this->id=Mars::$nbid;
      Mars::$nbid++;
      }
        
      function getId(){
      	return $this->id;
  }
  
}

namespace planet;
   class Mars{

      private $size;

      function __construct($siz=NULL){
        $this->size=$siz;
      }

      function getSize(){
        return $this->size;
      }

      function setSize($siz=NULL){
        $this->size=$siz;
      }

}