<?php

include 'autoload.php';

class Companies{
    private $mysqli;

    public function __construct(){
        $this->mysqli = (Database::getInstance())->getConnection();
    }

    public function all(){
        $products = []; 
        $sql = "SELECT * From `companies`";
        $result = $this->mysqli->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $products[] = $row;
            }
        }

        else{
            $products = [];
        }

        return $products;
    }

    public function get($id){
        $product = [];
        $sql = "SELECT * From `companies` WHERE `id` = '" .$id ."'";
        $result = $this->mysqli->query($sql);

        if($result->num_rows > 0){
            $product = $result->fetch_assoc();
        }

        return $product;
    }
    
    public function getcategory($category){
        $products = []; 
        $sql = "SELECT * From `companies` WHERE `category` = '" . $category . "' ";
        $result = $this->mysqli->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $products[] = $row;
            }
        }

        else{
            $products = [];
        }

        return $products;
    }

    public function create($data){
            $sql = "INSERT INTO `companies` SET `company_image`='".$data['image']."', `company_name`='".$data['name']."', `country`='".$data['country']."', `category` = '".$data['category']."', `description` = '".$data['description']."'";
            if($this->mysqli->query($sql))
                return true;
        else
            return false;
    }

    public function update($id, $data){
            // $this->password = password_hash($this->password, PASSWORD_BCRYPT);
            $sql = "UPDATE `companies` `company_image`='".$data['image']."', `company_name`='".$data['name']."', `country`='".$data['country']."', `category` = '".$data['posted_at']."', `description` = '".$data['category']."' WHERE `id` = '" . $id . "'";
            if($this->mysqli->query($sql))
                return true;
        else
            return false;
    }

    public function delete($id){
        $sql = "DELETE FROM `companies` WHERE `id` = '" .$id ."'";

        if($this->mysqli->query($sql))
            return true;

        return false;
    }
}