<?php
//conectando a la base de datos y haciendo pruebas con git
class Database{
    public static function connect() {
        $db = new mysqli('localhost','root','','tienda_master');
        $db->query("SET NAMES 'UTF8'");
        return $db;
    }
}