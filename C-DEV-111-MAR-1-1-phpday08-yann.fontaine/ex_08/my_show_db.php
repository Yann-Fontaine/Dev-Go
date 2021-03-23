<?php
    function my_show_db(object $pdo, $table){
        $final=array();
        try{
            $rq="SELECT * FROM $table";
            $stmt=$pdo->prepare($rq);
            $stmt->execute();
            $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($res==null){
                throw new PDOException("Table not found");
            }
            else{
                foreach($res as $result){
                    array_push($final, implode(", ", $result));
                }
                return $final;
            }
        }
        catch(PDOException $e){
            return null;
        }
    }