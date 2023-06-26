<?php

namespace Nicolas\Pdo;
use Nicolas\Pdo\Students;

interface StudentRepository
{

public function AllStudents(Students $student): array;
public function Remove(Students $student):bool;

public function Insert(Students $student):bool;

}