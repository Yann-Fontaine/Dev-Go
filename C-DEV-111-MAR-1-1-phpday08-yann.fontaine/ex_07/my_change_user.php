<?php
    function my_change_user($pdo, ... $names){
        $arrnames=array(... $names);
        foreach ($arrnames as $name){
            try{
                $rq='SELECT * FROM users WHERE name=?';
                $stmt=$pdo->prepare($rq);
                $stmt->execute([$name]);
                $res=$stmt->fetch(PDO::FETCH_ASSOC);
                if ($res==null){
                    throw new PDOException("User not found");
                }
            }
            catch(PDOException $e){
                echo $e->getmessage();
            }
            $newname=ucfirst($name).'42';
            try{
                $rq='UPDATE users SET name=? WHERE name=?';
                $stmt=$pdo->prepare($rq);
                $stmt->execute([$newname, $name]);
            }
            catch(Exception $e){
                echo $e->getmessage();
            }
            finally{
                echo "Good luck with the user DB!\n";
            }
        }
    }