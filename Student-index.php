<?php



require_once 'Classes/Student.php';



$student = new Student();
$student2 = new Student();
$student3 = new Student();


$student->name = "Mohamed";
$student->age = "5";
$student->grade = "Kg1";

$student2->name = "Ahmed";
$student2->age = "7";
$student2->grade = "Primary2";

$student3->name = "Mahmoud";
$student3->age = "9";
$student3->grade = "Primary4";


echo "<pre>";
var_dump($student);
echo "</pre>";

echo "<pre>";
var_dump($student2);
echo "</pre>";

echo "<pre>";
var_dump($student3);
echo "</pre>";