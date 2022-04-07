<?php

namespace Core;

class Database
{
    public static function connection(){

        $charset = 'utf8';
        $server = '3306';
        $username = 'root';
        $password = 'root';
        $dbname = 'cinema';
        try {
            $bdd = "mysql:host=3306" .$server . ";dbname=" . ";charset=" . $charset;
            $pdo = new \PDO($bdd, $username, $password);
        } catch (\Exception $e) {
            echo "Connection failed" .$e->getMessage();
        }
    }
}