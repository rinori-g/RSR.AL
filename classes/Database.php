<?php

class Database{
    private static $instance = null;
    private $connection = null;

    public function __construct(){
        $this->connection = new mysqli("localhost:3307" , "root", "476185" , "rsral");
        $this->connection->set_charset("utf8");
    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }
}