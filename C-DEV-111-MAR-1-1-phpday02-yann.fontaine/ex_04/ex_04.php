<?php
function my_password_hash($pass){
$salt=random_bytes(12);
$hash=md5($salt.$pass);
$array = array("hash"=>$hash, "salt"=>$salt);
return $array;
}

function my_password_verify($pass, $salt, $hash){
if(md5($salt.$pass)==$hash){
return true;
}
else{
return false;
}
}