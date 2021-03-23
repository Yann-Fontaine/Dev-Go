<?php

session_start();

$name='platypus';
$session=session_id();
    if (strlen($session)==0){
        $_SESSION['name']=$name;
    }
    elseif(strlen($_GET['name'])>0){
        $_SESSION['name']=$_GET['name'];
    }

    echo 'Hello '.$_SESSION['name'];