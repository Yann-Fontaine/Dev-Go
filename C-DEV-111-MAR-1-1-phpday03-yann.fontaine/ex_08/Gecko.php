<?php
class Gecko{
      private $name;
      private $age;
      private $hunger=100;
      private $drunk=false;

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

function getEnergy(){
	return $this->hunger;
}


function setEnergy($food=NULL){
	$this->hunger = $food;
	if($this->hunger>100){
		$this->hunger=100;
}
	if($this->hunger<0){
		$this->hunger=0;
}
}


function getAge(){
	return $this->age;
}


function eat($str=NULL){
if($this->drunk==true){
		$dice=rand(1, 6);
		if ($dice==1){
			echo "I'm too drunk for that... hic !\n";
}
}
		else{
			if (strtolower($str)=="meat"){
				$this->hunger+=10;
				if($this->hunger>100){
					$this->hunger=100;
					echo "Yummy!\n";
}
}
elseif (strtolower($str)=="vegetable"){
	$this->hunger-=10;
	echo "Erk!\n";
	if($this->hunger<0){
	$this->hunger=0;
}
}
			else{
				echo "I can't eat this.\n";
}
}
}


function work(){
if($this->drunk==true){
$dice=rand(1, 6);
if ($dice==1){
echo "I'm too drunk for that... hic !\n";
}
}
else{
if ($this->hunger>=25){
echo "I'm working T.T\n";
$this->hunger-=9;
}
else{
echo "Heyyy... I'm too sleepy, better take a nap!\n";
$this->hunger+=50;
if($this->hunger>100){
$this->hunger=100;
$this->drunk=false;
}
}
}
}

function fraternize($param=NULL){
	if($this->drunk==true){
		$dice=rand(1, 6);
			if ($dice==1){
			echo "I'm too drunk for that... hic !\n";
}
			else{
				if (get_class($param)=="Gecko" && $param->name!=$this->name){
					if ($param->hunger<30 && $this->hunger<30){
					echo "Not today !\n";
}
					elseif($param->hunger<30 && $this->hunger>=30){
					echo "Sorry $this->name, I'm too tired for going out tonight...\n";
}
					elseif($param->hunger>=30 && $this->hunger<30){
					echo "Sorry $param->name, I'm too tired for going out tonight...\n";
}
					else{
					echo "I'm going to drink with $param->name!\n";
					$param->hunger-=30;
					$this->hunger-=30;
					$this->drunk=true;
}
}
				elseif(get_class($param)=="Snake"){
					if ($this->hunger>=10){
					echo "LET'S RUN AWAY !!!\n";
					setEnergy(0);
}
					else{
					echo "...\n";
}
}
				else{
				echo "No Way.\n";
}
}
}
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