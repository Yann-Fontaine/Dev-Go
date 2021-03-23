<?php
class Gecko{
      private $name;
      private $age;

      function __construct($nam=NULL, $ag=NULL){
      $this->name = $nam;
      $this->age = $ag;
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
function setAge($ag=NULL){
$this->age = $ag;

}
function getAge(){
return $this->age;
}


function status(){
switch($this->age){
case 0:
echo "Unborn Gecko\n";
break;
case 1:
case 2:
echo "Baby Gecko\n";
break;
case 3:
case 4:
case 5:
case 6:
case 7:
case 8:
case 9:
case 10:
echo "Adult Gecko\n";
break;
case 11:
case 12:
case 13:
echo "Old Gecko\n";
break;
default:
echo "Impossible Gecko\n";
}
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