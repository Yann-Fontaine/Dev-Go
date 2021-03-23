<?php
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