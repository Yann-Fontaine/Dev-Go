<?php
if ($_GET==NULL OR strlen($_GET)==0){
    echo 'Hello platypus';
}
else{
    echo 'Hello '.$_GET["name"]);
}