<?php
include "Dog.php";
include "Cat.php";
include "Bird.php";
include "Car.php";

$myCar = new Car("Audi", 32131);
$myCar2 = new Car("VW", 12112);

echo $myCar->increaseMileage(120303120123);
// $myBird = new Bird("nigga", 420);
// echo $myBird->color . "<br>";
// $myBird->fly();

// $myBird2 = new Bird("white", 2);

// $myBird2->fly();
// $cats = [];

// // $myDog->age = 5;
// $myDog->color = "Black";
// echo $myDog->color;

// echo get_class($myDog);

// for ($i=0; $i < 21; $i++) { 
//     array_push($cats, new Cat);
// }
// var_export($cats);
?>