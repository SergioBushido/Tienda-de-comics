<?php

class Connect{
    public static function connect() {
        $db = new mysqli('localhost','root','','tienda_masater');
        $db->query("SET NAMES 'UTF8'");
        return $db;
    }
}