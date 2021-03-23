<?php
function my_create_map(...$arrays){
$arrarr=array(...$arrays);
$result=array();
foreach($arrarr as $array){
if (count($array)>=2){
$key=$array[0];
$value=$array[1];
$result[$key]=$value;
}
else{
echo "The given arguments aren’t valid.";
return NULL;
}
}
return $result;
}