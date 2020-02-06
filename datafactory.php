<?php

include_once("db.php");

class DatabaseFactory{
    // Singleton
    private static $connection;

    public static function getDatabase(){
        if(self::$connection == null){
            $url = "localhost";
            $user = "root";
            $passw = "";
            $db = "mysql";
            self::$connection = new Database($url, $user, $passw, $db);
        }
        return self::$connection;
    }
}

?>