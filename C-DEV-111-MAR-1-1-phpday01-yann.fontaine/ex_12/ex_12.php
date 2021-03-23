<?php  
function sequence($n) 
{ 
    if ($n >= 1)      
        echo "1\n"; 
    if ($n >= 2)      
        echo "11\n"; 
    $base = "11";  
    for ($i = 3;  
         $i <= $n; $i++) 
    { 
        $base = $base.'$'; 
        $len = strlen($base); 
        $count = 1; 
        $buff = "";
        for ($j = 1; $j < $len; $j++) 
        { 
            if ($base[$j] != $base[$j - 1]) 
            { 
                $buff = $buff.$count; 
                $buff = $buff.$base[$j - 1];              
                $count = 1; 
            } 
            else $count++; 
        } 
        $base = $buff;
	echo "$base\n";
    } 
}