<?php
    function my_very_secure_hash($pass){
        $password=md5($pass);
        return $password;
    }