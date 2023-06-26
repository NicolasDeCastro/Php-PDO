<?php

require 'vendor/autoload.php';

use Nicolas\Pdo\Connection;
use Nicolas\Pdo\Students;
use Nicolas\Pdo\PdoStudentRepository;

$Connection = Connection::CreateConnection();

$Students = New Students(4,'miguel','11-11-2001');

try{
$pdo=new PdoStudentRepository($Connection);

$Connection->beginTransaction();


$pdo->Remove($Students);

$Connection->commit();
}catch(\PDOException $e){
    $e->getMessage();
}
//$Connection->rollBack();