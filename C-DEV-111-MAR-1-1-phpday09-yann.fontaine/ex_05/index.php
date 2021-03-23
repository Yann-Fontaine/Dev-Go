<?php

session_start();

$name='platypus';

    if ($_COOKIE['name'] && strlen($_COOKIE['name'])>0){
        echo 'Hello '.htmlspecialchars($_COOKIE['name']);
    }
    elseif($_COOKIE['name']){
        $_COOKIE['name']=$name;
        echo 'Hello '.htmlspecialchars($_COOKIE['name']);
    }
    elseif(!$_COOKIE['name'] && strlen($_GET['name'])>0){
        setcookie('name', $_GET['name'], time()+3600);
        echo "Hello ".$_GET['name'];
    }
    else{
        setcookie('name', $name, time()+3600);
        echo "Hello".$name;
        
    }