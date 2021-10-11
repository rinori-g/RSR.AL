<?php

include 'autoload.php';

class News{
    private $mysqli;

    public function __construct(){
        $this->mysqli = (Database::getInstance())->getConnection();
    }

    public function all(){
        $products = []; 
        $sql = "SELECT * From `blogs-shq`";
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
        $sql = "SELECT * From `blogs-shq` WHERE `id` = '" .$id ."'";
        $result = $this->mysqli->query($sql);

        if($result->num_rows > 0){
            $product = $result->fetch_assoc();
        }

        return $product;
    }

    public function getElementByTitle($title){
        $product = [];
        $sql = "SELECT * From `blogs-shq` WHERE `title` = '" . $title ."'";
        $result = $this->mysqli->query($sql);

        if($result->num_rows > 0){
            $product = $result->fetch_assoc();
        }

        return $product;
    }
    
    public function indexBlogs(){
        $a = (new News)->all();

        $product = array_slice($a, -3, 3, true);

        return $product;
    }
    
    public function create($data){
            $sql = "INSERT INTO `blogs-shq` SET `blog_photo`='".$data['image']."', `title`='".$data['title']."', `category` = '".$data['category']."', `description` = '".$data['description']."', `created_at` = '".$data['created_at']."' ";
            if($this->mysqli->query($sql))
                return true;
        else
            return false;
    }

    public function update($id, $data){
            // $this->password = password_hash($this->password, PASSWORD_BCRYPT);
            $sql = "UPDATE `blogs-shq` `blog_photo`='".$data['image']."', `title`='".$data['title']."', `category` = '".$data['category']."', `description` = '".$data['description']."', `created_at` = '". $data['created_at'] ."' WHERE `id` = '" . $id . "'";
            if($this->mysqli->query($sql))
                return true;
        else
            return false;
    }

    public function delete($id){
        $sql = "DELETE FROM `blogs-shq` WHERE `id` = '" .$id ."'";

        if($this->mysqli->query($sql))
            return true;

        return false;
    }
}