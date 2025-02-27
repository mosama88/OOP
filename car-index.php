<?php



require_once 'Classes/Car.php';



$car = new Car();
$car2 = new Car();
$car3 = new Car();


$car->type = "BMW";
$car->model = "2024";
$car->price = "2000000";
$car->color = "Gray";

$car2->type = "Hunda";
$car2->model = "2018";
$car2->price = "500000";
$car2->color = "Black";

$car3->type = "Jeep";
$car3->model = "2023";
$car3->price = "7000000";
$car3->color = "Red";



echo "<pre>";
var_dump($car);
echo "</pre>";

echo "<pre>";
var_dump($car2);
echo "</pre>";

echo "<pre>";
var_dump($car3);
echo "</pre>";