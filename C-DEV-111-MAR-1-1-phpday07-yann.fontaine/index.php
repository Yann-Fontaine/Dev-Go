<?php
include_once("Warrior.php");
include_once("Mage.php");
$warrior = new  Warrior("Jean -Luc");
$warrior ->moveRight ();
$warrior ->moveLeft ();
$warrior ->moveUp ();
$warrior ->moveDown ();
$mage = new  Mage("Robert");
$mage ->moveRight ();
$mage ->moveLeft ();
$mage ->moveUp ();
$mage ->moveDown ();