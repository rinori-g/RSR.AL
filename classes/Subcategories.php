<?php

include 'autoload.php';

class Subcategories{
    private $mysqli;

    public function __construct(){
        $this->mysqli = (Database::getInstance())->getConnection();
    }

    public function all(){
        $products = []; 
        $sql = "SELECT * From `subcategories`";
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
        $sql = "SELECT * From `subcategories` WHERE `id` = '" .$id ."'";
        $result = $this->mysqli->query($sql);

        if($result->num_rows > 0){
            $product = $result->fetch_assoc();
        }

        return $product;
    }
    
    public function getCompany($name){
        $product = [];
        $sql = "SELECT * From `subcategories` WHERE `name` = '" .$name ."'";
        $result = $this->mysqli->query($sql);

        if($result->num_rows > 0){
            $product = $result->fetch_assoc();
        }

        return $product;
    }
    
    public function getcategory($category){
        $products = []; 
        $sql = "SELECT * From `subcategories` WHERE `category` = '" . $category . "' ";
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
            $sql = "INSERT INTO `subcategories` SET `name`='".$data['name']."', `category`='".$data['category']."', `category_short`='".$data['category_short']."'";
            if($this->mysqli->query($sql))
                return true;
        else
            return false;
    }

    public function update($id, $data){
            // $this->password = password_hash($this->password, PASSWORD_BCRYPT);
            $sql = "UPDATE `subcategories` `name`='".$data['name']."', `category`='".$data['category']."', `category_short`='".$data['category_short']."' WHERE `id` = '" . $id . "'";
            if($this->mysqli->query($sql))
                return true;
        else
            return false;
    }

    public function delete($id){
        $sql = "DELETE FROM `subcategories` WHERE `id` = '" .$id ."'";

        if($this->mysqli->query($sql))
            return true;

        return false;
    }
}