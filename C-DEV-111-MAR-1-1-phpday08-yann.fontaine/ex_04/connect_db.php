<?php
    
    $host;
    $login;
    $password;
    $port;
    $db;
    $condb;
    const  ERROR_LOG_FILE="errors.log";

    $host=$argv[1];
    $login=$argv[2];
    $password=$argv[3];
    $port=$argv[4];
    $db=$argv[5]; 
    $condb='mysql:host='.$host.';dbname='.$db.';port='.$port;
        
    
    try{
        if (count($argv)!=6){
            throw new InvalidArgumentException("Bad params! Usage: php connect_db.php host username password port db\n");
        } 
    }
    catch(InvalidArgumentException $e){
        echo $e->getmessage();
        file_put_contents(ERROR_LOG_FILE, $error);
    }
    
    try{
            $pdo = new PDO($condb, $login, $password);
            echo "Connection to DB successful\n";  
            return $pdo;
        }
        catch( PDOException $error ) {
            echo "PDO ERROR: $error storage in ".ERROR_LOG_FILE."\n";
            file_put_contents(ERROR_LOG_FILE, $error);
        }
