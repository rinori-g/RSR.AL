<?php

include 'autoload.php';

class Categories{
    private $mysqli;

    public function __construct(){
        $this->mysqli = (Database::getInstance())->getConnection();
    }

    public function all(){
        $products = []; 
        $sql = "SELECT * From `categories`";
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
        $sql = "SELECT * From `categories` WHERE `id` = '" .$id ."'";
        $result = $this->mysqli->query($sql);

        if($result->num_rows > 0){
            $product = $result->fetch_assoc();
        }

        return $product;
    }
    
    public function getCompany($name){
        $product = [];
        $sql = "SELECT * From `categories` WHERE `name` = '" .$name ."'";
        $result = $this->mysqli->query($sql);

        if($result->num_rows > 0){
            $product = $result->fetch_assoc();
        }

        return $product;
    }
    
    public function getCategory($category){
        $products = []; 
        $sql = "SELECT * From `categories` WHERE `category` = '" . $category . "' ";
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
            $sql = "INSERT INTO `categories` SET `name`='".$data['name']."', `category`='".$data['category']."', `category_short`='".$data['category_short']."'";
            if($this->mysqli->query($sql))
                return true;
        else
            return false;
    }

    public function update($id, $data){
            // $this->password = password_hash($this->password, PASSWORD_BCRYPT);
            $sql = "UPDATE `categories` `name`='".$data['name']."', `category`='".$data['category']."', `category_short`='".$data['category_short']."' WHERE `id` = '" . $id . "'";
            if($this->mysqli->query($sql))
                return true;
        else
            return false;
    }

    public function delete($id){
        $sql = "DELETE FROM `categories` WHERE `id` = '" .$id ."'";

        if($this->mysqli->query($sql))
            return true;

        return false;
    }
}