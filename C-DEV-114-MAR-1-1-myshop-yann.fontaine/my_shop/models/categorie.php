<?php

class categorie
{
    private $id;
    private $name;
    private $parent_id;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param mixed $parent_id
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;
    }

    public function createCategorie(){
        try {
            $con = getDatabaseConnexion();
            if($this->parent_id==""){
                $sql = "INSERT INTO categories ( name) 
                VALUES ('".$this->name."')";
            }else{
                $sql = "INSERT INTO categories ( name, parent_id) 
                VALUES ('".$this->name."', '".$this->parent_id."')";
            }

            $con->exec($sql);
            header('location: ./categories.php');
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function updateCategorie(){
        try {
            $con = getDatabaseConnexion();

            $requete = "UPDATE categories set 
						name = '".$this->name."',
						parent_id = '".$this->parent_id."'
						where id = '".$this->id."' ";
            $con->query($requete);

        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }

    }

}