<?php
function my_swap(&$a, &$b){
$buffer=$a;
$a=$b;
$b=$buffer;
};