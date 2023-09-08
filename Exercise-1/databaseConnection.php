<?php

namespace exercise1;

use mysqli;
use mysqli_sql_exception;

/**
 * Class databaseConnection
 *
 * Manages database connection through Singleton design pattern.
 */
class databaseConnection
{
    /**
     * @var null|databaseConnection The singleton instance of this class.
     */
    private static $instance = null;
    /**
     * @var null|mysqli The connection to the database.
     */
    public $connection;

    /**
     * Singleton instance retrieval.
     *
     * @return databaseConnection The singleton instance of this class.
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new databaseConnection();
        }
        return self::$instance;
    }

    /**
     * Gets a default database connection.
     *
     * @return mysqli The mysqli connection instance obtained.
     */
    public function getConnectionDefault()
    {
        return $this->getConnection('localhost', 'test', 'KlW93Jm93*W/D(jw', 'm151');
    }

    /**
     * Gets a database connection.
     *
     * @param string $hostname The hostname of the database.
     * @param string $username The username for the database connection.
     * @param string $password The password for the database connection.
     * @param string $dbname The name of the database.
     *
     * @return mysqli The mysqli connection instance obtained.
     * @throws mysqli_sql_exception If there was an error connecting to the database.
     *
     */
    public function getConnection($hostname, $username, $password, $dbname)
    {
        $this->connection = null;

        try {
            $this->connection = new mysqli($hostname, $username, $password, $dbname);
        } catch (mysqli_sql_exception $exception) {
            echo 'There was an error connecting to the database';
        }

        return $this->connection;
    }
}