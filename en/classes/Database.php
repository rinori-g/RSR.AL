<?php

class Database{
    private static $instance = null;
    private $connection = null;

    public function __construct(){
        // $this->connection = new mysqli("localhost" , "mcmtrave_rsr", "IaCD?kk9.K5R" , "mcmtrave_rsr");
        $this->connection = new mysqli("localhost" , "root", "" , "rsral");
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