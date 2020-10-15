<?php

use App\Controller\StudentController;
use App\Student;

require __DIR__ . '/vendor/autoload.php';

$student = new Student('nam','Hn');
echo $student->getInfo();

$studentManger = new StudentController();
$studentManger->showMessage();