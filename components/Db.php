<?php


class Db
{

   
    public static function getConnection()
    {
        $db =  new PDO('mysql:host=localhost;dbname=Marga', 'root', '');
        

        return $db;
    }

}
