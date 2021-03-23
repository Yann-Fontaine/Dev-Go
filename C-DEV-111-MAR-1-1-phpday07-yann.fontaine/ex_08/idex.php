<?php
include_once("Pony.php");
$popo = new Pony("male", "Popo", "Rainbow");

echo $popo->__get("gender");