<?php

require "vendor/autoload.php";

use Nicolas\Pdo\Students;
use Nicolas\Pdo\Connection;
$pdo = Connection::CreateConnection(); 

$statements=$pdo->query("SELECT * FROM tbAluno;");
$studantdatalist=$statements->fetchAll(PDO::FETCH_ASSOC);

$Students=[];
foreach($studantdatalist as $newStatements){

    $Students[]= new Students(

        $newStatements['id'],
        $newStatements['name'],
        new \DateTimeImmutable($newStatements['data'])
      
    );

}
var_dump($Students);

/*while($studantData=$statements->fetch(PDO::FETCH_ASSOC)){

$Students=New Students($studantData['id'],$studantData['name'],new \DateTimeImmutable($studantData['data']));

}

echo $Students->name();*/




