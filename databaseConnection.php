<?php

class databaseConnection
{
    private static $instance = null;
    private $hostname;
    private $db_name;
    private $username;
    private $password;
    public $connection;

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new databaseConnection();
        }
        return self::$instance;
    }

    public function getConnection($hostname, $username, $password, $dbname)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $dbname;
        $this->connection = null;

        try {
            $this->connection = new mysqli($hostname, $username, $password, $dbname);
        } catch (mysqli_sql_exception $exception) {
            echo 'There was an error connecting to the database';
        }

        return $this->connection;
    }
}