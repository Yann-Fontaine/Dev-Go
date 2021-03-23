<?php
class Gecko{
      public $name;
      function __construct($nam=NULL){
      $this->name = $nam;
      if($nam==NULL){
      echo "Hello !\n";
      }
      else{
      echo "Hello $nam !\n";
}
}
}