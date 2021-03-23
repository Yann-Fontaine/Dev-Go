<?php
function my_add_elem_map($key, $value, &$arr){
$arr[$key]=$value;
return $arr;
}
function my_modify_elem_map($key, $value, &$arr){
unset($arr[$key]);
$arr[$key]=$value;
return $arr;
}
function my_delete_elem_map($key, &$arr){
unset($arr[$key]);
return $arr;
}
function my_is_elem_valid($key, $value, &$arr){
if(array_key_exists($key, $arr) && $value==$arr[$key]){
return true;
}
else{
echo "You have to give good parameters.\n";
return false;
}
}