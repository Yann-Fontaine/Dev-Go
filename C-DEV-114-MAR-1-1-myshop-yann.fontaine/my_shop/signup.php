<?php
session_start();

function remove_session(){
    session_unset();
    session_destroy();
    session_write_close();
}

if ($_SESSION){
remove_session();
header("Location: ./index.php");
}