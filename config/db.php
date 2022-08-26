<?php

class Database 
{
    public static function connection() {
        $db = new mysqli('localhost', 'root','','activities', 3307);
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
