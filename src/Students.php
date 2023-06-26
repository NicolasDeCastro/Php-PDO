<?php

namespace Nicolas\Pdo;

class Students
{

public int $id; 
public string $name;

public  $data;

function __construct($id ,$name,$data){

$this->name=$name;
$this->data=$data;
$this->id=$id;

}




public function name(){



return $this->name;
}
}