<?php

include_once ('fonctions/mesFunctionsSQL.php');

class user
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $admin;
    private $created_at;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {

        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }


    public function createUser(){
        $this->created_at = date("Y-m-d H:i:s");
        try {
            $con = getDatabaseConnexion();
            $sql = "INSERT INTO users ( username, password, email, admin, created_at) 
                VALUES ('".$this->username."', '".$this->password."','".$this->email."', '".$this->admin."','".$this->created_at."')";
            $con->exec($sql);
            header('location: ./users.php');
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }



}