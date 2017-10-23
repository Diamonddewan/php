<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1; dbname=test', 'root', 'root');
        } catch (PDOException $e) {//$e an instance of PDOException class
            die($e->getMessage());
        }
    }
}
