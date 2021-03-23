<?php
    function my_very_secure_hash($pass){
        $salt=random_bytes(12);
        $hash=crypt($pass, $salt);
        $array = array("hash"=>$hash, "salt"=>$salt);
        return $array;
    }

    function my_password_verify($pass, $sal, $has){
        if($has==crypt($pass, $sal)){
            return true;
        }
    }