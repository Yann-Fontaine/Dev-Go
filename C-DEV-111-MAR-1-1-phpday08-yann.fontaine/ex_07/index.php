<?php
include_once("db_pdo.php");
include_once("my_print_users.php");
include_once("my_change_user.php");
var_dump(my_print_users(connect_db('localhost', 'yann', '', 3306, 'gecko'), 1, 2, 3, 4));
my_change_user(connect_db('localhost', 'yann', '', 3306, 'gecko'), 'hugo', 'thibault');
var_dump(my_print_users(connect_db('localhost', 'yann', '', 3306, 'gecko'), 1, 2, 3, 4));
//$pdo = connect_db('localhost', 'yann', '', 3306, 'gecko');
//var_dump(my_print_users($pdo, 1, 2, 3, 4));