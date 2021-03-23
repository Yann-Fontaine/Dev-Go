<?php
    function modify_cookie($cookie, $value){
        if (isset($_COOKIE[$cookie])) {
            setcookie($cookie, $value, time()+3600);
        }
    }