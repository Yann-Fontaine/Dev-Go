<?php


class product
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $picture;
    private $category_id;
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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    public function createProduct(){
        try {
            $con = getDatabaseConnexion();
            $sql = "INSERT INTO products ( name, price, description, picture, category_id) 
                VALUES ('".$this->name."', '".$this->price."','".$this->description."', '".$this->picture."','".$this->category_id."')";
            $con->exec($sql);
            header('location: ./products.php');
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function updateProduct(){
        try {
            $con = getDatabaseConnexion();

            $requete = "UPDATE products set 
						name = '".$this->name."',
						price = '".$this->price."',
						description = '".$this->description."',
						picture = '".$this->picture."',
						category_id='".$this->category_id."'
						where id = '".$this->id."' ";
            $con->query($requete);

        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }

    }





}

