<?php
class Gecko{
      private $name;

      function __construct($nam=NULL){
      $this->name = $nam;
      if($nam==NULL){
      echo "Hello !\n";
      }
      else{
      echo "Hello $nam !\n";
}
}

function getName(){
return $this->name;
}

function __destruct(){
      if ($this->name==NULL){
            echo "Bye !\n";
      }
      else{
      echo "Bye $this->name !\n";
      }
}
}