<?php

//'mysql:host=endereco_do_servidor;dbname=nome_do_banco'

$caminho = __DIR__ . '/banco.sqlite';

$pdo = new PDO("sqlite:" . "$caminho");

//$pdo->exec("CREATE TABLE tbAluno(id INTEGER PRIMARY KEY,name TEXT,data TEXT);");

//var_dump($pdo->exec("INSERT INTO tbAluno VALUES (2,'marilda','19-06-2023');"));

echo "conectei";
