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
function hello($msg=NULL){
	 if (gettype($msg)=="string" && isset($this->name)==true){
	 echo "Hello $msg, I'm $this->name!\n";
}
	elseif(gettype($msg)=="string" && isset($this->name)==false){
	echo "Hello $msg!\n";
}
	elseif(gettype($msg)=="integer" && isset($this->name)==true){
				       for ($i=0; $i<$msg; $i++){
				       echo "Hello, I'm $this->name!\n";
				       
}
}
	else{
for ($i=0; $i<$msg; $i++){
echo "Hello !\n";
}
}
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