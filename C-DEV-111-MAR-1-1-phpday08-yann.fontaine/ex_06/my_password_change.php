<?php
    function my_password_change($pdo,string $email,string $password){
        if ($password==null){
            throw new Exception();
        }
        try{
            $rq = "SELECT * FROM users WHERE email=?";
            $stmt= $pdo->prepare($rq);
            $stmt->execute([$email]);
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($res==null){
                throw new Exception();
            }
        }
        catch(Exception $e){
        }
    try{
        $hash=password_hash($password,  PASSWORD_DEFAULT);
        $rq = "UPDATE users SET password=? WHERE email=?";
        $stmt= $pdo->prepare($rq);
        $stmt->execute([$hash, $email]);
    }
    catch(Exception $e){
    }
}