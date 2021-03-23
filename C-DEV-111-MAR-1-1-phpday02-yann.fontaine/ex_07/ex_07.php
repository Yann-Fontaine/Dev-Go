<?php
function my_division_modulo($num1, $operator, $num2){
if ($operator=='/' && $num2!=0 || gettype($num1)=="number" || gettype($num2)=="number" || $operator=='%'){
if($operator=='/'){
$result=($num1/$num2);
return $result;
}
else{
$result=($num1%$num2);
return $result;
}
}
else{
throw new Exception("The given arguments aren't good.\n");
}
}