<?php

include 'autoload.php';

class Products{
    private $mysqli;

    public function __construct(){
        $this->mysqli = (Database::getInstance())->getConnection();
    }

    public function all(){
        $products = []; 
        $sql = "SELECT * From `products`";
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

    public function get($product_name){
        $product =[];
        $sql = "SELECT * From `products` WHERE `name` = '" . $product_name ."'";
        $result = $this->mysqli->query($sql);

        if($result->num_rows > 0){
            $product = $result->fetch_assoc();
        }

        return $product;
    }
    
    public function getItemsByCompany($manufacturer){
        $products = []; 
        $sql = "SELECT * From `products` WHERE `manufacturer` = '" . $manufacturer . "' ";
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

    public function getItemsByCategory($category){
        $products = []; 
        $sql = "SELECT * From `products` WHERE `category` = '" . $category . "' ";
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
            $sql = "INSERT INTO `products` SET `name`='".$data['name']."', `image`='".$data['image']."', `usefor` = '".$data['usefor']."', `category` = '".$data['category']."', `description` = '".$data['description']."', `manufacturer` = '".$data['manufacturer']."', `manufacturer_link` = '".$data['manufacturer_link']."'";
            if($this->mysqli->query($sql))
                return true;
        else
            return false;
    }

    public function update($id, $data){
            // $this->password = password_hash($this->password, PASSWORD_BCRYPT);
            $sql = "UPDATE `products` `name`='".$data['name']."', `iamge`='".$data['image']."', `category` = '".$data['posted_at']."', `description` = '".$data['category']."' WHERE `id` = '" . $id . "'";
            if($this->mysqli->query($sql))
                return true;
        else
            return false;
    }

    public function delete($id){
        $sql = "DELETE FROM `products` WHERE `id` = '" .$id ."'";

        if($this->mysqli->query($sql))
            return true;

        return false;
    }
}