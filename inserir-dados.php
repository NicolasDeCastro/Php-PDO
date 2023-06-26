<?php
require "vendor/autoload.php";
use Nicolas\Pdo\Students;
use Nicolas\Pdo\Connection;


$pdo= Connection::CreateConnection();


$Students= new Students('5','Caarlos',new \DateTimeImmutable('21-09-2001'));


$sqlinsert="INSERT INTO tbAluno VALUES (?,?,?);";

$data='21-10-2009';
$statements=$pdo->prepare($sqlinsert);
$statements->bindParam(1,$Students->id);
$statements->bindParam(2,$Students->name);
$statements->bindParam(3,$data);

if ($statements->execute()){

    echo "foi";
}