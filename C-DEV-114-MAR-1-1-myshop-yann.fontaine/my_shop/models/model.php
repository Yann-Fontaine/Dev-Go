<?php

include_once ('fonctions/mesFunctionsSQL.php');
include_once ('models/user.php');
include_once ('models/product.php');
include_once ('models/categorie.php');

class model
{

    public function getAll($tableName) {
        $con = getDatabaseConnexion();
        $requete = 'SELECT * from '.$tableName;
        $rows = $con->query($requete);
        $retour = [];
        if($tableName=='users'){
            foreach ($rows as $item){
               // array_push($retour, $this->getById('users', $item['id']));
                $user = new user();
                $user->setId($item['id']);
                $user->setCreatedAt($item['created_at']);
                $user->setAdmin($item['admin']);
                $user->setEmail($item['email']);
                $user->setUsername($item['username']);
                array_push($retour,$user);
            }
            return $retour;
        }
        elseif ($tableName=='products'){
            foreach ($rows as $item){
                $product = new product();
                $product->setId($item['id']);
                $product->setName($item['name']);
                $product->setPrice($item['price']);
                $product->setDescription($item['description']);
                $product->setPicture($item['picture']);
                $product->setCategoryId($item['category_id']);
                array_push($retour,$product);
            }
            return $retour;
        }
        elseif ($tableName=='categories') {
            foreach ($rows as $item) {
                $categories = new categorie();
                $categories->setId($item['id']);
                $categories->setName($item['name']);
                $categories->setParentID($item['parent_id']);
                array_push($retour, $categories);
            }
            return $retour;
        }
        return $rows;
    }

    public function delete($tablename, $id) {
        try {
            $con = getDatabaseConnexion();
            $requete = "DELETE from ".$tablename." where id = '".$id."' ";
            $con->query($requete);
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getCategoryNullParentId(){
        $con = getDatabaseConnexion();
        $requete = "SELECT * from categories WHERE parent_id IS NULL";
        $rows = $con->query($requete);
        $finalResult = [];
        foreach ($rows as $item) {
            $categorie = new categorie();
            $categorie->setId($item['id']);
            $categorie->setName($item['name']);
            $categorie->setParentId($item['parent_id']);
            array_push($finalResult,$categorie);
        }
        return $finalResult;
    }

    public function getById($tableName, $id) {
        $con = getDatabaseConnexion();
        $requete = "SELECT * from ".$tableName." WHERE id ='".$id."'";
        $rows = $con->query($requete);
        if($tableName=='products'){
            foreach ($rows as $item) {
                $product = new product();
                $product->setId($item['id']);
                $product->setName($item['name']);
                $product->setPrice($item['price']);
                $product->setDescription($item['description']);
                $product->setPicture($item['picture']);
                $product->setCategoryId($item['category_id']);
                return $product;
            }
        }
        elseif($tableName=='users'){
            foreach ($rows as $item) {
                $user = new user();
                $user->setId($item['id']);
                $user->setCreatedAt($item['created_at']);
                $user->setAdmin($item['admin']);
                $user->setEmail($item['email']);
                $user->setUsername($item['username']);
                return $user;
            }
        }
        elseif($tableName=='categories'){
            foreach ($rows as $item) {
                $categorie = new categorie();
                $categorie->setId($item['id']);
                $categorie->setName($item['name']);
                $categorie->setParentId($item['parent_id']);
                return $categorie;
            }
        }
        return $rows;




    }

}
