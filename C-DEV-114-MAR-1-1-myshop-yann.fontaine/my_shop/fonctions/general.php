<?php

function adminIsOkey(){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION['user'])){
        if(isset($_SESSION['user']['admin']) && $_SESSION['user']['admin']==1){
            return true;
        }
        else{
            header('location: ./index.php');
        }
    }else{
        header('location: ./index.php');
    }
}

