<?php
function my_print_args(...$var){
  foreach ($var as $value){
  echo "$value\n";
  }
}