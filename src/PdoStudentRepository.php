<?php

namespace Nicolas\Pdo;


use Nicolas\Pdo\StudentRepository;
use Nicolas\Pdo\Students;
use PDO;
class PdoStudentRepository implements StudentRepository
{
public $Connection;

function __construct(PDO $Connection){

$this->Connection = $Connection;


}
function AllStudents(Students $student ):array
{
$pdo=$this->Connection->query("SELECT * FROM tbAluno");
$statements=$pdo->fetchAll(PDO::FETCH_ASSOC);
$NewStudents=[];
foreach($statements as $novostatements){
$NewStudents[]=new Students($novostatements['id'],$novostatements['name'],new \DateTimeImmutable($novostatements['data']));
}
return $NewStudents;
}

function Remove(Students $students):bool
{
    $preparedStatements= $this->Connection->prepare('DELETE FROM tbAluno WHERE id = ?;');
    $value=$students->id;
    $preparedStatements->bindValue(1,$value,PDO::PARAM_INT);
    return $preparedStatements->execute();

}

function Insert(Students $students ):bool
{
$pdo=$this->Connection->prepare('INSERT INTO tbaluno VALUES (?,?,?);');
$pdo->bindValue(1,$students->id,PDO::PARAM_INT);
$pdo->bindValue(2,$students->name,PDO::PARAM_STR);
$pdo->bindValue(3,$students->data,PDO::PARAM_STR);

return $pdo->execute();



}
function Update(Students $students):bool
{
$SqlUpdate= 'UPDATE tbAluno SET nome=?, data = ? WHERE id=?;';
$pdo=$this->Connection->prepare($SqlUpdate);
$pdo->bindValue(1,$students->name,PDO::PARAM_STR);
$pdo->bindValue(2,$students->data,PDO::PARAM_STR);
$pdo->bindValue(3,$students->id,PDO::PARAM_STR);

return $pdo->execute();
}
}

