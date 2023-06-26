<?php

namespace Nicolas\Pdo;
use PDO;

Class Connection
{


public static function CreateConnection():PDO
{
   
    $caminho= __DIR__ .'/../banco.sqlite';
    $connection=new PDO("sqlite:"."$caminho");
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $connection;

}




}