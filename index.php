<?php
include "Dog.php";
include "Cat.php";
include "Bird.php";
include "Car.php";
include "Tire.php";
include "Train.php";
include "Math.php";

echo Math::addTwo(4, 9) . "<br>";
echo Math::factorial(10) . "<br>";
echo Math::sum([4, 1, 2, 3]) . "<br>";
echo Math::average([4, 2, 2, 1, 1]) . "<br>";
echo Math::max([3, 1, 6, 2, 8, 10, 11]);
// $myCar = new Car("Audi", 32131);
// $myCar2 = new Car("VW", 12112);
// $myTire = new Tire("Big", "Winter", "Good");
// $myTire2 = new Tire("Medium", "Summer", "Bad");
// $myTrain = new Train("Krampis", "Gauge", 45632);
// $myDog = new Dog("Reksis", 6);
// $myCat = new Cat("Minis", 2);
// $myCat = new Cat("Brincis", 3);
// echo $myTire->size . " " . $myTire->type . " tires<br>";
// echo $myTire2->size . " " . $myTire2->type . " tires<br>";

// echo $myTrain->increaseMileage(240);
// Train::makeNoise();
// Dog::woof();
// Cat::woof();

// echo $myCar->increaseMileage(120303120123);
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
