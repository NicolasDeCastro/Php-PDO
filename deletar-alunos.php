<?php

$caminho= __DIR__ .'/banco.sqlite';

$pdo=new PDO("sqlite:"."$caminho");


$preparedStatements= $pdo->prepare('DELETE FROM tbAluno WHERE id = ?;');
$preparedStatements->bindValue(1,5,PDO::PARAM_INT);
$preparedStatements->execute();

