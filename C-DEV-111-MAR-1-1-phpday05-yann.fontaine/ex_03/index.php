<?php
include_once("Cat.php");
$isidore = new Cat("Isidore", "orange");echo $isidore->getName() . " has " . $isidore->getLegs() . " legs and is a " .$isidore->getType() . ".\n";
$isidore->meow();