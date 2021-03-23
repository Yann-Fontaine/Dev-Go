<?php
include_once("db_pdo.php");
include_once("my_show_db.php");
$generator = my_show_db(connect_db('localhost', 'yann', '', 3306, 'gecko'), 'users');
foreach($generator as $line) {
    echo $line."\n";
    }