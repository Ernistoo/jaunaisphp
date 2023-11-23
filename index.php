<?php
include "Dog.php";
include "Cat.php";

$myDog = new Dog;
$myDog2 = new Dog;

$cats = [];

$myDog->age = 5;
$myDog->color = "Black";
echo $myDog->color;

echo get_class($myDog);

for ($i=0; $i < 21; $i++) { 
    array_push($cats, new Cat);
}
var_export($cat);
?>