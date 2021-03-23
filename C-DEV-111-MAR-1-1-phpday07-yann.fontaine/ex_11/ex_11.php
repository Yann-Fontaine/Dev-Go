<?php
spl_autoload_register(function ($class_name) {
    include_once $class_name.".class.php";
});
$gecko=new Random();
$skills=new Skill();
