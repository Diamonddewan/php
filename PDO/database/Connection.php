<?php
/*
* PDO connection method(DSN):
*       PDO sent all input configuration into the - 3 different place.
*       1. Database -
*               driver, host, dbname, charset, port, unix-socket --->> Goes to DSN.
*       3. UserName & PassWord --->> to Constructor
*       4. All other options go into ----->> options array.
* ................................................................................
*/

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
