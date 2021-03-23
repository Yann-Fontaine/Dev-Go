<?php
include_once("db_pdo.php");
include_once("my_print_users.php");
var_dump(my_print_users(connect_db('localhost', 'yann', '', 3306, 'gecko'), 2, 4));
//$pdo = connect_db('localhost', 'yann', '', 3306, 'gecko');
//var_dump(my_print_users($pdo, 1, 2, 3, 4));