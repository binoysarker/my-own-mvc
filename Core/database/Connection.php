<?php

/**
 * connect to database
 */
class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'] . ';port=3306;dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die('could not connect ' . $e->getMessage());
        }
    }
}
