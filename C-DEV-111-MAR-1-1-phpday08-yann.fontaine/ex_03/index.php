<?php
include_once("db_pdo.php");
var_dump(connect_db('local', 'yann', '', 3306, 'gecko'));

/*$rq = $pdo->query('SELECT * FROM users');
$r=$rq->fetch();
print_r($r);*/