<?php
include_once("ex_15.php");
Class Scanner{

    function scan($soldier){
        if (get_class($soldier)=='Imperium\Soldier'){
            echo "Praise be, Emperor, Lord.\n";
        }
        if (get_class($soldier)=='Chaos\Soldier'){
            echo "Xenos spotted.\n";
        }
    }
}