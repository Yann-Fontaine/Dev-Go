<?php
function get_angry_dog($nbr){
$bark="";
for ($i=0; $i<$nbr; $i++){
$bark=$bark."woof";
}
return "$bark\n";
}