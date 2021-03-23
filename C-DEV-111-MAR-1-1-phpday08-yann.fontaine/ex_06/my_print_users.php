<?php
    function my_print_users(object $pdo, ...$ints){
        $allints=array(...$ints);
        $result=array();
        foreach ($allints as $int){
            try{
                if (gettype($int)!="integer"){
                throw new InvalidArgumentException("Invalid id given");
                }
            }
            catch(InvalidArgumentException $e){
                echo $e->getmessage();
                file_put_contents(ERROR_LOG_FILE, $error);
            }
            $rq=$pdo->query('SELECT * FROM users WHERE id='.$int);
            $res = $rq->fetch(PDO::FETCH_ASSOC);
            array_push($result, $res);
        }
        return $result;  
    }

?>