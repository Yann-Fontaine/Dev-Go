<?php
        const  ERROR_LOG_FILE="errors.log";
    function connect_db($hos, $logi, $pass, $por, $d){
        $host=$hos;
        $login=$logi;
        $password=$pass;
        $port=$por;
        $db=$d; 
        $condb='mysql:host='.$host.';dbname='.$db.';port='.$port;
        try{
            $pdo = new PDO($condb, $login, $password);
            return $pdo;
        }
        catch( PDOException $error ) {
            echo "PDO ERROR: $error storage in ".ERROR_LOG_FILE."\n";
            file_put_contents(ERROR_LOG_FILE, $error);
        }

    }